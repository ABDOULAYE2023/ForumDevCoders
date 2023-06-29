<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php' ?>

<body>
    <br><br>
    <form class=" container" method="POST">

    <?php if(isset($errorMsg)){ echo '<p>' .$errorMsg. '</p>'; } ?>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Titre de la question</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Description de la question</label>
           <textarea class="form-control" name="description"></textarea> 
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Contenu de la question</label>
            <textarea type="text" class="form-control" name="contenu"></textarea> 
        </div>
        <button type="submit" class="btn btn-primary" name="validation">Publier le question</button>
    </form>
</body>
</html>