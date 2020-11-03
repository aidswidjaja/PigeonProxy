#!/usr/bin/env bash
# by adrian

echo "[update.sh] Starting..."
echo "[update.sh] cd /var/www/pigeonproxy"
cd /var/www/pigeonproxy
echo "[update.sh] sudo git fetch"
sudo git fetch
echo "[update.sh] sudo git reset --hard origin/main"
sudo git reset --hard origin/main
echo "[update.sh] cd www"
cd www
echo "[update.sh] sudo chown 777 data.txt"
sudo chown 777 data.txt
echo "[update.sh] sudo nginx -s reload"
sudo nginx -s reload
echo "[update.sh] end of file."
