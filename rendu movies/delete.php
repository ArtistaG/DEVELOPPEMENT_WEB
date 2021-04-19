

<?php

$id = $_GET['id'];

        $connection=mysqli_connect("127.0.0.1", "root", '', 'movies');
        mysqli_set_charset($connection, "utf8");

        $deletevalue = "DELETE FROM `movies` WHERE id =  '$id' ";

        mysqli_query($connection, $deletevalue) or die('Erreur SQL !'.$Ajoutervalue.'<br>'.mysqli_error($connection));

        header('Location: http://localhost/php/rendu%20movies/read.php');
        exit();

?>

