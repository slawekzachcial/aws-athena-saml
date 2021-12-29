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
* [Tests](#tests)
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

## Tests

> Coming soon...

### Console

### JDBC

## Breaking it Down

> Coming soon...

## Clean-up

To clean-up resources stop the SimpleSAMLphp container and the delete AWS
resources:

```sh
aws cloudformation delete-stack --stack-name Athena-SAML
```

You may want to wait until all resources are deleted:

```sh
aws cloudformation wait stack-delete-complete --stack-name Athena-SAML
```
