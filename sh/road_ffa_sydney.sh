#!/bin/bash
# note to self - remember to chmod 777
echo "display: $DISPLAY"
echo "now executing road_ffa_sydney..."
echo `tsp -c 'cnee --replay --display :0 -f /home/adrian/road_ffa_sydney.xnl --stop-key z --recall-window-position'`
echo "=== TSP JOB LIST ==="
echo `tsp -l`
echo "=== TSP OUTPUT OF LAST RUN ==="
echo `tsp -o`
echo "=== TSP OUTPUT OF LAST RUN ==="
echo `tsp -o`