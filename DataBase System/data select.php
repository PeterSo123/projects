<html>
<head>
     <script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
     <script src="js/jquery.colorbox-min.js" type="text/javascript"></script>
     <!--[if lt IE 9]>
	 <script src="js/modernizr.custom.js"></script>
     <![endif]-->
     <script src="js/functions.js" type="text/javascript"></script>
</head>
    
<body>
    <?php
    
        include("connect.php");
    
        $sql = "SELECT MName, Introduction, MID From movie";
        if($stmt = $db->query($sql))
        {
            while($result = mysqli_fetch_object($stmt))
            {
                echo '
						<!-- post -->
						<div class="post">
							<!-- post-inner -->
							<div class="post-inner">
								<header>';
									echo"<h2><a target=_blank' href=\"".$result->MName.".php\">".$result->MName."
                                        </a></h2>";
									echo'<div class="cl">&nbsp;</div>
								</header>
								<div class="img-holder">
								<a href="#">';
                    echo "<img src=\"".$result->MID.".jpg\" width=100% height=100%>";
                echo '</a>
								</div>
								
								<!-- meta -->
								<div class="meta">
									<p class="date">APRIL 13, 2018</p>
									<div class="cl">&nbsp;</div>
								</div>
								<!-- end of meta -->
								<!-- post-cnt -->
								<div class="post-cnt">
									<p>'.$result->Introduction.'
                                    </p>';
									echo"<a href=\"".$result->MName.".php\" class='more' target='_blank'>See Ranking</a>
								</div>
								<!-- end of post-cnt -->
							</div>
							<!-- post-inner -->
						</div>";
                }
            }
?>
</body>
</html>
