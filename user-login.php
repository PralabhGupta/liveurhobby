
<!doctype html>
<html lang="en" class="no-js">
<title>Institute-Login</title>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="user_popup/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="user_popup/css/style.css"> <!-- Gem style -->
	<script src="user_popup/js/modernizr.js"></script> <!-- Modernizr -->
<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>
<body>




	<header role="banner">
<a href="index.html"><img src="images/logo2.png" alt="logo"><img src="images/logo.png" alt="logo"></a>

		<nav class="main-nav">
			<ul>
				<!-- inser more links here -->
				<li><a class="cd-signin" href="#0">Sign in</a></li>
				<li><a class="cd-signup" href="#0">Sign up</a></li>
			</ul>
		</nav>
	</header>

	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->








<form class="cd-form" id="loginform" action="user/user-verify.php" method="POST">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-email">Username</label>
						<input class="full-width has-padding has-border" id="signin-email" name="signnemail" type="text" placeholder="Username">
						<span></span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" name="signnpassword" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
						<span id="passerror"></span>
					</p>



					<p class="fieldset">
						<input class="full-width" type="submit" value="Login" id="signin-submit">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form" id="signupform"  action="user/user-process.php" method="post">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" name="username" type="text" placeholder="Username">
						<span id="signupusererror"></span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email"  name="email" type="email" placeholder="E-mail">
						<span></span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" name="password" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
						<span id="signuppasserror"></span>
					</p>



					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account" id="signup-submit">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>


					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->

	<!-- popup for notice-->

<center>
	<?php
	$x=$_GET[x];
	if($x==md5(1))
	{echo '<script type="text/javascript">';
	echo"alert('User already exist')";
	echo"</script>";}

	if($x==md5(2))
	{echo '<script type="text/javascript">';
		echo"alert('User created Successfully.Check your mail to activate your account.')";
	echo"</script>";}

	if ($x==md5(3))
	{echo '<script type="text/javascript">';
		echo"alert('Please Fill all the fields.')";
	echo"</script>";}

	if ($x==md5(4))
	{echo '<script type="text/javascript">';
		echo"alert('User does not exist')";
	echo"</script>";}

if ($x==md5(5))
{echo '<script type="text/javascript">';
	echo"alert('Invalid Username/password')";
	echo"</script>";}

	?>
	</center>

	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page
	<div id="wowslider-container1" style="z-index:-9999;">
	<div class="ws_images"><ul>
		<li><a href="www.webseeth.com"><img src="data1/images/dartmouth_college_campus_20071003_moore_psychology_building.jpg" alt="" title="" id="wows1_0"/></a></li>
		<li><a href="www.webseeth.com"><img src="data1/images/macalester_markimhall_exterior.jpg" alt="" title="" id="wows1_1"/></a></li>
		<li><a href="www.webseeth.com"><img src="data1/images/wayne_state_college_nebr_hahn_bldg.jpg" alt="" title="" id="wows1_2"/></a></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data1/tooltips/dartmouth_college_campus_20071003_moore_psychology_building.jpg" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/macalester_markimhall_exterior.jpg" alt=""/>2</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/wayne_state_college_nebr_hahn_bldg.jpg" alt=""/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">javascript slideshow</a> by WOWSlider.com v8.2</div>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

<img src="images/1.jpg">







<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="user_popup/js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>