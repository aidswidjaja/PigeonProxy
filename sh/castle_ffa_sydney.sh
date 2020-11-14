#!/bin/bash
putenv("DISPLAY=:0");
export DISPLAY=:0
echo `cnee --replay --display :0 -f /home/adrian/castle_ffa_sydney.xnl --recall-window-position`