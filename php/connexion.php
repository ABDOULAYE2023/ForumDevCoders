<?php
 //Connexion à la base de données avec PDO

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "forum";
    

// Établir la connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname );

// Vérifier la connexion
if (!$conn) {
    die("Échec de la connexion à la base de données: " . mysqli_connect_error());
}
else{
    echo "connexion à la base de données réussi";
}


?>
