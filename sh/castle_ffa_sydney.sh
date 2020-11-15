#!/bin/bash
echo "display: $DISPLAY"
sleep 5
echo `cnee --replay --display :0 -f /home/adrian/castle_ffa_sydney.xnl --stop-key z --recall-window-position`