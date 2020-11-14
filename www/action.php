<?php
    putenv("DISPLAY=:0");
    $output = `$shellscript`;
    echo ("<hr><h4>bash output:</h4>");
    echo ("<pre>$output</pre>");
?>