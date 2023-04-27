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
  <h1 class="center">Add Competence To Project Page : </h1>
  <form method="post" action="action/sendCompToProjet.php" enctype="multipart/form-data">
    <div class="register center">
      <textarea type="text" placeholder="Id projets" name="id_projets"></textarea>
      </br>
      </br>
      <textarea type="text" placeholder="ID competences" name="id_competences"></textarea>
      </br>
      </br>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
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