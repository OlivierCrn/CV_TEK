<?php
/*
 *@Author : CAMPAGNE Cécile / SÉLIGNAC Marie / CARON Olivier
 * HR TOOLS V 1.0
 *
 *
 */

// Variables
$ID = 0;
$IDs = 0;
$saisie=0;
$validation = false;
$nul = "NULL";
$Skills=array();
$informations=array();
$default_language = "EN.php";
$compteur= 0;

//DÉBUT DU PROGRAMME:
la:
print "Choisissez la langue/ Choose your language/ Escoge su idioma:". PHP_EOL;
print "1 - Français". PHP_EOL;
print "2 - English". PHP_EOL;
print "3 - Español". PHP_EOL;
$langue= readline ("Votre choix: ");
switch ($langue)
 {
    case "1":
    $default_language="FR.php";
    
    break;
    case "2":
    $default_language="EN.php";
    
    break;
 }

//APPEL
require_once('function.php');
require_once('MainMenu.php');
$candidats=csv_to_array('hrdata.csv');


switch ($langue)
 {
    case "1":
    
    MainMenu($candidats, $traduction);
    break;
    case "2":
    
    MainMenu($candidats, $traduction);
    break;
 }









?>
