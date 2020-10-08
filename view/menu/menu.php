<?php
    if(isset($_SESSION["nom"],$_SESSION["prenom"]))
    {
        echo "<p class = 'bienvenue'>Bonjour ".$_SESSION["nom"]." ".$_SESSION["prenom"]." !</p>";
    }
?>
<nav>
        <ul>
            <li><a href="?section=accueil"><img class= "logo" src="public/images/logo.png" alt="logo" /></a></li>
            <li><a href="?section=accueil">Accueil</a></li>
            <li><a href="?section=recapitulatif">Récapitulatif</a></li>
            <li><a href="?section=apropos">A propos</a></li>

            <?php
            if(isset($_SESSION["nom"],$_SESSION["prenom"]))
            {
                echo '<li><a href="?section=deconnexion">Déconnexion</a></li>';
            }
            else{
                echo '<li><a href="?section=connexion">Connexion</a></li>';
            }
            ?>
       
        </ul>
</nav>
<!--echo "<p class = 'bienvenue'>Bienvenue ".$_SESSION["nom"]." ".$_SESSION["prenom"]." !<p>";-->
