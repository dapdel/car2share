<?php 
      
    $message = "";
    $nom = "";
    $prenom = "";
    if (!isset($_SESSION["notentatives"])){
        $_SESSION["notentatives"] = 0;   
    }
    // verifie si formulaire est soumis
    if(isset($_POST["nom"],$_POST["prenom"]))
    {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"]; 

        $_SESSION["notentatives"]++;
        // vérifier si le nom est rempli
        if((trim($_POST["nom"]) !== "" ) && (trim($_POST["prenom"]) !== ""))
        {
            // enregistre dans une variable de session
            $_SESSION["nom"] = trim($_POST["nom"]);
            $_SESSION["prenom"] = trim($_POST["prenom"]);
            header("Location:?section=accueil");
        }

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


    include("view/page/connexion.php");
?>