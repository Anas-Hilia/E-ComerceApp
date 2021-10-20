

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">livraison gratuite sur toutes les commandes de plus de 50 DH</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								
								
								<li class="account">
									<a href="#">
										Mon compte
										<i class="fa fa-angle-down"></i>
										
									</a>
									<ul class="account_selection" style="width:200px;left:-30px"> 
									<?php if(isset($_SESSION["id"])){ ?>
										<li><a href="#"><form action="" method="post">
										<button type="submit"  name="deconnect" class="btn btn-link"><h6><i class="fa fa-sign-out" aria-hidden="true"></i> Se deconnecter</h6> </button>
										</form></a></li>
									<?php }  else { ?>
										<li><a href="authentification.php"><i class="fa fa-sign-in" aria-hidden="true"> </i> Se Connecter</a></li>
										<li><a href="creer_compte.php"><i class="fa fa-user-plus" aria-hidden="true"></i>S'inscrire</a></li>
										<?php } ?>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div style="position:absolute; left:20px; " class="logo_container" >
							<a href="index.php">SUPER<span>SHOP</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index.php">home</a></li>
								</li>	
								<li><a href="categories.php">categories</a></li>
								<li><a href="promotion.php">promotion</a></li>
								
								
								<li><a href="contact.php">contact</a></li>
							</ul>
							<ul class="navbar_user">
								<li>
									
									
										
					<form method="post" class="form-inline ml-auto">
     					<div class="md-form my-0">
       						 <input class="form-control" name="search" style="width:200px; font-size:17px"    type="text" placeholder="chercher un produit...." aria-label="Search">
     				 	</div>
   					   <button  name="submit" class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">rechercher</button>
    				</form>
										
								
								
								</li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">6</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				
				
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="index.php">home</a></li>
					
				<li class="menu_item has-children">
						<a href="#">
							Hover Style
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#">Black</a></li>
							<li><a href="#">Gradient</a></li>
						</ul>
					</li>
				<li class="menu_item"><a href="categories.php">CATEGORIES</a></li>
				<li class="menu_item"><a href="promotion.php">PROMOTION</a></li>
					
						
				<li class="menu_item"><a href="CONTACT.php">CONTACT</a></li>
			</ul>
		</div>
    </div>
    <div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				
				
				<li class="menu_item has-children">
					<a href="#">
						Mon compte
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="index.php">HOME</a></li>
					
				
				<li class="menu_item"><a href="CATEGORIES.PHP">CATEGORIES</a></li>
				<li class="menu_item"><a href="PROMOTION.php">PROMOTION</a></li>
				
				<li class="menu_item"><a href="CONTACT.php">CONTACT</a></li>
			</ul>
		</div>
	</div>
		

	</header>