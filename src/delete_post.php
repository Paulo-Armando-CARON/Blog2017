


<?php  // Validation de la query string dans l'URL.

include 'application/bdd_connection.php';

// Suppression d'un article du blog.
$s = str_repeat('?,', count($_POST['articles']));
//var_dump(substr($s, 0 , strlen($s) -1));

var_dump($_POST);

$delete = 'DELETE FROM table_article WHERE id_art IN('.substr($s, 0 , strlen($s) -1).')';

$query = $pdo->prepare($delete);
var_dump($query->execute($_POST['articles']));




// Redirection vers le panneau d'administration.

header('Location: admin.php');