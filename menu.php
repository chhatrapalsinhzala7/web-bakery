<?php
session_start();
require('./php/dbconfig.php');

if (isset($_POST["atc"])) {
	if (isset($_SESSION["cart"])) {
		if (isset($_SESSION["cart"][$_POST["id"]])) {
			$_SESSION["cart"][$_POST["id"]]["quantity"]++;
			print_r($_SESSION["cart"]);
		} else {
			$_SESSION["cart"][$_POST["id"]] = array("name" => $_POST["pname"], "price" => $_POST["price"], "quantity" => 1, "image" => $_POST["image"], "id" => $_POST["id"]);
			print_r($_SESSION["cart"]);
		}
	} else {
		$_SESSION["cart"] = array($_POST["id"] => array("name" => $_POST["pname"], "price" => $_POST["price"], "quantity" => 1, "image" => $_POST["image"], "id" => $_POST["id"]));
		print_r($_SESSION["cart"]);
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bake n' Take</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Bake N' Take</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
					<li class="nav-item active"><a href="menu.html" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
					<li class="nav-item dropdown">
					</li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
					<li class="nav-item cart class=" icon icon-person"><a href="account.html" class="nav-link"><span class="icon icon-person"></span><span class=" d-flex justify-content-center align-items-center">

					<li class="nav-item cart"><a href="cart.html" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center">
								<small><?php
										if (isset($_SESSION["cart"])) {
											echo count($_SESSION["cart"]);
										} else {
											echo "0";
										}
										?></small>
							</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="home-slider owl-carousel">

		<div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center">

					<div class="col-md-7 col-sm-12 text-center ftco-animate">
						<h1 class="mb-3 mt-5 bread">Our Menu</h1>
						<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="ftco-intro">
		<div class="container-wrap">
			<div class="wrap d-md-flex align-items-xl-end">
				<div class="info">
					<div class="row no-gutters">
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon"><span class="icon-phone"></span></div>
							<div class="text">
								<h3>(+91)8200771779</h3>
								<p>Contact us on our helpline number for any help.</p>
							</div>
						</div>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon"><span class="icon-my_location"></span></div>
							<div class="text">
								<h3>A-25 sarthi Avenue</h3>
								<p> Ramdevnager Cross Road,Sattalite,
									Ahemdabad,Gujrat</p>
							</div>
						</div>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon"><span class="icon-clock-o"></span></div>
							<div class="text">
								<h3>Open Monday-Sunday</h3>
								<p>8:00am - 9:00pm</p>
							</div>
						</div>
					</div>
				</div>
				<div class="book p-4">
					<h3>Schedule a Meeting</h3>
					<form action="#" class="appointment-form">
						<div class="d-md-flex">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="First Name">
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Last Name">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="ion-md-calendar"></span></div>
									<input type="text" class="form-control appointment_date" placeholder="Date">
								</div>
							</div>
							<div class="form-group ml-md-4">
								<div class="input-wrap">
									<div class="icon"><span class="ion-ios-clock"></span></div>
									<input type="text" class="form-control appointment_time" placeholder="Time">
								</div>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Phone">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
							</div>
							<div class="form-group ml-md-4">
								<input type="submit" value="Send" class="btn btn-white py-3 px-4">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-menu mb-5 pb-5">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Our Products</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
			</div>
			<div class="row d-md-flex">
				<div class="col-lg-12 ftco-animate p-md-5">
					<div class="row">
						<div class="col-md-12 nav-link-wrap mb-5">
							<div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">CAKES</a>

								<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">PASTRY</a>

								<a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">BREADS</a>
							</div>
						</div>
						<div class="col-md-12 d-flex align-items-center">

							<div class="tab-content ftco-animate" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
									<div class="row">
										<?php

										$sql = "SELECT * FROM Products";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											// output data of each row
											while ($row = $result->fetch_assoc()) {
										?>

												<div class="col-md-4 text-center">
													<form class="menu-wrap" method="post">
														<a href="#" class="menu-img img mb-4" style="background-image: url(images/<?php echo $row["Image"] ?>);"></a>
														<div class="text">
															<input type="hidden" value="<?php echo $row["Id"]; ?>" name="id">
															<input type="hidden" value="<?php echo $row["ProductName"]; ?>" name="pname">
															<input type="hidden" value="<?php echo $row["Price"]; ?>" name="price">
															<input type="hidden" value="<?php echo $row["Image"]; ?>" name="image">
															<h3><a href="#"><?php echo $row["ProductName"]; ?></a></h3>
															<p><?php echo $row["Description"]; ?></p>
															<p class="price"><span>₹<?php echo $row["Price"]; ?></span></p>
															<p><input type="submit" class="btn btn-primary btn-outline-primary" name="atc" value="Add To Cart"></p>
														</div>
													</form>
												</div>
										<?php
											}
										}
										?>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/Apple-Cake.jpg);"></a>
												<div class="text">
													<h3><a href="#">Apple-Cake</a></h3>
													<p>Apple pies and apple cake are one of the most famous desserts that are absolutely delicious. They are usually used both as an after-meal dessert and appetizer dessert.</p>
													<p class="price"><span>₹690</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/Bourbon-Biscuit-Cake.jpg);"></a>
												<div class="text">
													<h3><a href="#">Bourbon-Biscuit-Cake</a></h3>
													<p>Bourbons are chocolate cream biscuits that are loved by so many people.The flavour of bourbon has come a long way and it still holds a special place in people’s kitchen.
													</p>
													<p class="price"><span>₹850</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/Banana-Cake.jpg);"></a>
												<div class="text">
													<h3><a href="#">Banana-Cake</a></h3>
													<p>Bananas are all season fruit that is a part of every household,But have you ever tried a banana cake?It is very tasty and healthy.Banana cakes taste the best.</p>
													<p class="price"><span>₹900</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/Ferrero-Rocher-Cake.jpg);"></a>
												<div class="text">
													<h3><a href="#">Ferrero-Rocher-Cake</a></h3>
													<p>If you are a Ferrero Rocher lover, then Ferrero rocher cake is a must-have for you.Find the most delicious Ferrero Rocher cake.</p>
													<p class="price"><span>₹1099</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/Japanese-Cake.jpg);"></a>
												<div class="text">
													<h3><a href="#">Japanese-Cake</a></h3>
													<p>Japanese cakes are basically cheesecakes that are super famous in Japan.The texture is souffle-like.It is a treat that will make you absolutely speechless.</p>
													<p class="price"><span>₹650</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/Oreo-Cake.jpg);"></a>
												<div class="text">
													<h3><a href="#">Oreo-Cake</a></h3>
													<p>Oreos have mastered every form of dessert.Oreos also taste absolutely delicious in the form of a cake.The fusion of Oreos and Chocolate are just a amazing.</p>
													<p class="price"><span>₹899</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<!-- aa experiment mate che  -->

										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/Parle-G-Cake.jpg);"></a>
												<div class="text">
													<h3><a href="#">Parle-G-Cake</a></h3>
													<p>Parle-G is not just a biscuit but it is a nostalgic feeling for all Indians. Parle-G is the only biscuit that has been a constant in almost all households. If you are a parle g lover too, then check out the yummy parle g cake that will take you back to your childhood in just one bite. Hurry up and try them now!</p>
													<p class="price"><span>₹550</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/White-Forest-Cake.jpg);"></a>
												<div class="text">
													<h3><a href="#">White-Forest-Cake</a></h3>
													<p>Here is a treat for all the white chocolate lovers, HalfCute’s very famous white forest cake. This luscious cake is made of layers of chocolate cake soaked in cherry-based syrup and is topped with cherries, cream frosting, and white chocolate flakes. You can now enjoy this beautiful cake at your home with your loved ones. </p>
													<p class="price"><span>₹650</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/Almond-Cake.jpg);"></a>
												<div class="text">
													<h3><a href="#">Almond-Cake</a></h3>
													<p>Almonds are one of the healthiest nuts. It is mainly known for providing vitamin E. If you have kids who always crave sweets, desserts, and cakes, you would be worried about their health. But what if the cake is made healthy? Taste the ever delish almond cake that is not only a nummy treat but also healthy for the kids to enjoy.</p>
													<p class="price"><span>₹1100</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/Butterscotch-Cake.jpg);"></a>
												<div class="text">
													<h3><a href="#">Butterscotch-Cake</a></h3>
													<p>Butterscotch is a flavour that is loved by every sweet lover. The perfect blend of brown sugar and butter results in the flavorsome taste of butterscotch. It is best paired with caramel and the combination has always been a super hit. Check out the flavoursome butterscotch cake that is an amazing satisfaction for people craving sweets.</p>
													<p class="price"><span>₹600</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/Carrot-Cake.jpg);"></a>
												<div class="text">
													<h3><a href="#">Carrot-Cake</a></h3>
													<p>Carrot cake is a healthy and flavoursome dessert that can be enjoyed with family members after a heavy dinner.Carrot cake is made of mixture that contains carrots mixed into the batter. Most modern carrot cake recipes have a white cream cheese frosting. These cakes are further topped with nuts and sauces to make it absolutely delicious.</p>
													<p class="price"><span>₹500</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/Nutella-Cake.jpg);"></a>
												<div class="text">
													<h3><a href="#">Nutella-Cake</a></h3>
													<p>Nutella, the game changer for all chocolate lovers, is one of the most delicious forms of chocolate sauce. The rich chocolatey flavour of Nutella tastes so good on a cake. Check out the most delicious Nutella cake for your next special get-to-gather. If you are having a birthday party, the Nutella cake would be a perfect addition to the surprise.</p>
													<p class="price"><span>₹750</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>

										<!----------------------------------------- aa experiment mate no end che --------------------------------->
									</div>
								</div>


								<!--------------------------------- AA pastery mate no section che   -------------------------------------->

								<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
									<div class="row">
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/pastery1.jpg);"></a>
												<div class="text">
													<h3><a href="#">Chocolate truffle Pastry</a></h3>
													<p>This pastry is all about perfection. Made from the finest quality of chocolate, this delicious pastry proudly boasts lips-smacking chocolate covering and cherry decoration. This pastry has been given an awesome touch with the liquid chocolate cream.</p>
													<p class="price"><span>₹189</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/delish-pineapple-pastries-past0212pine-D.jpg);"></a>
												<div class="text">
													<h3><a href="#">Pineapple Pastries</a></h3>
													<p>Pineapple pastries because classic always works the best! These pineapple pastries topped with frozen pineapples and juicy maraschino cherries are sure to leave you craving for one bite after another. So, here's your favourite flavour wrapped in creamy vanilla to gratify your taste buds in the most delicious way!</p>
													<p class="price"><span>₹189</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/six-assorted-red-velvet-chocolate-and-pineapple-pastries-past2343flav-A.jpg);"></a>
												<div class="text">
													<h3><a href="#">Six Assorted Red Velvet Chocolate and Pineapple Pastries</a></h3>
													<p>Why bother getting a regular cake of just one flavor when you can get a set of six fresh assorted pastries that come in different exciting flavors? The set of six pastries has two pineapple pastries, two chocolate pastries, and two red velvet pastries.</p>
													<p class="price"><span>₹649</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/mouth-watering-red-velvet-past0163redv-D.jpg);"></a>
												<div class="text">
													<h3><a href="#">Red Velvet Pastry</a></h3>
													<p>This is a top to bottom dramatic looking pastry with its bright color of red which is sharply contrasted by a very fresh white cream frosting. This pastry can easily get you completely lost with the amazing flavor that derives when the pastry almost instantly melts in your mouth. Enjoy each bite of this scrumptious pastry.</p>
													<p class="price"><span>₹249</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/enchanting-butterscotch-pastries-past0213butt-D.jpg);"></a>
												<div class="text">
													<h3><a href="#">Butterscotch Pastries</a></h3>
													<p>Here's another classic flavour to leave you spellbound. This scrumptious butterscotch pastries with its luscious flavour is all set to entice you with its caramel shavings and delicious toppings. We bet you would swoon over the pleasing taste of your favourite flavour.</p>
													<p class="price"><span>₹149</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/red-velvet-pineapple-butterscotch-pastries-combo-past2308flav-A.jpg);"></a>
												<div class="text">
													<h3><a href="#">Red Velvet Pineapple Butterscotch Pastries Combo</a></h3>
													<p>Creamy, delicious and extremely decadent - grab this set of 6 very special dessert hamper pack for you and your special ones. Topped with soft and toothsome buttercream frosting along with fresh garnishes, this pack consists of a pair of each - red velvet, pineapple and butterscotch pastries.</p>
													<p class="price"><span>₹589</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>

										<!-- aa pastery no experiment part che   -->

										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/set-of-two-happy-birthday-pastry-past2345choc-B.jpg);"></a>
												<div class="text">
													<h3><a href="#"> Set of Two Happy Birthday Pastry</a></h3>
													<p>Pastries are the new birthday delights. Celebrate the special day of your special someone with a slice of this heavenly delicious chocolate pastry. Baked with love to make your special moment extra special, order this set of two chocolate pastry and send it online to your loved ones.</p>
													<p class="price"><span>₹309</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/six-pineapple-chocolate-and-red-velvet-anniversary-pastries-past2341flav-A.jpg);"></a>
												<div class="text">
													<h3><a href="#">Six Pineapple Chocolate and Red Velvet Anniversary Pastries</a></h3>
													<p>Melt your lover's hert into tears as you choose to commemorate your anniversary by gifting this delish assortment of annniversary pastries. There comes two each kinds of pineapple, red velvet and chocolate pastries to help you convey your heartfelt anniversary wishes sweetly.</p>
													<p class="price"><span>₹649</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/drool-worthy-chocolate-and-butterscotch-pateries-past2344flav-A.jpg);"></a>
												<div class="text">
													<h3><a href="#"> Drool Worthy Chocolate and Butterscotch Pastries</a></h3>
													<p>How about binge-eating fresh and delicious pastries in delightful flavours like Butterscotch and Chocolate Truffle? Sounds like a plan right? Place an order for this set of four pastries right away and enjoy the blissful taste. Give a sweet surprise to your loved ones as you send them these assorted pastries.</p>
													<p class="price"><span>₹449</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/3-in-1-pack-of-red-velvet-black-and-white-forest-pastries-past2309flav-A.jpg);"></a>
												<div class="text">
													<h3><a href="#">3 In 1 Pack Of Red Velvet Black And White Forest Pastries</a></h3>
													<p>If you are one of those who are always confused about which dessert to eat? We are here to solve the issue by giving everything in one! With Bakingo's tempting pastry pack, you don't have to choose as we give you two ravishing red velvet, two palatebale white-forest and two licious black forest pastries.</p>
													<p class="price"><span>₹589</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/assorted-velvet-pineapple-truffle-pastries-past2307flav-A.jpg);"></a>
												<div class="text">
													<h3><a href="#">Assorted Velvet Pineapple Truffle Pastries</a></h3>
													<p>Three is always better than one. And this pastry trio seems like a great choice for sweet self indulgence as well as for gifting. It consists scrummy red velvet pastries, pineapple pastries and chocolate truffle pastries to leave your tastebuds tantalised to the core.</p>
													<p class="price"><span>₹589</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/luscious-irish-cream-pastries-past0215exot-A.jpg);"></a>
												<div class="text">
													<h3><a href="#">Irish Cream Pastries</a></h3>
													<p>The incredibly delicious flavour is here to give your tastebuds a treat of all times. These light and fluffy Irish cream pastries have subtle flavours with an appealing blanket of Irish cream and chocolate syrup and are going to be a perfect finale to your meals!</p>
													<p class="price"><span>₹219</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/stellar-chocolate-pastries-past0204choc-A.jpg);"></a>
												<div class="text">
													<h3><a href="#">Chocolate Mud Pastries</a></h3>
													<p>A shout out to all the chocolate lovers for here's a treat to satiate your cravings to the utmost. Pastries whether you wish to give a refreshing start to your meal or a perfect end to the binge. These chocolate mud laced treats are sure to become a delicious addition to your meal and create a sweet statement on all occasions.</p>
													<p class="price"><span>₹249</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>

										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/scrumptious-kit-kat-pastries-past0211choc-D.jpg);"></a>
												<div class="text">
													<h3><a href="#">Kit Kat Pastries</a></h3>
													<p>Bring out the kid in you with Kit Kat pastries and feed your inner child with the right kind of sweetness it had been missing for so long. With richly whipped cream swirled over the cake coming along with Kit Kat bar on the top shall give a pleasurable break from your mundane routine.</p>
													<p class="price"><span>₹349</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>

										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/choco-chip-truffle-n-kit-kat-delight-pastries-past2310flav-A.jpg);"></a>
												<div class="text">
													<h3><a href="#">Choco Chip Truffle N Kit Kat Delight Pastries</a></h3>
													<p>Make the best impressions on your sweet tooth loved ones on special occasions with a lip-smacking chocolate chip truffle Kit Kat pastries. These heart-warming gift comes in a salivating arrangement in three parts that has two pastries decorated with Chocolate chips, truffle, and Kit Kat Bars.</p>
													<p class="price"><span>₹679</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>

										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/delectable-oreo-pastries-past0206oreo-A.jpg);"></a>
												<div class="text">
													<h3><a href="#">Oreo Pastries</a></h3>
													<p>Fall in love with this scrumptious pastries that has an icing of light and fluffy cream along with the crunchy Oreo toppings to turn a your usual day into an enjoyable one. These crunchy chocolate pastries with the topping of Oreo is sure to be in everyone's favourite list.</p>
													<p class="price"><span>₹249</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/ferrero-rocher-chocolate-truffle-past0160choc-A.jpg);"></a>
												<div class="text">
													<h3><a href="#">Ferreo Rocher-Chocolate Truffle pastry</a></h3>
													<p>The Ferrero Rocher chocolate truffle pastry is as decadent as the name implies. The luscious and delicate layers of rich chocolate, truffle ganache has been adoringly soaked with melting chocolate syrup.. The best part of this pastry is that it comes with the best delicious chocolate-Ferrero Rocher, on top of it.</p>
													<p class="price"><span>₹499</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/refreshing-coffee-pastries-past0205coff-A.jpg);"></a>
												<div class="text">
													<h3><a href="#"> Coffee Pastries</a></h3>
													<p>Coffee dusted pastries for those who can never get over their addiction of chocolates! Drool-worthy pastries is here to add a dose of freshness to your mundane routine. These decadent coffee flavours are sure give you a taste of luxury in each bite.</p>
													<p class="price"><span>₹319</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>

										<!-- aa pastery no experiment part end che   -->
									</div>
								</div>
								<!--------------------------------- AA pastery mate no end  section che   --------------------------------->

								<!----------------------------- AA bread mate no start section che   -------------------------------------->
								<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
									<div class="row">
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-1.jpg);"></a>
												<div class="text">
													<h3><a href="#">Hot Cake Honey</a></h3>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
													<p class="price"><span>₹2.90</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-2.jpg);"></a>
												<div class="text">
													<h3><a href="#">Hot Cake Honey</a></h3>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
													<p class="price"><span>₹2.90</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-3.jpg);"></a>
												<div class="text">
													<h3><a href="#">Hot Cake Honey</a></h3>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
													<p class="price"><span>₹2.90</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-4.jpg);"></a>
												<div class="text">
													<h3><a href="#">Hot Cake Honey</a></h3>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
													<p class="price"><span>₹2.90</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-5.jpg);"></a>
												<div class="text">
													<h3><a href="#">Hot Cake Honey</a></h3>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
													<p class="price"><span>₹2.90</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-6.jpg);"></a>
												<div class="text">
													<h3><a href="#">Hot Cake Honey</a></h3>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
													<p class="price"><span>₹2.90</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<!-- aa bread no experiment start part che   -->

										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-6.jpg);"></a>
												<div class="text">
													<h3><a href="#">Hot Cake Honey</a></h3>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
													<p class="price"><span>₹2.90</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-6.jpg);"></a>
												<div class="text">
													<h3><a href="#">Hot Cake Honey</a></h3>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
													<p class="price"><span>₹2.90</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-6.jpg);"></a>
												<div class="text">
													<h3><a href="#">Hot Cake Honey</a></h3>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
													<p class="price"><span>₹2.90</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-6.jpg);"></a>
												<div class="text">
													<h3><a href="#">Hot Cake Honey</a></h3>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
													<p class="price"><span>₹2.90</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-6.jpg);"></a>
												<div class="text">
													<h3><a href="#">Hot Cake Honey</a></h3>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
													<p class="price"><span>₹2.90</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-4 text-center">
											<div class="menu-wrap">
												<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-6.jpg);"></a>
												<div class="text">
													<h3><a href="#">Hot Cake Honey</a></h3>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
													<p class="price"><span>₹2.90</span></p>
													<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
												</div>
											</div>
										</div>


										<!-- aa bread no experiment end part che   -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-section img">
		<div class="overlay"></div>
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-3 col-md-6 mb-5 mb-md-5">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">About Us</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-5 mb-md-5">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Recent Blog</h2>
						<div class="block-21 mb-4 d-flex">
							<a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
							<div class="text">
								<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
								<div class="meta">
									<div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
									<div><a href="#"><span class="icon-person"></span> Admin</a></div>
									<div><a href="#"><span class="icon-chat"></span> 19</a></div>
								</div>
							</div>
						</div>
						<div class="block-21 mb-4 d-flex">
							<a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
							<div class="text">
								<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
								<div class="meta">
									<div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
									<div><a href="#"><span class="icon-person"></span> Admin</a></div>
									<div><a href="#"><span class="icon-chat"></span> 19</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 mb-5 mb-md-5">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Services</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Cooked</a></li>
							<li><a href="#" class="py-2 d-block">Deliver</a></li>
							<li><a href="#" class="py-2 d-block">Quality Foods</a></li>
							<li><a href="#" class="py-2 d-block">Mixed</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-5 mb-md-5">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>