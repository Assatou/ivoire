<?php 
 
    SESSION_START();
    include('db.php');

        $nom = $email = $phone = $ville = $pays = $reprisemp = $nomdepage = $password = $adresse ="";
      if(isset($_post['envoyer']) )  {
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $ville = $_POST["ville"];
        $pays = $_POST["pays"];
        $reprisemp = $_POST["reprisemp"];
        $nomdepage = $_POST["nomdepage"];
        $password = $_POST["password"];
        $adresse =$_POST["adresse"];

        $sql="INSERT  into entreprise(nom,adresse,email,contact,phone,passworde,reprisemp,nomdepage)" VALUES($nom,$adresse,,$email,$ville,$phone, $password, $reprisemp,$nomdepage);
    }  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>CREER UN COMPTE</title>
  </head>
  <body>
     <div class="container" style="background-color: #ff6600; padding-top: 35px;"> </div>

        <div class="row" >
            <div class="col-md-4" >
                <div class="row" style="padding-left: 50%; padding-top:10% ;"> 
                    <img src="logo.png" alt="logo" class="img-fluid" style="width: 90px ;" > 
                </div>
                <p style="margin-left: 45%; color: #ff6600;">Avec nous obtenez une page web qui <br>
                    écoute et parle à vos visiteurs.
                </p>
                <button type="button" class="btn btn-default " style="margin-left: 50%; color: #ff6600;" >connexion</button> 
            </div>

            <div class="col-md-6" style="width: 50%; padding-top: 5%; padding-bottom: 5%;">
                <div class="container" style="background-color: #ff6600;padding-top: 3%; padding-top: 3%; ">CREER UN COMPTE</div>
                   
                <form  method="POST" action="formulaire.php" style="border: #ff6600 solid 2px; padding-top: 5%; margin-top: 2%; " >
                        <div class="row " style="padding-left: 20%; ">
                            <div class="form-row">
                                <div class="form-group" >
                                    <label for="name" style="color:#ff6600 ;">Nom et Prenom</label>
                                    <input type="text" id="nom" name="name" class="form-control" required placeholder="Votre nom et prénoms
                                    ">
                                </div>
                                <div class="form-group ml-3" >
                                    <label for="email" style="color:#ff6600">Email</label>
                                    <input type="email" id="email" name="email" class="form-control " required placeholder="Votre Email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group" >
                                    <label for="phone" style="color:#ff6600">telephone</label>
                                    <input type="" id="telephone" name="phone" class="form-control" required placeholder="+225008923256" >
                                </div>
                                <div class="form-group ml-3" >
                                    <label for="pays" style="color:#ff6600">Pays</label>
                                    <input type="text" id="Pays" name="pays" class="form-control" required placeholder="Cote d’Ivoire">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="form-group" >
                                    <label for="ville" style="color:#ff6600">Ville</label>
                                    <input type="text" id="Ville" name="ville" class="form-control" required placeholder="Votre ville">
                                </div>
                                <div class="form-group ml-3" >
                                    <label for="adresse" style="color:#ff6600">Adresse</label>
                                    <input type="" id="Adresse" name="adresse" class="form-control" required placeholder="Votre Adresse">
                                </div>
                            </div>
                            <div class="row">
                                <label for="nomdepage" style="color: #ff6600;">Nom de la page</label>
                                <input type="text" id="nomdepage" name="nomdepage" class="form-control" required placeholder="nom de votre page">
                            </div>
                            <div class="row form-group">
                                <div class="form-group" >
                                    <label for="password" style="color:#ff6600">Mot de passe </label>
                                    <input type="password" id="motdepasse" name="password" class="form-control" required placeholder="**************">
                                </div>
                                <div class="form-group ml-3" >
                                    <label for="reprisemp" style="color:#ff6600">Reprendre le mot de passe</label>
                                    <input type="password" id="reprisemp" name="reprisemp" class="form-control" required placeholder="**************">
                                </div>
                            </div>
                                <label class="checkbox-inline ">
                                <input type="checkbox" value="" style="color:#ff6600;">Acceptez nos termes et conditions d’utilisation
                                </label>
                            </div> 
                            <div>
                                <button type="button" class="btn btn-primary " name="envoyer" style="margin-left: 50%; color: #ff6600;" >envoyer</button> 
                            </div>
                    </form>
                </div>
           </div>
            
        </div>

     <div class="container" style="background-color: #ff6600; padding-top: 35px; margin-bottom: 3%;"> </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>