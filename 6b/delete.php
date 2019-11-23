<?php

include('config.php');


if(isset($_GET['id'])){	
	$id = $_GET['id'];
	
	$cek = mysqli_query($connection, "SELECT * FROM product WHERE id='$id'") or die(mysqli_error($connection));
	
	if(mysqli_num_rows($cek) > 0){
		$del = mysqli_query($connection, "DELETE FROM product WHERE id='$id'") or die(mysqli_error($connection));
		if($del){
			echo '<script>alert("Data deleted successfully."); document.location="index.php";</script>';
		}else{
			echo '<script>alert("Failed to delete data."); document.location="index.php";</script>';
		}
	}else{
		echo '<script>alert("ID not found"); document.location="index.php";</script>';
	}
}else{
	echo '<script>alert("ID not found"); document.location="index.php";</script>';
}

?>