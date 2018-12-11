<?php
if (!isset($_SESSION)) {
    session_start();
}
session_unset('retainFormDataArticle');
session_unset('retainFormData');
session_unset('user_id');
header("Location: ../admin/login.php");
