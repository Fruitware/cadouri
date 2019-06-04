#!/bin/bash

echo Move Module to TMP Folder

if [ -z "$TRAVIS_BUILD_DIR" ] ; then
    echo "TRAVIS_BUILD_DIR is not defined: exit." && exit 1
fi

# Move Module Contents to Tmp Folder
mkdir     $MODULE_DIR
mv -f     $TRAVIS_BUILD_DIR/*               $MODULE_DIR      

mkdir     $MODULE_DIR/.git    
mv -f     $TRAVIS_BUILD_DIR/.travis.yml     $MODULE_DIR/.travis.yml      

# Delete Remaining Contents from Build Folder
rm -Rf    $TRAVIS_BUILD_DIR/.git
rm -Rf    $TRAVIS_BUILD_DIR/.gitignore
rm -Rf    $TRAVIS_BUILD_DIR/.travis.yml
rm -Rf    $TRAVIS_BUILD_DIR/*
