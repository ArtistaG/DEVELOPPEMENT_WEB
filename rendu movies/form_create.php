<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="assets/css/form.css">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
     <title>Formulaire ajout de film</title>
</head>
<body>
<header>
     <div>
          <a href="read.php"><img src="assets/img/icon/back.svg" alt="cross to delete"></a>
     </div>
</header>
<form  action="create.php" target="_blank" method="POST" enctype="multipart/form-data">

          <div class="container">
               <h1>Ajouter un nouveau film</h1>


                    <div class="container2">
                         <div class="row1">
                              <input type="text" name = "nom" placeholder="Nom">
                              <input type="text" name = "realisateur"  placeholder="Réalisateur">
                              <input type="text" name = "resume"  placeholder="Resumé">
                         </div>
                              
                         <div class="row2">
                         <div class="col1">
                                   <label for="datedesortie"> Date de Sortie</label>
                                   <input type="date" name = "date_de_sortie">
                              </div>

                              <div class="col1">
                                   <label for="image">Ajouter votre Image</label>
                                   <input type="file" name="image" placeholder="Image">
                              </div>
                         
                              <div class="submit">
                                   <button type="submit">créer</button>
                              </div>
                         </div>
                    </div>
                     
          </div>
          
          
        </form>

        <script src="assets/js/script.js"></script>
</body>
</html>
