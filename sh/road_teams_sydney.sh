#!/bin/bash
# note to self - remember to chmod 777
echo "display: $DISPLAY"
echo "now executing road_teams_sydney..."
echo `cnee --replay --display :0 -f /home/adrian/road_teams_sydney.xnl --stop-key z --recall-window-position`
echo "!!! NO TSP !!!"
echo "=== TSP JOB LIST ==="
echo `tsp -l`
echo "=== TSP OUTPUT OF LAST RUN ==="
echo `tsp -o`
echo "=== TSP OUTPUT OF LAST RUN ==="
echo `tsp -o`