<?php
// Candidates list's menu
function li($candidats)
{
print "Liste des candidats: ". PHP_EOL;
print PHP_EOL;
foreach($candidats as $key => $informations) 
{
    $LastNamesA[$key] = $informations["LASTNAME"];
}
array_multisort($LastNamesA, SORT_ASC, $candidats);
affichage($candidats);
sort:
print "De quelle facon voulez vous trier la liste?". PHP_EOL;
print PHP_EOL;
print PHP_EOL;
print "1 - Trier par nom (descendant)". PHP_EOL;
print "2 - Trier par ville (ascendant)". PHP_EOL;
print "3 - Trier par ville (descendant)". PHP_EOL;
print "4 - Trier par age (ascendant)". PHP_EOL;
print "5 - Trier par age (descendant)". PHP_EOL;
print "6 - Trier par profil (ascendant)". PHP_EOL;
print "7 - Trier par profil (descendant)". PHP_EOL;
print "8 - RETOUR AU MENU PRINCIPAL". PHP_EOL;
print PHP_EOL;
$choices= readline("Votre choix: ");
print PHP_EOL;
switch ($choices) {
    case "1":
    goto nameD;
    case "2":
    goto townU;
    case "3":
    goto townD;
    case "4":
    goto ageU;
    case "5":
    goto ageD;
    case "6":
    goto profileU;
    case "7":
    goto profileD;
    case "8":
    goto back;
    default:
    print "Votre choix: ".PHP_EOL;
    print PHP_EOL;
}
nameD:
//Sort Last Names Z->A
foreach($candidats as $key => $informations) 
{
   /* if ($informations["LastName"] == $nul) 
    {
        $informations["LastName"] = " ";
    }*/
    $LastNamesD[$key] = $informations["LASTNAME"];
}
array_multisort($LastNamesD, SORT_DESC, $candidats);
affichage($candidats);
goto sort;
townU:
//Sort Town A->Z
foreach($candidats as $key => $informations) 
{ 
    if ($informations["TOWN"] == $nul) 
    {
        $informations["TOWN"] = "zzz";
    }
    $TownsA[$key] = $informations["TOWN"];
    
}
array_multisort($TownsA, SORT_ASC, $candidats);
affichage($candidats);
goto sort;
townD:
//Sort Town Z->A
foreach($candidats as $key => $informations) 
{
    if ($informations["TOWN"] == $nul) 
    {
        $informations["TOWN"] = " ";
    }
    $TownsD[$key] = $informations["TOWN"];
}
array_multisort($TownsD, SORT_DESC, $candidats);
affichage($candidats);
goto sort;
ageU:
//Sort by ascending age
foreach($candidats as $key => $informations) 
{
    $agesA[$key] = $informations["AGE"];
}
array_multisort($agesA, SORT_ASC, $candidats);
affichage($candidats);
goto sort;
ageD:
//Sort by descending age
foreach($candidats as $key => $informations) 
{
    $agesD[$key] = $informations["AGE"];
}
array_multisort($agesD, SORT_DESC, $candidats);
affichage($candidats);
goto sort;
profileU:
//Sort by ascending profile
foreach($candidats as $key => $informations) 
{
    $profileU[$key] = $informations["PROFILE"];
}
array_multisort($profileU, SORT_ASC, $candidats);
affichage($candidats);
goto sort;
profileD:
//Sort by descending profile
foreach($candidats as $key => $informations) 
{
    $profileD[$key] = $informations["PROFILE"];
}
array_multisort($profileD, SORT_DESC, $candidats);
affichage($candidats);
goto sort;
back:
return;
}

?>