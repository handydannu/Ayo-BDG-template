<!DOCTYPE html>
<html>
<head>
	<title>AyoBandungCom</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="utf-8" />
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/fotoslider.css" rel="stylesheet">
	<link href="assets/css/videoslider.css" rel="stylesheet">
	<link href="assets/css/my-slider.css" rel="stylesheet"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">	
	<link href='https://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
</head>


<body>
	<div class="container"><!-- Main container -->
		<div class="header">
	        <div class="invisible"></div>
		        <div class="topleftlogo">            
		            <img src="assets/img/archive.png" width="300px" height="70px">
		            <div class="datetoday">
		            	Rabu, 16 Maret 2016, 20:09
		            </div>
		        </div>
		        <div class="righttop">
		            <img src="http://placehold.it/450x90" width="450px" height="90px">
		        </div>
		        <div class="menu">

					<div class="topborder"></div>
		            <ul class="indeks">
					    <li class="active"><a href="index.php">HOME</a></li>
					    <li><a href="news.php">NEWS</a>							        
					    <li><a href="event.php">EVENT & KOMUNITAS</a></li>
					    <li><a href="wiskul.php">WISATA & KULINER</a></li>
					    <li><a href="persib.php">PERSIB</a></li>
					    <li><a href="direktori.php">DIREKTORI</a></li>
					    <li><a href="foto.php">FOTO</a></li>
					    <li><a href="video.php">VIDEO</a></li>
					    <li><a href="archive.php">INDEKS</a></li>
					</ul>					
					<div class="belowborder"></div>
		        </div>
	    </div>

		<div class="wrapper"><!-- Wrapper -->
			<div class="leftsidebar"><!-- Left sidebar -->
	            <a href="#"><img src="assets/img/leftbanner.png" width="170px" height="570px"></a>
	        	
	            <div class="mostread">      		
            		<div class="titlebar yellowline">MOST READ</div>
	            		<div class="listing">
		            		<ol>
		            			<li><a href="#">MORE LINK</a></li>
		            			<li><a href="#">MORE LINK</a></li>
		            			<li><a href="#">MORE LINK</a></li>
		            			<li><a href="#">MORE LINK</a></li>
		            			<li><a href="#">MORE LINK</a></li>
		            		</ol>
	            		</div>
	            </div>
	        </div><!-- End Left sidebar -->

	    <div class="middlebar"><!-- Middle section -->	        	
            	<div class="titlebar">TERKINI</div>
            	<div class="invisible"></div>
            	<ul class="animatedunderlinemenu">
					<li class="active"><a href="index.php">ALL</a></li>
					<li><a href="news.php">NEWS</a>							        
					<li><a href="event.php">KOMUNITAS</a></li>
					<li><a href="wiskul.php">WISATA</a></li>
					<li><a href="persib.php">PERSIB</a></li>
				</ul>	
            	<div class="invisible"></div>

            <?php
				for ($count = 1; $count <= 15; $count++)
					{
					echo ("
				<div class='leftcenter'>
					<img src='http://placehold.it/250x120'>
				</div>
				<div class='rightcenter'>
					<div class='postcategory'>
						<a href='#'>CATEGORY</a>
					</div>
					<div class='postdate'>
						Senin, 20 November 2015 | Reporter
					</div>
					<div class='posttitle'>
						<a href='#'>Lorem Ipsum Sit Amet Dolor, Onad Delom Sur Toues</a>
					</div>
				</div>
				");
					}
			?>

            <div class="toggler barmore">
            	<center>SELENGKAPNYA</center>
	            <show>
	            <?php
					for ($count = 1; $count <= 10; $count++)
						{
						echo ("
					<div class='leftcenter'>
						<img src='http://placehold.it/250x120'>
					</div>
					<div class='rightcenter'>
						<div class='postcategory'>
							<a href='#'>CATEGORY</a>
						</div>
						<div class='postdate'>
							Senin, 20 November 2015 | Reporter
						</div>
						<div class='posttitle'>
							<a href='#'>Lorem Ipsum Sit Amet Dolor, Onad Delom Sur Toues</a>
						</div>
					</div>
					");
						}
				?>
				</show>
            </div>

            <div class="contentads">
            	<img src="http://placehold.it/510x100">
            </div>

                

            <div class="invisible"></div>
            <div class="leftcenter">            	
            	<div class="titlebar yellowline">NEWS</div>
            	<div class="imgprv">
				<img src="http://placehold.it/240x120"></div>						
            	<div class='invisible'></div>
            	<?php
					for ($count = 1; $count <= 5; $count++)
					{
					echo ("						
						<div class='moretitle'>
							<a href='#'>LOREM IPSUM SIT AMET DOLOR LOREM IPS</a>
						</div>
					");
					}
				?>
            </div>

            <div class="rightcenter2">            	
            	<div class="titlebar yellowline">KOMUNITAS</div>
            	<div class="imgprv">
				<img src="http://placehold.it/240x120"></div>						
            	<div class='invisible'></div>
            	<?php
					for ($count = 1; $count <= 5; $count++)
					{
					echo ("						
						<div class='moretitle'>
							<a href='#'>LOREM IPSUM SIT AMET DOLOR LOREM IPS</a>
						</div>
					");
					}
				?>
            </div>

            <div class="leftcenter">            	
            	<div class="titlebar yellowline">WISATA</div>
            	<div class="imgprv">
				<img src="http://placehold.it/240x120"></div>						
            	<div class='invisible'></div>
            	<?php
					for ($count = 1; $count <= 5; $count++)
					{
					echo ("						
						<div class='moretitle'>
							<a href='#'>LOREM IPSUM SIT AMET DOLOR LOREM IPS</a>
						</div>
					");
					}
				?>
            </div>

            <div class="rightcenter2">            	
            	<div class="titlebar yellowline">PERSIB</div>
            	<div class="imgprv">
				<img src="http://placehold.it/240x120"></div>						
            	<div class='invisible'></div>
            	<?php
					for ($count = 1; $count <= 5; $count++)
					{
					echo ("						
						<div class='moretitle'>
							<a href='#'>LOREM IPSUM SIT AMET DOLOR LOREM IPS</a>
						</div>
					");
					}
				?>
            </div>

        </div><!-- End Main content -->

        <div class="rightsidebar"><!-- Right sidebar -->

        	<!-- Search bar -->
			<div id="search-form">
				<form class="form-container" action="">
					<input type="text" class="search-field" placeholder="Cari..." />
					<div class="submit-container">
						<input type="submit" value="" class="submit" /><br/>
					</div>
			</div><!-- End Search bar -->

			<div class="sosialmedia"><!-- Social media -->
				Find us on : 
				<a href="#"><i class="fa fa-twitter"></i><a/>
				<a href="#"><i class="fa fa-facebook"></i><a/>
				<a href="#"><i class="fa fa-fa-google-plus"></i><a/>
				<a href="#"><i class="fa fa-instagram"></i><a/>
				<a href="#"><i class="fa fa-rss"></i><a/>
				<a href="#"><i class="fa fa-android"></i><a/>
				<a href="#"><i class="fa fa-apple"></i><a/>
			</div><!-- end of social media -->

				<!-- Display 1 -->
	          	<a href="#">
	          		<img src="http://placehold.it/300x200">
	          	</a>

				<!-- Terpopuler di sidebar kanan -->
				<div class="titlebar yellowline">TERPOPULER</div>
				    <img src="http://placehold.it/300x150">
				    <div class="postdate">
						Senin, 20 November 2015 | Reporter
					</div>
					<div class="posttitle">
						<a href='#'>JUDUL KONTEN</a>
					</div>
				<!-- End Terpopuler -->
				<div class="belowborder2"></div>			

	            <div class="rightimgpreview">
	            	<img src="http://placehold.it/140x90">
	            </div>
	            <div class="righttxtpreview posttitleright">
	            	<a href="#">
	            		Lorem ipsum dolor sit amet, consectetur adipiscing elit...
	            	</a>	            	
	            </div><!-- End Populer content right -->

	          	<img src="http://placehold.it/300x90">
				<div class='belowborder2'></div>

				<!-- Populer right konten -->
	            <?php
					for ($count = 1; $count <= 3; $count++)
						{
						echo ("
							<div class='rightimgpreview'>
					            <img src='http://placehold.it/140x90'>
					        </div>
					            <div class='righttxtpreview posttitleright'>
					            <a href='#'>
					            	Lorem ipsum dolor sit amet, consectetur adipiscing elit...
					           	</a>	            	
					        </div><!-- End Populer content right -->
							
						");
						}?><!-- End Populer right konten -->

	            <!-- Display 2 -->
	          	<a href="#">
	          		<img src="http://placehold.it/300x200">
	          	</a>
				<div class='belowborder2'></div>

	          	<!-- Display 3 -->
	          	<a href="#">
	          		<img src="http://placehold.it/300x200">
	          	</a>
				<div class='belowborder2'></div>

	            <!-- Twitter Widget -->
	            <a class="twitter-timeline" 
				href="https://twitter.com/ayobandungcom" 
				data-widget-id="707839956723470336"
				width="300px"
				height="450px">Tweets by @ayobandungcom</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						
        </div> <!-- end Right sidebar -->
		</div><!--End Wrapper -->

		<div class="wrapper2">
			<div class="left1">
	          	<a href="#">
	          		<img src="http://placehold.it/480x80"><!-- Bottom banner 1 -->
	          	</a>
	        </div>
			<div class="left2">
			  <a href="#">
	          		<img src="http://placehold.it/480x80"><!-- Bottom banner 2 -->
	          </a>
	        </div>
		</div>		

		<div class="footer">
		<div class="topborder"></div>

	    	<div class="footerleft footall">
	    		ALL KANAL
	    	</div>

	    	<div class="footercenter">	    		
		        <a href="#"><img src="assets/img/logo.png" width="300px" height="70px"></a>
	    	</div>

	    	<div class="footerright">
	    		<div class="bottominv"></div>
	    		<div class="sosialmedia"><!-- Social media -->
					Find us on : 
					<a href="#"><i class="fa fa-twitter"></i><a/>
					<a href="#"><i class="fa fa-facebook"></i><a/>
					<a href="#"><i class="fa fa-fa-google-plus"></i><a/>
					<a href="#"><i class="fa fa-instagram"></i><a/>
					<a href="#"><i class="fa fa-rss"></i><a/>
					<a href="#"><i class="fa fa-android"></i><a/>
					<a href="#"><i class="fa fa-apple"></i><a/>
				</div><!-- end of social media -->
	    	</div>

	    	<div class="foo1">
	    		<div class="anchor">
	    			<a href="#">More Link</a>
	    		</div>
	    		<div class="bottomlinks">
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    		</div>
	    	</div>

	    	<div class="foo2">
	    		<div class="anchor">
	    			<a href="#">More Link</a>
	    		</div>
	    		<div class="bottomlinks">
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    		</div>
	    	</div>

	    	<div class="foo3">
	    		<div class="anchor">
	    			<a href="#">More Link</a>
	    		</div>
	    		<div class="bottomlinks">
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    		</div>
	    	</div>

	    	<div class="foo4">
	    		<div class="anchor">
	    			<a href="#">More Link</a>
	    		</div>
	    		<div class="bottomlinks">
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    		</div>
	    	</div>

	    	<div class="foo5">
	    		<div class="anchor">
	    			<a href="#">More Link</a>
	    		</div>
	    		<div class="bottomlinks">
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    		</div>
	    	</div>

	    	<div class="foo6">
	    		<div class="anchor">
	    			<a href="#">More Link</a>
	    		</div>
	    		<div class="bottomlinks">
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    			<a href="#">More Link</a><br>
	    		</div>
	    	</div>
	    	<div class="foo7">
	    		<div class="morelink">
	    			<a href="#">About Us</a><br>
					<a href="#">Disclaimer</a><br>
					<a href="#">Privacy Policy</a><br>
					<a href="#">Pedoman Siber</a><br>
					<a href="#">Karir</a><br>
	    		</div>
	    	</div>

	    	<div class="foo8">
	    	</div>

		</div>

	</div>

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/ism-2.1.js"></script>	
<script src="assets/js/toggler.js"></script>
<!-- End JS -->

</body>
</html>