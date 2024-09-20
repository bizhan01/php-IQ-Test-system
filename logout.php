<?php
session_start();
unset($_SESSION['CHECK']);
header("location:login.php");
 ?>
