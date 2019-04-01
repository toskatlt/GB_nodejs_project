const express = require('express');
const mysql = require('mysql');

const pool = mysql.createPool({
	connectionLimit : 200,
	host: '10.0.0.240',
	user: 'root',
	password: '111111',
	database: 'brand',
	port: '3306'
});

const app = express();

// SELECT

app.get('/api/products/', (req, res) => {
	pool.getConnection((err, connection) => {
		if (err) {
			throw err;
		} else {
			let sql = `SELECT * FROM products LIMIT ${req.query.from} , ${req.query.to}`;
			let query = connection.query(sql, (err, res) => {
				if (err) {
					return res.sendStatus(404, JSON.springify({result: 0, text: err}))
				} else {
					return res.send(data);
				}
				connection.release();
			})
		}
	})
});


app.get('/api/products/:id', (req, res) => {
	pool.getConnection((err, connection) => {
		if (err) {
			throw err;
		} else {
			let sql = `SELECT * FROM products WHERE id = ${req.params.id}`;
			let query = connection.query(sql, (err, res) => {
				if (err) {
					return res.sendStatus(404, JSON.springify({result: 0, text: err}))
				} else {
					return res.send(data);
				}
				connection.release();
			})
		}
	})
});

app.get('/api/cart/', (req, res) => {
	pool.getConnection((err, connection) => {
		if (err) {
			throw err;
		} else {
			let sql = `SELECT products.*, cart.quantity FROM cart, products WHERE cart.id = products.id`;
			let query = connection.query(sql, (err, res) => {
				if (err) {
					return res.sendStatus(404, JSON.springify({result: 0, text: err}))
				} else {
					return res.send(data);
				}
				connection.release();
			})
		}
	})
});

app.get('/api/cart/:id', (req, res) => {
	pool.getConnection((err, connection) => {
		if (err) {
			throw err;
		} else {
			let sql = `SELECT quantity FROM cart WHERE id = ${req.params.id}`;
			let query = connection.query(sql, (err, res) => {
				if (err) {
					return res.sendStatus(404, JSON.springify({result: 0, text: err}))
				} else {
					return res.send(data);
				}
				connection.release();
			})
		}
	})
});

app.get('/api/cartCount', (req, res) => {
	pool.getConnection((err, connection) => {
		if (err) {
			throw err;
		} else {
			let sql = `SELECT count(*) as count FROM cart`;
			let query = connection.query(sql, (err, res) => {
				if (err) {
					return res.sendStatus(404, JSON.springify({result: 0, text: err}))
				} else {
					return res.send(data);
				}
				connection.release();
			})
		}
	})
});

// POST

app.post('/api/cart/:id', (req, res) => {
	pool.getConnection((err, connection) => {
		if (err) {
			throw err;
		} else {
			let sql = `INSERT INTO cart (id, quantity) VALUES (${req.params.id}, 1)`;
			let query = connection.query(sql, (err, res) => {
				if (err) {
					return res.sendStatus(404, JSON.springify({result: 0, text: err}))
				} else {
					return res.send(data);
				}
				connection.release();
			})
		}
	})
});

// UPGRADE

app.put('/api/cart/:id', (req, res) => {
	pool.getConnection((err, connection) => {
		if (err) {
			throw err;
		} else {
			let sql = `UPDATE cart SET quantity = ${req.query.quantity} WHERE id= ${req.params.id}`;
			let query = connection.query(sql, (err, res) => {
				if (err) {
					return res.sendStatus(404, JSON.springify({result: 0, text: err}))
				} else {
					return res.send(data);
				}
				connection.release();
			})
		}
	})
});

// DELETE

app.delete('/api/cart/:id', (req, res) => {
	pool.getConnection((err, connection) => {
		if (err) {
			throw err;
		} else {
			let sql = `DELETE FROM cart WHERE id = ${req.params.id}`;
			let query = connection.query(sql, (err, res) => {
				if (err) {
					return res.sendStatus(404, JSON.springify({result: 0, text: err}))
				} else {
					return res.send(data);
				}
				connection.release();
			})
		}
	})
});

app.listen(3000, () => {
	console.log('Server started on port 3000');
})
	