<h2>Nouvelle Connexion</h2>
<form action="#" method="post" class="nouvelleConnexionForm">
<h3>Vous:</h3>
    <label for="nouveauNom">Nom :</label><br/>
    <input type="text"  value = "<?= $nouveauNom; ?>" name="nouveauNom" class="nouveauNom" id="nouveauNom"><br/>
    <label for="nouveauPrenom">Prénom :</label><br/>
    <input type="text" value = "<?= $nouveauPrenom; ?>" name="nouveauPrenom" class="nouveauPrenom" id="nouveauPrenom"><br/>
    <label for="mail">Mail :</label><br/>
    <input type="text" value = "<?= $mail; ?>" name="mail" class="mail" id="mail"><br/>
    <label for="login">Login :</label><br/>
    <input type="text" value = "<?= $login; ?>" name="login" class="login" id="login"><br/><br/>
    <h3>Votre voiture patagée:</h3>
    <label for="marque">Marque :</label><br/>
    <input type="text" value = "<?= $marque; ?>" name="marque" class="marque" id="marque"><br/>
    <label for="modele">Modèle :</label><br/>
    <input type="text" value = "<?= $modele; ?>" name="modele" class="modele" id="modele"><br/>
    <label for="plaque">No° de plaque :</label><br/>
    <input type="text" value = "<?= $plaque; ?>" name="plaque" class="plaque" id="plaque"><br/><br/>

    <!--<input type="submit" value="Connexion" class="btn" id="btn">-->
    <button type="submit" value="Connexion" class="btn" id="btn">Connexion</button>
</form> 
