<?php

function LastName($candidats) // Function which will search candidats depending of their name. 
{
    $validation = FALSE;
    $saisie=cleanInput(readline("Nom : "));
    $resultats=array();
    $compt_resultats=1;
    for ($i=1;$i<=count($candidats);$i++) 
        {
        if ($saisie==$candidats[$i]["LASTNAME"]) 
            {
                $validation = TRUE;
                $resultats[$compt_resultats]=$candidats[$i];
                $compt_resultats++;
            }
        }
    if($validation)
    {
        affichage($resultats);  
        search($candidats);
    }
    else
    {
        print("Pas de résultat...").PHP_EOL;
        search($candidats);
    }   

}

function LastNameSearch($candidats) // Function only used by "modification.php"
{
    $validation = FALSE;
    $saisie=cleanInput(readline("Nom : "));
    $resultats=array();
    $compt_resultats=1;
    for ($i=1;$i<=count($candidats);$i++) 
        {
        if ($saisie==$candidats[$i]["LASTNAME"]) 
            {
            $validation = TRUE;
            $resultats[$compt_resultats]=$candidats[$i];
            $compt_resultats++;
            }
        }
    if($validation)
    {
        affichage($resultats); 
    }
    else
    {
        print("Pas de résultat...") .PHP_EOL;
        modificationCandidats($candidats);
    }
}


function Ages($candidats)   // Function which will search candidats depending of their age. 
{
    $validation = FALSE;
    $saisie=cleanInput(readline("Age : "));
    $resultats=array();
    $compt_resultats=1;
    for ($i=1; $i<=count($candidats); $i++) 
    {
        if ($saisie==$candidats[$i]["AGE"]) 
            {
            $validation = TRUE;
            $resultats[$compt_resultats]=$candidats[$i];
            $compt_resultats++;
            }
    }
    if($validation)
    {
        affichage($resultats);  
        search($candidats);
    }
    else
    {
        print("Pas de résultat...") .PHP_EOL;
        search($candidats);
    }
}

function Town($candidats)   // Function which will search candidats depending of their town. 
{
    $validation = FALSE;
    $saisie=cleanInput(readline("Ville : "));
    $resultats=array();
    $compt_resultats=1;
    for ($i=1; $i<=count($candidats); $i++) 
    {
        if($saisie==$candidats[$i]["TOWN"]) 
            {
            $validation = TRUE;
            $resultats[$compt_resultats]=$candidats[$i];
            $compt_resultats++;
            }
    }
    if($validation)
    {
        affichage($resultats);  
        search($candidats);
    }
    else
    {
        print("Pas de résultat...") .PHP_EOL;
        search($candidats);
    }
}


function Skills($candidats)     // Function which will search candidats depending of their skills. 
{
    $validation = FALSE;
    $saisie=cleanInput(readline("Competences : "));
    $resultats=array();
    $compt_resultats=1;
    for ($i=1; $i<=count($candidats); $i++) 
    {
        $compt = 0;
        if ($saisie==$candidats[$i]["SKILLS"][$compt]) 
            {
            $validation = TRUE;
            $resultats[$compt_resultats]=$candidats[$i];
            $compt_resultats++;
            }
    }
    if($validation)
    {
        affichage($resultats);  
        search($candidats);
    }
    else
    {
        print("Pas de résultat...") .PHP_EOL;
        search($candidats);
    }
}

function search($candidats)

{
// Display the menu for searching
print "Quel critère de recherche voulez-vous utiliser ?". PHP_EOL;
print PHP_EOL;
print "1 - Rechercher par nom". PHP_EOL;
print "2 - Rechercher par Age". PHP_EOL;
print "3 - Rechercher par Ville".PHP_EOL;
print "4 - Rechercher par Competences". PHP_EOL;
print "5 - Retour au menu principal". PHP_EOL;
print PHP_EOL;
$Research = readline("Votre choix : ");

switch ($Research) {
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

    default:
    print("Merci d'entrer un numéro entre 1 et 5.");
    search($candidats);
    }
}

?>