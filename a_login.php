<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
			<?php
			if(isset($_POST['Username'==1]))
			{
				header('location:a_index.php');
			}
			?>
		</form><!-- form -->
		<div class="button">
			<a href="https://www.facebook.com/khoatran2709/"><h1>Quên pass thì nhấn dô</h1></a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>