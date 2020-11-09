#!/usr/bin/env bash
PWDOUTPUT=$("pwd")
echo "${PWDOUTPUT}"
cd
OUTPUT=$("cnee --replay -f castle_ffa_sydney.xnl --recall-window-position")
echo "${OUTPUT}"