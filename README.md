# AWS Athena and SAML Federation

This repository shows an example how to configure SAML federation for AWS Athena.

The example uses [SimpleSAMLphp](https://simplesamlphp.org/) as SAML identity
provider. Once our configuration is complete we will be able to sign-in to AWS
console and execute Athena sample query. We will also be able to execute this
query from a Java application using SAML federation with Athena JDBC driver.

> IMPORTANT
>
> This guide is meant to show a working AWS SAML federation example but it is not
> suited for production use. Use it at your own risk.

Table of Contents
* [Prerequisites](#prerequisites)
* [Setup](#setup)
* [In Action](#in-action)
* [Breaking it Down](#breaking-it-down)
* [Clean-up](#clean-up)

## Prerequisites

* The AWS resources are managed using [CloudFormation](https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/Welcome.html)
  template. We will need access to AWS account where we can create the stack.
  The stack can be created using AWS console or AWS CLI.
* The guide shows AWS CLI commands to create and delete the CloudFormation
  stack. To go the CLI-way we will need a working and configured
  [AWS CLI](https://docs.aws.amazon.com/cli/latest/userguide/cli-chap-getting-started.html).
  Note that AWS CLI is not a requirement as all AWS setup can be done from AWS
  console.
* The guide uses SimpleSAMLphp Docker container created by [Kristoph Junge](https://github.com/kristophjunge/docker-test-saml-idp)
  as SAML Identity Provider. We will need a working [Docker environment](https://www.docker.com/products/docker-desktop).
  If you are running Linux look for instructions how to install Docker in your
  distribution.

## Setup

### SimpleSAMLphp Identity Provider

To ensure our SimpleSAMLphp identity provider (IdP) is unique first thing is to
generate a certificate that will be used to sign SAML response:

```sh
openssl req \
  -new -x509 -nodes \
  -newkey rsa:3072 \
  -days 7 \
  -out server.crt \
  -keyout server.pem \
  -subj '/CN=localhost'
```

Let's open a new terminal and start our SimpleSAMLphp IdP. For that we will
need the number of our AWS account to replace the `123456789012` value below.
The underlying script uses the certificate and the key we just generated.

```sh
AWS_ACCOUNT_ID=123456789012 ./saml-idp.sh
```

The default configuration assumes SimpleSAMLphp runs on port `8080`.
If you want to use a different port (e.g. 9090) start SimpleSAMLphp using this
command instead:

```sh
AWS_ACCOUNT_ID=123456789012 PORT=9090 ./saml-idp.sh
```

We now need to download our IdP metadata that will get injected into CloudFormation
template when creating AWS identity provider:

```sh
curl http://localhost:8080/simplesaml/saml2/idp/metadata.php \
  --output idp-metadata.xml
```

### AWS Resources

Before creating AWS resources first set an environment variable containing
[name of S3 Bucket](https://docs.aws.amazon.com/AmazonS3/latest/userguide/bucketnamingrules.html)
where Athena query results will be stored:

```sh
export BUCKET_NAME=athena-saml-query-results
```

We also need to inject the IdP metadata XML in the CloudFormation template.
CloudFormation does not provide an easy way to inject or reference a local file
content without installing 3rd party tools. For our needs we will use the good
old `sed` (Credits: [Ben Pingilley](https://stackoverflow.com/a/33398190)).

```sh
sed -e 's/^/        /' idp-metadata.xml \
  | sed -e "/__METADATA_XML__/r /dev/stdin" -e "//d" athena-saml.partial-template.yml \
  > athena-saml.template.yml
```

The first `sed` creates the appropriate indentation required by the YAML file.
Its output is then sent to the 2nd `sed` to replace the marker `__METADATA_XML__`
and create `athena-saml.template.yml`.

We can finally create AWS resources:

```sh
aws cloudformation create-stack \
  --stack-name Athena-SAML \
  --template-body file://athena-saml.template.yml \
  --capabilities CAPABILITY_NAMED_IAM \
  --tags Key=Project,Value=athena-saml \
  --parameters ParameterKey=AthenaQueryResultsS3BucketName,ParameterValue=${BUCKET_NAME}
```

The command above creates a stack called `Athena-SAML` using resource definitions
from `athena-saml.template.yml` file. Since some of the resources are IAM we
need to explicitly acknowledge that using the appropriate capability. Where
possible the created resources will be tagged with `Project=athena-saml`.
Finally, we need to specify a unique S3 bucket name.

To wait for the creation to complete:

```sh
aws cloudformation wait stack-create-complete --stack-name Athena-SAML
```

## In Action

Below are 2 examples of how the SAML federation works. We will explain the details
in the [Breaking it Down](#breaking-it-down) section.

### AWS Console

Let's open the following URL to sign-in to the IdP:

http://localhost:8080/simplesaml/saml2/idp/SSOService.php?spentityid=urn:amazon:webservices

There are 2 users we can use (defined in [aws-authsources.php](aws-authsources.php)):
1. `user1` (password: `user1pass`) has access to AWS console and can run Athena queries.
2. `user2` (password: `user2pass`) is able to authenticate but has no access to AWS console.

`urn:amazon:webservices` is the entity ID of AWS service provider that we
defined in [aws-saml20-sp-remote.php](aws-saml20-sp-remote.php).

Signing-in as `user1` should allow us get access to AWS console. We can now go
to [Athena service](https://console.aws.amazon.com/athena/home). We need to make
sure we selected the same AWS region as where our stack was created.

To do a test we will follow the steps from [Athena Getting
Started](https://docs.aws.amazon.com/athena/latest/ug/getting-started.html)
guide.

First we need to configure S3 bucket where query results will be stored - we
put there the same name as the value of our `BUCKET_NAME` variable, e.g.
`s3://athena-saml-query-results`.

We can skip the database and table creation - our CloudFormation stack already
took care of this.

We can finally run a test query, e.g.

```sql
SELECT os, COUNT(*) count
FROM cloudfront_logs
WHERE date BETWEEN date '2014-07-05' AND date '2014-08-05'
GROUP BY os
```

We should get results similar to the ones in the Athena guide.

Note that the IAM role we signed in with (role and its corresponding policy is
defined in our CloudFormation template) using SAML federation gives us only
access to run Athena queries but no other AWS service. This could be adjusted
by adding more managed policies to our IAM role.

### JDBC

To perform JDBC test you will need a working Java Development Kit (JDK) as we
need to compile and run our [AthenaSamlQuery.java](AthenaSamlQuery.java) class.

We also need Athena JDBC driver with AWS SDK that we can download from
[this page](https://docs.aws.amazon.com/athena/latest/ug/connect-with-jdbc.html).
The following commands assume the driver JAR file is available in our project
directory in `SimbaAthenaJDBC-2.0.25.1001/AthenaJDBC42_2.0.25.1001.jar`.

Let's first compile our class:

```sh
javac -classpath SimbaAthenaJDBC-2.0.25.1001/AthenaJDBC42_2.0.25.1001.jar:. AthenaSamlQuery.java
```

We can finally run our test - it will execute the same query as in the
[AWS Console](#aws-console) example above:

```sh
java -cp SimbaAthenaJDBC-2.0.25.1001/AthenaJDBC42_2.0.25.1001.jar:. AthenaSamlQuery
```

Before we see any output, a new browser window should open with our IdP sign-in
page. Successfully signing-in as `user1` (password: `user1pass`) should get us
to a "thank you page" (we can close it), and after couple seconds in the terminal
where we run our Java class we should get a result similar to this:

```
log4j:WARN No appenders could be found for logger (com.simba.athena.amazonaws.AmazonWebServiceClient).
log4j:WARN Please initialize the log4j system properly.
log4j:WARN See http://logging.apache.org/log4j/1.2/faq.html#noconfig for more info.
OS: iOS     , Count: 794
OS: Android , Count: 855
OS: MacOS   , Count: 852
OS: Windows , Count: 883
OS: OSX     , Count: 799
OS: Linux   , Count: 813
```

Note that with SAML federation in place we did not need to provide any AWS
Access Key Id / Secret Access Key - the authentication was performed using our
IdP and the JDBC driver, behind the scene, retrieved temporary keys to give us
the appropriate access to the AWS resources, as defined in IAM role we signed-in
with.

## Breaking it Down

> Coming soon...

## Clean-up

To clean-up resources stop the SimpleSAMLphp container and delete AWS
resources:

```sh
aws cloudformation delete-stack --stack-name Athena-SAML
```

You may want to wait until all resources are deleted:

```sh
aws cloudformation wait stack-delete-complete --stack-name Athena-SAML
```
