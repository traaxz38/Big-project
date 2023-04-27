<?php
  require "conf/config.php"
?>
<?php if ($_SESSION['user']['admin'] == 0) {
  header('Location:index.php');
  exit();
} ?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>projet 5</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" />
  <link href="css/style.css" type="text/css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="css/animate.css">
  
</head>
<body>
  <?php 
    require "components/menueAdmin.php"
  ?>
  <?php
    $sql = "SELECT * FROM projets where ID=:ID"; 
    $pre = $pdo->prepare($sql);
    $pre->bindParam("ID", $_GET['id']);
    $pre->execute();
    $projets = $pre->fetch(PDO::FETCH_ASSOC);
  ?>
  <h1 class="center">Customize Project Page : </h1>
  <form method="post" action="action/updateProjet.php?id=<?php echo $projets['ID']?>" enctype="multipart/form-data">
    <div class="register center">
      <textarea type="text" placeholder="Project Name" size="2000" rows="5" cols="33" name="nomProjet"><?php echo $projets['nomProjet'] ?></textarea>
      </br>
      </br>
      <textarea type="text" placeholder="Title" size="2000"rows="5" cols="33" name="titre"><?php echo $projets['titre'] ?></textarea>
      </br>
      </br>
        <textarea type="text" placeholder="Presentation" size="2000"rows="5" cols="33" name="presentation"><?php echo $projets['presentation'] ?></textarea>
      </br>
      </br>
        <textarea type="text" placeholder="Description(1)" size="2000" name="description1" rows="5" cols="33"><?php echo $projets['description1'] ?></textarea>
      </br>
      </br>
        <textarea type="text" placeholder="Description(2)" size="2000" name="description2" rows="5" cols="33"><?php echo $projets['description2'] ?></textarea>
      </br>
      </br>
      <label>Please upload some images of the project : </label></br></br>
      <label>[Image Carrousel 1 à changé ou remettre la même] : </label></br>
      <input type='file' name='image'>
      <textarea type="text" placeholder="alt carrousel image 1" name="alt1" size="100"  rows="5" cols="33"><?php echo $projets['alt1'] ?></textarea>
      
        
      <label>[Image Carrousel 2 à changé ou remettre la même] : </label></br>
      <input type='file' name='image1'>
      <textarea type="text" placeholder="alt carrousel image 2" name="alt2" size="100" rows="5" cols="33"><?php echo $projets['alt2'] ?></textarea>
      
      
      <label>[Image Carrousel 3 à changé ou remettre la même] : </label></br>
      <input type='file' name='image2'>
      <textarea type="text" placeholder="alt carrousel image 3" name="alt3" size="100" rows="5" cols="33"><?php echo $projets['alt3'] ?></textarea>

      <label>[Image Accueil à changé ou remettre la même] : </label></br>
      <input type='file' name='image3'>
      <textarea type="text" placeholder="alt image accueil" name="altA" size="100" rows="5" cols="33"><?php echo $projets['altA'] ?></textarea>  
      
      <button class="btn waves-effect waves-light" type="submit" name="action">Update
        <i class="material-icons right">send</i>
      </button>
    </div> 
  </form>
    <!--  Scripts-->
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.min.js" charset="utf-8"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/script.js"></script>
  <script> new WOW().init();</script>
  <script>
    show();
  </script>
</body>
</html>