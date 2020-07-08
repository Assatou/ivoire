<!DOCTYPE html>
<html>
<head>
	<title>ivoire translator</title>
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	  <link type="text/css" rel="stylesheet" href="css/style.css">
	  <link type="text/css" rel="stylesheet" href="insert/ionicons-2.0.1/css/ionicons.min.css">
	  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	 <header>
            <div class="logo">
               <img src="img/logo2.png" width="200" >
            </div>
            <div class="header-content">
                <div class="breadcrumb">
                    <div class="br-content">
                        <span class="home">
                            <a href="#">DASHBOARD</a>
                        </span>
                        <span class="path-divider">/</span>
                        <span class="link">
                            <a href="#">Utilisateurs</a>
                        </span>
                        <span class="path-divider">/</span>
                        <span class="text">
                            <p>Ajout d'un utilisateur</p>
                        </span>
                    </div>
                </div>
                <div class="search-form">
                    <form action="#">
                        <input type="text" name="search" class="search-input">
                        <button type="submit">
                            <i class="ion-search"></i>
                        </button>
                    </form>
                </div>
                <div class="account" id="account">
                        <img src="img/avatar.png" alt="">
                        <i class="ion-chevron-down" id='ico-account'></i>
                </div>
                <div class="topmenu hide" id="topbar-menu">
                    <a href=""><i class="ion-person"></i> Mes informations</a>
                    <a href=""><i class="ion-briefcase"></i> Mon entreprise</a>
                    <a href=""><i class="ion-power"></i> Se deconnecter</a>
                </div>
            </div>
        </header>
        <div class="nav">
            <div class="menu">
                <a href="#"><i class="ion-home"></i> Dashboard</a>
            </div>
            <div class="submenu" id="submenu">
                <a href="#"><i class="ion-person"></i> Utilisateurs <i class="ion-chevron-down right" id="icon"></i></a>
                <div class="sub-content hide" id="sub-content">
                    <a href="#"> Ajouter </a>
                    <a href="#"> Supprimer</a>
                </div>
            </div>
            <div class="submenu" id="submenu">
                <a href="#"><i class="ion-email"></i> Messages <i class="ion-chevron-down right " id="icon"></i></a>
                <div class="sub-content hide" id="sub-content">
                    <a href="#"> Nouveau message</a>
                    <a href="#"> Messages reçus</a>
                    <a href="#"> Messages envoyés</a>
                </div>
            </div>
        </div>
        <div class="footer">
                <center>BY IVOIRE TRANSLATOR</center>
            
        </div>
    </body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>