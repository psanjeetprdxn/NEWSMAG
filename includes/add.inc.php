<?php
if (!isset($_SESSION)) {
    session_start();
}

// Allow if session exists
if (!isset($_SESSION['user_id'])) {
    header("Location: ../admin/login.php?msg=notLogin");
    exit();
}

function __autoload($classname)
{
    include_once "../classes/$classname.php";
}

// FOR RETAINING SIGNUP FORM DATA
$retain = array();
$retain['title'] = $_POST['title'];
$retain['description'] = $_POST['description'];
$retain['section'] = $_POST['section'];
$_SESSION['retainFormDataArticle'] = $retain;

$validation = new Validation;

// TITLE VALIDATION
if (!empty(isset($_POST['title']))) {
    $title = $_POST['title'];
} else {
    header("Location: ../admin/add.php?msg=titleInvalid");
    exit();
}

// DESCRIPTION VALIDATION
if (!empty(isset($_POST['description']))) {
    $description = $_POST['description'];
} else {
    header("Location: ../admin/add.php?msg=descriptionInvalid");
    exit();
}

// SECTION VALIDATION
if (!empty(isset($_POST['section']))) {
    $section = $_POST['section'];
} else {
    header("Location: ../admin/add.php?msg=sectionInvalid");
    exit();
}

// THUMBNAIL(article image) VALIDATION
$extensions = array("jpeg", "jpg", "png");
$tmp = explode('.', $_FILES['thumbnail']['name']);
$file_ext = end($tmp);
if (in_array($file_ext, $extensions) === false) {
   header("Location: ../admin/add.php?msg=badExtension");
   exit();
}
$tmpName  = $_FILES['thumbnail']['tmp_name'];
$thumbnail = fopen($tmpName, 'rb');

// ADD ARTICLE
$article = new Article;
if ($article->add($title, $description, $section, $thumbnail)) {
    unset($_SESSION['retainFormDataArticle']);
    header("Location: ../admin/add.php?msg=articleAdded");
    exit();
} else {
    header("Location: ../admin/add.php?msg=articleNotAdded");
    exit();
}
