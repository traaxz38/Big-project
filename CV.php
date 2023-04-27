<?php
  require "conf/config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>CV</title>

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
  	<h1 class="center">Voici mon CV</h1>
  	<div class="container">
	    <h2 class="center animate__animated animate__flash wow" data-wow-duration="1s" >N'hésitez pas à me contacter pour toutes informations supplémentaires</h2>
	    <div class="section">
	      <div class="row">
	        <div class="col s12 m12 l12">
	          <div class="icon-block">
	            <img src="img/CV.jpg" width="100%">
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
  <div class="center">
    <a class="green-button" download="CV_MatisBarbierDelaunay.jpg" href="img/CV.jpg">
      Télécharger mon CV
    </a>
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