<html>
<head>
<title>UA Sale Table</title>
</head>
    
<body>
    <?php
    
        include("connect.php");
    
        $sql = "SELECT MAX(s.Price) AS MAXPRICE, MAX(m.MName) AS MName From sale s, movie m WHERE m.MID=s.MID AND CID = 1359 ";
        if($stmt = $db->query($sql))
        {
            echo '<h1><p>Top Box Office</p></h1>';
            while($result = mysqli_fetch_object($stmt))
            {
                
                echo ''.$result->MName.':&emsp;$'.$result->MAXPRICE.'<p></p>';
                }
            }
?>
</body>
</html>
