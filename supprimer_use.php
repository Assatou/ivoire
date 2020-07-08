<?php
 	include("config.php");

 	if (isset($_GET['id'])) {
 		$id = $_GET['id'];
 		$query = "DELETE FROM utilisateur WHERE id = $id";
 		$result = mysqli_query($con, $query);

 		if (!$result) {
 			die("Failed");
 		}
 		
         header("location: index.php");}
         echo 'utilisateur supprimé'

 	
 ?>