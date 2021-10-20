<?php
require('connexion.php');
session_start();
?>
<?php


if(isset($_POST['submit']))
{   
	unset($_SESSION['search']);
	$_SESSION['product_price']=0 ; 
	$_SESSION['product_name']=NULL;

     $_SESSION["search"]=$_POST['search'];
     header('Location: categories.php');
     
}

if(isset($_POST['search_type']))
{   
     $_SESSION["search_type"]=$_POST['search_type'];
     header('Location: categories.php');
     
}
if(isset($_POST['deconnect']))
{   
	session_destroy();
     header('Location: authentification.php');
     
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
</head>




<body>

<?php require('header.php');?>

	<!-- Slider // Carousel -->
	<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<div class="mask flex-center">
				  <div class="container">
					<div class="row align-items-center">
					  <div class="col-md-7 col-12 order-md-1 order-2">
						<h4>Present your <br>
						  awesome product</h4>
						<p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
						  necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
						<a href="#">BUY NOW</a> </div>
					  <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/NKvkfTT.png" class="mx-auto" alt="slide"></div>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="carousel-item">
				<div class="mask flex-center">
				  <div class="container">
					<div class="row align-items-center">
					  <div class="col-md-7 col-12 order-md-1 order-2">
						<h4>Present your <br>
						  awesome product</h4>
						<p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
						  necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
						<a href="#">BUY NOW</a> </div>
					  <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/duWgXRs.png" class="mx-auto" alt="slide"></div>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="carousel-item">
				<div class="mask flex-center">
				  <div class="container">
					<div class="row align-items-center">
					  <div class="col-md-7 col-12 order-md-1 order-2">
						<h4>Present your <br>
						  awesome product</h4>
						<p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
						  necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
						<a href="#">BUY NOW</a> </div>
					  <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/DGkR4OQ.png" class="mx-auto" alt="slide"></div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> 
				<span class="carousel-control-prev-icon" aria-hidden="true"></span> 
				<span class="sr-only">Previous</span> 
			</a>
			 <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					 <span class="carousel-control-next-icon" aria-hidden="true"></span> 
					 <span class="sr-only">Next</span>
			</a> 
	</div>
<!--Script Carousel-->		  

<script>
 $('#myCarousel').carousel({
    interval: 3000,
 })
 
 $('.navbar .dropdown').hover(function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
}, function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp()
});

</script>

<!--slide // Carousel *** end ***--> 
		<div class="container fill_height" style="position: absolute; top:-46px;">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content"  >
						<h6></h6>
						<h1></h1>
						<div class="red_button shop_now_button" style="position: absolute; left:220px ;top: 160px;"><a href="#"><i class="fa fa-shopping-cart" style="color:yellow; "></i>  shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	




	<!-- Banner -->

	<div class="banner" >
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_1.jpg)">
						<div class="banner_category">
		
							<form action="" method="post"><button type="submit" name="search_type" value="women" style="background:none; border:none;" ><a >Pour La femme</a></button></form>

						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_3.jpg)">
						<div class="banner_category">
							<form action="" method="post"><button type="submit" name="search_type" value="men" style="background:none; border:none;" ><a >Pour L'homme</a></button></form>

						</div>
					</div>
				</div>
			
			
			
				
				
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/cuisine.jpg)">
						<div class="banner_category">
							
							<form action="" method="post"><button type="submit" name="search_type" value="cuisine" style="background:none; border:none;" ><a >La cuisine...</a></button></form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>LES PRODUITS</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">Femme</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">Homme</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".cuisine">la cuisine</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                        <!-- Product 1 -->
                        <?php 
                            
                            $reponse=$conn->query('SELECT * FROM produit  ');
                            while( $donnees = $reponse->fetch_assoc())
                            {   ?>
                                
                              
						<div class="product-item <?php  echo $donnees['type'] ?>">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="images/<?php  echo $donnees['photo'] ?>" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<?php if($donnees['pourcentage']>0){ ?>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
											<span>-<?php  echo $donnees['pourcentage'] ?> %</span>
										</div>
										<?php } ?>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php?produit=<?php  echo $donnees['id'] ?>"><h4><?php  echo $donnees['libelle'] ?></h4><?php  echo $donnees['description'] ?></a></h6>
									<div class="product_price"><?php $f=$donnees['prix']; $p=$donnees['pourcentage']; echo $f-$f*$p/100 ;?> DH<span><?php if($donnees['pourcentage']>0) echo $donnees['prix'] . "DH" ; ?> </span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="single.php?produit=<?php  echo $donnees['id'] ?>">vender</a></div>

						</div>

                        <!-- Product 1 -->
                        <?php }   ?>
					</div>
				</div>
            </div>
                              
		</div>
	</div>

	<!-- Deal of the week -->

	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="images/deal_ofthe_week.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>L'affaire de la semaine</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">03</div>
								<div class="timer_unit">Day</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">15</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">45</div>
								<div class="timer_unit">Mins</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">23</div>
								<div class="timer_unit">Sec</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button"><a href="#">Acheter</a></div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
    

	<!-- Best Sellers -->

	<div class="best_sellers">
        
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Le plus Acheter</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

                            <!-- Slide 1 -->
                            
                           
                            <?php 
                            
                            $reponse=$conn->query('SELECT * FROM produit,commande ');
                            while( $don = $reponse->fetch_assoc())
                            {   
                                
                            ?>
                            

							<div class="owl-item product_slider_item">
								
								<div class="product-item <?php  echo $don['type'] ?>">
									<div class="product discount">
										<div class="product_image">
											<img src="images/<?php  echo $don['photo'] ?>" alt="">
										</div>
										<div class="favorite favorite_left"></div>
									
                                        <?php if($don['pourcentage']>0){ ?>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
											<span>-<?php  echo $don['pourcentage'] ?> %</span>
										</div>
										<?php } ?>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php?produit=<?php  echo $don['id'] ?>"><h4><?php  echo $don['libelle'] ?></h4><?php  echo $don['description'] ?></a></h6>
									<div class="product_price"><?php $f=$don['prix']; $p=$don['pourcentage']; echo $f-$f*$p/100 ;?> DH<span><?php if($don['pourcentage']>0) echo $don['prix'] . "DH" ; ?> </span></div>
								</div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php?produit=<?php  echo $donnees['id'] ?>"><?php  echo $don['description'] ?></a></h6>
											<div class="product_price"><?php  echo $don['prix'] ?><span><?php  echo  $don['prix']*$don['pourcentage'] ?></span></div>
                                        </div>
                                        
									</div>
                                </div>

                            </div>
                           <?php } ?>
							<!-- Slide 1 -->

						</div>

						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>LIVRAISON GRATUITE</h6>
							
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>PAIEMENT À LA LIVRAISON</h6>
							
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 jours de retour</h6>
							
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>OUVERTURE TOUTE LA SEMAINE</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blogs -->

	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>PRESENTER PAR</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/anashilia.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h2> ANAS HILIA</h2>
							<h4 class="blog_title">future ingénieur en informatique</h4>
							
							<a class="blog_more" href="#">voilà son compte facebook</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/blog_2.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h3>AHMED MAHMOUD</h3>
							<h4 class="blog_title">future ingénieur en informatique</h4>
							
							<a class="blog_more" href="#">voilà son compte facebook</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/blog_3.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h2>ABDELAH </h2>
							<h4 class="blog_title">future ingénieur en informatique</h4>
							
							<a class="blog_more" href="#">voilà son compte facebook</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.php">CONTACTEZ NOUS</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
