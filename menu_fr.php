<?php
//APPEL
require_once('function.php');
require_once('list.php');
require_once('search.php');
require_once('add.php');
require_once('modification.php');
// Variables
$ID = 0;
$IDs = 0;
$saisie=0;
$validation = false;
$nul = "NULL";
$Skills=array();
$informations=array();
$candidats=csv_to_array('hrdata.csv');
$compteur= 0;
//DÉBUT DU PROGRAMME:
//General menu:
a:
print PHP_EOL;
print("Menu, ou voulez vous aller? "). PHP_EOL;
print PHP_EOL;
print "1 - Liste des candidats ". PHP_EOL;
print "2 - Ajout de candidat ". PHP_EOL;
print "3 - Modification des informations d'un candidat ". PHP_EOL;
print "4 - Recherche  ". PHP_EOL;
print "5 - Quitter ". PHP_EOL;
$menu=readline("Votre choix: ");
print  PHP_EOL;
switch ($menu) {
    case "1":
    li($candidats);
    goto a;
    case "2":
    $candidats[]=add($informations);
    goto a;
    case "3":
    $candidats=modificationCandidats($candidats);
    goto a;
    case "4":   
    search($candidats);
    goto a;
    case "5":
    goto qu;
    default:
    print "Choisir un chiffre entre 1 et 5". PHP_EOL;
    print PHP_EOL;
    goto a;
}

//Ajout d'un nouveau candidat:
//Fin du programme:
qu: 
print PHP_EOL;
print "Voulez-vous vraiment quitter le programme ? y/N ";
$YesNo = readline();
$YesNo = strtoupper($YesNo);
    if($YesNo[0] == "Y")
    {
        print "Vous quittez le programme". PHP_EOL;
        goto end;
    }
    else
    {
        goto a;
    }
    end:
?>