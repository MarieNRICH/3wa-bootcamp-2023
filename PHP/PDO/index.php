<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$query = $dbh ->prepare('SELECT * FROM movies');
$query->execute();
$movies = $query->fetchAll();

var_dump ($movies);


?>

<?php foreach($movies as $key => $movies):?>
