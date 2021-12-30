#!/bin/bash

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

[ -n "${AWS_ACCOUNT_ID}" ] || { echo "Variable AWS_ACCOUNT_ID not set"; exit 1; }

PORT="${PORT:-8080}"

docker run \
    --name=athena-saml-idp \
    --rm \
    --publish ${PORT}:8080 \
    --env AWS_ACCOUNT_ID="${AWS_ACCOUNT_ID}" \
    --env PORT="${PORT}" \
    --volume ${SCRIPT_DIR}/authsources.php:/var/www/simplesamlphp/config/authsources.php:ro \
    --volume ${SCRIPT_DIR}/saml20-sp-remote.php:/var/www/simplesamlphp/metadata/saml20-sp-remote.php:ro \
    --volume ${SCRIPT_DIR}/login-jdbc.php:/var/www/simplesamlphp/www/login-jdbc.php:ro \
    --volume ${SCRIPT_DIR}/server.crt:/var/www/simplesamlphp/cert/server.crt:ro \
    --volume ${SCRIPT_DIR}/server.pem:/var/www/simplesamlphp/cert/server.pem:ro \
    kristophjunge/test-saml-idp
