<?php 

session_start();
$_SESSION['username'] = '';
$_SESSION['password'] = '';

session_destroy();
header('location: login.php');
exit();

?>

