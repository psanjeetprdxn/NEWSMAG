<!doctype html>
<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Setting the viewport for Media Query -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Newsmag | Home</title>
	<!-- Place favicon.ico in the root directory: mathiasbynens.be/notes/touch-icons -->
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- Adding reference to font awesome -->
	<link rel="stylesheet" href="../assets/vendor/font/fontawesome-all.css">
	<!-- Default style-sheet is for 'media' type screen (color computer display).  -->
	<link rel="stylesheet" media="screen" href="../assets/css/style.css">
</head>
<body>
  <?php
  if (!isset($_SESSION)) {
      session_start();
  }
  // checks if session exists
  if (!isset($_SESSION['user_id'])) {
      header ("Location: login.php?msg=notLogin");
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
      <div class="main-content">
        <div class="wrapper">
          <aside>
            <?php
            include '../partials/admin-aside.php';
            ?>
          </aside>
          <div class="redesign">
            <h2>What's New For the Redesign</h2>
            <p>Hey <span class="admin-name"><?php echo $user->getNameById($_SESSION['user_id']); ?></span>, the CMS has undergone a few small changes
              for the Ad Age and creativity redesigns. Below we'll walk you through them.</p>
          </div><!--end of redesign -->
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
