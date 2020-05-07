<?php
session_start();
unset($_SESSION['logged']);
unset($_SESSION['admin']);
header("Location: login.php");
?>