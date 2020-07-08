<?php
include('../config.php');
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>


<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../style.css" />
	 <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	  <link type="text/css" rel="stylesheet" href="styl.css">
	  <link type="text/css" rel="stylesheet" href="insert/ionicons-2.0.1/css/ionicons.min.css">
	  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/7cb0e7c261.js" crossorigin="anonymous"></script>
	</head>
	<body style="background-color: #2a8950">
		 <header>
            <div class="logo">
               <img src="../img/logo2.png" width="200" >
            </div>
            <div class="header-content">
                <div class="breadcrumb">
                    <div class="br-content">
                        <span class="home">
                            <a href="">DASHBOARD</a>
                        </span>
                        <span class="path-divider">|</span>
                        <span class="link">
                            <a href="add_user.php"> ajouter un Utilisateurs</a>
                        </span>
                        <span class="path-divider">|</span>
                         <span class="link">
                            <a href="../supprimer_use.php"> suprimer un Utilisateurs</a>
                        </span>
                        
                    </div>
                </div>
            </div>
        </header>
	
		<div class="sucess">
		<h1 style="margin: 20px; font-size: 40px;">Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre espace admin.</p>
		<a href="../logout.php">Déconnexion</a>
		</ul>
		</div>
		<center><h2>Table des traductions</h2></center>
    <div class="row" style="float=center;">
    <div class="col-md-12 offset-md-">
      <table class="table table-responsive table-bordered table-hovered">
    <thead">
    <tr>
      <td>Id</td>
      <td>texte</td>
      <td>langue d'origine</td>
      <td>traduction</td>
      <td>langue de traduction</td>
      <td>Fichier audio</td>
      <td>Date</td>
      <td>Option</td>
      
    </tr>
    </thead>
    <tbody>
	<?php 
	
  $sql = "SELECT id, texte1, langue_start, texte2, langue_end, audio, date_enr FROM data";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_array($result)) { 
         ?>
      

    <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['texte1'] ?></td>
    <td><?php echo $row['langue_start'] ?></td>
    <td><?php echo $row['texte2'] ?></td>
    <td><?php echo $row['langue_end'] ?></td>
    
    <td>
      <audio controls>
        <source src="../<?php echo $row['audio'] ?>" type="audio/mpeg">
      </audio>
    </td>
    <td><?php echo $row['date_enr'] ?></td>
    <td>
    <a href="modifier.php?id=<?php echo $row['id']?>" class="btn btn-success"> <i class="fas fa-edit"></i></a>
    <a href="supprime_traduc.php?id=<?php echo $row['id']?>" class="btn btn-primary"> <i class="far fa-trash-alt"></i></a>
    </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    </div><br><br><br><br>

    <h2>langue_start</h2>
    <div class="row">
    <div class="col-md-4 ">
    <table class="table table-responsive table-bordered table-hovered">
    <thead>
    <tr>
      <td>Id</td>
      <td>langue d'origine</td>
      <td>date</td>
      <td>Option</td>
    </tr>
    </thead>
    <tbody>
	<?php 
	
  $sql = "SELECT id,langue,date_enrg FROM langue_start";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_array($result)) { 
         ?>
    <tr>
    <td><?php echo $row['id'] ?></td>
    
    <td><?php echo $row['langue'] ?></td>
    
    <td><?php echo $row['date_enrg'] ?></td>
    <td>
    <a href="../modifier_traduct.php?id=<?php echo $row['id']?>" class="btn btn-success"> <i class="fas fa-edit"></i></a>
    <a href="supprime_traduc.php?id=<?php echo $row['id']?>" class="btn btn-primary"> <i class="far fa-trash-alt"></i></a>
    </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    </div><br><br><br><br>

    <h2>langue_end</h2>
    <div class="row">
    <div class="col-md-4 ">
    <table class="table table-responsive table-bordered table-hovered">
    <thead>
    <tr>
      <td>Id</td>
      <td>langue de traduction</td>
      <td>date</td>
      <td>Option</td>
    </tr>
    </thead>
    <tbody>
	<?php 
	
  $sql = "SELECT id,langue,date_enrg FROM langue_end";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_array($result)) { 
         ?>
    <tr>
    <td><?php echo $row['id'] ?></td>
    
    <td><?php echo $row['langue'] ?></td>
    
    <td><?php echo $row['date_enrg'] ?></td>
    <td>
    <a href="modifier.php?id=<?php echo $row['id']?>" class="btn btn-success"> <i class="fas fa-edit"></i></a>
    <a href="supprime_traduc.php?id=<?php echo $row['id']?>" class="btn btn-primary"> <i class="far fa-trash-alt"></i></a>
    </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    </div><br><br><br><br>



	</body>
</html>