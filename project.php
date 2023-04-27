<?php
  require "conf/config.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

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
   <title>Projets</title>
</head>

<body>
  <?php 
    require "components/menueP.php"
  ?>
  
  <?php
    $sql = "SELECT * FROM projets where ID=:ID"; 
    $pre = $pdo->prepare($sql);
    $pre->bindParam("ID", $_GET['id']);
    $pre->execute();
    $projets = $pre->fetch(PDO::FETCH_ASSOC);
  ?>
  
	<div class="modal" id="Contact">
		<div class="modal-content">
			<h2>Contact</h2>
			<p>Voici les différentes façon dont vous pouvez me contacter :
			Ma boîte mail : mbarbierdelaunay@guardiaschool.fr
			LinkedIn : www.linkedin.com/in/matis-barbier-delaunay</p>
		</div>
	</div>

  <div class="parallax-container">
      <div class="parallax"><img src="img/back1.jpg" alt="background binary"></div>
  </div>

 

	<div class="container center" id="presentation">
		<h1 class="animate__animated animate__bounce"><?php echo $projets['titre'] ?></h1>
    <p><?php echo $projets['presentation'] ?>
    </p>
	</div>

	<div class="parallax-container">
      <div class="parallax"><img src="img/back2.jpg" alt="image de travail d'équipe"></div>
  </div>

	<div class="container center" id="description">
		<h2 class="animate__animated animate__flip wow">Description</h2>
    <div class="row">
      <div class="col s12 m4 l6 offset-m1">
        <p><?php echo $projets['description1'] ?>
        </p>
      </div>
      <div class="col s12 m4 l6 offset-m2">
        <p><?php echo $projets['description2'] ?>
        </p>
      </div>
    </div>
	</div>


  <div class="carousel carousel-slider center" >
    <div class="carousel-item" >
      <img class="Cimage" src="<?php echo $projets['imageCarousel1'] ?>" alt="<?php echo $projets['alt1'] ?>">
    </div>
    <div class="carousel-item" >
      <img class="Cimage" src="<?php echo $projets['imageCarousel2'] ?>" alt="<?php echo $projets['alt2'] ?>">
    </div>
    <div class="carousel-item Cimage" >
      <img  src="<?php echo $projets['imageCarousel3'] ?>" alt="<?php echo $projets['alt3'] ?>">
    </div>
  </div>
  <div class="row">
    <div class="center col s12 m12 l12">
      <a class="btn" onclick="prev()">prec</a>
      <a class="btn" onclick="next()">next</a>     
    </div> 
  </div>
  <div class="center">
      <h2 class="animate__animated animate__bounceInLeft wow">Compétences acquises ou améliorées </h2>
  </div>
  <?php
    $sql = "SELECT id_competences from competences_project where id_projets=:popo"; 
    $pre = $pdo->prepare($sql); 
    $pre->bindParam("popo", $_GET['id']);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);

    foreach($data as $user){ 
        $id_competences = $user['id_competences'];
        $sql2 = "SELECT * from competences where ID=$id_competences"; 
        $pre2 = $pdo->prepare($sql2); 
        $pre2->execute();
        $data2 = $pre2->fetchAll(PDO::FETCH_ASSOC);    
        foreach($data2 as $test){ ?>
          <span> <div class="container center" id="skill">
            <div class="row">
              <div class="col s12 m6 offset-m3 l6 offset-l3">
                <img class="imgComp smile animate__animated animate__bounceInLeft wow" data-wow-duration="1s" src="<?php echo $test['imageC']?>" alt="<?php echo $test['altC']?>">
                <h3><?php echo $test['nom']?></h3>
                <p> <?php echo $test['description']?></p>
              </div>
            </div>
          </div></span>
        <?php }
    }
  ?>

  
  <?php 
    require "components/footer.php"
  ?>

  <script src="js/jquery.min.js" charset="utf-8"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</body>
</html>
