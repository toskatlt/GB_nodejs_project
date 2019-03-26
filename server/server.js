const express = require('express');
const mysql = require('mysql');

const db = mysql.createConnection({
	host: '10.0.0.240',
	user: 'root',
	password: '111111',
	database: 'brand',
	port: '3306'

});

db.connect((err) => {
	if (err) { 
		throw err;
	}
	console.log('MySQL Connected...');
});

const app = express();

// SELECT

app.get('/api/products/', (req, res) => {
	let sql = `SELECT * FROM products LIMIT ${req.query.from} , ${req.query.to}`;
	console.log(sql);
	let query = db.query(sql, (err, result) => {
		if (err) {
			return res.sendStatus(404, JSON.springify({result: 0, text: err}))
		} else {
			return res.send(result);
		}
	})
});

app.get('/api/products/:id', (req, res) => {
	let sql = `SELECT * FROM products WHERE id = ${req.params.id}`;
	let query = db.query(sql, (err,result) => {
		if (err) {
			return res.sendStatus(404, JSON.springify({result: 0, text: err}))
		} else {
			return res.send(result);
		}
	})
});

app.get('/api/cart/', (req, res) => {
	let sql = `SELECT products.*, cart.quantity FROM cart, products WHERE cart.id = products.id`;
	let query = db.query(sql, (err, result) => {
		if (err) {
			return res.sendStatus(404, JSON.springify({result: 0, text: err}))
		} else {
			return res.send(result);
		}
	})
});

app.get('/api/cart/:id', (req, res) => {
	let sql = `SELECT quantity FROM cart WHERE id = ${req.params.id}`;
	let query = db.query(sql, (err,result) => {
		if (err) {
			return res.sendStatus(404, JSON.springify({result: 0, text: err}))
		} else {
			return res.send(result);
		}
	})
});

app.get('/api/cartCount', (req, res) => {
	let sql = `SELECT count(*) as count FROM cart`;
	let query = db.query(sql, (err,result) => {
		if (err) {
			return res.sendStatus(404, JSON.springify({result: 0, text: err}))
		} else {
			return res.send(result);
		}
	})
});

// POST

app.post('/api/cart/:id', (req, res) => {
	let sql = `INSERT INTO cart (id, quantity) VALUES (${req.params.id}, 1)`;
	let query = db.query(sql, (err,result) => {
		if (err) {
			return res.sendStatus(404, JSON.springify({result: 0, text: err}))
		} else {
			return res.send(result);
		}
	})
});

// UPGRADE

app.put('/api/cart/:id', (req, res) => {
	let sql = `UPDATE cart SET quantity = ${req.query.quantity} WHERE id= ${req.params.id}`;
	let query = db.query(sql, (err,result) => {
		if (err) {
			return res.sendStatus(404, JSON.springify({result: 0, text: err}))
		} else {
			return res.send(result);
		}
	})
});

// DELETE

app.delete('/api/cart/:id', (req, res) => {
	let sql = `DELETE FROM cart WHERE id = ${req.params.id}`;
	let query = db.query(sql, (err,result) => {
		if (err) {
			return res.sendStatus(404, JSON.springify({result: 0, text: err}))
		} else {
			return res.send(result);
		}
	})
});

app.listen(3000, () => {
	console.log('Server started on port 3000');
})