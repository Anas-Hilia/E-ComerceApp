
<?php
require('connexion.php');
session_start();


if(isset($_POST['search_type']))
{   
	unset($_SESSION['search']);
	$_SESSION["search_type"]=NULL;
	unset($_SESSION["search_type"]);
	$_SESSION['product_price']=0 ; 
	$_SESSION['product_name']=NULL;
    $_SESSION["search_type"]=$_POST['search_type'];
	
     
}

if(isset($_POST['submit']))
{   
	unset($_SESSION['search']);
	$_SESSION['product_price']=0 ; 
	$_SESSION['product_name']=NULL;

     $_SESSION["search"]=$_POST['search'];
     header('Location: categories.php');
     
}

if(isset($_POST['deconnect']))
{   
	session_destroy();
     header('Location: authentification.php');
     
}


if(isset($_POST['filtrer']))
{   
	
	$_SESSION['product_name']=$_POST['product_name'];
	$_SESSION['product_price']=$_POST['product_price'];
    header('Location: categories.php');
     
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop Categories</title>
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
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/categories_styles.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">

<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
</head>
<style>
#slider {
  width: 130px;
  height: 17px;
  position: relative;
  margin:30px 25px;
  background: #10171D;
  -webkit-border-radius: 40px;
  -moz-border-radius: 40px;
  border-radius: 40px;
  -webkit-box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
  -moz-box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
  box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
}
#slider .bar {
  width: 120px;
  height: 5px;
  background: #333;
  position: relative;
  top: -4px;
  left: 4px;
  background: #1d2e38;
  background: -moz-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, #1d2e38), color-stop(50%, #2b4254), color-stop(100%, #2b4254));
  background: -webkit-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
  background: -o-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
  background: -ms-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
  background: linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
  filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#1d2e38', endColorstr='#2b4254', GradientType=1);
  -webkit-border-radius: 40px;
  -moz-border-radius: 40px;
  border-radius: 40px;
}
#slider .highlight {
  height: 2px;
  position: absolute;
  width: 120px;
  top: 6px;
  left: 6px;
  -webkit-border-radius: 40px;
  -moz-border-radius: 40px;
  border-radius: 40px;
  background: rgba(255, 255, 255, 0.25);
}
input[type="range"] {
  -webkit-appearance: none;
  background-color: black;
  height: 2px;
}
input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  position: relative;
  top: 0px;
  z-index: 1;
  width: 11px;
  height: 11px;
  cursor: pointer;
  -webkit-box-shadow: 0px 6px 5px 0px rgba(0, 0, 0, 0.6);
  -moz-box-shadow: 0px 6px 5px 0px rgba(0, 0, 0, 0.6);
  box-shadow: 0px 6px 5px 0px rgba(0, 0, 0, 0.6);
  -webkit-border-radius: 40px;
  -moz-border-radius: 40px;
  border-radius: 40px;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ebf1f6), color-stop(50%, #abd3ee), color-stop(51%, #89c3eb), color-stop(100%, #d5ebfb));
}
input[type="range"]:hover ~ #rangevalue,
input[type="range"]:active ~ #rangevalue {
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: alpha(opacity=100);
  opacity: 1;
  top: -75px;
}
/* Tool Tip */

#rangevalue {
  color: white;
  font-size: 10px;
  text-align: center;
  font-family: Arial, sans-serif;
  display: block;
  color: #fff;
  margin: 20px 0;
  position: relative;
  left: 44.5%;
  padding: 6px 12px;
  border: 1px solid black;
  -webkit-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0, 0, 0, 0.4);
  -moz-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0, 0, 0, 0.4);
  box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0, 0, 0, 0.4);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #222931), color-stop(100%, #181D21));
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  width: 18px;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: alpha(opacity=0);
  opacity: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
  top: -95px;
}
input[type="range"]:focus {
  outline: none;
}

</style>
<body>
<?php require('header.php');?>

	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="index.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Promotion</a></li>
					</ul>
				</div>

				<!-- Sidebar -->

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Categorie du produit</h5>
						</div>
						<ul class="sidebar_categories">
						<form action="" method="post">
						<li><button type="submit" name="search_type" value="men" style="background:none; border:none;" ><a >Pour L'homme</a></button></li>
						</form ><form action="" method="post">
						<li><button type="submit" name="search_type" value="women" style="background:none; border:none;" ><a >Pour La femme</a></button></li>
						</form ><form action="" method="post">
						<li><button type="submit" name="search_type" value="accessoire" style="background:none; border:none;" ><a >Les Accessoire</a></button></li>
						</form ><form action="" method="post">
						<li><button type="submit" name="search_type" value="cuisine" style="background:none; border:none;" ><a >Pour La cuisine</a></button></li>
					</form >
						</ul>
					</div>

					<!-- Price Range Filtering -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Spécifier votre recherche :</h5>
						</div>
						<p>
						<div class="form">
  <form method="post">
    <div class="range1">
	<div id="slider">
    <label for="range" class="label"> </label>
	<input type="range" class="bar" id="rangeinput" name="product_price" min="0" max="2500"   value="0">
	<span class="highlight"></span>
	<output for="range1" class="output2"></output>
	</div>
	<input type="text" placeholder="le nom du produit" style="font-size:16px" class="form-control" name="product_name" id="">
	<br>
	</div>
	<button type="submit" style="width:185px; font-size: 15px;color:white;" name="filtrer" class="btn btn-info ">filtrer </button>
   
  </form>

