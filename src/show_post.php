<?php // Validation de la query string dans l'URL.

    include 'application/bdd_connection.php';

    // Récupération d'un article du blog.

    // Récupération de tous les commentaires de l'article du blog.

    // Sélection et affichage du template PHTML.



$req = $pdo->prepare('SELECT `id_art`,`date`,`title`, `content`, `id_name`, `id_lastName` FROM table_autor  JOIN table_article USING(id_autor) WHERE id_art=?');
$req-> execute([$_GET['id']]);

$donnees = $req->fetch();



$req2 = $pdo->prepare('SELECT `pseudo`,`text`
FROM `table_commentaire` 
JOIN table_article
USING (id_art)
WHERE id_art = ?');
$req2-> execute([$_GET['id']]);
$info = $req2->fetch();



include_once 'show_post.phtml';