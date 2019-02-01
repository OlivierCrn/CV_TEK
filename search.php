<?php
// This file manages the search function
function LastName($candidats, $traduction) // Function which will search candidats depending of their name. 
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
        open_cv($candidats, $traduction);  //Function which ask to the user if he wants to open CV and website related to a candidate 
        search($candidats, $traduction);
    }
    else
    {
        print($traduction["SEARCH2"]).PHP_EOL;
        search($candidats);
    }   

}

function LastNameSearch($candidats, $traduction) // Function only used by "modification.php"
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


function Ages($candidats, $traduction)   // Function which will search candidats depending of their age. 
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
        open_cv($candidats, $traduction);  //Function which ask to the user if he wants to open CV and website related to a candidate 
        search($candidats, $traduction);
    }
    else
    {
        print($traduction["SEARCH2"]) .PHP_EOL;
        search($candidats, $traduction);
    }
}

function Town($candidats, $traduction)   // Function which will search candidats depending of their town. 
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
        open_cv($candidats, $traduction);  //Function which ask to the user if he wants to open CV and website related to a candidate 
        search($candidats, $traduction);
    }
    else
    {
        print($traduction["SEARCH2"]) .PHP_EOL;
        search($candidats, $traduction);
    }
}


function Skills($candidats, $traduction)     // Function which will search candidats depending of their skills. 
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
        open_cv($candidats, $traduction);  //Function which ask to the user if he wants to open CV and website related to a candidate 
        search($candidats, $traduction);
    }
    else
    {
        print($traduction["SEARCH2"]) .PHP_EOL;
        search($candidats, $traduction);
    }
}

function search($candidats, $traduction)

{
// Display the menu for searching
print PHP_EOL;
print ($traduction["SEARCH5"]). PHP_EOL;
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
    LastName($candidats, $traduction);
    break;

    case "2": 
    Ages($candidats, $traduction);
    break;

    case "3":
    Town($candidats, $traduction);
    break;

    case "4":
    Skills($candidats, $traduction);
    break;

    case "5":
    return;

    default:
    print($traduction["SEARCH11"]);
    search($candidats , $traduction);
    }
}

?>
