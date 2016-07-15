<?php
session_start();
?>

<html>
<head>
	<?php include('admin_settings.php'); ?>
</head>
<body>
	<?php include('../nav.php'); ?>
	<div class="container">
		<?php
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		    //echo "Welcome to the member's area, " . $_SESSION['FirstName'] . "!";
		    echo '<div class="jumbotron"><h2>You are already logged in.</h2>';
		    echo '<p><a class="btn btn-lg btn-primary" href="admin_careers.php" role="button">Job Opportunities Admin</a></p></div>';
		} else {
		    //header('Location: login.php');
		    echo '<div class="login">';
			echo '<h1>Login</h1>';
			echo '<form method="post" action="login-post.php">';
			echo '<p><input type="text" name="email" value="" placeholder="Email"></p>';
			echo '<p><input type="password" name="password" value="" placeholder="Password"></p>';
			echo '<p class="submit"><input type="submit" name="commit" value="Login"></p>';
			echo '</form>';
			echo '</div>';
		}
		?>
		
	</div>

    <?php include('admin_footer.php'); ?>
</body>
</html>