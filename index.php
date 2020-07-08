<?php
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
	<link rel="stylesheet" href="style.css" />
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
               <img src="img/logo2.png" width="200" >
            </div>
            <div class="header-content">
                <div class="breadcrumb">
                    <div class="br-content">
                        <span class="home">
                            <a href="">DASHBOARD operateur</a>
                        </span>
                        <span class="path-divider">|</span>
                        <span class="link">
                            <a href="ajouter_traduc.php"> ajouter une traduction</a>
                        </span>
                        
                    </div>
                </div>
            </div>
        </header>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<br>
		<br>
		<br>
		<h1>C'est votre espace operateur.</h1>
		<br>
		<br>
		<br>
		<a href="logout.php">Déconnexion</a><br>
		<br>
		<br>
		<br>
		<a href="langue_start.php"> ajouter langue d'origine</a><br>
		<a href="langue_end.php"> ajouter langue de traduction</a>
		<br>
		<br>
		<br>
		<a href="logout.php">Déconnexion</a><br>

		
		</div>
	</body>
</html>