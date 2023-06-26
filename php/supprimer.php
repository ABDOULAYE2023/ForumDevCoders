<?php
// Connexion à la base de données
require_once "connexion.php";

// Récupération de l'id dans le lien
$id = $_GET['id'];

// Vérification de la soumission du formulaire de confirmation
if (isset($_POST['confirm'])) {
    // Requête de suppression avec paramètre préparé pour éviter les injections SQL
    $sql = "DELETE FROM utilisateur WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Redirection vers la page index.php
     header("Location: connexion.php");
    exit();
}

// Requête pour récupérer les informations de l'employé à supprimer
$sql = "SELECT * FROM utilisateur WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="form">
        <h2>Supprimer un apprenant : <?= $row['nom'] ?></h2>
        <p>Êtes-vous sûr de vouloir supprimer cet apprenant ?</p>
        <p>Nom: <?= $row['nom'] ?></p>
        <p>Prénom: <?= $row['prenom'] ?></p>
        <p>Date de naissance: <?= $row['date_de_naissance'] ?></p>
        <p>email: <?= $row['email'] ?></p>
        <p>mot de passe: <?= $row['mot_de_passe'] ?></p>
        <form class="oui" action="" method="POST">
            <input type="submit" value="Oui" name="confirm">
            <!-- <a href="verifier.php">Non</a> -->
        </form>
    </div>
</body>

</html>
