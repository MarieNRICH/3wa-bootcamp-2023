<?php

class PostModel{
    
    private $id;
    private $title;
    private $date;
    private $content;
    private $img;
    private $user_id;
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($data){
        $this->id = $data;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    public function setTitle($data){
        $this->title = $data;
    }
    
    public function getPosts(){
        $user = 'simondepaix';
        $pass = '30dc42d896d48765e5267a3c4d3e0e9e';
        /*connexion (temporaire)*/
        try {
            $dbh = new PDO('mysql:host=db.3wa.io;dbname=simondepaix_blog', $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }     
        
        /*on commence à créer la requête sql*/
        $sql = 'SELECT * FROM posts ';
        
        /* Si on trouve un param get post-tri non null et non vide*/
        if(isset($_GET['post-tri']) && !empty($_GET['post-tri'])){
            /*On l'ajoute à la requête*/
              $sql .= 'ORDER BY date ' .$_GET['post-tri'];
        }
        /* Si on trouve un param nb-post non null et non vide*/
        if(isset($_GET['nb-post']) && !empty($_GET['nb-post'])){
            /*On l'ajoute à la requête*/
            $sql .=   ' LIMIT '.$_GET['nb-post'];
        }

        
        /*On prepare la requête construite en fonction des param get*/
        $query = $dbh->prepare($sql);
        $query->execute();
        /* on stocke dans $posts les articles sous la forme d'un tableau d'objets de type PostModel*/
        $posts = $query->fetchAll(PDO::FETCH_CLASS, 'PostModel');
        
        /*On retourne le tableau de $posts pour pouvoir les utiliser en appelant cette fonction*/
        return $posts;
        
    }
    
}


