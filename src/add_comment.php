<?php include 'application/bdd_connection.php';

// Ajout d'un commentaire à un article du blog.

// Retour à l'article détaillé une fois que le nouveau commentaire a été ajouté.
$reponse = $pdo-> prepare ('INSERT INTO `table_commentaire` (`id_art`, `pseudo`,`text`) VALUES (?,?,?)');
$reponse->execute(array_values($_POST));

header('location:show_post.php?id='.$_POST['id_art']);