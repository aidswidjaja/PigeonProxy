<?php include 'head.php'; ?>
<!DOCTYPE HTML>
<html>

<body>
    <h1>debug zone</h1>
    <p>unless your name is adrian, no touchy!</p>
    <form name='web_form' id='web_form' method='post'>
        <button type="submit" name='testForm' id='testForm' value="submit" style="height: 50; width: 400; font-size: 20px; font-weight: bold; background-color: #39789c; color: #ffffff;">Send request to PigeonProxy server</button>
    </form>
    <?php
    if (isset($_POST['testForm'])) {

        ini_set('display_startup_errors', 1);
        ini_set('display_errors', 1);
        error_reporting(-1);


        # h/t: https://stackoverflow.com/a/50104224/6299634

        # find the selected map; store it as a variable $selected_map
        $map_array = array('castle');
        $selected_map = 'testMap';

        # find the selected gamemode; store it as a variable $selected_gamemode
        $gamemode_array = array('ffa', 'teams');
        $selected_gamemode = 'testGamemode';

        # find the selected gamemode; store it as a variable $selected_server
        $server_array = array('sydney');
        $selected_server = 'testServer';

        # support for database removed in 0.2-alpha-rc1-ptb
        # find the selected database; store it as a variable $selected_database
        # i very well am aware I am a terrible person for doing this. but I don't think many people will create their own db's and if this is the case, let's go json serialising!
        # $database_array = array(
        #    'https://docs.google.com/spreadsheets/d/1JFK0B3SFoB-otSoUlr0QIuw4kjyS1kuPLALiGEYisr0/edit#gid=0'
        # );
        # $selected_database = $database_array[$_POST['database']];

        # find the custom message; store it as a variable $message
        $message = 'this is only a test!';

        # append all variables to the shell script filepath being executed

        $shellscript = '../sh/test.sh'; # a predefined .sh file per request type will be processed on the server

        # open the data text file
        $datafile = fopen("data.txt", "w") or die("<h1>server error :(</h1><p>Unable to open <strong>datafile</strong> (this is most likely because adrian forgot to run update.sh and <code>chmod 777 data.txt</code> you forgetful frog)<p><br><br><strong>please email pigeonproxy@adrian.id.au or ping aidswidjaja</a></strong> on discord, email or bchan, thanks :/<br><br><ul><li><a href='index.php'>return to home<a></li><br>");
        $hostfile = fopen("host.txt", "w") or die("<h1>server error :(</h1><p>Unable to open <strong>hostfile</strong> (this is most likely because adrian forgot to run update.sh and <code>chmod 777 data.txt</code> you forgetful frog)<p><br><br><strong>please email pigeonproxy@adrian.id.au or ping aidswidjaja</a></strong> on discord, email or bchan, thanks :/<br><br><ul><li><a href='index.php'>return to home<a></li><br>");
        $invitefile = fopen("invite.txt", "w") or die("<h1>server error :(</h1><p>Unable to open <strong>invitefile</strong> (this is most likely because adrian forgot to run update.sh and <code>chmod 777 data.txt</code> you forgetful frog)<p><br><br><strong>please email pigeonproxy@adrian.id.au or ping aidswidjaja</a></strong> on discord, email or bchan, thanks :/<br><br><ul><li><a href='index.php'>return to home<a></li><br>");

        # hostfile

        $host = $_POST['host']; # store the host email/username as a variable $host
        fwrite($hostfile, $host); # write the host email/username to data text file

        # invitefile

        $invitees = $_POST['invitees']; # store the invitees email/username as a variable $invitees
        fwrite($invitefile, $invitees); # write the invitees email/username to data text file

        # datafile

        $hostmsg = $host . " has invited you to join a game of Shell Shockers! Click the link below to join. \n\n";
        $map = "Map: " . $selected_map . "\n";
        $gamemode = "Gamemode: " . $selected_gamemode . "\n";
        $server = "Server: " . $selected_server . "\n";
        #$database = "Database: " . $selected_database . "\n";
        $message = "Custom message: " . "\n\n" . $message . "\n\n";

        fwrite($datafile, $hostmsg);
        fwrite($datafile, $map);
        fwrite($datafile, $gamemode);
        fwrite($datafile, $server);
        #fwrite($datafile, $database);
        fwrite($datafile, $message);

        fclose($datafile);
        fclose($hostfile);
        fclose($invitefile);


        echo ("
    <ul>
        <li><a href='index.php'>Return to home</a></li>
    </ul><hr>");

        echo ("<h3>Debugging information</strong></h3>");
        echo ("You are executing: <code>" . $shellscript . "</code><br>");
        echo ("<h4>bash output:</h4>");
        $output = `$shellscript`;
        echo ("<pre>$output</pre>");
        echo ("<h4>rwx on datafiles:</h4>");
        $dataoutput = shell_exec('ls -l data.txt');
        echo ("<pre>$dataoutput</pre>");
        $hostoutput = shell_exec('ls -l host.txt');
        echo ("<pre>$hostoutput</pre>");
        $inviteoutput = shell_exec('ls -l invite.txt');
        echo ("<pre>$inviteoutput</pre>");
    }
    ?>

</body>
<?php include 'footer.php'; ?>
</html>