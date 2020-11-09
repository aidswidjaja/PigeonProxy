#!/bin/bash
WHICHOUTPUT=$("git --help")
echo "${WHICHOUTPUT}"
cd || echo "failed :("
OUTPUT=$("cnee --replay -f castle_ffa_sydney.xnl --recall-window-position")
echo "${OUTPUT}"