const API = 'http://shop.neo63.ru:3000';

const app = new Vue({
	el: '#app',
	data: {
		userSearch: '',	
	},
	methods: {
		getApp(url) {
			return fetch(url, {
				method: 'GET',
				headers: {
					"Content-Type": "application/json",
				}
			})
			.then(result => result.json())
			.catch(error => {
				this.$refs.error.setError(error);
			})
		},
		postApp(url) {
			return fetch(url, {
				method: 'POST',
				headers: {
					"Content-Type": "application/json",
				}
			})
			.then(result => result.json())
			.catch(error => {
				this.$refs.error.setError(error);
			})
		},
		putApp(url) {
			return fetch(url, {
				method: 'PUT',
				headers: {
					"Content-Type": "application/json",
				}
			})
			.then(result => result.json())
			.catch(error => {
				this.$refs.error.setError(error);
			})
		},
		delApp(url) {
			return fetch(url, {
				method: 'DELETE',
				headers: {
					"Content-Type": "application/json",
				}
			})
			.then(result => result.json())
			.catch(error => {
				this.$refs.error.setError(error);
			})
		},
	},
});