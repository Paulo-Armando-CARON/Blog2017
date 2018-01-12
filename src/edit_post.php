<?php include 'application/bdd_connection.php';

    if(empty($_POST)) {
        // Validation de la query string dans l'URL.

        // Récupération d'un article du blog.

        // Sélection et affichage du template PHTML.

    } else {
var_dump($_POST);
        $updateData = $pdo ->prepare('UPDATE `table_article` SET `title`=?,`content`=? WHERE `id_art` = ?');
        $updateData->execute(array_values($_POST));
        // Edition d'un article du blog.

        // Retour au panneau d'administration.
        header('location:admin.php');
    }

    include_once 'edit_post.phtml';