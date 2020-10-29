<head>
    <title>Google Classroom</title>
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Google_Classroom_icon.svg/1200px-Google_Classroom_icon.svg.png" />
    <link rel="stylesheet" href="index.css">
</head>

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

    # append all variables to the shell script filepath being executed

    $shellscript = '../sh/' . $selected_map . '_' . $selected_gamemode . '_' . $selected_server . '.sh'; # a predefined .sh file per request type will be processed on the server

    # open the data text file
    $myfile = fopen("data.txt", "w") or die("server error :( - Unable to open file - please ping aidswidjaja");

    $host = $_POST['host'] . "\n"; # store the host email/username as a variable $host
    fwrite($myfile, $host); # write the host email/username to data text file

    $invitees = $_POST['invitees'] . "\n"; # store the invitees email/username as a variable $invitees
    fwrite($myfile, $invitees); # write the invitees email/username to data text file

    $message = $_POST['message'] . "\n"; # store the custom message as a variable $message
    fwrite($myfile, $message); # write the custom message to data text file

    fclose($myfile);

    echo("<h1>success!</h1>the cogs are spinning and the frogs are swimming... and the server has received your request! an email in 1 or 2 minutes from <strong>egg@adrian.id.au</strong> should arrive with your game link code (don't forget to check your spam folder!). 
    If it doesn't arrive, check the <a href='join.php'>database</a> and see if your game code is there.<br><br>Need help? if you're at school, ping @aidswidjaja on bchan or email widadri22 for help, otherwise, ping aidswidjaja#2805 on Discord<br><br>
    Seeing weird messages too? please let us know using the contact details listed above, danke :D
    
    <ul>
        <li><a href='index.php'>Return to home</a></li>
        <li><a href='join.php'>View database</a></li>
    </ul><hr>");

    echo ("<strong>Debugging information</strong><br>");
    echo ("You are executing: " . $shellscript . "<br>");
    echo exec($shellscript);
}
?>
