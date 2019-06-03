#!/bin/bash

echo Clone Prestashop
   
# Clone Prestashop into Build Folder
cd $TRAVIS_BUILD_DIR
git clone --depth=1 --branch=$PS_VERSION https://github.com/Prestashop/Prestashop.git $TRAVIS_BUILD_DIR 

# PrestaShop configuration
cp tests/parameters.yml.travis app/config/parameters.yml
