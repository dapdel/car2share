<?php 
// verifie
$table = "";
//récupérer les données
if(isset($_POST["dateDebut"],$_POST["dateFin"],)){

    $basededonnees = "mysql:host=localhost;dbname=car2share;charset=utf8";
    $utilisateur = "root";
    $motdepasse = "";
    $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);
    $requete = "SELECT personne_ID, km_parcourus, frais, date FROM consommation WHERE date BETWEEN :dateDebut AND :dateFin" ;
    $tableauDate = array(
        ":dateDebut" => $_POST["dateDebut"],
        ":dateFin" => $_POST["dateFin"]
    );
    $statement = $pdo->prepare($requete);
    $statement->execute($tableauDate);
    $tableau = $statement->fetchAll();
    /*var_dump($tableau);*/

    $table = "";
    $table .= "<table><tr><th>ID</th><th>Consommation</th><th>Frais</th><th>Date</th></tr>";
    foreach ($tableau as $value) {
        $tr = "<tr>";
        $tr .= "<td>" . $value["personne_ID"] . "</td>";
        $tr .= "<td>" . $value["km_parcourus"] . "</td>";
        $tr .= "<td>". $value["frais"]."</td>";
        $tr .= "<td>". $value["date"]."</td>";
        $tr .= "</tr>";
        $table .= $tr;
        // var_dump($value);
    }
    $table .= "</table>";
     
}



    include("view/page/recapitulatif.php");
?>