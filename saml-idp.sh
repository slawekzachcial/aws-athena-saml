#!/bin/bash

[ -n "${AWS_ACCOUNT_ID}" ] || { echo "Variable AWS_ACCOUNT_ID not set"; exit 1; }

PORT="${PORT:-8080}"

docker run \
    --name=athena-saml-idp \
    --rm \
    --publish ${PORT}:8080 \
    --env AWS_ACCOUNT_ID="${AWS_ACCOUNT_ID}" \
    --volume $PWD/aws-authsources.php:/var/www/simplesamlphp/config/authsources.php:ro \
    --volume $PWD/aws-saml20-sp-remote.php:/var/www/simplesamlphp/metadata/saml20-sp-remote.php:ro \
    --volume $PWD/redirect.php:/var/www/simplesamlphp/www/redirect.php:ro \
    kristophjunge/test-saml-idp
