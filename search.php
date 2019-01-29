<?php

function LastName($candidats) // Function which will search candidats depending of their name. 
{
    $validation = FALSE;
    $saisie=cleanInput(readline($traduction["SEARCH1"]));
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
        print($traduction["SEARCH2"]).PHP_EOL;
        search($candidats);
    }   

}

function LastNameSearch($candidats) // Function only used by "modification.php"
{
    $validation = FALSE;
    $saisie=cleanInput(readline($traduction["SEARCH1"]));
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
        print($traduction["SEARCH2"]) .PHP_EOL;
        modificationCandidats($candidats);
    }
}


function Ages($candidats)   // Function which will search candidats depending of their age. 
{
    $validation = FALSE;
    $saisie=cleanInput(readline($traduction["SEARCH3"]));
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
        print($traduction["SEARCH2"]) .PHP_EOL;
        search($candidats);
    }
}

function Town($candidats)   // Function which will search candidats depending of their town. 
{
    $validation = FALSE;
    $saisie=cleanInput(readline($traduction["SEARCH12"]));
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
        print($traduction["SEARCH2"]) .PHP_EOL;
        search($candidats);
    }
}


function Skills($candidats)     // Function which will search candidats depending of their skills. 
{
    $validation = FALSE;
    $saisie=cleanInput(readline($traduction["SEARCH4"]));
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
        print($traduction["SEARCH2"]) .PHP_EOL;
        search($candidats);
    }
}

function search($candidats)

{
// Display the menu for searching
print ($traduction["SEARCH4"]). PHP_EOL;
print PHP_EOL;
print ($traduction["SEARCH6"]). PHP_EOL;
print ($traduction["SEARCH7"]). PHP_EOL;
print ($traduction["SEARCH8"]).PHP_EOL;
print ($traduction["SEARCH9"]). PHP_EOL;
print ($traduction["SEARCH10"]). PHP_EOL;
print PHP_EOL;
$Research = readline($traduction["MENU_CHOICE"]);

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
    print($traduction["SEARCH11"]);
    search($candidats);
    }
}

?>
