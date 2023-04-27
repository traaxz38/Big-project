<?php
  require "conf/config.php"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title></title>
    </head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/animate.css">
    <body>
        <?php
            require "components/menueA.php"
        ?>
        <form method="post" action="action/connection.php">
            <div class="register center">
                <h1>Welcome back ! Please enter your credentials : </h1>
                <label>Please enter your email address : </label>
                <input type='email' placeholder="johndoe@gmail.com" name='email' required/>
                </br>
                </br>
                <label>Please enter your password : </label>
                <input type='password' placeholder="123456" name='password' required/>
                </br>
                </br>
                <button class="btn waves-effect waves-light" type="submit" name="action">Login
                <i class="material-icons right">send</i>
                </button>
            </div>             
        </form>
        
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