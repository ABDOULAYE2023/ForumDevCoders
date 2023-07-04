<?php

// @include 'config.php';

// session_start();

// if(!isset($_SESSION['admin_name'])){
//    // header('location:register_for.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="../style/header.css"> 
   <link rel="stylesheet" href="../style/footer.css">
   <link rel="stylesheet" href="../style/acceuil.css"> 
</head>
<body>
<?php
    require_once "header.php";
   ?>
<div class="container">

   <div class="content">
      <h1>Bienvenu sur la page administrateur</h1>
      <p>Vous êtes sur la page des administrateur</p>
      <a href="connexion.php" class="btn" style="background: blue; color: white">Se connecter</a>
      <select name="user-type" class="btn" style="background: blue; color: white">
      <a href="supprimer.php" class="btn" style="background: blue; color: white">
         <option value="admin">Supprimer un utilisateur</option>
         <option value="admin">Lire un topic</option>
         <option value="admin">Lire un commentaire</option>
         <option value="admin">Verifier le forum</option>
      </a>
   </select>
       <a href="deconnexion.php"class="btn" style="background: blue; color: white">Se deconnecter</a> 
   </div>
</div>
<?php
    require_once "footer.php";
    ?> 
</body>
</html>