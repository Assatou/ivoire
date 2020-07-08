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
<?php include('config.php');



if(isset($_POST["submit"])){

  
  /*$sql = "INSERT INTO `data` (texte1, langue_start, texte2, langue_end, audio, date_enr)
  VALUES (?,?,?,?,?,?)";
  $resultat = $conn->prepare($sql)->execute($texte1, $langue_start, $texte2, $langue_end, $target_file, $date);*/
 $texte1 = $_POST['mot'];
 $langue_start = $_POST['lang'];
 $texte2 = $_POST['traduction'];
 $langue_end = $_POST['langue'];
 $date = date("Y-m-d h:i:s");
 // $files_name = $_FILES["audio"]["name"];
 $target_dir = "daudio/";
 $target_file = $target_dir.basename($_FILES["audio"]["name"]);
  

  $sql = "INSERT INTO data (texte1, langue_start, texte2, langue_end, audio, date_enr)
  VALUES ('$texte1','$langue_start','$texte2','$langue_end','$target_file','$date')";
  

  // $resultat = $sql->execute();
  // if ($resultat) {
  //  echo "insertion effectué";
  // } else {
  //   echo "insertion echoué";
  // }


   
  
  if (move_uploaded_file($_FILES["audio"]["tmp_name"],$target_file))
  {
   echo "Audio saved" ;
  }


// prepare and bind
 
 // $stmt = $conn->prepare ("INSERT INTO data(texte1, langue_start, texte2, langue_end, audio, date_enr) VALUES (?, ?, ?, ?, ?, ?)");
// var_dump($stmt);


//test 

// $sql = 'INSERT INTO data(texte1, langue_start, texte2, langue_end, audio, date_enr) VALUES (?, ?, ?, ?, ?, ?)';
if($query = $conn->prepare($sql)){
  // $stmt->bind_param("sssssd", $texte1, $langue_start, $texte2, $langue_end, $target_file, $date);
  //   $query->execute();
    //rest of code here
}else{
   //error !! don't go further
  //var_dump($conn->error);
}

// set parameters and execute
// $texte1 = "mot2";
// $langue_start = "lang2";
// $texte2 = "traduction2";
// $langue_end = "langue2";
// $date = date("Y-m-d h:i:s");

// $target_dir = "daudios/";
// $target_file = $target_dir.basename($_FILES["audio"]["name"]);
// $resultat = $stmt->execute();


// echo "New records created successfully";
  



if (mysqli_query($conn, $sql)) {
  echo '<script language="Javascript">';
        echo 'document.location.replace("index.php")'; // -->
        echo ' </script>';

    echo "";
} else {
  echo "";
}

}else{
    echo "";
}

// mysqli_close($conn);



?>
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
           <form action="" enctype="multipart/form-data"  method="POST">
               <fieldset>
                 
                 
                 <div class="form-group">
                   <label for="nom">Entrez le mots</label>
                   <input type="text" class="form-control" id="nom" name="mot">
                 </div>
                 
                 <div class="form-group">
                   <label for="selection">choisir une langue</label>
                   <select id="selection" class="form-control" name="lang">
                      <option value="liste">Liste de choix</option>
                      <?php
                        $sql = "SELECT * FROM langue_start";
                        $result = mysqli_query($conn, $sql);
                       
                        while ($row = mysqli_fetch_array($result)) {
                          echo '<option>'.$row['langue'].'</option>';
                         
                        }
                      ?> 
                    </select>
                 </div>
                  <div class="form-group">
                   <label for="nom">donner la traduction</label>
                   <input type="text" class="form-control" id="nom" name="traduction">
                 </div>
                 
                 <div class="form-group">
                   <label for="selection">Une liste de choix</label>
                   <select id="selection" class="form-control" name="langue">
                     <option value="">Liste de choix</option>
                     <?php
                        $sql = "SELECT * FROM langue_end";
                        $result = mysqli_query($conn,$sql);
                        var_dump($result);
                        while ($row =mysqli_fetch_array($result)) {
                          echo '<option>'.$row['langue'].'</option>';
                        }
                      ?> 
                   </select>
                   <div>
                
                 </div>
                 <div class="form-group col-md-6">
                  <label for="inputEmail4">Date d'ajout</label>
                  <input type="date" class="form-control" id="inputEmail4" name="date_enr">
                </div>
                 <div class="form-group">
                   <label for="audio">ajouter l'audio</label>
                   <input type="file" name="audio">
                 </div>

                 <input type="submit" name="submit" value="AJOUTER" class="box-button"  style="background-color: #2a8950" />
               </fieldset>
             </form>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="app.js"></script>

</body>
</html>