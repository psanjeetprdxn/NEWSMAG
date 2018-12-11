<!doctype html>
<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Setting the viewport for Media Query -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Newsmag | Add Article</title>
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
          <div class="add-article">
            <ul class="cf">
              <li>
                <a href="add.php" class="capitalize active" title="Add Article">add</a>
              </li>
              <li>
                <a href="#FIXME" class="capitalize" title="Advance">advance</a>
              </li>
              <li>
                <a href="#FIXME" class="capitalize" title="Tags">tags</a>
              </li>
            </ul>
            <!-- form to add articles -->
            <div class="article-form">
              <form action="<?php echo htmlentities('../includes/add.inc.php'); ?>" method="post" enctype="multipart/form-data">
                <div class="fields">
                  <div class="input-label">
                    <label for="title" class="capitalize">title<span class="manditory">*</span></label>
                  </div>
                  <div class="input-fields">
                    <input type="text" id="title" name="title" value="<?php if (isset($_SESSION['retainFormDataArticle'])) { echo $_SESSION['retainFormDataArticle']['title']; } ?>" required>
                    <label class="form-error">
                      <?php
                      if (isset($_GET['msg'])) {
                          if ($_GET['msg'] == 'titleInvalid') {
                              echo 'Title required';
                          }
                      }
                      ?>
                    </label>
                  </div>
                </div>
                <div class="fields">
                  <div class="input-label">
                    <label for="description" class="capitalize">description<span class="manditory">*</span></label>
                  </div>
                  <div class="input-fields">
                    <textarea name="description" id="description" required><?php if (isset($_SESSION['retainFormDataArticle'])) { echo $_SESSION['retainFormDataArticle']['description']; } ?></textarea>
                    <label class="form-error">
                      <?php
                      if (isset($_GET['msg'])) {
                          if ($_GET['msg'] == 'descriptionInvalid') {
                              echo 'Description required';
                          }
                      }
                      ?>
                    </label>
                  </div>
                </div>
                <div class="fields">
                  <div class="input-label">
                    <label for="section" class="capitalize">section<span class="manditory">*</span></label>
                  </div>
                  <div class="input-fields">
                    <select name="section" id="section">
                      <option value="" class="capitalize" disabled selected>section</option>
                      <option value="politics" class="capitalize"
                      <?php
                      if (isset($_SESSION['retainFormDataArticle'])) {
                          if ($_SESSION['retainFormDataArticle']['section'] == 'politics') {
                            	echo 'selected';
                          }
                      }
                      ?>
                      >politics
                      </option>
                      <option value="tech" class="capitalize"
                      <?php
                      if (isset($_SESSION['retainFormDataArticle'])) {
                          if ($_SESSION['retainFormDataArticle']['section'] == 'tech') {
                            	echo 'selected';
                          }
                      }
                      ?>
                      >tech
                      </option>
                      <option value="world" class="capitalize"
                      <?php
                      if (isset($_SESSION['retainFormDataArticle'])) {
                          if ($_SESSION['retainFormDataArticle']['section'] == 'world') {
                            	echo 'selected';
                          }
                      }
                      ?>
                      >world
                      </option>
                    </select>
                    <label class="form-error">
                      <?php
                      if (isset($_GET['msg'])) {
                          if ($_GET['msg'] == 'sectionInvalid') {
                              echo 'Section must be selected';
                          }
                      }
                      ?>
                    </label>
                  </div>
                </div>
                <div class="fields">
                  <div class="input-label">
                    <label for="thumbnail" class="capitalize">Thumbnail<span class="manditory">*</span></label>
                  </div>
                  <div class="input-fields">
                    <input type="file" name="thumbnail" id="thumbnail">
                    <label class="form-error">
                      <?php
                      if (isset($_GET['msg'])) {
                          if ($_GET['msg'] == 'badExtension') {
                              echo 'File must be jpeg, jpg and png only and is required';
                          }
                      }
                      ?>
                    </label>
                  </div>
                </div>
                <div class="fields">
                  <div class="input-label">
                    <input type="submit" class="capitalize transition" name="add_article" value="add article">
                  </div>
                  <div class="input-fields">
                    <label class="form-error">
                      <?php
                      if (isset($_GET['msg'])) {
                          if ($_GET['msg'] == 'articleNotAdded') {
                              echo 'Something went wrong. Please try again';
                          }
                      }
                      ?>
                    </label>
                    <label class="form-success">
                    <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == 'articleAdded') {
                        		echo 'Article added successfully';
                        }
                    }
                    ?>
                  </label>
                  </div>
                </div>
              </form>
            </div><!--end of form (article)-->
          </div>
        </div><!--end of wrapper-->
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
