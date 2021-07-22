<!DOCTYPE html>
<html>
	<head>
		<title>Tea Party</title>
		<meta charset="UTF-8">
		<meta keywords="tea party, bubble tea, boba">
		<link rel="icon" href="uploads/logo.png" type="image/png"/>
		<link rel="shortcut icon" href="uploads/logo.png" type="image/png"/>
		<link rel="apple-touch-icon" href="uploads/logo.png" type="image/png"/>
		
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Architects+Daughter" type="text/css">
		
		<link rel="stylesheet" href="styles/main.css" type="text/css"/>
		<link rel="stylesheet" href="styles/usefulDefs.css" type="text/css"/>
		<link rel="stylesheet" href="styles/imageSlider.css" type="text/css"/>
		<script src="scripts/usefulStuff.js"></script>
		<script src="scripts/navLinks.js"></script>
		<script src="scripts/imageSizeScroll.js"></script>
		<script src="scripts/imageSlider.js"></script>
	</head>
	<body>
		<nav>
			<div class="nav-logo">
				<a href="index.html"><img src="uploads/logo.png" alt="Tea Party logo"/></a>
			</div>
			<div class="nav-btn-container">
				<div class="nav-btn">
					<a href="about.html">About</a>
				</div>
				<div class="nav-btn">
					<a href="menu.html">Menu</a>
				</div>
				<div class="nav-btn">
					<a href="order.html">Order</a>
				</div>
				<div class="nav-btn">
					<a href="login.php">Login</a>
				</div>
			</div>
		</nav>
		<div class="main">
			<div class="first-image-large">
				<div>
					<img src="uploads/logoText.png" alt="Tea Party"/>
				</div>
			</div>
			<div class="image-slider">
				<img src="uploads/imageSlider1.png" alt="Fun, clean stores!"/>
				<img src="uploads/imageSlider2.png" alt="Wide range of flavours!"/>
				<img src="uploads/imageSlider3.png" alt="Cheap prices!"/>
				<img src="uploads/imageSlider4.png" alt="No dabbing in our stores smh Abi"/>
				<img src="uploads/imageSlider5.png" alt="Free cake to every single customer! (if we feel like it)"/>
				<button title="Previous image" id="slider-button-left" class="slider-button">
					<img src="uploads/arrowLeft.svg" alt="previous" class="slider-arrow"/>
				</button>
				<button title="Next image" id="slider-button-right" class="slider-button">
					<img src="uploads/arrowRight.svg" alt="next" class="slider-arrow"/>
				</button>
				<p id="slider-caption"><span></span></p>
				<div id="dots-container"></div>
			</div>
			<h1>Welcome to Tea Party!</h1>
			<h3>Where your bubble tea dreams come true, then you realise that it's so expensive and yr broke and homeless now--ok pls insert catchphrase here</h3>
			<div class="side-by-side image-then-text">
				<div>
					<img src="uploads/imageBig1.png" alt="photo alt text"/>
				</div>
				<div class="verticalCenter">
					<div>
						<h1>Are you addicted to bubble tea?</h1>
						<h2>Try our all-new Exotic Fruit flavours^</h2>
						<h4>^On available in selected stores</h4>
					</div>
				</div>
			</div>
			<h2>buy now for only $99.99.99 (ninety-nine ninety-nine ninety-nine)</h2>
      <?php
        echo "PHP working!";
      ?>
			<h3>Lorem ipsum dolar, sit amet, blah blah blah</h3>
			<h3>Lorem ipsum dolar, sit amet, blah blah blah</h3>
			<h3>Lorem ipsum dolar, sit amet, blah blah blah</h3>
			<h3>Lorem ipsum dolar, sit amet, blah blah blah</h3>
			<h3>Lorem ipsum dolar, sit amet, blah blah blah</h3>
			<h3>Lorem ipsum dolar, sit amet, blah blah blah</h3>
			<h3>Lorem ipsum dolar, sit amet, blah blah blah</h3>
			<h3>Lorem ipsum dolar, sit amet, blah blah blah</h3>
		</div>
	</body>
</html>
