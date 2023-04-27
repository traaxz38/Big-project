<?php
  require "conf/config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Portfolio</title>

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
  require "components/menueA.php"
  ?>
  <?php
  require "components/handle_msg.php"
  ?>
  <?php
    $sql = "SELECT * FROM accueil"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $accueil = $pre->fetch(PDO::FETCH_ASSOC);
  
  ?>
  
  <div class="modal" id="Contact">
    <div class="modal-content">
      <h2>Contact</h2>
      <p>Voici les différentes façon dont vous pouvez me contacter :
      Notre boîte mail : mbarbierdelaunay@guardiaschool.fr
      LinkedIn : www.linkedin.com/in/matis-barbier-delaunay
      <a href="livreDOR.php">Où sur le site directement</a>
      </p>
    </div>
  </div>
  <div>
    <h1 class="center animate__animated animate__bounceInLeft wow" data-wow-duration="1s"><?php echo $accueil['titre'] ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l6 offset-l3">
        <p><?php echo $accueil['presentation'] ?></p>
      </div>
    </div>
  </div>
  <div id="test">
    <h2 class="center animate__animated animate__zoomInDown wow" data-wow-duration="2s">Projets</h2>
  </div>
  <div class="carousel carousel-slider center" id="carousel" > 

    <?php
    $sql = "SELECT * FROM projets"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $projets = $pre->fetchAll(PDO::FETCH_ASSOC);
          
    foreach($projets as $projet){ ?>
    <div class="carousel-item">
      <img src="<?php echo $projet['imageAccueil'];?>" alt="<?php echo $projet['altA'];?>">
      <div class="carousel-fixed-item center">
        <a class="btn-large waves-effect black white-text darken-text-2" href="project.php"><?php echo $projet['nomProjet'] ?> </a>
      </div>
    </div>
    <?php } ?>
  </div>


  <div class="row">
    <div class="center col s12 m12 l12">
      <a class="btn" onclick="prev()">prec</a>
      <a class="btn" onclick="next()">next</a>     
    </div> 
  </div>
  

  <div class="container">
    <h2 class="center animate__animated animate__flash wow" data-wow-duration="1s" >Qui suis-je ?</h2>
    <div class="section">
      <div class="row">
        <div class="col s12 m12 l6 offset-l3">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center"><?php echo $accueil['nom1'] ?></h5>

            <p class="light animate__animated animate__backInLeft wow"><?php echo $accueil['bioNom1'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <?php 
    require "components/footer.php"
  ?>
  <!--  Scripts-->
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.min.js" charset="utf-8"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/script.js"></script>
  <script> new WOW().init();</script>
</body>
</html>