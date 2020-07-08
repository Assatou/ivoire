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
                            <a href="">DASHBOARD</a>
                        </span>
                       
                        
                    </div>
                </div>
            </div>
        </header>
	
		<div class="sucess">
		<center><h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre espace superviseur.</p>
		<a href="logout.php">Déconnexion</a></center>
		</ul>
		</div>

	</body>
</html>