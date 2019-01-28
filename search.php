<?php

function LastName($candidats) 
{
    $saisie=cleanInput(readline("Nom : "));
    $resultats=array();
    $compt_resultats=1;

for ($i=1;$i<=count($candidats);$i++) 
    {
    if ($saisie==$candidats[$i]["LASTNAME"]) 
        {
        $resultats[$compt_resultats]=$candidats[$i];
        $compt_resultats++;
        }
    }
affichage($resultats);  
search($candidats);
}


function Ages($candidats)
{
    $saisie=cleanInput(readline("Age : "));
    $resultats=array();
    $compt_resultats=1;

for ($i=1; $i<=count($candidats); $i++) 
    {
    if ($saisie==$candidats[$i]["AGE"]) 
        {
        $resultats[$compt_resultats]=$candidats[$i];
        $compt_resultats++;
        }
    }
affichage($resultats);
search($candidats);
}

function Town($candidats) 
{
    $saisie=cleanInput(readline("Ville : "));
    $resultats=array();
    $compt_resultats=1;
for ($i=1; $i<=count($candidats); $i++) 
    {
    if($saisie==$candidats[$i]["TOWN"]) 
        {
        $resultats[$compt_resultats]=$candidats[$i];
        $compt_resultats++;
        }
    }
affichage($resultats);  
search($candidats); 
}


function Skills($candidiats) 
{
    $saisie=cleanInput(readline("Competences : "));
    $resultats=array();
    $compt_resultats=1;
for ($i=1; $i<=count($candidats); $i++) 
    {
    if ($saisie==$candidats[$i]["SKILLS"]) 
        {
        $resultats[$compt_resultats]=$candidats[$i];
        $compt_resultats++;
        }
    }
affichage($resultats);  
search($candidats);  
}

function search($candidats)

{
    //affichage($candidats);
print "Que voulez vous chercher?". PHP_EOL;
print PHP_EOL;
print "1 - Rechercher par nom". PHP_EOL;
print "2 - Rechercher par Age". PHP_EOL;
print "3 - Rechercher par Ville".PHP_EOL;
print "4 - Rechercher par Competences". PHP_EOL;
print "5 - Retour au menu principal". PHP_EOL;
print PHP_EOL;
$REsearch = readline("Votre choix : ");

switch ($REsearch) {
    case "1":
    LastName($candidats);
    break;

    case "2": 
    Ages($candidats);
    break;

    case "3":
    Town($candidats);
    break;

    case "4":
    Skills($candidats);
    break;

    case "5":
    return;
    }
}



?>