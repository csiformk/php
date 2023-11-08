<?php
session_start();

$_SESSION = [];

session_unset();
session_destroy();

echo $_SESSION['favcolor'];