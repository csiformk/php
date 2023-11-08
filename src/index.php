<?php
session_start();

$_SESSION['favcolor'] = 'red';


?>

<a href="session.php">Page lecture session</a>

<a href="kill_session.php">Suppression des sessions</a>

<?php

// Cookie
/* $value = 'ceppic';

setcookie("TestCookie", $value, time()+3600);

echo $_COOKIE['TestCookie']; */