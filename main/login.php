<?php
	include("include/connect.php");
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Kanjeng Aji Pamungkas Lab">
		<meta name="keywords" content="Kanjeng Aji Pamungkas Lab">
		<meta name="author" content="Wapik Creative">
		<title>Kanjeng Aji Pamungkas Lab | Login</title>
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
					<li><a href="index.php">Beranda</a></li>
					<li><a href="about.php">Tentang Kami</a></li>
					<li><a href="services.php">Layanan</a></li>
					<li class="current"><a href="login.php">Login</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section id="main">
			<div class="container">
				<aside id="centerbar">
					<div class="dark">
						<h3>Login</h3>
						<form class="quote" method="post" action="user_level.php">
							<div>
								<label>Username</label><br>
								<input type="text" placeholder="Username" id="usn" name="usn">
							</div>
							<br>
							<div>
								<label>Password</label><br>
								<input type="text" placeholder="Password" id="pwd" name="pwd">
							</div><br>
							<button class="button_1" type="submit">Login</button>
						</form>
					</div>
				</aside>
			</div>
		</section>

		<footer1>
			<p>Wapik Creative, Copyright &copy; 2017</p>
		</footer1>
	</body>
</html>
