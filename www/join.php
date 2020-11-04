<?php include 'head.php'; ?>
<!DOCTYPE HTML>
<html>
<script src="res/tabs.js"></script>

<body>
    <a href="index.php">
        <<< Back</a> <br><br>
            <a href="https://www.reddit.com/r/aww/comments/9k7evd/the_most_adorable_duck_i_have_ever_seen/" target="_blank"><img src="res/eggs.png" height="100"></a>
            <h1>join a game!</h1>
            <h3>PigeonProxy - play shellshock.io with friends at school!</h3>
            <h3 style="color: red">since this is the public test beta version of PigeonProxy, database support has not been included yet. This will be added soon tho!</h3>
            <p>
                A database is a list of games created for a specific group of people. They can be small and private, circulated amongst just a few friends, or distributed to an entire school community. You'll usually need to be part of the community whose database you'd like to view. Some databases only let certain people view the games created within it, while others might only check and see whether your email address belongs to a particular school district. For example, the NSW database might only be viewable to those with an @education.nsw.gov.au email address.<br><br>
                People can create a database and then choose who to circulate it with - then people can create a game and allocate it to the database they want to share their invite links with. This means you can control who you share invite links with, while also being able to easily find other people's games as well<br><br>
                We manage databases through Google Sheets but for a select number of communities, we display their databases on this page too.<br><br>
                And if your school or friend group doesn't already have a private database, why not <a href="https://io.adrian.id.au/request">create one</a>?<br>
                <h3>click a database below to view its contents!</h3>
            </p>

            <div class="tab">
                <button class="tablinks" onclick="openDB(event, 'aloys')">aloys</button>
            </div>

            <!-- Tab content -->
            <div id="aloys" class="tabcontent">
                <hr>
                <h1>aloys</h1>
                <h3>Most recent game</h3>
                <iframe src="https://docs.google.com/spreadsheets/d/1JFK0B3SFoB-otSoUlr0QIuw4kjyS1kuPLALiGEYisr0/preview#gid=130535847" style="height: 200; width: 95%;"></iframe>
                <hr>
                <h3>Private lobby database</h3>
                <iframe src="https://docs.google.com/spreadsheets/d/1JFK0B3SFoB-otSoUlr0QIuw4kjyS1kuPLALiGEYisr0/preview#gid=0" style="height: 500; width: 95%;"></iframe>
                <br>
            </div>
<br>
</body>
<?php include 'footer.php'; ?>

</html>