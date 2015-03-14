<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>

	<link rel="stylesheet" type="text/css" href="/public/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="main_container">

		<!-- Header -->
		<header>
			<div class="icon_block"></div>
			<nav>
				<ul>
					<li>CS Games</li>
				</ul>
			</nav>
		</header>
		
		<!-- Content -->	
		<section>	
			<article class="login_container">
				<h1>Login</h1>
				<form action="<?php echo site_url('auth/login'); ?>" method="POST">
					<input type="text" name="username" placeholder="Username"/>
					<input type="password" name="password" placeholder="Password"/>
					<input type="submit" name="submit" value="Login"/>
				</form>
			</article>
		</section>

	</div>
</body>

</html>