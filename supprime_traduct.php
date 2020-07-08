<?php
 	include("config.php");

 	if (isset($_POST['id'])) {
 		$id = $_POST['id'];
 		$query = "DELETE FROM data WHERE id = $id";
 		$result = mysqli_query($conn, $query);

 		if (!$result) {
 			die("Failed");
 		}
 		
 		header("location: home.php");

 	}
 ?>