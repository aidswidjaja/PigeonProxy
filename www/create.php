<?php include 'head.php'; ?>
<!DOCTYPE HTML>
<html>
    <script src="res/form.js"></script>
<body>
    <a href="index.php">
        <<< Back</a> <br><br>
            <a href="https://www.youtube.com/watch?v=j9V78UbdzWI" target="_blank"><img src="res/bacon-and-eggs.png" height="100"></a>
            <h1>create a game!</h1>
            <h3>PigeonProxy - play shellshock.io with friends at school!</h3>
            <p>
                Currently, creating a game on PigeonProxy has limited functionality because I have this thing called exams and I need to study.<br><br>

                <strong>For now</strong>, you can only choose from two maps (Castle/Road), two gamemodes (FFA/Teams) and one server (Sydney) but if PigeonProxy is still enjoyed after exams, then I'll happily add more.<br>

                <p><strong class="tip">tip!</strong> you can separate email addresses with commas, but NOT usernames. Also, usernames will only work if you've been pre-registered on the system (and if you don't know what this means, you probably haven't been pre-registered).</p>

                <p><strong class="important">important!</strong> you will be sent an email with the game link around 1 minute after your request is put forward (it takes a while for the server to process your request) - please use this within 5 minutes. <strong>Ensure that emails from egg@adrian.id.au are unblocked.</strong> need help? please <a href="https://docs.google.com/document/d/1-Jme2uSqgeaNkweX0GFIPHLPx5xIMq4xv8GrFBM-oSA/edit#bookmark=id.fulugi3ae91q">contact the developers.</a></p>
                <hr>

                <!-- https://stackoverflow.com/questions/50102826/how-can-i-save-my-form-data-to-a-local-text-file-using-php -->

                <form name='web_form' id='web_form' method='post' action='post.php'>

                    <label for="exampleInputEmail1">
                        <h3>create a game</h3>
                    </label>
                    <p>
                        <ul>
                            <li>if you want, you can separate emails with commas (e.g tanjiro@kamado.com, izuku@midoriya.net.au, naruto@uzumaki.org) but NOT usernames!!</li>
                            <li>if using usernames, only one username can be included per text box (unlike emails where you can add multiple)</li>
                            <li>but this means you can send the link to more than one person (you can even have more than one host) when using emails</li>
                            <!-- <li>want to register for a username or database? click <a href="https://docs.google.com/forms/d/e/1FAIpQLScp4Nvt5ksDqMnDJn4dguU2id_kNDTmC-aoaVa4jL_oJ8zTmA/viewform">here</a> to apply!</li>
                            <li>if an email never arrives, check the database for your invite link!</li> -->
                            <li>it is generally safer and more secure to use a username as opposed to an email address.</li>
                        </ul>
                    </p>

                    <strong class="form-descriptors">host: </strong><input type='text' name='host' class="form-control" id="host" size="125" placeholder="your username/email address"><br><br>
                    <strong class="form-descriptors">invitees: </strong><input type='text' name='invitees' class="form-control" id="invitees" size="125" placeholder="your friends usernames/email addresses">
                    <p>also I'm sorry that not all options will be currently available below!! plz dont kill me kudasai~</p>
                    <p><strong class="form-descriptors">map: </strong><select id="map" name="map">
                            <option value="0">Castle</option>
                            <option value="1">Road</option>
                        </select></p>
                    <p><strong class="form-descriptors">gamemode: </strong><select id="gamemode" name="gamemode">
                            <option value="0">Free For All</option>
                            <option value="1">Teams</option>
                        </select></p>
                    <p><strong class="form-descriptors">server: </strong><select id="server" name="server">
                            <option value="0">Sydney</option>
                        </select></p>
                    <!-- <p><strong class="form-descriptors">database: </strong><select id="database" name="database">
                            <option value="0">aloys</option>
                            <option value="0">(no database)</option>
                        </select></p> -->
                    <strong class="form-descriptors">custom message: </strong><input type='text' name='message' class="form-control" id="message" size="125" placeholder="custom message that will be sent to your invitees"><br><br>

                    <button type="submit" onclick="formComplete()" name='createForm' id='createForm' value="submit" style="height: 50; width: 400; font-size: 20px; font-weight: bold; background-color: #39789c; color: #ffffff;">Send request to PigeonProxy server</button>
                </form>
                <hr>

            </p>

</body>
<?php include 'footer.php'; ?>

</html>