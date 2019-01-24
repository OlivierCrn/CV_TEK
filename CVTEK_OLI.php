<?php
//APPEL
require_once('function.php');
require_once('list.php');
require_once('search.php');
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
    case "2":
    goto ad;
    case "3":
    goto mo;
    case "4":   
    search($candidats);
    case "5":
    goto qu;
    default:
    print "Choisir un chiffre entre 1 et 5". PHP_EOL;
    print PHP_EOL;
    goto a;
}

//Ajout d'un nouveau candidat:
ad:
print ("Nom: ").PHP_EOL;
print("Prénom: ").PHP_EOL;
print("Date de naissance: ").PHP_EOL;
print("Adresse: ").PHP_EOL;
print("Adresse suite: ").PHP_EOL;
print("Code postal: ").PHP_EOL;
print("Ville: ").PHP_EOL;
print("Téléphone fixe: ").PHP_EOL;
print("Téléphone portable: ").PHP_EOL;
print("Mail: ").PHP_EOL;
print("Profil recherché: ").PHP_EOL;
print("Compétences (de 5 minimum à 10 maximum): ").PHP_EOL;
print PHP_EOL;
print PHP_EOL;
print "Nouveau Candidat" .PHP_EOL;
print PHP_EOL;
print("Nom: ");
$informations["LastName"]=readline();
while (empty($informations["LastName"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Nom: ");
	$informations["LastName"]=readline();
}	
print("Prénom: ");
$informations["FirstName"]=readline();
while (empty($informations["FirstName"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Prénom: ");
	$informations["FirstName"]=readline();
}
print("Date de naissance au format dd-mm-yyyy: ");
$informations["Birthdate"]=readline();
while (empty($informations["Birthdate"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Date de naissance au format dd-mm-yyyy: ");
	$informations["Birthdate"]=readline();
}
print("Âge: ");
print $informations["Age"]= age ($informations["Birthdate"]);
print PHP_EOL;
print("Adresse: ");
$informations["Address1"]=readline();
print("Adresse suite: ");
$informations["Address2"]= readline();
print("Code postal: ");
$informations["Postcode"]= readline();
print("Ville: ");
$informations["Town"]= readline();
print("Téléphone fixe: ");
$informations["Phone"]=readline();
print("Téléphone portable: ");
$informations["Mobile"]=readline ();
while (empty($informations["Mobile"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Téléphone portable: ");
	$informations["Mobile"]=readline ();
}
print("Mail: ");
$informations["Mail"]= readline();
while (empty($informations["Mail"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Mail: ");
	$informations["Mail"]= readline();
}
print("Profil recherché: ");
$informations["Profile"]=readline ();
while (empty($informations["Profile"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Profil recherché: ");
	$informations["Profile"]=readline ();
}	
print("Compétences (de 5 minimum à 10 maximum): ") .PHP_EOL;
for($i=0; $i < 10; $i++)
{
    $buffer="";
     $NumComp = $i+1;
    print("Compétence n°".$NumComp) .PHP_EOL;
    $buffer = readline();
        if($i < 5 && empty($buffer))
        {
            while(empty($buffer))
            {
                print("Il y a moins de 5 compétences, merci de rentrer 5 compétences minimum.") .PHP_EOL;
                $buffer = readline();
            }
        }
        if($i > 5 && empty($buffer))
        {
        break;
        }
    $Skills[$i] = $buffer;
}
$informations["Skills"]=$Skills;
$candidats[]=($informations);

print PHP_EOL;
print "Que voulez-vous faire?". PHP_EOL;
print "1 - Ajouter un nouveau candidat". PHP_EOL;
print "2 - Retour au Menu". PHP_EOL;
print "3 - Quitter". PHP_EOL;
print  PHP_EOL;
$choices= readline("Entrer l'option du menu: ");
switch ($choices) 
{
    case "1":
    goto ad;
    case "2":
    goto a;
    case "3":
    goto qu;
    default:
    goto a;
    print PHP_EOL;
}

/*
$saisie= intval ($saisie); //Fonction pour convertir une chaîne en numérique
if ($saisie!=1) //Si pas de fontion de conversion, mettre la valeur entrez guillemets " " => ($saisie != "1")
*/

//Modification du fichier candidat:
//Modification du fichier candidat:
    mo:
    print PHP_EOL;
    print("Tapez le nom de la personne dont vous voulez modifier le profil: ");
    $search ="";
    $search= readline();
    foreach($candidats as $key => $value)
    {
            if(in_array($search , $value))
            {
                $validation = true;
                print PHP_EOL;
                print("~~ Une ou plusieurs correspondance trouvée ~~") .PHP_EOL;
                print PHP_EOL;
                print("ID:" . $key). PHP_EOL;
                foreach($value as $key1 => $value1)
                {
                    if($key1 == "Skills")
                    {
                        print("Skills: "). PHP_EOL;
                        for($i = 0; $i < count($value1); $i++)
                        {
                            print($value1[$i]." | ");
                        }
                        print PHP_EOL;
                    }
                    else
                    {
                        print($key1.": ");
                        print($value1). PHP_EOL;
                    }
                }
            }
    } 
    if(!$validation)
    {
        print PHP_EOL;
        print("Aucune correspondance trouvée..."). PHP_EOL;
        print PHP_EOL;
        goto mo;
    }
    
    print PHP_EOL;
    print("Entrez l'ID de la personne que vous souhaitez modifier:") .PHP_EOL;
    $ID = readline();
    print("Que voulez-vous modifier? (Entrer une option):") .PHP_EOL;
    $Askey = readline();
    if($Askey == "Skills")
    {
        for($i = 0; $i < count($value1) ; $i++)
            {
                print("Compétence N°".$i." ");
                print($value1[$i]) .PHP_EOL;
            }
            print("Entrez l'ID de la compétence à éditer:") .PHP_EOL;
            $IDs = readline();
    
            print("Entrez la nouvelle valeur:");
            $candidats[$ID][$Askey][$IDs] = readline();
    }
    else
    {
        print("Entrez la nouvelle valeur:");
        $candidats[$ID][$Askey] = readline();
    }


//Recherche de candidat  selon variable:
se:
$temp= 0;
$choice = 0;
$search = "";
$validation = false;
print PHP_EOL;
print("Selectionnez le type de recherche souhaité") .PHP_EOL;
print("1 ֍ Par Nom") .PHP_EOL;
print("2 ֍ Par Ville") .PHP_EOL;
print("3 ֍ Par Age") .PHP_EOL;
print("4 ֍ Par compétences") .PHP_EOL;
$choice = readline();
switch($choice)
{
    case(1):
        print("Entrez le nom recherché") .PHP_EOL;
        $search=readline();
        $search=cleanInput($search);
        foreach($candidats as $key => $value)
        {
                if(in_array($search , $value))
                {
                    affichage($candidats);
                }
        }
        	if($validation == false)
		{
			print("Result not founds") .PHP_EOL;
		}   
        goto se;  
    case(2):            
        print("Entrez la ville recherchée") .PHP_EOL;
        $search=readline();
        $search=cleanInput($search);
        foreach($candidats as $key => $value)
        {
                if(in_array($search , $value))
                {
                    $validation = true;
                    print("Une ou plusieurs correspondance trouvée") .PHP_EOL;
                    foreach($value as $key1 => $value1)
                    {
                        if($key1 == "Skills")
                        {
                            print PHP_EOL;
                            print("Skills: ");
                            print PHP_EOL;
                            for($i = 0; $i < count($value1); $i++)
                            {
                                print($value1[$i]." | ");
                            }
                        }
                        else
                        {
                            print($key1.": ");
                            print($value1." | ");
                            print " ";
                        }
                    }
                }    
            }
            if($validation == false)
    {
        print("Result not founds") .PHP_EOL;
    }   
            goto se;
            
        case(3):    
        print("Entrez l'âge") .PHP_EOL;
        $search=readline();
        while(!is_numeric($search))
        {
            print("Mauvaise saisie, merci de d'entrer un nombre");
            $search=readline();
        }
        floor($search);
        foreach($candidats as $key => $value)
            {
                if(in_array($search , $value))
                {
                    if($value["Age"] == $search)
                    {
                    
                    print("Une ou plusieurs correspondance trouvée") .PHP_EOL;
                    foreach($value as $key1 => $value1)
                    {
                        if($key1 == "Skills")
                        {
                            $validation = true;
                            print PHP_EOL;
                            print("Skills: ");
                            print PHP_EOL;
                            for($i = 0;$i < count($value1); $i++)
                            {
                                print($value1[$i]." | ");
                            }
                        }
                        else
                        {
                            print($key1.": ");
                            print($value1." | ");
                            print " ";
                        }
                    }
                    }
                } 
            }
            if($validation == false)
            {
                print("Result not founds") .PHP_EOL;
            }   
            goto se;
        case(4):            
        print("Entrez la compétence recherchée") .PHP_EOL;
        $search=cleanInput($search);
        foreach($candidats as $key => $value)
        {
            {
            foreach($value as $key1 => $value1)
                {
                    if($key1 == "Skills")
                    {
                        for($i = 0; $i < 10; $i++)
                        {
                            if(in_array($search , $value1))
                            {
                                foreach($value as $key1 => $value1)
                                    {
                                    if($key1 == "Skills")
                                    {
                                        $validation = true;
                                        print("Skills: ");
                                        print PHP_EOL;
                                        for($i = 0; $i < count($value1); $i++)
                                        {
                                         print($value1[$i]." | ");
                                        }
                                    }
                                    else
                                    {
                                        print($key1.": ");
                                        print($value1." | ");
                                        print " ";
                                    }
                                    print PHP_EOL;
                                    }
                            }
                        }
                    }
                }
                print " ";
                print PHP_EOL;    
            }
        }
    if($validation == false)
    {
        print("Result not founds") .PHP_EOL;
    }   
    goto se;
}
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