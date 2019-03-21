Vue.component('cart', {
	data () {
		return {
			showCart: false,
			cartItems: [],
		}
	},
	methods: {
		addProduct(product) {
			let find = this.cartItems.find(el => el.id === product.id);
			if (find) {
				this.$parent.putApp(`${API}/api/cart/` + product.id + `?quantity=` + ++find.quantity);
			} else {
				let prod = Object.assign({quantity: 1}, product);
				this.cartItems.push(prod);
				this.$parent.postApp(`${API}/api/cart/` + product.id);
			}
		},
		remove (product) {
			if (product.quantity > 1) {
				this.$parent.putApp(`${API}/api/cart/` + product.id + `?quantity=` + --product.quantity);
			} else {
				this.cartItems.splice(this.cartItems.indexOf(product), 1);
				this.$parent.delApp(`${API}/api/cart/` + product.id);
			}
		}
	},
	computed: {
		total () {
			return this.cartItems.reduce((accum, item) => accum += item.price * item.quantity, 0);
		},
		count () {
			return this.cartItems.reduce((accum, item) => accum += item.quantity, 0);
		}
	},
	mounted() {
		this.$parent.getApp(`${API}/api/cart/`)
			.then(data => {
				for(let el of data) {
					this.cartItems.push(el);
				}
		});
	},
	template: `
	<div class="cart">
		<div @click="showCart = !showCart"><i class="fas fa-shopping-cart fa-2x"></i></div>
		<div class="drop__cart" v-show="showCart">
			<p class="cart-empty" v-if="!cartItems.length">Корзина пуста</p>
			<cart-item class="items" 
				v-for="cartItem of cartItems" 
				:key="cartItem.id" 
				:cart-item="cartItem"
				@remove="remove">
			</cart-item> 

			<div class="cart__total">
				<div>TOTAL:</div><div>{{ total }}$</div>
			</div>
			<a href="checkout.html" class="cart__button">Checkout</a>
			<a href="cart.html" class="cart__button">Go to cart</a>
		</div>
		<div class="cart-count">{{ count }}</div>
	</div>`
});

Vue.component('cart-item', {
	props: ['cartItem'],
	template: `
		<div class="cart__item">
			<img :src="'img/product/small/img_' + cartItem.id + '.jpg'" :alt="cartItem.productName" class="cart__item-img">
			<div class="cart__item-text">
				<p class="cart__item-text1">{{ cartItem.productName }}</p>
				<p class="cart__item-text3">{{ cartItem.quantity }} x {{ cartItem.price }}$</p>
			</div>
			<div><a href="#" class="cart__del" @click="$emit('remove', cartItem)"><i class="fa fa-times-circle" aria-hidden="true"></i></a></div>
		</div>
		`
});