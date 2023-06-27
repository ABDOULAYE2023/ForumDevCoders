<?php

require('connexion.php');

if(isset($_POST['validation'])){
    if (!empty($_POST['id']) AND 
    !empty($_POST['id_user']) AND
    !empty($_POST['title']) AND
    !empty($_POST['description']) AND
    !empty($_POST['Contenu']) AND
    !empty($_POST['date_de_creation'])){
    
    $question_id = $_SESSION['id'];
    $question_id_user = $_SESSION['id_user'];
    $question_title = htmlspecialchars($_POST['title']);
    $question_description = nl2br(htmlspecialchars($_POST['description']));
    $question_contenu = nl2br(htmlspecialchars($_POST['contenu']));
    $question_date_de_creation = date('d/m/y H:i:s');

    $insertQuestion0nWebsite = $conn->prepare('INSERT INTO topic(id, id_user, title, description, contenu, date_de_creation)VALUE(?, ?, ?, ?, ?, ?)');
    $insertQuestion0nWebsite->execute(
        array(
            $question_id, 
            $question_id_user, 
            $question_title,  
            $question_description, 
            $question_contenu, 
            $question_date_de_creation
        )
    );

    $successMsg = "votre question été bien publier sur le site";


    }else{
        $errorMsg = "veuillez completer tous les champs ... ";
    }
}

?>