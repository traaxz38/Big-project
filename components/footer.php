<?php
    $sql = "SELECT * FROM accueil"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $accueil = $pre->fetch(PDO::FETCH_ASSOC);
  
?>
<footer>
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l6 ">
          <h5 class="black-text">Bio</h5>
          <p class="grey-text text-lighten-4"><?php echo $accueil['bioFooter'] ?></p>
        </div>
        <div class="col s12 m6 l6 ">
           <h5 class="center black-text">Link</h5>         
          <ul class="center">
            <?php
              $sql = "SELECT * FROM projets"; 
              $pre = $pdo->prepare($sql); 
              $pre->execute();
              $projets = $pre->fetchAll(PDO::FETCH_ASSOC);
            
              foreach($projets as $projet){ ?>
                <li><a href="project.php?id=<?php echo $projet['ID'] ?>" class="fa"><?php echo $projet['nomProjet'] ?></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Made by <a class="orange-text text-lighten-3" href="https://guardia.school/campus/lyon.html">Matis Barbier Delaunay</a>
      </div>
    </div>
</footer>