</div>
<script>$("[name=range]").on("change", function() {
    $("[for=range]").val(this.value +".00  DH" );
    }).trigger("change");

    $("[name=product_price]").on("change", function() {
    $("[for=range1]").val(this.value +".00  DH" );
    }).trigger("change");

    $("[name=range2]").on("change", function() {
    $("[for=range2]").val(this.value +".00  DH" );
    }).trigger("change");</script>


							
						</p>
						
						
					</div>
						<script>
						
						</script>
					<!-- Sizes -->
					

					<!-- Color -->

				</div>

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Default Sorting</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
											</ul>
										</li>
										<li>
											<span>Show</span>
											<span class="num_sorting_text">6</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>6</span></li>
												<li class="num_sorting_btn"><span>12</span></li>
												<li class="num_sorting_btn"><span>24</span></li>
											</ul>
										</li>
									</ul>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

								<!-- Product Grid -->
								
								

								<div class="product-grid">

									<!-- Product 1 -->
									<?php 
									
									if(isset($_SESSION["search"]))
									{
										if($_SESSION["search"]==NULL)
										{
											$reponse=$conn->query("SELECT * FROM produit ");
										}
										else
										{
											$produit=$_SESSION["search"];
											$reponse=$conn->query("SELECT * FROM produit WHERE libelle='$produit' OR libelle='%$produit%' ");
									
										}
									}
									else
									{ $reponse=$conn->query("SELECT * FROM produit "); }
									if($_SESSION['product_price']!=0 || $_SESSION['product_name']!=NULL )
									{ 
										
										if($_SESSION['product_price']==0) 
										{
											
											$product_name=$_SESSION["product_name"];
											$reponse=$conn->query("SELECT * FROM produit WHERE libelle='$product_name' OR libelle='%$product_name%'  "); 
										
										
										}
										
										if($_SESSION['product_name']==NULL)
										{
											$product_price=$_SESSION['product_price'];
											$reponse=$conn->query("SELECT * FROM produit WHERE  produit.prix <= '$product_price' "); 
										}
										
										if($_SESSION['product_price']!=0 && $_SESSION['product_name']!=NULL )
										{
											$product_name=$_SESSION['product_name'];
											$product_price=$_SESSION['product_price'];
											$reponse=$conn->query("SELECT * FROM produit WHERE libelle='$product_name' OR libelle='%$product_name%' AND prix <= '$product_price' "); 
										}
									}
									if(isset($_SESSION["search_type"]))
									{
										$search_type=$_SESSION['search_type'];
										$reponse=$conn->query("SELECT * FROM produit WHERE  type= '$search_type' ");
									}
									
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
											<h6 class="product_name"><a href="single.php/<?php  echo $donnees['id'] ?>"><h4><?php  echo $donnees['libelle'] ?></h4><?php  echo $donnees['description'] ?></a></h6>
											<div class="product_price"><?php  $f=$donnees['prix']; $p=$donnees['pourcentage']; echo $f-$f*$p/100 ;?> DH<span><?php if($donnees['pourcentage']>0){  echo $donnees['prix'] . "DH" ;}  ?> </span></div>
										</div>
									</div>
									<div class="red_button add_to_cart_button"><a href="single.php/produit=<?php  echo $donnees['id'] ?>">vender</a></div>
								</div>
		
								<!-- Product 1 -->
								<?php } unset($_SESSION['search_type']); ?>

								</div>

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_bottom clearfix">
									<ul class="product_sorting">
										<li>
											<span>Show:</span>
											<span class="num_sorting_text">04</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>01</span></li>
												<li class="num_sorting_btn"><span>02</span></li>
												<li class="num_sorting_btn"><span>03</span></li>
												<li class="num_sorting_btn"><span>04</span></li>
											</ul>
										</li>
									</ul>
									
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

							</div>
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
					<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
						<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
						<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
					</div>
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
							<li><a href="contact.php">CONTACTEZ NOUS </a></li>
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
						<div class="cr">©2020 All Rights Reserverd. </div>
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
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/categories_custom.js"></script>
</body>

</html>
