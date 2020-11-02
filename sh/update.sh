#!/usr/bin/env bash
# by adrian

cd /var/www/pigeonproxy
echo "cd executed"
sudo git fetch
echo "git fetch executed"
sudo git reset --hard origin/main
echo "git reset executed"
cd www && sudo chown 777 data.txt
echo "cd www and chown executed"