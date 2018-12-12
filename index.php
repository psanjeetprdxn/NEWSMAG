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
	<link rel="stylesheet" href="assets/vendor/font/fontawesome-all.css">
	<!-- Default style-sheet is for 'media' type screen (color computer display).  -->
	<link rel="stylesheet" media="screen" href="assets/css/master.css">
</head>
<body>
	<!-- creating object of article class -->
	<?php
  function __autoload($classname)
  {
      include "classes/$classname.php";
  }
  $article = new Article;
	?>
	<div class="container">
		<!-- Start of the header -->
		<header>
      <div class="header-top">
        <div class="wrapper cf">
          <ul class="social">
            <li>
              <a href="#FIXME" class="transition" target="_blank" rel="nofollow" title="Facebook">facebook</a>
            </li>
            <li>
              <a href="#FIXME" class="transition" target="_blank" rel="nofollow" title="Instagram">instagram</a>
            </li>
            <li>
              <a href="#FIXME" class="transition" target="_blank" rel="nofollow" title="Twitter">twitter</a>
            </li>
            <li>
              <a href="#FIXME" class="transition" target="_blank" rel="nofollow" title="Pintrest">pintrest</a>
            </li>
            <li>
              <a href="#FIXME" class="transition" target="_blank" rel="nofollow" title="Linkedin">linkedin</a>
            </li>
            <li>
              <a href="#FIXME" class="transition" target="_blank" rel="nofollow" title="Youtube">youtube</a>
            </li>
          </ul>
        </div>
      </div><!-- end of header-top -->
      <div class="header-mid">
        <div class="wrapper cf">
          <h1>
            <a href="#FIXME" title="NewsMag">
              <img src="https://via.placeholder.com/117x38" alt="NewsMag">
            </a>
          </h1>
          <div class="ad">
            <a href="#FIXME" title="Buy Now">
              <img src="https://via.placeholder.com/486x61" alt="Buy Now">
            </a>
          </div>
        </div>
      </div> <!-- end of header-mid-->
      <div class="header-bot">
        <div class="wrapper">
          <nav>
            <ul>
              <li>
                <a href="#FIXME" class="uppercase transition" title="Home">home</a>
              </li>
              <li>
                <a href="#FIXME" class="uppercase transition" title="blog">blog</a>
                <ul class="drop-list">
                  <li>
                    <a href="#FIXME" class="uppercase transition" title="Dummy">Dummy</a>
                  </li>
                  <li>
                    <a href="#FIXME" class="uppercase transition" title="Dummy">Dummy</a>
                  </li>
                  <li>
                    <a href="#FIXME" class="uppercase transition" title="Dummy">Dummy</a>
                  </li>
                  <li>
                    <a href="#FIXME" class="uppercase transition" title="Dummy">Dummy</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#FIXME" class="uppercase transition" title="Featured">Featured</a>
              </li>
              <li class="search">
                <a href="#FIXME" class="uppercase transition" title="Search">search</a>
              </li>
            </ul>
          </nav>
        </div><!-- end of header bottom -->
      </div>
		</header>
		<!-- end of header -->
		<!-- Start of main -->
		<main>
			<!-- start of banner -->
			<section class="banner">
        <div class="wrapper">
          <div class="travel">
            <div class="seq">
              <a href="#FIXME" class="transition" title="Travel">travel</a>
              <span>march 25, 2016 - by</span>
              <a href="#FIXME" class="transition name" title="John Smith">john smith</a>
            </div>
            <h2>Changing Tastes: how society, evolution and history shapes our personality.</h2>
          </div>
          <div class="bot">
            <span>today's hot topic</span>
            <ul>
              <li>As Party Splits Over Trump, Republican States May Tilt</li>
              <li>Trump Faltering? Die-Hard Fans Refuse to but it</li>
            </ul>
          </div>
          <ul class="dots">
            <li>
              <span class="transition">first</span>
            </li>
            <li>
              <span class="transition">second</span>
            </li>
          </ul>
        </div>
      </section>
			<!-- end of banner -->
			<!-- start of article section -->
			<div class="articles">
        <div class="wrapper">
          <!-- start of politics article -->
          <?php
          $politics = $article->displayBySection('politics');
          if ($politics) {
          ?>
          <div class="politics">
            <div class="section">
              <span class="capitalize">politics</span>
            </div>
            <ul>
              <?php
              foreach ($politics as $politic) {
              ?>
              <li>
                <article>
                  <div class="thumbnail">
                    <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($politic['thumbnail_image']); ?>" alt="<?php echo $politic['title']; ?>">
                  </div>
                  <h3>
										<a href="#FIXME" title="<?php echo $politic['title']; ?>"><?php echo $politic['title']; ?></a>
									</h3>
                  <div class="article-details">
                    <span class="date"><?php echo date('F j, Y', strtotime($politic['date'])); ?></span>
                    <span class="comments">0</span>
                  </div>
                  <p><?php echo $politic['description']; ?></p>
                </article>
              </li>
              <?php
              }
              ?>
            </ul>
          </div>
          <?php
          }
          ?>
          <!-- start of tech article -->
          <?php
          $tech = $article->displayBySection('tech');
          if ($tech) {
          ?>
          <div class="tech">
            <div class="section">
              <span class="capitalize">tech</span>
            </div>
            <ul>
              <?php
              foreach ($tech as $tec) {
              ?>
              <li>
                <article>
                  <div class="thumbnail">
                    <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($tec['thumbnail_image']); ?>" alt="<?php echo $tec['title']; ?>">
                  </div>
                  <h3>
                  	<a href="#FIXME" title="<?php echo $tec['title']; ?>"><?php echo $tec['title']; ?></a>
                  </h3>
                  <div class="article-details">
                    <span class="date"><?php echo date('F j, Y', strtotime($tec['date'])); ?></span>
                    <span class="comments">0</span>
                  </div>
                  <p><?php echo $tec['description']; ?></p>
                </article>
              </li>
              <?php
              }
              ?>
            </ul>
          </div>
          <?php
          }
          ?>
          <!-- start of world article -->
          <?php
          $world = $article->displayBySection('world');
          if ($world) {
          ?>
          <div class="world">
            <div class="section">
              <span class="capitalize">world</span>
            </div>
            <ul>
              <?php
              foreach ($world as $worlds) {
              ?>
              <li>
                <article>
                  <div class="thumbnail">
                    <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($worlds['thumbnail_image']); ?>" alt="<?php echo $worlds['title']; ?>">
                  </div>
                  <h3>
                  	<a href="#FIXME" title="<?php echo $worlds['title']; ?>"><?php echo $worlds['title']; ?></a>
                  </h3>
                  <div class="article-details">
                    <span class="date"><?php echo date('F j, Y', strtotime($worlds['date'])); ?></span>
                    <span class="comments">0</span>
                  </div>
                  <p><?php echo $worlds['description']; ?></p>
                </article>
              </li>
              <?php
              }
              ?>
            </ul>
          </div>
          <?php
          }
          ?>
        </div>
			</div>
			<!-- end fo article section -->
		</main>
		<!-- End of main -->
	</div>
</body>
</html>
