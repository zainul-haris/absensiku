<?php
	include 'koneksi.php';

	$passw  = md5($_POST['password']);
	$user 	= $_POST['username'];
	$pass 	= $_POST['password'];
	
	$query	= mysqli_query($koneksi, "SELECT * FROM user WHERE nama='$user' and pass='$passw'");

	$count	= mysqli_num_rows($query);

	$hasil 	= mysqli_fetch_array($query);

	if ($count > 0)
	{
		
	}
	


	

?>