<html>

<head>
    <title>Google Classroom</title>
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Google_Classroom_icon.svg/1200px-Google_Classroom_icon.svg.png" />
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <a href="index.php">
        <<< Back</a> <br><br>
            <img src="res/bacon-and-eggs.png" height="100">
            <h1>create a game!</h1>
            <h3>PigeonProxy - play shellshock.io at school!</h3>
            <p>
                Currently, creating a game on PigeonProxy has limited functionality because I have this thing called exams and I need to study.<br><br>

                <strong>For now</strong>, you can only choose from one map (Castle), two gamemodes (FFA/Teams) and one server (Sydney) but if PigeonProxy is stil enjoyed after exams, then I'll happily add more.<br><br>

                <p><strong class="tip">tip!</strong> you can separate email addresses with commas, but NOT usernames. Also, usernames will only work if you've been pre-registered on the system (and if you don't know what this means, you probably haven't been pre-registered).</p>

                <p><strong class="important">important!</strong> you will be sent an email with the game link around 1 minute after your request is put forward (it takes a while for the server to process your request) - please use this within 5 minutes. <strong>Ensure that emails from egg@adrian.id.au are unblocked.</strong> This is an unmonitored mailbox and you will not be successful in complaining to it. If you're still having trouble, then you know who to call! (and if you don't, it's aidswidjaja#2805 on Discord)</p>


                <p><strong class="important">important!</strong> check if any games were started in the last 5 minutes — if two requests are made too close together I don't know what will happen and it'll probably corrupt everything for the entire day until I get back home and fix it :/</p>

                <hr>

                <!-- https://stackoverflow.com/questions/50102826/how-can-i-save-my-form-data-to-a-local-text-file-using-php -->

                <form name='web_form' id='web_form' method='post' action='post.php'>

                    <label for="exampleInputEmail1">
                        <h3>create a game</h3>
                    </label>
                    <p>
                        <ul>
                            <li>if you want, you can separate emails with commas (e.g tanjiro@kamado.com, izuku@midoriya.net.au, naruto@uzumaki.org) but NOT usernames!!</li>
                            <li>if using usernames, only one username can be included per text box (unlike emails where you can add multiple</li>
                            <li>but this means you can send the link to more than one person (you can even have more than one host)</li>
                        </ul>
                    </p>

                    <strong class="form-descriptors">host: </strong><input type='text' name='host' class="form-control" id="host" size="125" placeholder="your username/email address"><br><br>
                    <strong class="form-descriptors">invitees: </strong><input type='text' name='invitees' class="form-control" id="invitees" size="125" placeholder="your friends usernames/email addresses">
                    <p>also I'm sorry not all options will be available below!! plz don't be too sad kudasai~ Please see above for the currently available options.</p>
                    <p><strong class="form-descriptors">map: </strong><select id="map" name="map">
                                <option value="0">castle</option>
                            </select></p>
                        <p><strong class="form-descriptors">gamemode: </strong><select id="gamemode" name="gamemode">
                                <option value="0">ffa</option>
                                <option value="1">teams</option>
                            </select></p>
                            <p><strong class="form-descriptors">server: </strong><select id="server" name="server">
                                <option value="0">sydney</option>
                            </select></p>
                            <strong class="form-descriptors">custom message: </strong><input type='text' name='message' class="form-control" id="message" size="125" placeholder="custom message that will be sent to your invitees and published on the database"><br><br>


                            <button type="submit" name='createForm' id='createForm' value="submit" style="height: 50; width: 400; font-size: 20px; font-weight: bold; background-color: #39789c; color: #ffffff;">Send request to PigeonProxy server</button>
                </form>
                <hr>

            </p>
</body>
<footer>
    Version 0.1-alpha of PigeonProxy<br>
    <strong>Copyright &copy Pigeon and Friends 2020 - MIT License</strong><br>
    <strong><a href="https://aidswidjaja.github.io">aidswidjaja.github.io</a></strong>
</footer>

</html>