#!/bin/bash

echo Install WebServer

# Apache & php-fpm configuration
bash travis-scripts/setup-php-fpm.sh
bash travis-scripts/setup-apache.sh
