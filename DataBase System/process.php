<?php
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    
    mysql_connect("localhost", "root", "");
    mysql_select_db("moviedb");
    
    $result = mysql_query("select * from cinemas where CName = '$username' and CID = '$password'") or die("Failed to query database ".mysql_error());
    
    $row = mysql_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password){
    echo "Login success!!! Welcome ".$row['username'];
    }
    else if($row['username'] == 'Admin' && $row['password'] == 'Admin'){
    echo '<a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=moviedb">change data</a>';
    }
    else{
    echo "Sorry You Are Not Allow To Assign This Page";
    }
    ?>

 