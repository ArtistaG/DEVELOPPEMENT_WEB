<?php


    /*entrée en en BDD*/ 

$name = $_POST['nom'];
$firstname = $_POST['firstname'];
$mail = $_POST['mail'];



// Connection
$connection=mysqli_connect("127.0.0.1", "root", '');
mysqli_set_charset($connection, "utf8");
$selectBDD = mysqli_select_db($connection, "janod");


// requete

if(empty($name) && empty($firstname) && empty($mail)){
 
}else{
    $Ajoutervalue = "INSERT INTO `form_qual`(nom, prenom, mail) VALUES ('$name', '$firstname', '$mail')";
}
// execution
    mysqli_query($connection, $Ajoutervalue);

   if($Ajoutervalue){
    header('Location: http://localhost/janod/form_qual/index.html');
    exit();
   }

