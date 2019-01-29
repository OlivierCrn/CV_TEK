<?php
// Candidates list's menu
function li($candidats)
{
print $traduction["LIST1"]. PHP_EOL;
print PHP_EOL;
foreach($candidats as $key => $informations) 
{
    $LastNamesA[$key] = $informations["LASTNAME"];
}
array_multisort($LastNamesA, SORT_ASC, $candidats);
affichage($candidats);
sort:
print $traduction["LIST2"]. PHP_EOL;
print PHP_EOL;
print PHP_EOL;
print $traduction["LIST3"]. PHP_EOL;
print $traduction["LIST4"]. PHP_EOL;
print $traduction["LIST5"]. PHP_EOL;
print $traduction["LIST6"]. PHP_EOL;
print $traduction["LIST7"]. PHP_EOL;
print $traduction["LIST8"]. PHP_EOL;
print $traduction["LIST9"]. PHP_EOL;
print $traduction["LIST10"]. PHP_EOL;
print PHP_EOL;
$choices= readline($traduction["MENU_CHOICE"]);
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
    print $traduction["MENU_CHOICE"].PHP_EOL;
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