<?php
 
    $id = $_GET['id']; 
    $name = $_POST['nom'];
    //gestion de la date
    $datedesortie = date('Y-m-d', strtotime(str_replace('/','-',$_POST['date_de_sortie'])));
    //fin de gestion de date
    $realisateur = $_POST['realisateur'];
    $image = $_FILES['image']['name'];
    $resume = $_POST['resume'];

        $connection=mysqli_connect("127.0.0.1", "root", '', 'movies');
        mysqli_set_charset($connection, "utf8");
        $selectBDD = mysqli_select_db($connection, "movies");

        if(empty($name)){

        }else{
            $rqt1 = "UPDATE `movies` SET `nom` =  '$name' WHERE id =  '$id' ";
            mysqli_query($connection, $rqt1) or die ('problème avc la requète '.$rqt1);
        }

        if(empty($datedesortie)){

        }else{
            $name = $_POST['nom'];
            $rqt2 = "UPDATE `movies` SET `date_de_sortie` =  '$datedesortie' WHERE id =  '$id' ";
            mysqli_query($connection, $rqt2) or die('Erreur SQL !'.$rqt2.'<br>'.mysqli_error($connection));
        }

        if(empty($realisateur)){

        }else{
            $rqt3 = "UPDATE `movies` SET `realisateur` =  '$realisateur' WHERE id =  '$id' ";
            mysqli_query($connection, $rqt3) or die('Erreur SQL !'.$rqt3.'<br>'.mysqli_error($connection));
        }

        if(empty($image)){

        }else{
            $rqt4 = "UPDATE `movies` SET `images` =  '$image' WHERE id =  '$id' ";
            mysqli_query($connection, $rqt4) or die('Erreur SQL !'.$rqt4.'<br>'.mysqli_error($connection));

            //récupération de l'image et upload dans assets/img/

        if (isset($_FILES['image']['tmp_name'])) {
            $retour = copy($_FILES['image']['tmp_name'],'assets/img/'.$_FILES['image']['name']);
        }
        }

        if(empty($resume)){

        }else{
            $rqt5 = "UPDATE `movies` SET `resumee` =  '$resume' WHERE id =  '$id' ";
            mysqli_query($connection, $rqt5) or die('Erreur SQL !'.$rqt5.'<br>'.mysqli_error($connection));
            
        }

//affichage des résultats, pour savoir si la modification a marchée:
        
    if(!empty($rqt1) || !empty($rqt2) || !empty($rqt3) || !empty($rqt4) || !empty($rqt5))
        {
            ?>
            <h2 class="h2_form_create">La modification a été correctement effectué</h2>
            <?php
            //echo("La modification a été correctement effectué") ;
        }else{
            ?>
            <h2 class="h2_form_create">La modification a échouée</h2>
            <?php
            //echo("La modification a échouée") ;
        }

        header('Location: http://localhost/php/rendu%20movies/read.php');
        exit();


?>