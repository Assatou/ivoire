<!DOCTYPE html>
<html>
<head>
	<title>ajouter la langue</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	  <link type="text/css" rel="stylesheet" href="styl.css">
	  <link type="text/css" rel="stylesheet" href="insert/ionicons-2.0.1/css/ionicons.min.css">
	  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	  <style type="text/css">
	  	.container{
	  		width: 400px;
	  		height: 300px;
	  		background: #2a8950;
	  		text-align: center;
	  		padding-top: 20px;
	  		padding-bottom: 20px;
	  	}
	  	
	  </style>
</head>
<body>
	 <header>
            <div class="logo">
               <img src="img/logo2.png" width="200" >
            </div>
            <div class="header-content">
                <div class="breadcrumb">
                    <div class="br-content">
                       
                            <center><h1>Ajouter la langue du mot</h1></center>
                        
                        
                        
                    </div>
                </div>
            </div>
        </header>
	<div class="container">
	

	<form action="langue_start.php" method="POST">
  <div class="form-group">
    <label for="email">langue start:</label>
    <input type="" class="form-control" placeholder="ajouter une langue" id="" name="langue">
  </div>
  <div class="form-group">
    <label for="">date:</label>
    <input type="date" class="form-control" placeholder="" id="" name="date_enrg">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">AJOUTER</button>
</form>
<?php
include('config.php');
if(isset($_POST["submit"])){
  $langue = $_POST['langue'];
  $date = $_POST['date_enrg'];
  $sql = "INSERT INTO langue_start (langue,date_enrg) VALUES ('$langue',now())";
// $sql->bind_param('s',$langue,$date);
// $sql->execute();

if(mysqli_query($conn,$sql)){
   echo "ajouter avec succès";
 }else{
  echo "Error: " . $sql . "<br>" . $conn->error;
 }

// if ($conn->query($sql) === TRUE) {
//   echo "ajouter avec succès";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();


}
?>
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
</div>
</body>
</html>