<?php
//Call
require_once('list.php');
require_once('search.php');
require_once('add.php');
require_once('modification.php');
require_once('Translation'.$default_language);

//Start
//General menu:
function MainMenu($candidats,$traduction)
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
        li($candidats, $traduction);
        MainMenu($candidats,$traduction);
        case "2":
        $candidats=add($candidats,$traduction);
        MainMenu($candidats,$traduction);
        case "3":
        $candidats=modificationCandidats($candidats, $traduction);
        MainMenu($candidats,$traduction);
        case "4":   
        search($candidats, $traduction);
        MainMenu($candidats,$traduction);
        case "5":
        quit($candidats, $traduction);
        default:
        print $traduction["MAIN_MENU_DEFAULT"]. PHP_EOL;
        print PHP_EOL;
        MainMenu($candidats,$traduction);
    }
}

//End
function quit($candidats, $traduction) 
{

    print PHP_EOL;
    print $traduction["MENU_QUIT1"];
    $YesNo = readline();
    $YesNo = strtoupper($YesNo);
        if($YesNo[0] == "Y")
        {
            write ($candidats);
            print $traduction["MENU_QUIT2"]. PHP_EOL;
            exit;
        }
        else
        {
            MainMenu($candidats, $traduction);
        }
    
}
?>
