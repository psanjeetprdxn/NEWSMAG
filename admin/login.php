<!doctype html>
<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Setting the viewport for Media Query -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Newsmag | login</title>
	<!-- Place favicon.ico in the root directory: mathiasbynens.be/notes/touch-icons -->
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- Adding reference to font awesome -->
	<link rel="stylesheet" href="assets/vendor/font/fontawesome-all.css">
	<!-- Default style-sheet is for 'media' type screen (color computer display).  -->
	<link rel="stylesheet" media="screen" href="../assets/css/style.css">
</head>
<body>
	<div class="container">
		<!-- Start of the header -->
		<header>
			<?php
			include '../partials/admin-header.php';
			?>
		</header>
		<!-- end of header -->
		<!-- Start of main -->
		<main>
			<div class="main-content">
				<div class="wrapper">
						<div class="register-form">
							<h2 class="capitalize">please sign in</h2>
							<form action="<?php echo htmlentities('../includes/login.inc.php'); ?>" method="post">
								<div class="form-input">
									<input type="text" name="username" placeholder="Username">
									<label class="form-error"></label>
								</div>
								<div class="form-input">
									<input type="password" name="password" placeholder="Password">
									<label class="form-error"></label>
								</div>
								<div class="form-button">
									<a href="#FIXME" class="capitalize transition" title="Forgot Password">forgot password</a>
								</div>
								<div class="form-button">
									 <input type="submit" class="capitalize transition" name="login" value="login">
								</div>
								<label class="form-error"></label>
							</form>
						</div>
				</div>
			</div>
		</main>
		<!-- End of main -->
		<!-- start of footer -->
		<footer>
			<?php
			include '../partials/admin-footer.php';
			?>
		</footer>
		<!-- end of footer -->
	</div>
</body>
</html>
