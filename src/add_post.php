<?php include 'application/bdd_connection.php';

    if(empty($_POST)) {
        // Récupération de tous les auteurs du blog.
       $articleAuthors = $pdo->query('SELECT `id_name`,`id_lastName`,`id_autor` FROM `table_autor`');
        //$articleAuthor->execute();
        //var_dump($articleAuthor);
        $articleAuthorFetch=$articleAuthors->fetchAll();
        //$articleAuthors->fetchAll());





        // Récupération de toutes les catégories du blog.

       $articleCategories = $pdo-> query('SELECT `id_cat`,`name` FROM `table_cat`');

       //var_dump($articleCategorie);

        $articleCategoriesFetch=$articleCategories->fetchAll();

        // Sélection et affichage du template PHTML.
        include_once 'add_post.phtml';

    } else {
        // Ajout d'un article du blog.
        $articleMade = $pdo->prepare ('INSERT INTO `table_article` (`title`,`content`,`id_autor`,`id_cat`,`date`) VALUES (?,?,?,?,NOW())');
      $articleMade->execute(array_values($_POST));


        // Retour à la page d'accueil une fois que le nouvel article du blog a été ajouté.
        header('location:index.php');
    }




