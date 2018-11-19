<html>
<head>
<title>UA Sale Table</title>
</head>
    
<body>
    <?php
    
        include("connect.php");
    
        $sql = "SELECT AVG(Price) AS AVGPRICE From sale WHERE CID = 1359 ";
        if($stmt = $db->query($sql))
        {
            echo '<h1><p>Average Box Office</p></h1>';
            while($result = mysqli_fetch_object($stmt))
            {
                
                echo 'Average: &emsp;$'.$result->AVGPRICE.'<p></p>';
                }
            }
?>
</body>
</html>
