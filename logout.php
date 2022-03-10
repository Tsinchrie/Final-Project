<?php


session_start();

$_SESSION = array();

header("Location:Home.php");

exit();