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
   <link rel="stylesheet" href="">
   <link rel="stylesheet" href="">


</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Salut, <span>administrateur</span></h3>
      <h1>Bienvenu</h1>
      <p>Vous etes sur la page des administrateur</p>
      <a href="connexion.php" class="btn">Se connecter</a>
      <!-- <a href="../verifier.php" class="btn">Afficher les apprenants</a> -->
      <a href="supprimer.php" class="btn">Supprimer un utilisateur</a>
      <!-- <a href="logout.php">Se deconnecter</a> -->
   </div>

</div>
</body>
</html>