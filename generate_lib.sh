#!/bin/bash

swagger-codegen generate -i api.yaml -l php -c swagger.config.json \
&& rm -R docs/ lib/ test/ \
&& mv SwaggerClient-php/.php_cs SwaggerClient-php/.travis.yml SwaggerClient-php/* .