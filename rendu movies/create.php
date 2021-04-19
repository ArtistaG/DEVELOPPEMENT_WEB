<?php

        $name = $_POST['nom'];
        //gestion de la date
        $datedesortie = date('Y-m-d', strtotime(str_replace('/','-',$_POST['date_de_sortie'])));
        //fin de gestion de date
        $realisateur = $_POST['realisateur'];
        $image = $_FILES['image']['name'];
        $resume = $_POST['resume'];


        $connection=mysqli_connect("127.0.0.1", "root", '', 'movies');
        mysqli_set_charset($connection, "utf8");

           

        if(empty($name) && empty($datedesortie) && empty($realisateur) && empty($image) && empty($resume) && empty($retour)){

        }else{
            $Ajoutervalue = "INSERT INTO `movies` (nom, date_de_sortie, realisateur, images, resumee) VALUES ('$name', '$datedesortie', '$realisateur', '$image', '$resume') ";
            mysqli_query($connection, $Ajoutervalue);   
        }

        if(empty($image)){
            
        }else{
             //récupération de l'image et upload dans assets/img/
             if (isset($_FILES['image']['tmp_name'])) {
                $retour = copy($_FILES['image']['tmp_name'],'assets/img/'.$_FILES['image']['name']);
            }
        }

        //affichage des résultats, pour savoir si la modification a marchée:
        
        if($Ajoutervalue)
        {
            ?>
            <h2 class="h2_form_create">Vous avez bien effectué votre ajout de film</h2>
            <!-- echo("Vous avez bien effectué votre ajout de film") ; -->
            <?php
        }else{
            ?>
            <h2 class="h2_form_create">Vous n'avez pas pu effectuer votre ajout de film</h2>
            <!-- echo("Vous n'avez pas pu effectuer votre ajout de film") ; -->
            <?php
        }       

        header('Location: http://localhost/php/rendu%20movies/read.php');
        exit();
        
    
    ?>
    







