<?php 

$host="localhost"; 
$user="root"; 
$password=""; 
$database="absen-online"; 

$koneksi=mysql_connect($host,$user,$password)or die("Koneksi Database Gagal!!"); 
mysql_select_db($database,$koneksi) or die("Koneksi Database Gagal!!"); 


?>