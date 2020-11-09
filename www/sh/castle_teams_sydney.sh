#!/usr/bin/env bash
PWDOUTPUT=$("pwd")
echo "${PWDOUTPUT}"
cd
OUTPUT=$("/usr/bin/cnee --replay -f castle_ffa_teams.xnl --recall-window-position")
echo "${OUTPUT}"