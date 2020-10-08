<?php 
    $km = "";
    $km_voiture = "";
    $raison = "";
    $type_frais = "";
    $frais = "";
    $messageBienRecu = "";

    // verifie si formulaire est soumis
    if(isset($_POST["km"],$_POST["km_voiture"],
    $_POST["raison"],$_POST["type_frais"],$_POST["frais"])){
        
        $km = $_POST["km"];
        $km_voiture = $_POST["km_voiture"];
        $raison =  $_POST["raison"];
        $type_frais = $_POST["type_frais"];
        $frais = $_POST["frais"];

        $messageBienRecu = '<p class="BienRecu">Vos données ont bien été prises en compte!</p>'; 
       
    }

  
    include("view/page/accueil.php");
?>
