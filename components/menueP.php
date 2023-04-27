<ul id="dropdown1" class="dropdown-content">
  <?php
    $sql = "SELECT * FROM projets"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $projets = $pre->fetchAll(PDO::FETCH_ASSOC);
          
    foreach($projets as $projet){ ?>
    <li><a href="project.php?id=<?php echo $projet['ID'] ?>" class="fa"><?php echo $projet['nomProjet'] ?></a></li>
  <?php } ?>
</ul>
<div class="navbar-fixed">
  <nav id="nav" class="black">
    <div class="nav-wrapper">
      <a id="logo-container" href="index.php" class="brand-logo">M</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Projets<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="jeux.php" class="fa">Mini-jeux</a></li>
      <li><a href="CV.php" class="fa">CV</a></li>
      <li><a href="livreDOR.php" class="fa">Livre d'or</a></li>
        <?php if(isset($_SESSION['user'])){ ?>
          <?php if ($_SESSION['user']['admin'] == 1) { ?>
              <li><a href="admin_panel.php" class="fa" >Admin_panel</a></li>
          <?php } ?>    
          <li><a href="action/logout.php" class="fa">Déconnexion</a></li>
        <?php }else{ ?>
          <li><a href="register.php" class="fa" >Inscription</a></li>
          <li><a href="login.php" class="fa" >Connexion</a></li>
        <?php } ?>
          <li><a id="contact" href="#Contact" class="modal-trigger fa fa-user icon"> Contact</a></li>
        </ul>
    </div>
    <div class="nav-content black">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#presentation">Présentation</a></li>
        <li class="tab"><a href="#description">Description</a></li>
        <li class="tab"><a href="#image">Images</a></li>
        <li class="tab"><a href="#skill">Compétences</a></li>
      </ul>
    </div>
  </nav>
</div>
<ul class="sidenav" id="mobile-demo">
  <?php
    $sql = "SELECT * FROM projets"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $projets = $pre->fetchAll(PDO::FETCH_ASSOC);
          
    foreach($projets as $projet){ ?>
    <li><a href="project.php" class="fa"><?php echo $projet['nomProjet'] ?></a></li>
  <?php } ?>
    <?php if(isset($_SESSION['user'])){ ?>
      <?php if ($_SESSION['user']['admin'] == 1) { ?>
        <li><a href="admin_panel.php">Admin_panel</a></li>
      <?php } ?>    
      <li><a href="action/logout.php">Déconnexion</a></li>
    <?php }else{ ?>
      <li><a href="register.php">Inscription</a></li>
      <li><a href="login.php">Connexion</a></li>
    <?php } ?>
    <li><a id="btn_contact" href="#Contact" class="modal-trigger fa fa-user icon">Contact</a></li>
</ul>

