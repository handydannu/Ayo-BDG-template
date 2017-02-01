<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/extra.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet" >
	<link rel="stylesheet" href="css/gaya.css?v=2">
	<style type = "text/css">
		<?php include("includes/dropv.php"); ?>
	</style>
	<link href='https://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>

</head>

<body>

<div class="container"><!-- Main container -->
	
	<div class="row"><!-- Main row -->
		
		<div class="col-md-12"><!-- Inner row -->

			<div class="row"><!-- ROW 1 -->

				<div class="col-md-1">
					<!-- NULL Left -->
				</div>
				<div class="col-md-10">
					<!-- Center point -->					
					<div class="row headatas">
							<div class="col-md-6">	
								<a href="#"><img src="logos/video.png" width="300px" height="70px"></a>
								<div class="tglpost">
									<br>Senin, 20 November 2015, 18:19
								</div>
							</div>
							<div class="col-md-6">				
								<img src="http://placehold.it/400x90">
							</div>						
						<div class="cleansheet"></div>						
					</div>

					<div class="sideborder5"></div>
					<div class="masthead"><!-- NAV Masthead -->
					        <nav>
					          <ul class="nav livideo">
					            <li><a href="index.php">HOME</a></li>
					            <li><a href="news.php">NEWS</a>							        
					            <li><a href="event.php">EVENT & KOMUNITAS</a></li>
					            <li><a href="wiskul.php">WISATA & KULINER</a></li>
					            <li><a href="persib.php">PERSIB</a></li>
					            <li><a href="direktori.php">DIREKTORI</a></li>
					            <li><a href="foto.php">FOTO</a></li>
					            <li><a href="video.php">VIDEO</a></li>
					            <li><a href="indeks.php">INDEKS</a></li>
					          </ul>
					        </nav>
					        <div class="cleannavi"></div>
					        <div class="sideborder4"></div>
				    </div><!-- END NAV Masthead -->
				    <div class="cleannav"></div>

				    <div class="row"><!-- ROW 2 -->
						<div class="col-md-2"><!-- Inner left ROW 2 -->	
							<div class="bannerkiri"><!-- BANNER KIRI -->
								<img class="img-responsive" src="image/Banir kiri 150x570.png">
							</div>

							<div class="mostread"><!-- Most read KIRI -->
								<div class="linekuning judulmenu">
									MUST READ
								</div>
								<div class="listing">									
								<ol>
									<a href="#"><li>LIST NUMBER 1</li></a>
									<a href="#"><li>LIST NUMBER 2</li></a>
									<a href="#"><li>LIST NUMBER 3</li></a>
									<a href="#"><li>LIST NUMBER 4</li></a>
									<a href="#"><li>LIST NUMBER 5</li></a>
								</ol>
								</div>
							</div>
						</div><!-- End Inner ROW 2 -->	

						<div class="col-md-6 sideborder"><!-- Inner center ROW 2 -->	

						<div class="dateposting">
							Jumat, 11 Maret 2016, 20:20
						</div>	
						<img class="img-responsive" src="http://placehold.it/800x500" alt="...">						
						<div class="authorposting">
							Oleh Editor/Ayobandung.com
						</div>
						<div class="judulheadline">
							Nam sagittis ante nec mi feugiat feugiat. <!-- Optimal Maksimal 2 baris --> 
						</div>
							
							<!-- Carousel Foto -->	
						<div class="carouselfoto">					
						<!-- start carousel -->
					    <div class="container">
						  <div class='row'>
						    <div class='col-md-12'>
						      <div class="carousel slide media-carousel" id="media">
						        <div class="carousel-inner">
						          <div class="item  active">
						            <div class="row">
						              <div class="col-md-6">
						                <a class="gbr" href="#"><img alt="" src="http://placehold.it/160x100"></a>
						              </div>          
						              <div class="col-md-6">
						                <a class="gbr" href="#"><img alt="" src="http://placehold.it/160x100"></a>
						              </div>       
						            </div>
						          </div>
						          <div class="item">
						            <div class="row">
						              <div class="col-md-6">
						                <a class="gbr" href="#"><img alt="" src="http://placehold.it/160x100"></a>
						              </div>          
						              <div class="col-md-6">
						                <a class="gbr" href="#"><img alt="" src="http://placehold.it/160x100"></a>
						              </div>     
						            </div>
						          </div>
						          <div class="item">
						            <div class="row">
						              <div class="col-md-6">
						                <a class="gbr" href="#"><img alt="" src="http://placehold.it/160x100"></a>
						              </div>          
						              <div class="col-md-6">
						                <a class="gbr" href="#"><img alt="" src="http://placehold.it/160x100"></a>
						              </div>  
						            </div>
						          </div>
						        </div>
						        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
						        <a data-slide="next" href="#media" class="right carousel-control">›</a>
						      </div>                          
						    </div>
						  </div>
						</div>
						</div>
						<!-- end carousel -->
						<div class="judulmenu">BAGIKAN</div>
							<div class='shareaholic-canvas' data-app='share_buttons' data-app-id='24047895'></div>
						<div class="sideborder4"></div>
						<div class="cleannav"></div>



							<!-- Thumbnail konten -->
							<?php
								for ($count = 1; $count <= 3; $count++)
								{
								echo ("
									<div class='row'>
									<div class='col-md-6 imgpost img-responsive'>
											<img src='http://placehold.it/200x100'>
									</div>
									<div class='col-md-6'>										
									<div class='col-md-6 imgpost img-responsive'>
											<img src='http://placehold.it/200x100'>
									</div>
									</div>
								</div>
									");
								}
							?><!-- END Thumbnail konten -->					

							
							<div class="bannerberita"><!-- Banner berita -->
								<a href="#"><img class="img-responsive" src="http://placehold.it/500x100/"></a>	
							</div><!-- Banner berita -->					

						</div><!-- Inner center ROW 2 -->

						<div class="col-md-4"><!-- Inner right ROW 2 -->

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
							<a href="#"><i class="fa fa-twitter" style="color:#5C5C5C"></i><a/>
							<a href="#"><i class="fa fa-facebook" style="color:#5C5C5C"></i><a/>
							<a href="#"><i class="fa fa-fa-google-plus" style="color:#5C5C5C"></i><a/>
							<a href="#"><i class="fa fa-instagram" style="color:#5C5C5C"></i><a/>
							<a href="#"><a href="#"><i class="fa fa-rss" style="color:#5C5C5C"></i><a/>
							<a href="#"><i class="fa fa-android" style="color:#5C5C5C"></i><a/>
							<a href="#"><i class="fa fa-apple" style="color:#5C5C5C"></i><a/>
						</div><!-- end of social media -->

						<div class="display1 img-responsive"><!-- Ads Display 1 -->							
							<a href="#"><img src="http://placehold.it/300x250" title="Display 1"></a>
						</div><!-- End Ads Display 1 -->	

						<!-- Terpopuler -->
						<div class="populer">
							<div class="linekuning judulpopuler">TERPOPULER</div>
							<div class="imgpost img-responsive">
								<img src="http://placehold.it/300x250">
							</div>
							<div class="tglpost">
								Senin, 20 November 2015 | Reporter
							</div>
							<div class="judulpost">
								<a href='#'>JUDUL KONTEN</a>
							</div><!-- End Terpopuler -->
						</div>

						<div class='sideborder4'></div>
						<!-- Berita populer lainnya -->
						<div class="row">
							<div class="col-md-5 imgpost img-responsive">
								<img src="http://placehold.it/120x80">
							</div>
							<div class="col-md-7">
								<div class="judulpost2">
									<a href='#'>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</a>
								</div>
							</div>
						</div><!--End Berita populer lainnya -->
						<div class='sideborder3'></div>


						<div class="displaykecil img-responsive">
							<!-- display kecil -->
							<a href="#"><img src="http://placehold.it/295x100"></a>							
						</div><!--End display kecil -->

						<!-- Berita populer lainnya -->
						<div class='sideborder4'></div>
						<?php
							for ($count = 1; $count <= 3; $count++)
								{
							echo ("
								<div class='row'>
									<div class='col-md-5 imgpost img-responsive'>
										<img src='http://placehold.it/120x80'>
									</div>
									<div class='col-md-6'>
										<div class='judulpost2'>
											<a href='#'>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</a>
										</div>
									</div>
								</div>
								<div class='sideborder3'></div>
						");
						}?><!-- End Berita populer lainnya -->

						<div class="adsense img-responsive"><!-- Ads Adsense -->							
							<a href="#"><img src="http://placehold.it/300x250" title="Adsense"></a>
						</div><!-- End Ads Adsense  -->

						<div class="display2 img-responsive"><!-- Ads Display 2 -->							
							<a href="#"><img src="http://placehold.it/300x250" title="Display 2"></a>
						</div><!-- End Ads Display 3 -->

						<!-- Twitter widget -->
						<div class="twitterwidget">
							<a class="twitter-timeline" 
							href="https://twitter.com/ayobandungcom" 
							data-widget-id="707839956723470336"
							width="320px"
							height="450px">Tweets by @ayobandungcom</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div><!-- End Twitter widget -->

						</div><!-- END Inner right ROW 2 -->
					</div><!-- END ROW 2 -->

				</div><!-- END Center point -->
				<div class="col-md-1">
					<!-- NULL right -->
				</div>
			</div><!-- END ROW 1 -->

		</div><!-- END Inner Row -->
	</div><!-- END Main Row -->

	<div class="row"><!-- Row ads bottom -->
		<div class="col-md-1"></div>
		<div class="col-md-5 bannerbottom1 img-responsive">
			<a href="#"><img src="http://placehold.it/450x70" title="Banner Bottom"></a>
		</div>
		<div class="col-md-5 img-responsive bannerbottom2">
			<a href="#"><img src="http://placehold.it/450x70" title="Banner Bottom"></a>
		</div>
		<div class="col-md-1"></div>		
	</div><!-- END Row ads bottom -->

	<div class="row"><!-- Row footer -->
		<div class="col-md-1"></div>

		<div class="col-md-7 bannerbottom1 img-responsive sideborder2">

			<div class="row">
				<div class="col-md-3">
					<h3>ALL KANAL</h3>
				</div>
				<div class="col-md-5 img-responsive">
					<a href="#"><img src="image/logo.png" width="250px" height="55px"></a>
				</div>
				<div class="col-md-4">						
				</div>
			</div>	

		</div>

		<div class="col-md-3 sideborder2"><br>
			<div class="sosialmedia"><!-- Social media -->
							Find us on : 
							<a href="#"><i class="fa fa-twitter" style="color:#5C5C5C"></i><a/>
							<a href="#"><i class="fa fa-facebook" style="color:#5C5C5C"></i><a/>
							<a href="#"><i class="fa fa-fa-google-plus" style="color:#5C5C5C"></i><a/>
							<a href="#"><i class="fa fa-instagram" style="color:#5C5C5C"></i><a/>
							<a href="#"><a href="#"><i class="fa fa-rss" style="color:#5C5C5C"></i><a/>
							<a href="#"><i class="fa fa-android" style="color:#5C5C5C"></i><a/>
							<a href="#"><i class="fa fa-apple" style="color:#5C5C5C"></i><a/>
			</div><!-- end of social media -->
		</div>
		<div class="col-md-1"></div>	
	</div><br><!-- END Row footer -->

	<div class="row"><!-- Row footer -->
		<div class="col-md-1"></div>

		<div class="col-md-10">
			<div class="row">
				<div class="col-md-1 botmenu">
					<b><a href="#">NEWS</a></b><br>
					<a href="#">Lorem</a>
					<a href="#">Ipsum</a>
					<a href="#">Amet</a>
					<a href="#">Dolor</a>
				</div>
				<div class="col-md-1 botmenu">
					<b><a href="#">NEWS</a></b><br>
					<a href="#">Lorem</a>
					<a href="#">Ipsum</a>
					<a href="#">Amet</a>
					<a href="#">Dolor</a>
				</div>
				<div class="col-md-1 botmenu">
					<b><a href="#">NEWS</a></b><br>
					<a href="#">Lorem</a>
					<a href="#">Ipsum</a>
					<a href="#">Amet</a>
					<a href="#">Dolor</a>
				</div>
				<div class="col-md-1 botmenu">
					<b><a href="#">NEWS</a></b><br>
					<a href="#">Lorem</a>
					<a href="#">Ipsum</a>
					<a href="#">Amet</a>
					<a href="#">Dolor</a>
				</div>
				<div class="col-md-1 botmenu">
					<b><a href="#">NEWS</a></b><br>
					<a href="#">Lorem</a>
					<a href="#">Ipsum</a>
					<a href="#">Amet</a>
					<a href="#">Dolor</a>
				</div>
				<div class="col-md-1 botmenu">
					<b><a href="#">NEWS</a></b><br>
					<a href="#">Lorem</a>
					<a href="#">Ipsum</a>
					<a href="#">Amet</a>
					<a href="#">Dolor</a>
				</div>
				<div class="col-md-3"></div>
				<div class="col-md-3 botmenu">
					<a href="#">About Us</a><br>
					<a href="#">Disclaimer</a><br>
					<a href="#">Privacy Policy</a><br>
					<a href="#">Pedoman Siber</a><br>
					<a href="#">Karir</a><br>
				</div>
			</div>	
		</div>
		<div class="col-md-1"></div>	
	</div>
</div><!-- END Main Container -->

	<!-- all js -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="js/float.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.color.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/foto.js"></script>
	<script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='1014b52713720985d5b119facbb7a333' data-cfasync='false' async='async'></script>
	
</body>
</html>