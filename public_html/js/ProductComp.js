Vue.component('products', {
	props: ['from', 'to'],
	data () {
		return {
			products: [],
			filtered: [],
		}
	},
	methods: {
		filterGoods(userSearch) {
			let regexp = new RegExp(userSearch, 'i');
			this.filtered = this.products.filter(el => regexp.test(el.productName));
		}
	},	
	mounted() {
		this.$parent.getApp(`${API}/api/products/?from=` + this.from + `&to=` + this.to)
			.then(data => {
				for(let el of data) {
					this.products.push(el);
					this.filtered.push(el);
				}
		});
	},
	template: `
	<div class="product">
		<product class="item" v-for="item of filtered" :key="item.id" :product="item"></product>
	</div>
	`
});

Vue.component('product', {
	props: ['product'],
	template: `
	<div>
		<a class="product-link" href="single_page.php">
			<img class="item-img" :src="'img/product/img_' + product.id + '.jpg'" :alt="product.productName">
			<div class="item-text-block">
				<p class="item-name">{{ product.productName }}</p>
				<p class="item-price pink">{{ product.price }}$</p>
			</div>
		</a>
		<div class="add_cart"><div class="add" @click="$parent.$parent.$refs.cart.addProduct(product)">Add to Cart</div></div>
	</div>
	`
})