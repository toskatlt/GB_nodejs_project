<?php 

/* HEADER */ include ("modules/header.php");
/* MENU */ include ("modules/menu.php");
/* BREADCREMBS */ include ("modules/breadcrumbs.php"); 

?>
	<div class="product">
		<div class="container product-flex">
			<div class="sidebar">
				<div class="details-block"></div>
				<details class="details">
					<summary class='summ'>Category</summary>
					<p class="p-summary"><a href="product.php" class="a-summary">Accessories</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Bags</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Denim</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Hoodies & Sweatshirts</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Jackets & Coats</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Pants</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Polos</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Shirts</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Shoes</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Shorts</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Sweaters & Knits</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">T-Shirts</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Tanks</a></p>
				</details>
				<div class="details-block"></div>
				<details class="details">
					<summary class='summ'>BRAND</summary>
					<p class="p-summary"><a href="product.php" class="a-summary">Accessories</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Bags</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Denim</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Hoodies & Sweatshirts</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Jackets & Coats</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Pants</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Polos</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Shirts</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Shoes</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Shorts</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Sweaters & Knits</a></p>
				</details>
				<div class="details-block"></div>
				<details class="details">
					<summary class='summ'>dESIGNER</summary>
					<p class="p-summary"><a href="product.php" class="a-summary">Accessories</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Bags</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Denim</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Hoodies & Sweatshirts</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Jackets & Coats</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Pants</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Polos</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Shirts</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Shoes</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Shorts</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">Sweaters & Knits</a></p>
					<p class="p-summary"><a href="product.php" class="a-summary">T-Shirts</a></p>
				</details>
			</div>
			<div class="product-body">
				<div class="top-filter">
					<div class="filter-block">
						<div class="trending">
							<p class="filter-headline">Trending now</p>
							<p>
								<a href="product.php" class="filter-link">Bohemian</a><a href="product.php" class="filter-link">Floral</a><a href="product.php" class="filter-link">Lace</a>
							</p>
							<p>
								<a href="product.php" class="filter-link">Floral</a><a href="product.php" class="filter-link">Lace</a><a href="product.php" class="filter-link">Bohemian</a>
							</p>
						</div>
						<div class="size">
							<p class="filter-headline">Size</p>
							<p class="checkbox-flex">
								<span class="check-block"><input class="check" type="checkbox" id="scales-1"><label class="scales-size" for="scales-1">XXS</label></span>
								<span class="check-block"><input class="check" type="checkbox" id="scales-2"><label class="scales-size" for="scales-2">XS</label></span>
								<span class="check-block"><input class="check" type="checkbox" id="scales-3"><label class="scales-size" for="scales-3">S</label></span>	
								<span class="check-block"><input class="check" type="checkbox" id="scales-4"><label class="scales-size" for="scales-4">M</label></span>
								<span class="check-block"><input class="check" type="checkbox" id="scales-5"><label class="scales-size" for="scales-5">L</label></span>
								<span class="check-block"><input class="check" type="checkbox" id="scales-6"><label class="scales-size" for="scales-6">XL</label></span>
								<span class="check-block"><input class="check" type="checkbox" id="scales-7"><label class="scales-size" for="scales-7">XXL</label></span>
							</p>
						</div>
						<div class="price">
							<p class="filter-headline">Price</p>
							<div class="price-block"></div>
							<div class="range"></div>
							<div class="price_slider">
								<span class="price-cash">$52</span><span class="price-cash">$400</span>
							</div>
						</div>
					</div>
					<div class="sort-show">
						
					</div>
				</div>
				<products ref="products" :from="9" :to="9"></products>
				<div class="pagination">
					<div class="pages-block">
						<div class="pages">
							<a href="product.php" class="page-link"><i class="fas fa-angle-left"></i></a>
							<a href="product.php" class="page-link">1</a>
							<a href="product.php" class="page-link">2</a>
							<a href="product.php" class="page-link">3</a>
							<a href="product.php" class="page-link">4</a>
							<a href="product.php" class="page-link">5</a>
							<a href="product.php" class="page-link">6</a>
							<span class="page-link-point">.....</span>
							<a href="product.php" class="page-link">20</a>
							<a href="product.php" class="page-link"><i class="fas fa-angle-right"></i></a>
						</div>
					</div>	
					<div class="view">
						<form action="product.php">		
						<button class="button_view_all">
							<span class="text_button_view_all">View All</span>
						</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="feature_box">
		<div class="container">
			<div class="feature_block">
				<div class="feature_block_box">
					<img class="feature_img" src="img/icon/Forma_1.png" alt="Free Delivery"> 
					<p class="feature-box-big-text">Free Delivery</p>
					<p class="feature-box-small-text">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>
				</div>
				<div class="feature_block_box">
					<img class="feature_img" src="img/icon/Forma_2.png" alt="Sales & discounts"> 
					<p class="feature-box-big-text">Sales & discounts</p>
					<p class="feature-box-small-text">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models</p>
				</div>
				<div class="feature_block_box"> 
					<img class="feature_img" src="img/icon/Forma_3.png" alt="Quality assurance">			
					<p class="feature-box-big-text">Quality assurance</p>
					<p class="feature-box-small-text">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>
				</div>
			</div>
		</div>
	</div>

<?php 

/* FOOTER */ include ("modules/footer.php"); 

?>