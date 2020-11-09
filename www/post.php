<?php include 'head.php';?>
<!DOCTYPE HTML>
<html>
<body>
<?php
if (isset($_POST['createForm'])) {

    # h/t: https://stackoverflow.com/a/50104224/6299634

    # find the selected map; store it as a variable $selected_map
    $map_array = array('castle');
    $selected_map = $map_array[$_POST['map']];

    # find the selected gamemode; store it as a variable $selected_gamemode
    $gamemode_array = array('ffa', 'teams');
    $selected_gamemode = $gamemode_array[$_POST['gamemode']];

    # find the selected gamemode; store it as a variable $selected_server
    $server_array = array('sydney');
    $selected_server = $server_array[$_POST['server']];

    # support for database removed in 0.2-alpha-rc1-ptb
    # find the selected database; store it as a variable $selected_database
    # i very well am aware I am a terrible person for doing this. but I don't think many people will create their own db's and if this is the case, let's go json serialising!
    # $database_array = array(
    #    'https://docs.google.com/spreadsheets/d/1JFK0B3SFoB-otSoUlr0QIuw4kjyS1kuPLALiGEYisr0/edit#gid=0'
    # );
    # $selected_database = $database_array[$_POST['database']];

    # find the custom message; store it as a variable $message
    $message = $_POST['message'] . "\n";

    # append all variables to the shell script filepath being executed

    $shellscript = '../sh/' . $selected_map . '_' . $selected_gamemode . '_' . $selected_server . '.sh'; # a predefined .sh file per request type will be processed on the server

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

    $hostmsg = $host. " has invited you to join a game of Shell Shockers! Click the link below to join. \n\n";
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


    echo("<h1>success!</h1>the cogs are spinning and the frogs are swimming... and the server has received your request! an email in 1 or 2 minutes (depending on how busy the server is) from <strong>egg@adrian.id.au</strong> should arrive with your game link code (don't forget to check your spam folder!). 
    <br><br>Need help? if you're at school, ping @aidswidjaja on bchan or email widadri22 for help, otherwise, ping aidswidjaja#2805 on Discord<br><br>
    And btw, if you're seeing weird error messages too, please let us know using the contact details listed above, danke :D
    
    <ul>
        <li><a href='index.php'>Return to home</a></li>
    </ul><hr>");

    echo ("<h3>Debugging information</strong></h3>");
    echo ("You are executing: " . $shellscript . "<br>");
    echo ("<h4>bash output:</h4>");
    $output = exec($shellscript);
    echo "<code>$output</code>";
    echo ("<h4>rwx on data.txt:</h4>");
    $dataoutput = exec('ls -l data.txt');
    echo ("<code>$dataoutput</code>");
    echo ("<h4>rwx on host.txt:</h4>");
    $hostoutput = exec('ls -l host.txt');
    echo ("<code>$hostoutput</code>");
    echo ("<h4>rwx on data.txt:</h4>");
    $inviteoutput = exec('ls -l invite.txt');
    echo ("<code>$inviteoutput</code>");
}
?>