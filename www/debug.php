<?php include 'head.php'; ?>
<!DOCTYPE HTML>
<html>
<body>
<div id="postInfo" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">
    <div class="formFill_false">
    <h1>debug zone</h1>
    <p>unless your name is adrian, no touchy! (the following will perform a dry run of a request, with php error reporting enabled)</p>
    <form name='web_form' id='web_form' method='post'>
        <button type="submit" name='testForm' id='testForm' value="submit" style="height: 50; width: 400; font-size: 20px; font-weight: bold; background-color: #39789c; color: #ffffff;">Send request to PigeonProxy server</button>
    </form>
</div>
</div>
<?php
if (isset($_POST['testForm'])) {
    ob_start();
    ob_end_flush();
    ob_implicit_flush();
    echo '<style type="text/css">
    #postInfo {
        background-color: green;
    }
    </style>';

    # h/t: https://stackoverflow.com/a/50104224/6299634

    # find the custom message; store it as a variable $message
    $message = 'this is just a test!';
    $shellscript = '../sh/test.sh'; # a predefined .sh file per request type will be processed on the server
    "> /dev/null 2>/dev/null &";
    $output = shell_exec("$shellscript > /dev/null 2>/dev/null &");
    echo ("<strong>You are executing:</strong> <code> " . $shellscript . "</code><br>");
    #$output = `$shellscript`;
    echo ("<pre>$output</pre>");
    echo ("<h4>rwx on datafiles:</h4>");
    $dataoutput = shell_exec('ls -l data.txt');
    echo ("<pre>$dataoutput</pre>");
    $hostoutput = shell_exec('ls -l host.txt');
    echo ("<pre>$hostoutput</pre>");
    $inviteoutput = shell_exec('ls -l invite.txt');
    echo ("<pre>$inviteoutput</pre>");
    echo ("<hr>");
    echo ("<h1>success!</h1><p>your game has been created. check your emails for the link!</p>");
}
?>
</body>
</html>