<?php 

/* HEADER */ include ("modules/header.php");
/* MENU */ include ("modules/menu.php"); 

?>
	<div class="bunner">
		<div class="container bunner-img">
			<div class="bunner-text">
				<p class="bunner-big-text">MY BRAND</p>
				<p class="bunner-small-text">IS BETTER THAN <span class="pink">YOUR</span></p>
			</div>
		</div>
	</div>
	<div class="category">
		<div class="container category-flex">
			<div class="category-left">
				<a href="product.php">
					<div class="men man-img increase">
						<div class="text-block">
							<p class="category-black-text">HOT DEAL</p>
							<p class="category-pink-text pink">FOR MEN</p>
						</div>
					</div>
				</a>
				<a href="product.php">
					<div class="accesories accesories-img increase">
						<div class="text-block">
							<p class="category-black-text">LUXIROUS & TRENDY</p>
							<p class="category-pink-text pink">ACCESORIES</p>
						</div>
					</div>
				</a>		
			</div>
			<div class="category-right">
				<a href="product.php">
					<div class="woman woman-img increase">
						<div class="text-block">
							<p class="category-black-text">30% OFFER</p>
							<p class="category-pink-text pink">WOMAN</p>
						</div>
					</div>
				</a>
				<a href="product.php">
					<div class="kids kids-img increase">
						<div class="text-block">
							<p class="category-black-text">NEW ARRIVALS</p>
							<p class="category-pink-text pink">FOR KIDS</p>
						</div>
					</div>
				</a>
			</div>
		</div>	
	</div>
	<div class="futured_items">
		<div class="container">
			<div class="headline">
				<p class="headline-big-text">Fetured Items</p>
				<p class="headline-small-text">Shop for items based on what we featured in this week</p>
			</div>
			<products ref="products" :from="0" :to="8"></products>
			<div class="footline">
				<a href="#" class="button2">Browse All Product ➞</a>
			</div>
		</div>		
	</div>
	<div class="feature">
		<div class="container feature-flex">
			<a href="product.php">
			<div class="feature-img">
				<div class="feature-text">
					<p class="feature-big-text">30% <span class="pink">OFFER</span></p>
					<p class="feature-small-text">FOR WOMAN</p>	
				</div>
			</div>
			</a>
			<div class="feature-block">
				<div class="feature-block-icon"> 
					<img class="icon-1" src="img/icon/Forma_1.png" alt="Free Delivery"> 
					<img class="icon-2" src="img/icon/Forma_2.png" alt="Sales & discounts"> 
					<img class="icon-3" src="img/icon/Forma_3.png" alt="Quality assurance"> 
				</div>
				<div class="feature-box">
					 <article>
						<p class="feature-box-big-text box1">Free Delivery</p>
						<p class="feature-box-small-text">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>
					</article>
					<article>
						<p class="feature-box-big-text box2">Sales & discounts</p>
						<p class="feature-box-small-text">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models</p>
					</article>
					<article>			
						<p class="feature-box-big-text box3">Quality assurance</p>
						<p class="feature-box-small-text">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>	
					</article>
				</div>
			</div> 
		</div>
	</div>

<?php 

/* FOOTER */ include ("modules/footer.php"); 

?>
