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
          <div class="all-articles">
            <div class="search-form">
              <form action="#FIXME" method="GET">
                <select name="section">
                  <option class="capitalize" selected disabled>Section</option>
                  <option value="politics" class="capitalize">politics</option>
                  <option value="tech" class="capitalize">tech</option>
                  <option value="world" class="capitalize">world</option>
                </select>
                <input type="submit" class="transition capitalize" name="Search" value="Search">
              </form>
            </div>
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
              <div class="table-row-data">
                <div class="table-data"><span></span></div>
                <div class="table-data update"><a class="edit" href="#FIXME" title="Update">Update</a></div>
                <div class="table-data"><span></span></div>
                <div class="table-data"><span></span></div>
                <div class="table-data"><span></span></div>
                <div class="table-data"><a class="delete" href="#FIXME" title="Delete">Delete</a></div>
              </div>
                <!-- end of article data -->
            </div><!-- end of article details -->
            <span class="article-message">No data to show</span>
          </div>
        </div>
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
