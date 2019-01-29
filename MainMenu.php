<?php
//Call

$defaultLanguage = "FR";
require_once('function.php');
require_once('list.php');
require_once('search.php');
require_once('add.php');
require_once('modification.php');
require_once('traductionFR.php');
//Variables
$ID = 0;
$IDs = 0;
$saisie=0;
$validation = false;
$nul = "NULL";
$Skills=array();
$informations=array();
$candidats=csv_to_array('hrdata.csv');
$compteur= 0;
//Start
//General menu:
function menu_FR($candidats,$traduction)
{
	$informations=array();
    print PHP_EOL;
    print $traduction["MAIN_MENU1"]. PHP_EOL;
    print PHP_EOL;
    print $traduction["MAIN_MENU2"]. PHP_EOL;
    print $traduction["MAIN_MENU3"]. PHP_EOL;
    print $traduction["MAIN_MENU4"]. PHP_EOL;
    print $traduction["MAIN_MENU5"]. PHP_EOL;
    print $traduction["MAIN_MENU6"]. PHP_EOL;
    $menu=readline($traduction["MENU_CHOICE"]);
    print  PHP_EOL;
    switch ($menu) {
        case "1":
        li($candidats);
        menu_FR($candidats,$traduction);
        case "2":
        $candidats=add($candidats,$traduction);
        menu_FR($candidats,$traduction);
        case "3":
        $candidats=modificationCandidats($candidats);
        menu_FR($candidats,$traduction);
        case "4":   
        search($candidats);
        menu_FR($candidats,$traduction);
        case "5":
        quit($candidats);
        default:
        print $traduction["MAIN_MENU_DEFAULT"]. PHP_EOL;
        print PHP_EOL;
        menu_FR($candidats,$traduction);
    }
}

//End
function quit($candidats) 
{

    print PHP_EOL;
    print $traduction["MENU_QUIT1"];
    $YesNo = readline();
    $YesNo = strtoupper($YesNo);
        if($YesNo[0] == "Y")
        {
            print $traduction["MENU_QUIT2"]. PHP_EOL;
            exit;
        }
        else
        {
            menu_fr($candidats);
        }
    
}

menu_FR($candidats,$traduction)
?>
