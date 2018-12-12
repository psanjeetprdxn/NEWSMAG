<?php
if (!isset($_SESSION)) {
    session_start();
}

function __autoload($classname)
{
    include_once "../classes/$classname.php";
}

// FOR RETAINING SIGNUP FORM DATA
$retain = array();
$retain['name'] = $_POST['name'];
$retain['username'] = $_POST['username'];
$_SESSION['retainFormData'] = $retain;

$validation = new Validation;

// NAME VALIDATION
if (!empty(isset($_POST['name']))) {
    if ($validation->validateName($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        header("Location: ../admin/signup.php?msg=nameInvalid");
        exit();
    }
} else {
    header("Location: ../admin/add.php?msg=nameNotSet");
    exit();
}

//USERNAME VALIDATION
if (isset($_POST['username'])) {
    if ($validation->validateUsername($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        header("Location:../admin/signup.php?msg=usernameInvalid");
        exit();
    }
} else {
    header("Location:../admin/signup.php?msg=usernameNotSet");
    exit();
}

// CHECKS IF USERNAME EXISTS
if ($validation->isUsernameExists($_POST['username'])) {
    header("Location:../admin/signup.php?msg=usernameExists");
    exit();
}

//PASSWORD VALIDATION
if (isset($_POST['password'])) {
    if ($validation->validatePassword($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        header("Location:../admin/signup.php?msg=passwordInvalid");
        exit();
    }
} else {
    header("Location:../admin/signup.php?msg=passwordNotSet");
    exit();
}

//SIGNUP
$user = new User;
if ($user->register($name, $username, $password)) {
    unset($_SESSION['retainFormData']);
    header("Location: ../admin/signup.php?msg=signupSucces");
    exit();
} else {
    header("Location: ../admin/signup.php?msg=signupFail");
    exit();
}
