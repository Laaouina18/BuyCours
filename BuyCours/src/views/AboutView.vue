<script >
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
<template>
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
			<img src="@/assets/img/product1.png" class="one">
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
			<li><img src="@/assets/img/main1.png" onclick="slider('@/assets/img/product1.png')"></li>
		</div>

		<div class="row row2">
			<li><img src="@/assets/img/main2.png" onclick="slider('@/assets/img/product2.png')"></li>
		</div>

		<div class="row row3">
			<li><img src="@/assets/img/main3.png" onclick="slider('@/assets/img/product3.png')"></li>
		</div>

	</div>

	<a href="#" class="bottom">Scroll Down<i class='bx bx-down-arrow-circle' ></i></a>


</template>

<style>
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
	text-decoration: none;
	list-style: none;
}
:root{
	--bg-color: #101113;
	--text-color: #fff;
	--main-color: #34e7f8;
	--other-color: #fcfcfc;
	--h1-font: 6rem;
	--p-font: 1rem;
}
body{
	background: radial-gradient(50.53% 50.53% at 50.23% 49.47%, #414d59 0%, #1d2631 100%);
	color: var(--text-color);
}
header{
	position: fixed;
	width: 100%;
	top: 0;
	right: 0;
	z-index: 1000;
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 30px 8%;
	transition: all .55s ease;
	background: transparent;
}
.logo{
	display: flex;
	align-items: center;
	color: var(--text-color);
	font-size: 28px;
	font-weight: bold;
}
.logo i{
	color: var(--main-color);
	font-size: 32px;
	margin-right: 5px;
}
.navbar{
	display: flex;
}
.navbar a{
	color: var(--other-color);
	font-size: var(--p-font);
	font-weight: 500;
	margin: 0 30px;
	transition: all .55s ease;
}
.navbar a:hover{
	color: var(--main-color);
}
.navbar a.active{
	color: var(--main-color);
}
.header-icons{
	display: flex;
	align-items: center;
}
#menu-icon{
	font-size: 35px;
	color: var(--text-color);
	z-index: 10001;
	cursor: pointer;
}
.header-icons i{
	margin-right: 25px;
	font-size: 28px;
	cursor: pointer;
	transition: all .55s ease;
}
.header-icons i:hover{
	transform: translateY(-5px);
	color: var(--main-color);
}

section{
	padding: 0 15%;
}
.home{
	position: relative;
	height: 100vh;
	width: 100%;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	align-items: center;
	gap: 2rem;
}
.home-text h1{
	font-size: var(--h1-font);
	line-height: 1.2;
	margin-bottom: 2px;
}
.home-text h5{
	color: #ffffff99;
	font-size: 14px;
	font-weight: 400;
	margin-bottom: 60px;
}
.home-text h3{
	font-size: 40px;
	font-weight: 700;
	letter-spacing: 2px;
	margin-bottom: 35px;
}
.btn{
	display: inline-block;
	padding: 15px 70px;
	font-size: 16px;
	font-weight: 500;
	background: transparent;
	border: 2px solid var(--text-color);
	color: var(--text-color);
	transition: all .55s ease;
}
.btn:hover{
	background: var(--text-color);
	border: 2px solid var(--text-color);
	color: #000;
}
.home-img img{
	max-width: 100%;
}

.main{
	position: absolute;
	top: 50%;
	left: 8%;
	transform: translateY(-50%);
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	gap: 2.5rem;
}
.main li img{
	width: 60px;
	height: auto;
	max-width: 100%;
}
.row{
	height: 80px;
	width: 80px;
	border-radius: 50%;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	background: var(--main-color);
	transition: all .55s ease;
	cursor: pointer;
}
.row:hover{
	transform: translateY(-8px);
}
.row2{
	background: #ff758d;
}
.row3{
	background: #ffd06d;
}

.bottom{
	position: absolute;
	bottom: 35px;
	right: 8%;
	display: flex;
	align-items: center;
	color: var(--text-color);
	font-size: 15px;
	font-weight: 500;
}
.bottom i{
	color: var(--main-color);
	font-size: 25px;
	margin-left: 15px;
	transition: all .55s ease;
}
.bottom i:hover{
	transform: translateY(-8px);
}

@media (max-width: 1740px){
	header{
		padding: 14px 2%;
	}
	.main{
		left: 2%;
		transition: .2s;
	}
	.bottom{
		right: 2%;
		transition: .2s;
	}
}

@media (max-width: 1625px){
	:root{
		--h1-font: 5rem;
	}
}
@media (max-width: 1400px){
	:root{
		--h1-font: 4rem;
	}
	.row{
		height: 60px;
		width: 60px;
	}
	.main li img{
		width: 40px;
	}
}

@media (max-width: 1150px){
	section{
		padding: 0 6%;
	}
}
@media (max-width: 1000px){
	section{
		padding: 40px 18%;
	}
	.home{
		height: auto;
		grid-template-columns: 1fr;
	}
	.home-img{
		text-align: center;
	}
	.home-img img{
		width: 400px;
		height: auto;
		max-width: 100%;
	}
	:root{
		--h1-font: 3.5rem;
	}
	.home-text{
		text-align: center;
	}
	.home-text h5{
		margin-bottom: 15px;
	}
	.home-text h3{
		font-size: 28px;
		margin-bottom: 45px;
	}
	.btn{
		padding: 10px 30px;
		font-size: 14px;
	}
	.bottom{
		display: none;
	}
}

@media (max-width: 890px){
	.navbar{
		position: absolute;
		top: 100%;
		right: -200%;
		width: 200px;
		height: 20vh;
		background: var(--main-color);
		display: flex;
		align-items: center;
		flex-direction: column;
		justify-content: flex-start;
		padding: 20px;
		border-radius: 4px;
		transition: all .55s ease;
	}
	.navbar a{
		display: block;
		margin: 4px 0;
		transition: all .45s ease;
	}
	.navbar a:hover{
		transform: translateY(5px);
		color: var(--text-color);
	}
	.navbar a.active{
		color: var(--text-color);
	}
	.navbar.open{
		right: 2%;
	}
}

@media (max-width: 600px){
	section{
		padding: 100px 18%;
	}
	.home{
		height: auto;
	}
	.home-img img{
		width: 300px;
		height: auto;
		max-width: 100%;
	}
	:root{
		--h1-font: 2.1rem;
	}
}
</style>
