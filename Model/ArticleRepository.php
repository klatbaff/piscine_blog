<?php

class ArticleRepository {

   public function FindArticle(){
    
    $DbConnection= new DbConnection();
    $pdo = $DbConnection->connect();
    
    // permet de faire une requête SELECT sans parametres
    $stmt = $pdo->query("SELECT * FROM article");
    
    // retourne dans un tableau tous les produits 
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $articles;
   }
};

