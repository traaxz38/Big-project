<?php
  require "conf/config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Livre d'or</title>

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
  	<h1 class="center">Bienvenue sur l'espace contact</h1>
  	<div class="container">
		  <h2 class="center animate__animated animate__flash wow" data-wow-duration="1s" >Vous pouvez laissé un avis ou poser une question ici, et retrouver tous les avis et questions déjà posés.</h2>
	  </div>
	<form method="post" action="action/sendMessage.php">
    <div class="register center">
        <h5>
            Contactez-nous
        </h5>

        <label>Votre Nom</label> : <input type="text" name="nom" placeholder="Nom (Ex : Doe)" size="30"/>
            
        <label>Votre Prénom</label> : <input type="text" name="prenom" placeholder="Prénom (Ex : John)" size="30"/>
        
        <label>Objet du Message </label> : <input type="text" name="objet" placeholder="Votre site est génial !"/>
          
        <textarea name="message" id="message" rows="10" cols="50" placeholder="Bonjour je vous écris car..."></textarea>

        <button href="#" type="submit" name="action">Envoyer</button>
    </div>
  </form>
  <?php   
    $sql = "SELECT nom,prenom,objet,message from message"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);    
    foreach($data as $test){ ?>
      <span>
        <div class="register center">
          <div class="row">
            <div class="col s12 m6 offset-m3 l6 offset-l3">
              <h3>Qui ?</h3>
              <p><?php echo $test['prenom']?> <?php echo $test['nom']?></p>
              <h3>L'objet de l'avis : </h3>
              <p><?php echo $test['objet']?></p>
              <h3>Le message : </h3>
              <p><?php echo $test['message']?></p>
            </div>
          </div>
        </div>
      </span>
    <?php }
  ?>

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