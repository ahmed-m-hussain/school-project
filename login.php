<?php
require_once 'lib/config.php';
require_once 'lib/functions.php';

$username = secure($_POST['username']);
$password = secure($_POST['password']);
//query select same user and same password for login
$user = $mysqli->query("select * from employees where email = '$username' and password = '$password'");
$user = $user->fetch_object();
if ($user) {
    $_SESSION['user'] = $user;
    $_SESSION['is_login'] = true;
    header("Location: employees.php");
    exit();
}
$_SESSION['user'] = null;
$_SESSION['is_login'] = false;
header("Location: index.php");
exit();
?>
