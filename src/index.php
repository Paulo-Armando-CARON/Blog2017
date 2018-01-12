<?php include 'application/bdd_connection.php';

    // Récupération de tous les articles du blog classés par ordre antéchronologique.

    //SELECT `id_name`,`id_lastName`,`id_birthdate` FROM table_autor JOIN table_article USING(id_autor) ORDER BY date DESC


    // Sélection et affichage du template PHTML.

$req = $pdo-> query('SELECT `id_art`,`date`,`title`, `content`, `id_name`, `id_lastName` FROM table_autor JOIN table_article USING(id_autor) ORDER BY date DESC');
include_once 'index.phtml';

