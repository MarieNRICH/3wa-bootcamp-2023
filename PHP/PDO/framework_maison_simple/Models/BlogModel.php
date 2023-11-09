<?php


function BlogModel(){
    /*connection bdd*/
    require 'dataBase.php';
    
    
    $query = $dsn->prepare('SELECT * FROM products');
    $query->execute();
    $products = $query->fetchAll(PDO::FETCH_ASSOC);

    return $products; 
    
}