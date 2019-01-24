<?php
// Candidates list's menu
function li($candidats)
{
print "Liste des candidats: ". PHP_EOL;
print PHP_EOL;
foreach($candidats as $key => $informations) 
{
    $LastNamesA[$key] = $informations["LastName"];
}
array_multisort($LastNamesA, SORT_ASC, $candidats);
affichage($candidats);
tri:
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
    goto nomD;
    case "2":
    goto villeA;
    case "3":
    goto villeD;
    case "4":
    goto ageA;
    case "5":
    goto ageD;
    case "6":
    goto profileA;
    case "7":
    goto profileD;
    case "8":
    goto retour;
    default:
    print "Votre choix: ".PHP_EOL;
    print PHP_EOL;
}
nomD:
//Sort Last Names Z->A
foreach($candidats as $key => $informations) 
{
   /* if ($informations["LastName"] == $nul) 
    {
        $informations["LastName"] = " ";
    }*/
    $LastNamesD[$key] = $informations["LastName"];
}
array_multisort($LastNamesD, SORT_DESC, $candidats);
affichage($candidats);
goto tri;
villeA:
//Sort Town A->Z
foreach($candidats as $key => $informations) 
{ 
    if ($informations["Town"] == $nul) 
    {
        $informations["Town"] = "zzz";
    }
    $TownsA[$key] = $informations["Town"];
    
}
array_multisort($TownsA, SORT_ASC, $candidats);
affichage($candidats);
goto tri;
villeD:
//Sort Town Z->A
foreach($candidats as $key => $informations) 
{
    if ($informations["Town"] == $nul) 
    {
        $informations["Town"] = " ";
    }
    $TownsD[$key] = $informations["Town"];
}
array_multisort($TownsD, SORT_DESC, $candidats);
affichage($candidats);
goto tri;
ageA:
//Sort by ascending age
foreach($candidats as $key => $informations) 
{
    $agesA[$key] = $informations["Age"];
}
array_multisort($agesA, SORT_ASC, $candidats);
affichage($candidats);
goto tri;
ageD:
//Sort by descending age
foreach($candidats as $key => $informations) 
{
    $agesD[$key] = $informations["Age"];
}
array_multisort($agesD, SORT_DESC, $candidats);
affichage($candidats);
goto tri;
profileA:
//Sort by ascending profile
foreach($candidats as $key => $informations) 
{
    $profileA[$key] = $informations["Profile"];
}
array_multisort($profileA, SORT_ASC, $candidats);
affichage($candidats);
goto tri;
profileD:
//Sort by descending profile
foreach($candidats as $key => $informations) 
{
    
    $profileD[$key] = $informations["Profile"];
}
array_multisort($profileD, SORT_DESC, $candidats);
affichage($candidats);
goto tri;
retour:
}

?>