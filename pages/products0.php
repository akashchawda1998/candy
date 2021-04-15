<?php
$title = "Products | Candylake";
$page = "products";
include 'head.php';
include 'product-modal.php';
?>

<style media="screen">
@media (min-width: 768px) {
	.modal-dialog {
		width: 900px;
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
				<img alt="" src="images/product-banner.jpg">
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

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/bombzz1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Bombzz</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#bombzzModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/goopy1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Goopy</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#goopyModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/coco_crush1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Coco Crush</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#cocoCrushModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/peanut1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Peanut</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#peanutModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/milkies1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Milkies</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#milkiesModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/coffee_gold1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Coffee Gold</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#coffeeGoldModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/gold_paan.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Gold Paan</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#paanModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/elaichi1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Elaichi Shrikhand</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#elaichiModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/tamli.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Tamli</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#tamliModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/strawberry1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Strawberry</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#strawberryModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/kesar1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Kesar Milk</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#kesarModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/blueberry1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Blueberry</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#blueberryModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/creamz.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Creamz</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#creamzModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/bonbon-candy.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Bonbon Candy</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#bonbonCandyModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/coffee-shot.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Coffee Shots</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#coffeeShotsModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/do-mango.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Do Mango</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#doMangoModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/mangoos.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Mangoos</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#mangoosModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/milk-gold.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Milk Gold</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#milkGoldModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item candies">
								<div class="product_image">
										<img src="images/products/catalogue/mr-bon1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Mr. Bon</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#mrBonModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<!-- ************************end candies************************ -->

							<!-- ************************start toffees************************ -->
							<div class="product_grid column_3 menu-item toffees">
								<div class="product_image">
										<img src="images/products/catalogue/blue_eclair.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Blue Eclairs</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#blueEclairsModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item toffees">
								<div class="product_image">
										<img src="images/products/catalogue/dark_eclair.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Dark Eclairs</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#darkEclairsModal" href="#">View More</a>
									</div>
								</div>
							</div>

							<div class="product_grid column_3 menu-item toffees">
								<div class="product_image">
										<img src="images/products/catalogue/milklair1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Milklair</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#milklairModal" href="#">View More</a>
									</div>
								</div>
							</div>
							<!-- ************************end toffees************************ -->

							<!-- ************************start wafers************************ -->
							<div class="product_grid column_3 menu-item wafers">
								<div class="product_image">
										<img src="images/products/catalogue/bonbon1.png" alt="">
								</div>
								<div class="product_details">
									<h1 class="title editable">Bon Bon</h1>
									<h4 class="price editable">This is a product description.</h4>
									<div class="action">
										<a class="button" data-toggle="modal" data-target="#bonbonWaferModal" href="#">View More</a>
									</div>
								</div>
							</div>
							<div class="product_grid column_3 menu-item wafers">
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
