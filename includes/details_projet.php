<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails du projet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <img src="<?php 

        if(isset($_GET['nom_image'])){
            $nom_image = $_GET['nom_image'];
            echo htmlspecialchars($nom_image); // Sécuriser l'affichage
        }
        
        ?>" class="img-fluid" alt=""><br>

        <div class="text"><br>
            <?php 
            if(isset($_GET['contenu'])){
                $contenu = $_GET['contenu'];
                echo strip_tags($contenu); // Supprime les balises HTML
            }
            ?>
        </div>
    </div>
</body>
</html>