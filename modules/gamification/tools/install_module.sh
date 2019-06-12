#!/bin/bash

echo Install Module "$1"

# Build Module Dependencies
cd $MODULE_DIR
composer update --prefer-dist --no-interaction --no-progress

# Move Module Contents to Install Folder
echo Move Module Contents to Prestashop Modules Directory

cd $TRAVIS_BUILD_DIR
rm -Rf     $TRAVIS_BUILD_DIR/modules/$1/*
cp -Rf    $MODULE_DIR/*              $TRAVIS_BUILD_DIR/modules/$1/

# Enable the Module
case $PS_VERSION in
    1.7.0.x|1.7.1.x|1.7.2.x|1.7.3.x)
        sql_insert="INSERT INTO ps_module (name, active, version) VALUES ('$1', 1 , 'test');"
        mysql -D prestashop -e $sql_insert
    ;;
    *)
        php bin/console prestashop:module install $1
    ;;
esac
