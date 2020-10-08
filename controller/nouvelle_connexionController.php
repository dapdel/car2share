
<?php 
          $nouveauNom = "";
          $nouveauPrenom = ""; 
          $mail = "";
          $login = "";
          $marque = "";
          $modele = "";
          $plaque = "";
 
    if (!isset($_SESSION["notentatives"])){
        $_SESSION["notentatives"] = 0;   
    }
    // verifie si formulaire est soumis
    if(isset($_POST["nouveauNom"],$_POST["nouveauPrenom"],$_POST["mail"],$_POST["login"],
    $_POST["marque"],$_POST["modele"],$_POST["plaque"]))
    {
        $nouveauNom = $_POST["nouveauNom"];
        $nouveauPrenom = $_POST["nouveauPrenom"]; 
        $mail = $_POST["mail"];
        $login = $_POST["login"];
        $marque = $_POST["marque"];
        $modele = $_POST["modele"];
        $plaque = $_POST["plaque"];


        $_SESSION["notentatives"]++;
        // vérifier si le nom est rempli
        if((trim($_POST["nouveauNom"]) !== "" ) && (trim($_POST["nouveauPrenom"]) !== ""))
        {
// enregistre dans les variables de session
            $_SESSION["nom"] = $_POST["nouveauNom"];
            $_SESSION["prenom"] = $_POST["nouveauPrenom"]; 
            $_SESSION["mail"] = $_POST["mail"];
            $_SESSION["login"] = $_POST["login"];
            $_SESSION["marque"] = $_POST["marque"];
            $_SESSION["modele"] = $_POST["modele"];
            $_SESSION["plaque"]= $_POST["plaque"];
       
        echo $_SESSION["nom"];
        echo $_SESSION["prenom"]; 
        echo $_SESSION["mail"];
        echo $_SESSION["login"];
        echo $_SESSION["marque"];
        echo $_SESSION["modele"];
        echo $_SESSION["plaque"];
        }  
  /*      
//accès dans la base de données
         $basededonnees = "mysql:host=localhost;dbname=car2share;charset=utf8";
            $utilisateur = "root";
            $motdepasse = "";
            $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);
            
            $requete = "INSERT INTO personne (nom,prenom,mail,login)
            VALUES ('$_SESSION["nom"]','$_SESSION["prenom"]','$_SESSION["mail"]','$_SESSION["login"]')";
            $personnes = $pdo->exec($requete);
            //$tableau = false
            // Permet de fermer le retour d'une requête
            // pour éviter les problèmes dans une
            // prochaine requête
            $personnes->closeCursor();

            $requete = "INSERT INTO voiture (marque,modele,plaque)
            VALUES ($_SESSION["marque"], $_SESSION["modele"], $_SESSION["plaque"])";
            $personnes = $pdo->exec($requete);
            $personnes>closeCursor();

*/



              header("Location:?section=accueil");
    }
 //analyse des rentrées
/* 
          elseif((trim($_POST["nom"]) == "" ) && (trim($_POST["prenom"]) == "") && ($_SESSION["notentatives"]<4))
          {
              $message = '<p class="error">Erreur : veuillez remplir votre nom et prénom</p>';
          }
  
         elseif((trim($_POST["nom"]) == "" ) && ($_SESSION["notentatives"]<4))
          {
              $message = '<p class="error">Erreur : veuillez remplir votre nom</p>';
          }
  
          elseif((trim($_POST["prenom"]) == "") && ($_SESSION["notentatives"]<4))
          {
              $message = '<p class="error">Erreur : veuillez remplir votre prenom</p>'; 
          }
          else{
              $_SESSION["notentatives"] = 0;   
              header("Location:?section=deso");
          }
  
      }
*/ 
    
      include("view/page/nouvelle_connexion.php");
  ?>