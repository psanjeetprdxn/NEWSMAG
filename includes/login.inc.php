<?php
function __autoload($classname)
{
    include "../classes/$classname.php";
}
//OBJECT OF VALIDATION CLASS
$validation = new Validation;

//USERNAME VALIDATION
if (isset($_POST['username'])) {
    if ($validation->validateUsername($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        header("Location:../admin/login.php?msg=usernameInvalid");
        exit();
    }
} else {
    header("Location:../admin/login.php?msg=usernameNotSet");
    exit();
}

//PASSWORD VALIDATION
if (isset($_POST['password'])) {
  if ($validation->validateUsername($_POST['username'])) {
      $password = $_POST['password'];
  } else {
      header("Location:../admin/login.php?msg=passwordInvalid");
      exit();
  }
} else {
    header("Location:../admin/login.php?msg=passwordNotSet");
    exit();
}

//LOGIN
$user = new User;
if ($user->login($username, $password)) {
    header("Location:../admin/index.php");
    exit();
} else {
    header("Location:../admin/login.php?msg=loginFail");
    exit();
}
