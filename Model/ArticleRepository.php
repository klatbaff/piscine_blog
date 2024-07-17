<?php

require_once("../config/config.php");

class ArticleRepository {

   public function FindArticle(){
    
    $DbConnection= new DbConnection();
    $pdo = $DbConnection -> connect();
    
    // permet de faire une requête SELECT sans parametres
    $stmt = $pdo -> query("SELECT * FROM article");
    
    // retourne dans un tableau tous les produits 
    $articles = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    return $articles;
   }

   // la méthode insert permet de sauver des données dans la table article
    // elle insère le titre, le contenu et la date qu'on lui envoie en parametre
   public function insert($title,$content,$date){

        $DbConnection= new DbConnection();
        $pdo = $DbConnection->connect();

      $sql = "INSERT INTO article (Title, Content, Created_at) VALUES(:Title, :Content, :Created_at)";
      $stmt = $pdo -> prepare($sql);

      $stmt->bindParam(':Title', $title);
      $stmt->bindParam(':Content', $content);
      $stmt->bindParam(':Created_at', $date);

      $isRequestOK= $stmt-> execute(); 
      return $isRequestOK;
     }
};

