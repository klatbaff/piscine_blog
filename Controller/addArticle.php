<?php

require_once("../config/config.php");

class AddArticleController {


    public function addArticle(){


// simulation de récupération de données de formulation

        $title="mon super article";  
        $content="lorem";
        $date="17/07/2024";

// Préparer la requête d'insertion

$sql = "INSERT INTO article (Title, Content, Created_at) VALUES(:Title, :Content, :Created_at)";
$stmt = $pdo->prepare($sql);


//vérifie si les valeurs sont bonnes

$stmt->bindParam(':Title', $title);
$stmt->bindParam(':Content', $content);
$stmt->bindParam(':Created_at', $date);

// Exécute la requête
if ($stmt-> execute()) {
	echo "Nouvel article ajouté avec succès";
        } else {
	echo "Erreur lors de l'ajout de l'article";
        }
    }
}

$addArticleController = new AddArticleController();
$addArticleController->addArticle();