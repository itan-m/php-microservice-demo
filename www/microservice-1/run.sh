#!/usr/bin/env bash

basepath=$(cd `dirname $0`; pwd)

cd $basepath

rm -rf runtime/container

echo "Runtime cleared"

php bin/hyperf.php di:init-proxy

php bin/hyperf.php start