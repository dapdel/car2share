<section class="fondAccueil">
    <div class="titre">
        
        <h2>Bienvenue à car2share !</h2>
    </div>

<section class="formulaire-accueil">
    <form  action="#" method="post">
    <!--<?= $messageBienRecu; ?>-->
        <label for="km">Kilomètes parcourus :</label><br/>
        <input type="number"  value = "<?= $km; ?>" name="km" class="km" id="km"><br/><br/>
        <label for="km_voiture">Kilomètes sur compteur voiture :</label><br/>
        <input type="number"  value = "<?= $km_voiture; ?>" name="km_voiture" class="km_voiture" id="km_voiture"><br/><br/>
        
        <label for="raison">Raison:</label><br/>
        <textarea id="raison" name="raison" rows="4" cols="50"> </textarea><br/><br/>

        <label for="type_frais">Frais:</label><br/>
        <select id="type_frais" name="type_frais" size="3">
            <option value="essence" selected>Plein d'essence</option>
            <option value="entretien_reparation">Entretien / réparation :</option>
                    <!--'selected' montrera l'option choisie par défaut-->
            <option value="pneus">Changement de pneus</option>
            <option value="assurance">assurance voiture</option>
        </select><br/>
        <label for="frais">montant des frais :</label><br/>
        <input type="number"  value = "<?= $frais; ?>" name="frais" class="frais" id="frais"><br/><br/>

        <!--<input type="submit" value="Connexion" class="btn" id="btn">-->
        <button type="submit" value="Connexion" class="btn btnFormulaireAccueil" id="btn">Rentrer les données</button>
    </form> 
</section>
</section>