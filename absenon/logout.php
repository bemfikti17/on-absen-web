<?php 
session_start(); //yap ini udah bener :)
session_destroy(); 
header("Location: login.php");
?>
