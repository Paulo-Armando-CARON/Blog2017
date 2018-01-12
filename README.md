# Blog exercise

> ## A model is visible [here](http://192.168.0.101:81/blog/src)

### Database conception

- It is advised to write it down on a paper
- Which collation for your database?
- How many tables?
- Which collation for your tables?
- How many columns for each table?
- Which type of columns?
- What kind of constraints on the columns?

Once you have all this wrote down you may enter [PhpMyAdmin](http://localhost/phpmyadmin) to create your database and tables

### About FK constraints

> _"Foreign key constraint remain the most important part of your database"_
    
- If an author or a category is deleted ALL the posts belonging to the deleted author or category should be deleted (in CASCADE).
- And if a post is deleted ALL the comments belonging to the deleted post should also be deleted (in CASCADE).

:bulb: To create the foreign keys constraints of a table you must enter into the __relation view__ of the table

[The openclassroom article](https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2/les-relations-entre-entites-avec-doctrine2) explaining the different kinds of relations [1 to 1, 1 to x, x to x] between "owner entity" and "opposite entity"

### Other instructions

You have 4 days to accomplish this exercise.

Once again a skeleton application is given to you but if you want to make a "_web 2.0 interface_" with **NO SUBMIT FORM ACTION events**
you could put all your server sided processus in an `ajax/` directory and query them with the JavaScript `fetch()` function

### Bonus

__1)__ Make a drop down menu __pagination system__ to display articles with a LIMIT number (eg: 25)

__2)__ Create a login page and secure the administration area so that only admin users can "__CRUD__" [create, update, delete] posts.

- You must protect administration pages with [session](http://php.net/manual/fr/intro.session.php)
- Passwords __HAVE TO be stored encrypted__ in the database using [sha1()](http://php.net/manual/fr/function.sha1.php) function
- Ideally you should add a ["Salt"](https://fr.wikipedia.org/wiki/Salage_(cryptographie)) to the hashed passwords
