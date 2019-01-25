<?php
require_once('function.php');


function affichageC($candidats) {
    for ($i=1;$i<=count($candidats);$i++) {
        print $candidats[$i]["LastName"]." ".$candidats[$i]["FirstName"].PHP_EOL;

    }

}

function addCandidat() {
    $nom=readline("nom : ");
    $prenom=readline("prénom :");

    $informations=array();
    $informations["LastName"]=$nom;
    $informations["FirstName"]=$prenom;
    return $informations;
}



$candidats=csv_to_array('hrdata.csv');

$candidats[]=addCandidat();
$candidats[]=addCandidat();

affichageC($candidats);


$saisie=readline("Nom : ");
$resultats=array();
$compt_resultats=1;

for ($i=1;$i<=count($candidats);$i++) {
    if ($saisie==$candidats[$i]["LastName"]) {
        $resultats[$compt_resultats]=$candidats[$i];
        $compt_resultats++;
    }

}

print_r($resultats);

affichageC($resultats);



?>