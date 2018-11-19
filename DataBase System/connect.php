<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php

$db_server = "localhost";

$db_name = "moviedb";

$db_user ="root";

$db_passwd = "";

$db = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);
if(mysqli_connect_errno($db))
    echo "You Are Not Allow To Visit This Page" . mysqli_connect_error();

mysqli_set_charset($db,'utf8');

if(!@mysqli_select_db($db,'moviedb'))
    die("cann't find the database");
?>