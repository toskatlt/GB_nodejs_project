<?php $randval = rand(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BRAND SHOP</title>
	<link rel="stylesheet" href="./css/style.css?ver=<?=$randval?>'">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
<div id="app">
<div class="wrapper">
	<div class="top">
		<header class="header">
			<div class="container header-flex">
				<div class="header-left">
					<a class='logo uppercase' href="/"><img class="logo-img" src="img/logo.png" alt="BRAND">
						BRAN<span class="pink">D</span></a>
					<div class="form">
						<div class="select">
							<span class="select-text">Browse </span><i class="fas fa-caret-down grey"></i>
							<div class="browse-box">
								<div class="drop-flex">
									<h3 class="drop-heading">Woman</h3>
									<ul class="drop-ul">
										<li><a class="drop-link" href="product.php">Dresses</a></li>
										<li><a class="drop-link" href="product.php">Tops</a></li>
										<li><a class="drop-link" href="product.php">Sweaters/Knits</a></li>
										<li><a class="drop-link" href="product.php">Jackets/Coats</a></li>
										<li><a class="drop-link" href="product.php">Blazers</a></li>
										<li><a class="drop-link" href="product.php">Denim</a></li>
										<li><a class="drop-link" href="product.php">Leggings/Pants</a></li>
										<li><a class="drop-link" href="product.php">Skirts/Shorts</a></li>
										<li><a class="drop-link" href="product.php">Accessories</a></li>
									</ul> 
									<h3 class="drop-heading">MAN</h3>
									<ul class="drop-ul">
										<li><a class="drop-link" href="product.php">Dresses</a></li>
										<li><a class="drop-link" href="product.php">Tops</a></li>
										<li><a class="drop-link" href="product.php">Sweaters/Knits</a></li>
										<li><a class="drop-link" href="product.php">Jackets/Coats</a></li>
									</ul>
								</div>
							</div>
						</div>
						<filtered></filtered>
					</div>
				</div>
				<div class="header-right">
					<cart ref="cart"></cart>
					<a href="#" class="button"><span class="my-account">My Account<i class="fas fa-caret-down"></i></span></a>
				</div>
			</div>
		</header>
