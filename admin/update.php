<!doctype html>
<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Setting the viewport for Media Query -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Newsmag | Update</title>
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
      <?php
      $article = new Article();
      if (isset($_GET['article_id'])) {
        	$articles = $article->getById($_GET['article_id']);
      } else {
        	header("Location: browse.php");
        	exit();
      }
      ?>
      <div class="main-content">
        <div class="wrapper">
          <aside>
            <?php
            include '../partials/admin-aside.php';
            ?>
          </aside>
          <div class="add-article">
            <ul class="cf">
              <li>
                <a href="update.php?article_id=<?php echo $_GET['article_id']; ?>" class="capitalize active" title="Add Article">edit</a>
              </li>
              <li>
                <a href="#FIXME" class="capitalize" title="Advance">advance</a>
              </li>
              <li>
                <a href="#FIXME" class="capitalize" title="Tags">tags</a>
              </li>
            </ul>
            <div class="article-form">
              <form action="<?php echo htmlentities('../includes/update.inc.php?article_id='.$_GET['article_id']) ?>" method="post" enctype="multipart/form-data">
                <div class="fields">
                  <div class="input-label">
                    <label for="title" class="capitalize">title<span class="manditory">*</span></label>
                  </div>
                  <div class="input-fields">
                    <input type="text" id="title" name="title" value="<?php echo $articles['title']; ?>" required>
                    <label class="form-error"></label>
                  </div>
                </div>
                <div class="fields">
                  <div class="input-label">
                    <label for="description" class="capitalize">description<span class="manditory">*</span></label>
                  </div>
                  <div class="input-fields">
                    <textarea name="description" id="description" required><?php echo $articles['description']; ?></textarea>
                  </div>
                </div>
                <div class="fields">
                  <div class="input-label">
                    <label for="section" class="capitalize">section<span class="manditory">*</span></label>
                  </div>
                  <div class="input-fields">
                    <select name="section" id="section">
                      <option value="" class="capitalize" disabled>section</option>
                      <option value="politics" class="capitalize" <?php if ($articles['section'] == 'politics') {echo 'selected'; } ?>>politics</option>
                      <option value="tech" class="capitalize" <?php if ($articles['section'] == 'tech') {echo 'selected'; } ?>>tech</option>
                      <option value="world" class="capitalize" <?php if ($articles['section'] == 'world') {echo 'selected'; } ?>>world</option>
                    </select>
                  </div>
                </div>
                <div class="fields">
                  <div class="input-label">
                    <label for="thumbnail" class="capitalize">Thumbnail<span class="manditory">*</span></label>
                  </div>
                  <div class="input-fields">
                    <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($articles['thumbnail_image']); ?>" alt="<?php echo $articles['title']; ?>">
                    <input type="file" name="thumbnail" id="thumbnail">
                  </div>
                </div>
                <div class="fields">
                  <div class="input-label">
                    <input type="submit" class="capitalize transition" name="update_article" value="update article">
                  </div>
                </div>
              </form>
            </div>
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
