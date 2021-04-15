<?php
$title = "Products | Candylake";
$page = "products";
include 'head.php';
include 'product-modal.php';
?>

<style media="screen">
@media (min-width: 769px) {
	.modal-dialog {
		width: 830px;
	}
}
.modal-btn {
	padding-right: 40px;
	text-align: center;
}
.modal-images img {
	transition-duration: 2s;
}
.modal-images img:hover {
	transform: scale(1.1);
}

</style>

<body class="page-menu">

	<?php include 'header.php'; ?>

	<div id="main-content" class="main-content">
		<div class="page-header">
			<figure class="post-thumbnail">
				<img alt="" src="images/menus/menus.jpg">
			</figure>
			<h1 class="title"><span class="line-title">Products<i class="fa">&#xf111;</i></span></h1>
		</div>
		<div class="page-content">
			<div id="menus" class="menus">
				<div class="container">
					<div id="filter" class="filter">
						<button class="button" data-filter=".candies">Candies</button>
						<button class="button" data-filter=".toffees">Toffees</button>
						<button class="button" data-filter=".wafers">Wafers</button>
						<button class="button" data-filter=".lollipop">Lollipop</button>
					</div>
					<div class="menus-inner">

						<!-- ************************start toffees************************ -->

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/coco_crush1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Coco Crush</h1>
										<p>Crunchy & creamy candy made with real pulp</p>
										<a data-toggle="modal" data-target="#cocoCrushModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>


						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/goopy1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Goopy</h1>
										<p>A real fizzy candy</p>
										<a data-toggle="modal" data-target="#goopyModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/bombzz1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Bombzz</h1>
										<p>A real fizzy candy</p>
										<a data-toggle="modal" data-target="#bombzzModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/peanut1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Peanut</h1>
										<p>Crunchy & creamy candy made with real peanut</p>
										<a data-toggle="modal" data-target="#peanutModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/milkies1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Milkies</h1>
										<p>The invigoratin taste of rich milk & caramel</p>
										<a data-toggle="modal" data-target="#milkiesModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/coffee_gold1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Coffee Gold</h1>
										<p>The invigoratin taste of Coffee & milk made with real coffee beans</p>
										<a data-toggle="modal" data-target="#coffeeGoldModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/coconut.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Coconut Candy</h1>
										<p>Natural taste of coconut crush</p>
										<a data-toggle="modal" data-target="#coconutModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/gold_paan.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Gold Paan</h1>
										<p>Traditional taste of paan with real coco pulp, coriander seed & rose petals</p>
										<a data-toggle="modal" data-target="#paanModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/elaichi1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Elaichi Shrikhand</h1>
										<p>Unique blend of cardamom & shrikhand</p>
										<a data-toggle="modal" data-target="#elaichiModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/tamli.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Tamli</h1>
										<p>Tangy taste of natural imli</p>
										<a data-toggle="modal" data-target="#tamliModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/strawberry1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Strawberry</h1>
										<p>Tempting taste of strawberry</p>
										<a data-toggle="modal" data-target="#strawberryModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/kesar1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Kesar Milk</h1>
										<p>Master blend of saffron & milk</p>
										<a data-toggle="modal" data-target="#kesarModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/blueberry1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Blueberry</h1>
										<p>Savory taste of blueberry & milk cream</p>
										<a data-toggle="modal" data-target="#blueberryModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/creamz.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Creamz</h1>
										<p>Delicious & smooth center filled candy</p>
										<a data-toggle="modal" data-target="#creamzModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/bonbon-candy.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Bonbon Candy</h1>
										<p>Goodness of tasty & rich coco</p>
										<a data-toggle="modal" data-target="#bonbonCandyModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/coffee-shot.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Coffee Shots</h1>
										<p>Goodness of tasty & rich coco</p>
										<a data-toggle="modal" data-target="#coffeeShotsModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/do-mango.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Do Mango</h1>
										<p>The invigoratin taste of sweet & sour mango</p>
										<a data-toggle="modal" data-target="#doMangoModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/mangoos.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Mangoos</h1>
										<p>Tangy flavour of natural mangoes</p>
										<a data-toggle="modal" data-target="#mangoosModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/milk-gold.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Milk Gold</h1>
										<p>Richness of natural & creamy milk</p>
										<a data-toggle="modal" data-target="#milkGoldModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 candies">
							<div class="column" id="caption">
								<img src="images/products/catalogue/mr-bon1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Mr. Bon</h1>
										<p>Soft centered candy made with pure desi ghee</p>
										<a data-toggle="modal" data-target="#mrBonModal"><button class="btn-buy">Buy Now</button></a>
									</span>
								</div>
							</div>
						</div>

						<!-- ************************end candies************************ -->

						<!-- ************************start toffees************************ -->

						<div class="col-md-4 toffees">
							<div class="column" id="caption">
								<img src="images/products/catalogue/blue_eclair.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Blue Eclairs</h1>
										<p>Rich milk chocolate center with soft caramel exterior</p>
										<a data-toggle="modal" data-target="#blueEclairsModal"><button class="btn-buy">View More</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 toffees">
							<div class="column" id="caption">
								<img src="images/products/catalogue/dark_eclair.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Dark Eclairs</h1>
										<p>Fine dark chocolate center filled toffee</p>
										<a data-toggle="modal" data-target="#darkEclairsModal"><button class="btn-buy">View More</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 toffees">
							<div class="column" id="caption">
								<img src="images/products/catalogue/milklair1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Milklair</h1>
										<p>Fine dark chocolate center filled toffee</p>
										<a data-toggle="modal" data-target="#darkEclairsModal"><button class="btn-buy">View More</button></a>
									</span>
								</div>
							</div>
						</div>


						<!-- ************************end toffees************************ -->

						<!-- ************************start wafers************************ -->
						<div class="col-md-4 wafers">
							<div class="column" id="caption">
								<img src="images/products/catalogue/bonbon1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Bon Bon</h1>
										<p>Yummy & appetizig bon bon</p>
										<a data-toggle="modal" data-target="#bonbonWaferModal"><button class="btn-buy">View More</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 wafers">
							<div class="column" id="caption">
								<img src="images/products/catalogue/bitbite1.png" alt="Candylake Products" class="item-image">
								<div class="overlay">
									<span class="text">
										<h1>Bit Bite</h1>
										<p>Crunchy twist in every bite</p>
										<a data-toggle="modal" data-target="#bitbiteModal"><button class="btn-buy">View More</button></a>
									</span>
								</div>
							</div>
						</div>

						<div class="col-md-4 wafers">
							<div class="product_image">
								<img src="images/products/catalogue/bitbite1.png" alt="">
							</div>
							<div class="product_details">
								<h1 class="title editable">Bit Bite</h1>
								<h4 class="price editable">This is a product description.</h4>
								<div class="action">
									<a class="button" data-toggle="modal" data-target="#bitbiteModal" href="#">View More</a>
								</div>
							</div>
						</div>
						<!-- ************************end wafers************************ -->




					</div>
				</div>
			</div>
		</div>

		<?php include 'footer.php'; ?>
