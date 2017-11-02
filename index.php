<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Kanjeng Aji Pamungkas Lab">
		<meta name="keywords" content="Kanjeng Aji Pamungkas Lab">
		<meta name="author" content="Wapik Creative">
		<title>Kanjeng Aji Pamungkas Lab | Selamat Datang</title>
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body>
	
		<header>
			<div class="container">
				<div id="branding">
					<h1>Kanjeng Aji Pamungkas<span class="highlight"> Lab</span></h1>
				</div>
				<nav>
					<ul>
					<li class="current"><a href="index.php">Beranda</a></li>
					<li><a href="about.php">Tentang Kami</a></li>
					<li><a href="services.php">Layanan</a></li>
					<li><a href="login.php">Login</a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		<section id="showcase">
			<div class="slideshow-container">

				<div class="mySlides fade">
					<img src="./img/showcase.png" style="width:100%">
					<div class="text">Selamat Datang di Situs Tidak Resmi Kanjeng Aji Pamungkas Lab</div>
					<div class="text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nisi eros, congue id feugiat sed, finibus at augue. Nulla facilisi. Aenean venenatis mollis est non cursus.</div>
				</div>
				<div class="mySlides fade">
					<img src="./img/showcase1.jpg" style="width:100%">
					<div class="text">Selamat Datang di Situs Tidak Resmi Kanjeng Aji Pamungkas Lab</div>
					<div class="text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nisi eros, congue id feugiat sed, finibus at augue. Nulla facilisi. Aenean venenatis mollis est non cursus.</div>
				</div>

				<div class="mySlides fade">
					<img src="./img/showcase2.jpeg" style="width:100%">
					<div class="text">Selamat Datang di Situs Tidak Resmi Kanjeng Aji Pamungkas Lab</div>
					<div class="text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nisi eros, congue id feugiat sed, finibus at augue. Nulla facilisi. Aenean venenatis mollis est non cursus.</div>
				</div>

			</div>
			<br>

			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div>
		</section>
		
		<section id="newsletter">
			<div class="container">
				<h1>Kegiatan Kami</h1>
			</div>
		</section>
		
		<section id="boxes">
			<div class="container">
				<div class="box">
					<img src="./img/checkup.jpg">
					<h3>Medical Check Up Gratis</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nisi eros, congue id feugiat sed, finibus at augue. Nulla facilisi. Aenean venenatis mollis est non cursus.<a href="berita1.php">(read more)</a></p>
				</div>
				<div class="box">
					<img src="./img/funwalk.jpg">
					<h3>Fun Walk Karyawan</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nisi eros, congue id feugiat sed, finibus at augue. Nulla facilisi. Aenean venenatis mollis est non cursus.<a href="berita2.php">(read more)</a></p>
				</div>
				<div class="box">
					<img src="./img/fasilitas.jpg">
					<h3>Peningkatan Fasilitas</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nisi eros, congue id feugiat sed, finibus at augue. Nulla facilisi. Aenean venenatis mollis est non cursus.<a href="berita3.php">(read more)</a></p>
				</div>
			</div>
		</section>
		
		<footer>
			<p>Wapik Creative, Copyright &copy; 2017</p>
		</footer>
		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";  
				}
				slideIndex++;
				if (slideIndex > slides.length) {slideIndex = 1}    
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
				setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		</script>
	</body>
</html>