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
	<div class="container">
		<!-- Start of the header -->
		<header>
		</header>
		<!-- end of header -->
		<!-- Start of main -->
		<main>
      <div class="main-content">
        <div class="wrapper">
          <aside>
          </aside>
          <div class="add-article">
            <ul class="cf">
              <li>
                <a href="add.php" class="capitalize transition active" title="Add Article">add</a>
              </li>
              <li>
                <a href="#FIXME" class="capitalize transition" title="Advance">advance</a>
              </li>
              <li>
                <a href="#FIXME" class="capitalize transition" title="Tags">tags</a>
              </li>
            </ul>
            <!-- form to add articles -->
            <div class="article-form">
              <form action="#FIXME" method="post" enctype="multipart/form-data">
                <div class="fields">
                  <div class="input-label">
                    <label for="title" class="capitalize">title<span class="manditory">*</span></label>
                  </div>
                  <div class="input-fields">
                    <input type="text" id="title" name="title" value="" required>
                    <label class="form-error"></label>
                  </div>
                </div>
                <div class="fields">
                  <div class="input-label">
                    <label for="description" class="capitalize">description<span class="manditory">*</span></label>
                  </div>
                  <div class="input-fields">
                    <textarea name="description" id="description" required></textarea>
                    <label class="form-error"></label>
                  </div>
                </div>
                <div class="fields">
                  <div class="input-label">
                    <label for="section" class="capitalize">section<span class="manditory">*</span></label>
                  </div>
                  <div class="input-fields">
                    <select name="section" id="section">
                      <option value="" class="capitalize" disabled selected>section</option>
                      <option value="politics" class="capitalize">politics</option>
                      <option value="tech" class="capitalize">tech</option>
                      <option value="world" class="capitalize">world</option>
                    </select>
                    <label class="form-error"></label>
                  </div>
                </div>
                <div class="fields">
                  <div class="input-label">
                    <label for="thumbnail" class="capitalize">Thumbnail<span class="manditory">*</span></label>
                  </div>
                  <div class="input-fields">
                    <input type="file" name="thumbnail" id="thumbnail">
                    <label class="form-error"></label>
                  </div>
                </div>
                <div class="fields">
                  <div class="input-label">
                    <input type="submit" class="capitalize transition" name="add_article" value="add article">
                  </div>
                  <div class="input-fields">
                    <label class="form-error"></label>
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
		</footer>
		<!-- end of footer -->
	</div>
</body>
</html>
