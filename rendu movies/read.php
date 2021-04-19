<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortie Cinema 2021</title>
</head>
<body>
    <header>
    <nav>
    <a onclick="burger_menu()">
        <div class="logo_nav">
            <img src="assets/img/icon/burger.svg" alt="">
        </div>
    </a>   
    <div class="content">
        <a href="read.php"><span class="btn3">Accueil</span></a>
        <a href="form_create.php"><span class="btn3">Ajouter un film</span></a>
    </div>
    </nav>
    </header>
    <main>
          <a href="form_create.php"><div class="btn1"> Ajouter un film </div></a>        
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>

<?php

// Connexion à MySQL
$connection=mysqli_connect("127.0.0.1", "root", '');
mysqli_set_charset($connection, "utf8");
$selectBDD = mysqli_select_db($connection, "movies");

if (!$connection){ // Contrôler la connexion
    $MessageConnexion = die ("connection impossible");
}
else {

   // Requête
   $selectvalue = "SELECT * FROM `movies`";

   // Exécution de la requête 
   $execvalue = mysqli_query($connection, $selectvalue);
   
}

while ($val = mysqli_fetch_assoc($execvalue)) {

    
     //gestion de la date
     $date_cut = explode("-", $val['date_de_sortie']);
     $jour = $date_cut[2];
     $mois = $date_cut[1];
     $annee = $date_cut[0];
     $datedesortie = $annee;

        ?>
            <div class="film">
                <div class="row1">
                    <h1><?=$val['nom']?></h1>
                    <a href="delete.php?id=<?php echo $val['id'];?>"><img src="assets/img/icon/close.svg" alt="cross to delete"></a>
                </div>
                <p><?='Date de sortie :'. ' ' . $datedesortie?></p>
                <p><?='Réalisateur :'. ' ' . $val['realisateur']?></p>
                <a href="affiche_film.php?id=<?php echo $val['id']?>"><img class="img1" src = "assets/img/<?=$val['images']?>"></a>
                <p class="resume"><?='Résumé :'. ' ' . $val['resumee']?></p>
                <a href="form_update.php?id=<?php echo $val['id']?>&amp;nom=<?php echo $val['nom'];?>"><div class="btn2">modifier</div></a>
            </div>
    <?php    
}
    

?>



