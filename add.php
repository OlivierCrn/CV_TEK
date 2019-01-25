<?php

function add()
{
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
return $informations;
}
?>