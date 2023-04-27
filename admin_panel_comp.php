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

    <table style="width:100%">
      <thead>
        <tr>
          <th>Num</th>
          <th>Name</th>
          <th>description</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <html>
          <head>
          </head>
          <body>
          <h1>Competences List</h1>
          <a href="addCompetence.php" class="blue waves-effect waves-light btn"><i class="material-icons left">create</i>Add Competences</a>
          <?php
          $sql = "SELECT * FROM competences"; 
          $pre = $pdo->prepare($sql); 
          $pre->execute();
          $data = $pre->fetchAll(PDO::FETCH_ASSOC);
          
          foreach($data as $user){ ?>
          <tr>
            <td><?php echo $user['ID'] ?></td>
            <td><?php echo $user['nom'] ?></td>
            <td><?php echo $user['description']?></td>
            <td>
              <a href="customizeCompetence.php?id=<?php echo $user['ID']?>" class="green waves-effect waves-light btn"><i class="material-icons left">create</i>Modify Competences</a>
            </td>
            <td>
              <a href="action/deleteCompetence.php?id=<?php echo $user['ID']?>" class="red waves-effect waves-light btn"><i class="material-icons left">delete</i>Delete Competences</a>
            </td>
          </tr>
          <?php } ?>
      </tbody>
    </table>
  </body>
 </html>
</body>