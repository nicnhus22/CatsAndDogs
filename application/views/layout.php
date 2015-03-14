<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>

	<link rel="stylesheet" type="text/css" href="/public/bootstrap-3.3.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/public/css/style.css">
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
	<div class="main_container">

		<!-- Header -->
		<header>
			<div class="icon_block">
				<i class="fa fa-github-alt"></i>
				<span class="mobile_resp_disapear">
					<span class="text_white">C<span class="resp_disapear">omputer</span></span><span class="text_orange">S<span class="resp_disapear text_orange">cience</span></span><span class="text_white">Games</span>
				</span>
			</div>
		</header>
		
		<!-- Content -->	
		<section>	
			<article id="login_container" class="login_container">
				<h1>Login</h1>	
				<form id="login_form" action="<?php echo site_url('auth/login'); ?>" method="POST">
					<input type="text" name="email" placeholder="Email"/>
					<input type="password" name="password" placeholder="Password"/><br/>
					<a href="#">I am dumb, I forgot my password...</a>
					<div class="login_icon">
						<a href="javascript:void(0)" onclick="document.getElementById('login_form').submit();"><i class="fa fa-arrow-circle-o-right"></i></a>
					</div>
				</form>
				<a class="create_account" href="javascript:void(0)" onclick="createAccount()">Create an account</a>
			</article>

			<article id="create_account_container" class="login_container">
				<h1>Create Account</h1>	
				<form id="login_form" action="<?php echo site_url('auth/login'); ?>" method="POST">
					<input type="text" name="full_name" placeholder="Full Name"/><br/>
					<input type="text" name="email" placeholder="Email"/>
					<input type="password" name="password" placeholder="Password"/><br/>
					<input type="password" name="password2" placeholder="Re-Enter Password"/><br/>
					<div class="login_icon">
						<a href="javascript:void(0)" onclick="document.getElementById('login_form').submit();"><i class="fa fa-money"></i></a>
					</div>
				</form>
				<a class="create_account" href="javascript:void(0)" onclick="backToLogin()">Go back to login</a>
			</article>
		</section>

	</div>

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/public/js/global.js"></script>
</body>

</html>