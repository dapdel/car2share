
<h2>Connexion</h2>
<form action="#" method="post" class="connexionForm">
    <label for="nom">Nom :</label><br/>
    <input type="text"  value = "<?= $nom; ?>" name="nom" class="nom" id="nom"><br/><br/>
    <label for="prenom">Prénom :</label><br/>
    <input type="text" value = "<?= $prenom; ?>" name="prenom" class="prenom" id="prenom"><br/><br/>
    <!--<input type="submit" value="Connexion" class="btn" id="btn">-->
    <button " type="submit" value="Connexion" class="btn" id="btn">Connexion</button>
    <div class="connexion" > 
        <p>Pas sencore connectée?</p>
        <button class="btn"><a href="?section=nouvelle_connexion">Nouvelle connexion</a></button>
    </div>
</form> 
<?= $message; ?>
    
        


