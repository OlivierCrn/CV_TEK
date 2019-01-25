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
$informations["LastName"]=readline("Nom: ");
while (empty($informations["LastName"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	$informations["LastName"]=readline("Nom: ");
}	
$informations["FirstName"]=readline("Prénom: ");
while (empty($informations["FirstName"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	$informations["FirstName"]=readline("Prénom: ");
}
$informations["Birthdate"]=readline("Date de naissance au format dd/mm/yyyy: ");
while (empty($informations["Birthdate"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	$informations["Birthdate"]=readline("Date de naissance au format dd/mm/yyyy: ");
}
print("Âge: ");
print $informations["Age"]= age ($informations["Birthdate"]);
print PHP_EOL;
$informations["Address1"]=readline("Adresse: ");
$informations["Address2"]= readline("Adresse suite: ");
$informations["Postcode"]= readline("Code postal: ");
$informations["Town"]= readline("Ville: ");
$informations["Phone"]=readline("Téléphone fixe: ");
$informations["Mobile"]=readline ("Téléphone portable: ");
while (empty($informations["Mobile"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	$informations["Mobile"]=readline ("Téléphone portable: ");
}
$informations["Mail"]= readline("Mail: ");
while (empty($informations["Mail"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	$informations["Mail"]= readline("Mail: ");
}
$informations["Profile"]=readline ("Profil recherché: ");
while (empty($informations["Profile"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	$informations["Profile"]=readline ("Profil recherché: ");
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
                print("Il y a moins de 5 compétences, merci de rentrer 5 compétences MINIMUM.") .PHP_EOL;
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