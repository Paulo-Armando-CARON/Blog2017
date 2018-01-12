<?php include 'application/bdd_connection.php';


$editReq = $pdo-> query('SELECT * FROM table_article JOIN table_autor USING(id_autor) JOIN table_cat USING(id_cat)');



    // Récupération de tous les articles du blog classés par ordre antéchronologique.

    // Sélection et affichage du template PHTML.

include_once 'admin.phtml';