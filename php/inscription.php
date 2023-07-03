<?php

@include 'connexion.php';

if(isset($_POST['submit'])){

   $nom = mysqli_real_escape_string($conn, $_POST['firstname']);
   $prenom = mysqli_real_escape_string($conn, $_POST['lastname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $mot_de_passe = md5($_POST['password']);
   $cmot_de_passe = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM utilisateur WHERE email = '$email' && mot_de_passe = '$mot_de_passe' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($mot_de_passe != $cmot_de_passe){
         $error[] = 'Mot de pass ne correspond pas!';
      }else{
         $insert = "INSERT INTO utilisateur(nom, prenom, email, mot_de_passe, date_de_creation) VALUES('$nom', '$prenom', '$email', '$mot_de_passe',NOW())";
         mysqli_query($conn, $insert);
         header('location: admin.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>création-du-compte</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="formstyle.css"> 

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Inscription</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="firstname" required placeholder="Entrez votre nom">
      <input type="text" name="lastname" required placeholder="Entrez votre prenom">
      <input type="email" name="email" required placeholder="Entrez votre email">
      <input type="password" name="password" required placeholder="Entrez votre mot de pass">
      <input type="password" name="cpassword" required placeholder="confirmez votre mot de pass">
      <select name="user_type">
         <option value="admin">Administrateur</option>
         <option value="admin">Utilisateur</option>
      </select>
      <input type="submit" name="submit" value="Enregistrer" class="form-btn">
      <p>Si vous avez déja un compte <i class="fa-solid fa-arrow-right" style="color: blue;"></i> <a href="connect.php">Se connecter!</a></p>
   </form>

</div>

</body>
</html>