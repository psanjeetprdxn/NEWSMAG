<?php
if (!isset($_SESSION)) {
    session_start();
}
function __autoload($classname)
{
    include_once "../classes/$classname.php";
}
$user = new User;
?>
<div class="admin-header-wrapper cf">
  <div class="admin-header-left">
    <h1>
      <a href="index.php" title="Ad Age CMS">Ad Age Group | CMS</a>
    </h1>
  </div>
  <ul>
    <?php
    if (!isset($_SESSION['user_id'])) {
    ?>
    <li>
      <a href="signup.php" class="transition capitalize" title="Sign Up">sign up</a>
    </li>
    <li>
      <a href="login.php" class="transition capitalize" title="Login">log in</a>
    </li>
    <?php
    } else {
    ?>
    <li>
      <a href="#FIXME" class="profile-name transition capitalize" title="Sign Up"><?php echo $user->getNameById($_SESSION['user_id']); ?></a>
    </li>
    <li>
      <a href="../includes/logout.inc.php" class="transition capitalize" title="Logout">logout</a>
    </li>
    <?php
    }
    ?>
  </ul>
</div>
