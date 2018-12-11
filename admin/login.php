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
	<link rel="stylesheet" href="../assets/vendor/font/fontawesome-all.css">
	<!-- Default style-sheet is for 'media' type screen (color computer display).  -->
	<link rel="stylesheet" media="screen" href="../assets/css/style.css">
</head>
<body>
	<!-- IF SESSION EXISTS THAN REDIRECT TO INDEX PAGE -->
	<?php
	if (!isset($_SESSION)) {
      session_start();
  }
	if (isset($_SESSION['user_id'])) {
			header("Location: index.php");
			exit();
	}
	?>
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
			<!-- admin login form starts here -->
			<div class="main-content">
				<div class="wrapper">
					<div class="register-form">
						<h2 class="capitalize">please sign in</h2>
						<form action="<?php echo htmlentities('../includes/login.inc.php'); ?>" method="post">
							<div class="form-input">
								<input type="text" name="username" placeholder="Username">
								<label class="form-error">
                  <?php
                  if (isset($_GET['msg'])) {
                      if ($_GET['msg'] == 'usernameInvalid') {
                          echo 'Username must contain letters and numbers from 6-32 characters and must start with letters';
                      }
                      if ($_GET['msg'] == 'usernameNotSet') {
                          echo 'Username attribute is not set';
                      }
                  }
                  ?>
                </label>
							</div>
							<div class="form-input">
								<input type="password" name="password" placeholder="Password">
								<label class="form-error">
                  <?php
                  if (isset($_GET['msg'])) {
                      if ($_GET['msg'] == 'passwordInvalid') {
                          echo 'Password required';
                      }
                      if ($_GET['msg'] == 'passwordNotSet') {
                          echo 'Password attribute is not set';
                      }
                  }
                  ?>
                </label>
							</div>
							<div class="form-button">
								<a href="#FIXME" class="capitalize transition" title="Forgot Password">forgot password</a>
							</div>
							<div class="form-button">
								 <input type="submit" class="capitalize transition" name="login" value="login">
							</div>
							<label class="form-error">
                <?php
                if (isset($_GET['msg'])) {
                  	if ($_GET['msg'] == 'loginFail') {
                    	echo 'Username or password is incorrect';
                  	}
                  	if ($_GET['msg'] == 'notLogin') {
                    	echo 'You must login to use that page';
                  	}
                }
                ?>
              </label>
						</form>
					</div>
				</div>
			</div>
			<!-- admin login form ends here -->
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
