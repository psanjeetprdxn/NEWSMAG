<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header("Location: ../admin/login.php?msg=notLogin");
    exit();
}

function __autoload($classname)
{
    include "../classes/$classname.php";
}

// DELETE
if (isset($_GET['article_id'])) {
    $article = new Article;
    if ($article->delete($_GET['article_id'])) {
      header("Location: ../admin/browse.php?msg=deleted");
      exit();
  } else {
      header("Location: ../admin/browse.php?msg=noeDeleted");
      exit();
  }
} else {
    header("Location: ../admin/browse.php");
    exit();
}
