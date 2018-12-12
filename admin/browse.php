<!doctype html>
<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Setting the viewport for Media Query -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Newsmag | Browse Article</title>
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
			include_once '../partials/admin-header.php';
			?>
		</header>
		<!-- end of header -->
		<!-- Start of main -->
		<main>
      <div class="main-content">
        <div class="wrapper">
          <aside>
            <?php
            include_once '../partials/admin-aside.php';
            ?>
          </aside>
          <div class="all-articles">
            <div class="search-form">
              <form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">
                <select name="section">
                  <option class="capitalize" selected disabled>Section</option>
                  <option value="politics" class="capitalize">politics</option>
                  <option value="tech" class="capitalize">tech</option>
                  <option value="world" class="capitalize">world</option>
                </select>
                <input type="submit" class="transition capitalize" name="Search" value="Search">
              </form>
            </div>
            <?php
            // to display articles
            $article = new Article;
            if (isset($_GET['section'])) {
                $articles = $article->displayBySection($_GET['section']);
            } else {
                $articles = $article->display();
            }
            if (!empty($articles)) {
            ?>
            <div class="articles-details">
              <!-- ARTICLE COLUMN NAME -->
              <div class="table-row-header">
                <div class="table-header uppercase id"><strong>id</strong></div>
                <div class="table-header"><strong>Edit</strong></div>
                <div class="table-header capitalize"><strong>headline</strong></div>
                <div class="table-header capitalize"><strong>section</strong></div>
                <div class="table-header capitalize"><strong>post date</strong></div>
                <div class="table-header capitalize"><strong>delete</strong></div>
              </div>
              <!-- end of ARTICLE column name -->
              <!-- ARTICLE DATA -->
              <?php
              foreach ($articles as $art) {
              ?>
              <div class="table-row-data">
                <div class="table-data"><span><?php echo $art['article_id']; ?></span></div>
                <div class="table-data update"><a class="edit" href="update.php?article_id=<?php echo $art['article_id']; ?>" title="Update">Update</a></div>
                <div class="table-data"><span><?php echo $art['title']; ?></span></div>
                <div class="table-data"><span><?php echo $art['section_name']; ?></span></div>
                <div class="table-data"><span><?php echo date('d/m/Y', strtotime($art['date'])); ?></span></div>
                <div class="table-data"><a class="delete" href="../includes/delete.inc.php?article_id=<?php echo $art['article_id']; ?>" title="Delete">Delete</a></div>
              </div>
                <?php
                }//end of foreach loop
                ?>
                <!-- end of article data -->
            </div><!-- end of article details -->
            <?php
            } else {
            ?>
            <span class="article-message">No data to show</span>
            <?php
            }//end of else
            ?>
          </div>
        </div>
      </div>
		</main>
		<!-- End of main -->
		<!-- start of footer -->
		<footer>
      <?php
			include_once '../partials/admin-footer.php';
			?>
		</footer>
		<!-- end of footer -->
	</div>
</body>
</html>
