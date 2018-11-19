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
    
        $sql = "SELECT m.MName, m.Introduction, m.MID, s.socre, r.Name From movie m, score s, movie_review r WHERE r.MRWID = s.MRWID AND s.MID = m.MID AND m.MID = 1811";
        if($stmt = $db->query($sql))
        {
            if($result = mysqli_fetch_object($stmt))
            echo '
						<!-- post -->
						<div class="post">
							<!-- post-inner -->
							<div class="post-inner">
								<header>
									<h2><a href="#">'.$result->MName.'
                                        </a></h2>
									<div class="cl">&nbsp;</div>
								</header>
								<div class="img-holder">';
                    echo "<img src=\"".$result->MID.".jpg\" width=100% height=100%>";
            echo'<div class="post-cnt"></div>
								
								<!-- meta -->
								<div class="meta">
									<p class="date">APRIL 13, 2018</p>
									<div class="cl">&nbsp;</div>
								</div>
                                <div class="post-cnt">
									<p>'.$result->Introduction.'
                                    </p>
                                    </div></div>
                                <div class="post">
							<!-- post-inner -->
							       <div class="post-inner">
                                    <div class="post-cnt">
									<p><header><h1>'.$result->Name.'
                                    </h1></header><div class="cl">&nbsp;</div></p>
                                    <p>Score: '.$result->socre.'
                                    </p>
								</div></div></div>';
            while($result = mysqli_fetch_object($stmt))
            {
                
                echo '
								<div class="post">
							<!-- post-inner -->
							       <div class="post-inner">
                                    <div class="post-cnt">
									<p><header><h1>'.$result->Name.'
                                    </h1></header><div class="cl">&nbsp;</div></p>
                                    <p>Score: '.$result->socre.'
                                    </p>
								</div></div></div>';
                }
            }
?>
</body>
</html>
