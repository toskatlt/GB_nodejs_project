<?php 

/* HEADER */ include ("modules/header.html");
/* MENU */ include ("modules/menu.html");
/* BREADCREMBS */ include ("modules/breadcrumbs.html"); 

?>
	<div class="checkout">
		<div class="container">
			<details class="checkout-details" open>
				<summary class="checkout-summary uppercase">01. Shipping Address</summary>
				<div class="shipping_address">
					<div class="shipping_address_block">
						<div class="shipping_text_block">
							<p class="shipping_headline_text uppercase">Check as a guest or register</p>
							<p class="shipping_text uppercase">Register with us for future convenience</p>
						</div>
						<div class="shipping_radio">
							<span class="radio_text uppercase"><input type="radio" name="reg">checkout as guest</span>
							<span class="radio_text uppercase"><input type="radio" name="reg">register</span>
						</div>
						<div class="shipping_text_block">
							<p class="shipping_headline_text uppercase">register and save time!</p>
							<p class="shipping_text uppercase">Register with us for future convenience</p>
						</div>
						<p class="shipping_text uppercase"><i class="fas fa-angle-double-right"></i> Fast and easy checkout</p>
						<p class="shipping_text uppercase"><i class="fas fa-angle-double-right"></i> Easy access to your order history and status</p>
					</div>
					<div class="shipping_address_block"></div>
				</div>
			</details>
			<details class="checkout-details">
				<summary class="checkout-summary uppercase">02. BILLING INFORMATION</summary>
			</details>
			<details class="checkout-details">
				<summary class="checkout-summary uppercase">03. SHIPPING INFORMATION</summary>
			</details>
			<details class="checkout-details">
				<summary class="checkout-summary uppercase">04. SHIPPING METHOD</summary>
			</details>
			<details class="checkout-details">
				<summary class="checkout-summary uppercase">05. PAYMENT METHOD</summary>
			</details>
			<details class="checkout-details">
				<summary class="checkout-summary uppercase">06. ORDER REVIEW</summary>
			</details>
		</div>
	</div>v

<?php 

/* FOOTER */ include ("modules/footer.html"); 

?>