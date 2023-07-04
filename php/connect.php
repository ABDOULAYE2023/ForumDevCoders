<?php

// @include 'login_system/config.php';
session_start();

if(isset($_POST['submit'])){

   // $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $mot_de_passe = md5($_POST['mot_de_passe']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

   $select = " SELECT * FROM utilisateur WHERE email = '$email' && mot_de_passe = '$mot_de_passe' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'administrateur'){

         $_SESSION['admin_name'] = $row['administrateur'];
         header('location:verifier.php');

      }elseif($row['user_type'] == 'utilisateur'){

         $_SESSION['user_name'] = $row['utilisateur'];
         //  header('location:verifier.php');

      }
     
   }else{
      $error[] = 'Mot de pass ou email incorrect!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>se connecter</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../style/acceuil.css">
   <link rel="stylesheet" href="../style/header.css"> 
   <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="style.css"> 
   
   
</head>
<body>
<?php
    require_once "header.php";
   ?> 
<div class="form-container">

   <form class="form" action="" method="post">
      <h3>se connecter</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="entrez votre email">
      <input type="password" name="password" required placeholder="entrez votre mot de passe">
      <input type="submit" name="submit" value="Valider" class="form-btn">
      <p>Si vous n'avez de compte <i class="fa-solid fa-arrow-right" style="color: blue; background:bleue ;"></i> <a href="admin.php">S'inscrire</a></p>
   </form>

</div>
<?php
    require_once "footer.php";
    ?> 
</body>
</html>