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
	  <link type="text/css" rel="stylesheet" href="styl.css">
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
                            <a href="index.php">DASHBOARD</a>
                        </span>
                        <span class="path-divider">/</span>
                        <span class="link">
                            <a href="index.php">Utilisateurs</a>
                        </span>
                        
                    </div>
                </div>
            </div>
        </header>
        <center><h1 style="color: black; margin-top: 30px; font-size: 30px;" ><b>AJOUTER UNE TRADUCTION</b></h1></center>
           <form>
               <fieldset>
                 
                 
                 <div class="form-group">
                   <label for="nom">Entrez le mots</label>
                   <input type="text" class="form-control" id="nom">
                 </div>
                 
                 <div class="form-group">
                   <label for="selection">choisir une langue</label>
                   <select id="selection" class="form-control">
                     	<option value="">Liste de choix</option>
                       <option value="">anglais</option>
                       <option value="">français</option>
                    </select>
                 </div>
                  <div class="form-group">
                   <label for="nom">donner la traduction</label>
                   <input type="text" class="form-control" id="nom">
                 </div>
                 
                 <div class="form-group">
                   <label for="selection">Une liste de choix</label>
                   <select id="selection" class="form-control">
                     <option value="">Liste de choix</option>
                       <option value="">Baoulé</option>
                       <option value="">Agni</option>
                       <option value="">Bété</option>
                       <option value="">Dida</option>
                       <option value="">Sénoufo</option>
                       <option value="">Gouro</option>
                       <option value="">Wobè</option>
                       <option value="">Tagbanan</option>
                       <option value="">Gagou</option>
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="audio">ajouter l'audio</label>
                   <input type="hidden" name="MAX_FILE_SIZE" value="2097152"> <input type="file" name="nom_du_fichier">
                 </div>
                 <input type="submit" name="submit" value="MODIFIER" class="box-button"  style="background-color: #2a8950" />
               </fieldset>
             </form>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="app.js"></script>

</body>
</html>