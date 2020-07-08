<?php session_start(); ?>
<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Traduction</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/7cb0e7c261.js" crossorigin="anonymous"></script>
        
</head>
<style>
.color{
  background-color: #2a8950;
}

#color{
  background-color: white;
}
</style>
<body class='color'>

<div class="container center-div" id="color">
	  
      <div class="container row d-flex flex-row justify-content-center mb-8">
	    <div class="admin-form shadow p-4">
    <style>

    </style>
    <header>
        <center> <h3 class="text-success"><a href="utilisateur.php"> IVOIRE LANGUAGE TRANSLATOR </a></h3>
        <a href="#"><img src="img/logo.png" alt="logo"></a>
        </center>
    </header>
    <main class="">

        <div class="container center-block">
        <br>
        <div class="form-group">
        <form action="" method="POST" enctype="multipart/form-data">

          <select class="form-control" name ="langue_start" id ="langue_start">
          <option value="" class="" > Sélectionner une langue </option>
            <?php
              $sql = "SELECT * FROM langue_start";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($result)) {
                echo '<option>'.$row['langue'].'</option>';
              }
            ?> 
          </select>
         <br> 
        <textarea name="champ1" id="champ1" cols="35" rows="5"></textarea>
        </div>

        <div class="form-group">
          <select class="form-control" name ="langue_end" id ="langue_end">
          <option value="" class="" > Sélectionner une langue </option>
            <?php
              $sql = "SELECT * FROM langue_end";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($result)) {
                echo '<option>'.$row['langue'].'</option>';
              }
            ?> 
          </select>
        
        <input type="submit" value="Traduire" name="Traduire" class="btn btn-warning">
          </form>
        </div>
        </div>
        
        
        </div>
    </main>

    <div class="form-group">

    <?php 
    
    if (isset($_POST['Traduire'])) {

        $search_text = $_POST['champ1'];
        $langue_start = $_POST['langue_start'];
        $langue_end = $_POST['langue_end'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $date = date("Y-m-d h:i:s");
        $sql = "INSERT INTO recherche (search_text, langue_start, langue_end, ip, date) VALUES ('$search_text','$langue_start','$langue_end', '$ip', '$date')";
    
        if (mysqli_query($conn, $sql)) {

          $query = "SELECT * FROM data WHERE texte1 = '$search_text' AND langue_start = '$langue_start' AND langue_end = '$langue_end' ";
            $result = mysqli_query($conn, $query);
            


            while($row = mysqli_fetch_array($result)) { ?>

              <div class="container center-div">
              
              <div class="container row d-flex flex-row justify-content-center mb-8">
              <div class="admin-form shadow p-4">
              <table class="table table-bordered">
                <br><br><br><br><br><br><br><br><br><br>
              <tr>
              <td> <?php echo $row['texte2']?> </td>
              <br>
              <td>
                <audio controls>
                  <source src="<?php echo $row['audio'] ?>" type="audio/mpeg">
                </audio>
              </td>
              </tr>
              </table><br>
              <p class="text-sm"><a href="ajouter_traduc.php">Soumettre une traduction ?</a></p>
              <br><br><br>
              </div>
              </div>
              </div>
              <?php } ?>

              <?php    
          }
    }else{
      echo '';
    }
    
    
    ?>

</div>
  </div>
  </div>


</div>
</div>
</div>
</body>
</html>