<?php

require_once('../config/config.php');

class IndexController {


    public function Index(){

    require_once ('../Template/Page/indexView.php');
    require_once('../Model/ArticleRepository.php');
   }
}


$IndexController = new IndexController();
$IndexController-> Index();
