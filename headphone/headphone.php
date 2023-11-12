<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Headphones Website</title>
	<!----custom css link---->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	 <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

	<!---header design--->
	<header>
		<a href="#" class="logo"><i class='bx bx-headphone'></i>Soundbox</a>

		<ul class="navbar">
			<li><a href="#" class="active">Overview</a></li>
			<li><a href="#">Teach Specs</a></li>
			<li><a href="#">Reviews</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>

		<div class="header-icons">
			<i class='bx bx-cart' ></i>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
	</header>

	<!---home design--->
	<section class="home">
		<div class="home-img">
			<img src="img/product1.png" class="one">
		</div>

		<div class="home-text">
			<h1>Wireless <br> Headphones</h1>
			<h5>The smarter way to listen</h5>
			<h3>$199.00</h3>
			<a href="#" class="btn">Shop Now</a>
		</div>
	</section>

	<div class="main">
		<div class="row">
			<li><img src="img/main1.png" onclick="slider('img/product1.png')"></li>
		</div>

		<div class="row row2">
			<li><img src="img/main2.png" onclick="slider('img/product2.png')"></li>
		</div>

		<div class="row row3">
			<li><img src="img/main3.png" onclick="slider('img/product3.png')"></li>
		</div>

	</div>

	<a href="#" class="bottom">Scroll Down<i class='bx bx-down-arrow-circle' ></i></a>

	<script type="text/javascript">
		function slider(anything){
			document.querySelector('.one').src = anything;
		};

		let menu = document.querySelector('#menu-icon');
		let navbar = document.querySelector('.navbar');

		menu.onclick = () => {
			menu.classList.toggle('bx-x');
			navbar.classList.toggle('open');
		}
	</script>

</body>
</html>