<?php 
session_start();
require_once '../config/conn.php';
$username = $_SESSION['user'];
if (isset($username)) {
	$sql = "SELECT * FROM koordinator where username='$username'";
	$result = mysqli_query($conn, $sql);
	
		if($row = mysqli_fetch_assoc($result)){	
			$koor	 = $row['npm'];
		}

	$sql2 = "SELECT * FROM anggota where npm='$koor'";
	$result2 = mysqli_query($conn, $sql2);
	
		if($row2 = mysqli_fetch_assoc($result2)){	
			$nm_koor	 = $row2['nama'];
		}
}		
else {
	header('Location: ../login.php');
}

?>