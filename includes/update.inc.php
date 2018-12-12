<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_GET['article_id'])) {
    $article_id = $_GET['article_id'];
} else {
    header("Location: ../admin/browse.php");
    exit();
}

function __autoload($classname)
{
    include_once "../classes/$classname.php";
}

// TITLE VALIDATION (checking empty value)
if (!empty(isset($_POST['title']))) {
    $title = $_POST['title'];
} else {
    header("Location: ../admin/update.php?msg=titleInvalid&article_id=$article_id");
    exit();
}

// DESCRIPTION VALIDATION (checking empty value)
if (!empty(isset($_POST['description']))) {
    $description = $_POST['description'];
} else {
    header("Location: ../admin/update.php?msg=descriptionInvalid&article_id=$article_id");
    exit();
}

// DESCRIPTION VALIDATION
if (!empty(isset($_POST['section']))) {
    $section = $_POST['section'];
} else {
    header("Location: ../admin/update.php?msg=sectionInvalid&article_id=$article_id");
    exit();
}

$article = new Article;

//THUMBNAIL VALIDATION
$extensions = array("jpeg", "jpg", "png");
$tmp = explode('.', $_FILES['thumbnail']['name']);
$file_ext = end($tmp);
if ($file_ext) {
    if (in_array($file_ext, $extensions) === false){
        header("Location: ../admin/update.php?msg=badExtension");
        exit();
    }
    $tmpName  = $_FILES['thumbnail']['tmp_name'];
    $fp = fopen($tmpName, 'rb');
    if ($article->updateThumbnail($title, $description, $section, $fp, $_GET['article_id'])) {
        header("Location: ../admin/browse.php?msg=update");
        exit();
    }
} else {
    if ($article->update($title, $description, $section, $_GET['article_id'])) {
        header("Location: ../admin/browse.php?msg=updated");
        exit();
    }
}
