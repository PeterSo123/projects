<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
    </head>
    <body>
    <?php
        if((!isset($_POST['name'])) || (!isset($_POST['password']))) {
            // visitor needs to enter a name and password
    ?>
        <h1>Log In</h1>
        <p>This page is secret. </p>
        <form method="post" action="LogIn.php">
        <p><label for="name">Username:</label>
        <input type="text" name="name" id="name" size="15" /></p>
        <p><label for="password">Password:</label>
        <input type="password" name="password" id="password" size="15" /></p>
        <button type="submit" name="submit">Log In</button>
        </form>
    <?php
        } else if(($_POST['name']=='UA') && ($_POST['password']=='1359')) {
            // visitor's name and password combination are correct
           include("UA.php");
        } else if(($_POST['name']=='Admin') && ($_POST['password']=='Admin')) {
            // visitor's name and password combination are not correct
             echo '<a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=moviedb">change data</a>';
        } else {
            echo 'Sorry you are not allow to Log In';
            echo '<p><a href="home.php"><button type="submit" name="submit">Back</button></a></p>';
        }
    ?>
    </body>
</html>