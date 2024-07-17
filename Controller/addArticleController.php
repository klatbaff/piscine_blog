<?php

require_once("../config/config.php");

class AddArticleController {


    public function addArticle(){

        //controller

        $title="mon super article";  
        $content="lorem";
        $date="17/07/2024";
        
        // j'instancie l'ArticleRepository
        // et j'appelle la méthode insert
        // on lui donnant les valeurs pour le titre, le contenu et la date
        // que je veux insérer

        $articleRepository = new ArticleRepository();
        $isRequestOK= $articleRepository -> insert($title,$content,$date);
    }
}

$addArticleController = new AddArticleController();
$addArticleController -> addArticle();

        require_once('../template/page/addArticleView.php');