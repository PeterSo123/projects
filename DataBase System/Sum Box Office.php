<html>
<head>
<title>UA Sale Table</title>
</head>
    
<body>
    <?php
    
        include("connect.php");
    
        $sql = "SELECT SUM(Price) AS SUMPRICE From sale WHERE CID = 1359 ";
        if($stmt = $db->query($sql))
        {
            echo '<h1><p>Sum Box Office</p></h1>';
            while($result = mysqli_fetch_object($stmt))
            {
                echo 'Total:&emsp;$'.$result->SUMPRICE.'<p></p>';
                }
            }
?>
</body>
</html>
