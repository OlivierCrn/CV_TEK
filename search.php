<?php

function search($candidats)
{


affichage($candidats);


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


}
?>