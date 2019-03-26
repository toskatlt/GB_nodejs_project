<?php 

/* HEADER */ include ("modules/header.php");
/* MENU */ include ("modules/menu.php");
/* BREADCREMBS */ include ("modules/breadcrumbs.php"); 

?>
	<div class="image-slide border slider-flex">
		<a href="#" class="slider"><i class="fas fa-angle-left"></i></a>
		<div class="container image-slide-img"></div>
		<a href="#" class="slider"><i class="fas fa-angle-right"></i></a>
	</div>
	<div class="add_to_cart"></div>
	<div class="container to_cart-flex border">
		<div class="description to_cart-flex">
				<p class="to_cart-category pink">WOMEN COLLECTION</p>
				<p class="to_cart-category-border"></p>
			<p class="to_cart-title">MOSCHINO CHEAP AND CHIC</p>
			<p class="to_cart-description">Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals. </p>
			<div class="mat-des">
				<p class="to_cart-material">MATERIAL: <span class="black">COTTON</span></p>
				<p class="to_cart-designer">DESIGNER: <span class="black">BINBURHAN</span></p>
			</div>
			<p class="to_cart-price pink">$561</p>
		</div>
		<form action="#">
			<div class="filter">
				<div class="choose_color">
					<p>CHOOSE COLOR</p>
					<select class="select_color" name="color" id="color">
						<option value="red" class="option-size"> Red </option>
						<option value="bleu" class="option-size"> Blue </option>
						<option value="white" class="option-size"> White </option>
						<option value="black" class="option-size"> Black </option>
					</select>
				</div>
				<div class="choose_size">
					<p>CHOOSE SIZE</p>
					<select class="select_size" name="size" id="size">
						<option value="xs" class="option-size uppercase"> XS </option>
						<option value="s" class="option-size uppercase"> S </option>
						<option value="m" class="option-size uppercase"> M </option>
						<option value="l" class="option-size uppercase"> L </option>
						<option value="xl" class="option-size uppercase"> XL </option>
						<option value="xxl" class="option-size uppercase" select> XXL </option>
					</select>
				</div>
				<div class="quantity">
					<p>QUANTITY</p>
					<input class="quantity_input" type="text" value="1">
				</div>
			</div>
			<div class="block_to_cart">
				<button class="button_to_cart">
					<img class="img_cart" src="img/cart.svg" alt="cart">
					<span class="text_button_to_cart">Add to Cart</span>
				</button>
			</div>
		</form>
	</div>
	
	<div class="also_items">
		<div class="container">
			<div class="also">
				<p class="also-big-text">YOU MAY LIKE ALSO</p>
			</div>
			<div class="also-product container">
				<div class="item">
					<a class="product-link" href="#">
						<img class="item-img" src="img/product/img_9.jpg" alt="BLAZE LEGGINGS">
						<div class="item-text-block">
							<p class="item-name">BLAZE LEGGINGS</p>
							<div class="item-footer">
								<p class="item-price pink">$52.00</p>
								<p class="stars">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
								</p>
							</div>
						</div>
					</a>
					<div class="add_cart"><a href="#" class="add">Add to Cart</a></div>
				</div>
				<div class="item">
					<a class="product-link" href="#">
						<img class="item-img" src="img/product/img_10.jpg" alt="ALEXA SWEATER">
						<div class="item-text-block">
							<p class="item-name">ALEXA SWEATER</p>
							<p class="item-price pink">$52.00</p>
						</div>
					</a>
					<div class="add_cart"><a href="#" class="add">Add to Cart</a></div>
				</div>
				<div class="item">
					<a class="product-link" href="#">
						<img class="item-img" src="img/product/img_11.jpg" alt="AGNES TOP">
						<div class="item-text-block">
							<p class="item-name">AGNES TOP</p>
							<div class="item-footer">
								<p class="item-price pink">$52.00</p>
								<p class="stars">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
								</p>
							</div>
						</div>
					</a>
					<div class="add_cart"><a href="#" class="add">Add to Cart</a></div>
				</div>
				<div class="item">
					<a class="product-link" href="#">
						<img class="item-img" src="img/product/img_12.jpg" alt="SYLVA SWEATER">
						<div class="item-text-block">
							<p class="item-name">SYLVA SWEATER</p>
							<p class="item-price pink">$52.00</p>
						</div>
					</a>
					<div class="add_cart"><a href="#" class="add">Add to Cart</a></div>
				</div>	
			</div>
		</div>	
	</div>
	
<?php 

/* FOOTER */ include ("modules/footer.php"); 

?>