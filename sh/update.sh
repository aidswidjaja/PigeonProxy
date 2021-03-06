#!/usr/bin/env bash
# by adrian

xhost +
echo "[update.sh] Starting..."
echo "[update.sh] cd /var/www/pigeonproxy"
cd /var/www/pigeonproxy
echo "[update.sh] sudo git fetch"
sudo git fetch
echo "[update.sh] sudo git reset --hard origin/main"
sudo git reset --hard origin/main
echo "[update.sh] sudo chmod 777 sh"
sudo chmod 777 sh/castle_ffa_sydney.sh
sudo chmod 777 sh/castle_teams_sydney.sh
sudo chmod 777 sh/road_ffa_sydney.sh
sudo chmod 777 sh/road_teams_sydney.sh
echo "[update.sh] cd www"
cd www
echo "[update.sh] sudo chmod 777 data.txt"
sudo chmod 777 data.txt
echo "[update.sh] sudo chmod 777 host.txt"
sudo chmod 777 host.txt
echo "[update.sh] sudo chmod 777 invite.txt"
sudo chmod 777 invite.txt
echo "[update.sh] sudo nginx -s reload"
sudo nginx -s reload
echo "[update.sh] end of file."
