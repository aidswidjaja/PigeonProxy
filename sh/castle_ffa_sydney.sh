#!/bin/bash
echo "display: $DISPLAY"
echo "now executing castle_ffa_sydney..."
echo `cnee --replay --display :0 -f /home/adrian/castle_ffa_sydney.xnl --stop-key z --recall-window-position`
echo "=== TSP JOB LIST ==="
echo `tsp -l`
echo "=== TSP OUTPUT OF LAST RUN ==="
echo `tsp -o`
echo "=== TSP OUTPUT OF LAST RUN ==="
echo `tsp -o`