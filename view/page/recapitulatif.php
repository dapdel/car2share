<h2>Récapitulatif</h2>
<form  action="#" method="post" class="recaptulatifForm">
    <h3>Période souhaitée pour le récapitulatif :</h3>
    <section>
        <div>
            <label for="dateDebut">Date de début :</label><br/>
            <input type="date"  value = "<?= $dateDebut; ?>" name="dateDebut" class="dateDebut" id="dateDebut"><br/><br/>
            <label for="dateFin">Date de fin :</label><br/>
            <input type="date"  value = "<?= $dateFin; ?>" name="dateFin" class="dateFin" id="dateFin"><br/><br/>
        </div>  
        <div>
            <button type="submit" value="recap" class="btn" id="btn">Go!</button>
        </div>
    </section>
</form>
<table>
    <?= $table; ?> 
</table>

