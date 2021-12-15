#!/bin/bash

docker run --name=testsamlidp_idp \
    --rm \
    -p 8080:8080 \
    -p 8443:8443 \
    -v $PWD/aws-authsources.php:/var/www/simplesamlphp/config/authsources.php:ro \
    -v $PWD/aws-saml20-sp-remote.php:/var/www/simplesamlphp/metadata/saml20-sp-remote.php:ro \
    -v $PWD/redirect.php:/var/www/simplesamlphp/www/redirect.php:ro \
    kristophjunge/test-saml-idp
