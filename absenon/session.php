<?php 
session_start();
require_once 'config/config.php';
$username = $_SESSION['username'];
if (isset($username)) {
	$result = mysql_query("SELECT * FROM koordinator where username='$username'");

	
		while($row = mysql_fetch_array($result)){	
			$koor	 = $row['npm'];
		}

	$result2 = mysql_query("SELECT * FROM anggota where npm='$koor'");
		while($row2 = mysql_fetch_array($result2)){	
			$nm_koor	 = $row2['nama'];
		}
}		
else {
	header("Location: login.php");
}

?>