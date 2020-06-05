<?php
require_once 'lib/config.php';
require_once 'lib/functions.php';

$username = secure($_POST['username']);
$password = secure($_POST['password']);
//query select same user and same password for login
$user = $mysqli->query("select * from users where username = '$username' and password = '$password'");
$user = $user->fetch_object();
if ($user) {

    $_SESSION['user'] = $user;
    $_SESSION['is_login'] = true;
    $mysqli->query("INSERT INTO logintime (username,login_date) VALUES('$username',now())");

    header("Location: employees.php");
    exit();
}
$_SESSION['user'] = null;
$_SESSION['is_login'] = false;
header("Location: index.php");
exit();
?>
