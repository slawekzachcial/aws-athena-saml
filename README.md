# AWS Athena and SAML Federation

This repository shows an example how to configure SAML federation for AWS Athena.

The example uses [SimpleSAMLphp](https://simplesamlphp.org/) as SAML identity
provider. Once the configuration is complete you will be able to sign-in to AWS
console and execute Ahtena sample query. You will also be able to execute this
query from a Java application using SAML federation with Athena JDBC driver.

Table of Contents
* [Prerequisites](#prerequisites)
* [Setup](#setup)
* [Tests](#tests)
* [Breaking it Down](#breaking-it-down)
* [Clean-up](#clean-up)

## Prerequisites

* The AWS resources are managed using [CloudFormation](https://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/Welcome.html)
  template. You will therefore need access to AWS account where you can create
  the stack. The stack can be created using AWS console or AWS CLI.
* The guide shows AWS CLI commands to create and delete the CloudFormation
  stack. If you want to go the CLI-way you will need a working and configured
  [AWS CLI](https://docs.aws.amazon.com/cli/latest/userguide/cli-chap-getting-started.html).
  Note that AWS CLI is not a requirement as everything can also be done from AWS
  console.
* The guide uses SimpleSAMLphp Docker container created by [Kristoph Junge](https://github.com/kristophjunge/docker-test-saml-idp).
  as SAML Identity Provider. You will therefore need a working [Docker environment](https://www.docker.com/products/docker-desktop).
  If you are running Linux look for instructions how to install Docker in your
  distribution.

## Setup

Before creating AWS resources first set an environment variable containing 
[name of S3 Bucket](https://docs.aws.amazon.com/AmazonS3/latest/userguide/bucketnamingrules.html)
where Athena query results will be stored:

```sh
export BUCKET_NAME=athena-saml-query-results
```

Then create AWS resources:

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

You may want to wait until the creation is complete:

```sh
aws cloudformation wait stack-create-complete --stack-name Athena-SAML
```

Once AWS resource creation is complete you can start SimpleSAMLphp Identity Provider.
For that you will need the number of your AWS account and use this value in the
command below instead of `123456789012`.

```sh
AWS_ACCOUNT_ID=123456789012 ./saml-idp.sh
```

The default configuration assumes SimpleSAMLphp runs on port `8080`.
If you want to use a different port (e.g. 9090):
* Replace the last line of `create-stack` with the following:
  ```sh
  --parameters ParameterKey=AthenaQueryResultsS3BucketName,ParameterValue=${BUCKET_NAME} ParameterKey=SimpleSAMLphpIdPBaseUrl,ParameterValue=http://localhost:9090
  ```
* Start SimpleSAMLphp using this command instead:
  ```sh
  AWS_ACCOUNT_ID=123456789012 PORT=9090 ./saml-idp.sh
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
