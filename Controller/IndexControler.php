<?php

require_once('../config/config.php');
require_once('../Model/ArticleRepository.php');

class IndexController {


    public function Index(){


    $articleRepository = new ArticleRepository();
    $articles = $articleRepository->findArticle();

    require_once ('../Template/Page/indexView.php');
    

   }
}

$IndexController = new IndexController();
$IndexController -> Index();
