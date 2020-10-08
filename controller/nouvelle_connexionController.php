
<?php 
    $nouveauNom = "";
    $nouveauPrenom = ""; 
    $mail = "";
    $login = "";
    $marque = "";
    $modele = "";
    $plaque = "";

    if(isset($_POST["nouveauNom"],$_POST["nouveauPrenom"],$_POST["mail"],$_POST["login"],
    $_POST["marque"],$_POST["modele"],$_POST["plaque"]))
    {
        $basededonnees = "mysql:host=localhost;dbname=car2share;charset=utf8";
        $utilisateur = "root";
        $motdepasse = "";
        $pdo = new PDO($basededonnees, $utilisateur, $motdepasse); 

        $requete = "INSERT INTO personne (nom, prenom, mail, login) VALUES (:nom, :prenom, :mail, :login)";
        $newPersonne= array(
            ":nom" => $_POST["nouveauNom"],
            ":prenom" => $_POST["nouveauPrenom"],
            ":mail" => $_POST["mail"],
            ":login" => $_POST["login"]
        );
        $statement = $pdo->prepare($requete);
        $statement->execute($newPersonne);
    

/*
    if(isset($_POST["marque"],$_POST["modele"],$_POST["plaque"]))
    {
        $basededonnees = "mysql:host=localhost;dbname=car2share;charset=utf8";
        $utilisateur = "root";
        $motdepasse = "";
        $pdo = new PDO($basededonnees, $utilisateur, $motdepasse); 

        $requete = "INSERT INTO voiture (marque, modele, plaque, login) VALUES (:marque, :modele, :plaque)";
        $newVoiture= array(
            ":marque" => $_POST["marque"],
            ":modele" => $_POST["modele"],
            ":plaque" => $_POST["plaque"],
        );
        $statement = $pdo->prepare($requete);
        $statement->execute($newVoiture);
    */







              header("Location:?section=accueil");

    
    }

    
      include("view/page/nouvelle_connexion.php");
  ?>