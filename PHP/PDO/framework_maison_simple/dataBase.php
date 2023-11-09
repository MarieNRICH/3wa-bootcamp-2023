<?php
/*$articles = [
    [
        'titre' => 'Article 1',
        'auteur' => 'Auteur 1',
        'contenu' => 'Contenu de l\'article 1...'
    ],
    [
        'titre' => 'Article 2',
        'auteur' => 'Auteur 2',
        'contenu' => 'Contenu de l\'article 2...'
    ],
    [
        'titre' => 'Article 3',
        'auteur' => 'Auteur 3',
        'contenu' => 'Contenu de l\'article 3'
    ]
];*/

$user = 'simondepaix';
$pass = '30dc42d896d48765e5267a3c4d3e0e9e';
try {
    $dsn = new PDO('mysql:host=db.3wa.io;dbname=simondepaix_3watrade', $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    echo 'connecté';
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>