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
print("MAIL: ").PHP_EOL;
print("Profil recherché: ").PHP_EOL;
print("Compétences (de 5 minimum à 10 maximum): ").PHP_EOL;
print PHP_EOL;
print PHP_EOL;
print "Nouveau Candidat" .PHP_EOL;
print PHP_EOL;
$informations["LASTNAME"]=readline("Nom: ");
while (empty($informations["LASTNAME"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	$informations["LASTNAME"]=readline("Nom: ");
}	
$informations["FIRSTNAME"]=readline("Prénom: ");
while (empty($informations["FIRSTNAME"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	$informations["FIRSTNAME"]=readline("Prénom: ");
}
print("Date de naissance au format dd-mm-yyyy: ");
$DOB = $informations["Birthdate"]=readline();
$today = date("d-m-Y");
$DOB = str_replace("/", "-", $DOB);
while (strtotime($DOB) >= strtotime($today))
	{
		print "Vous êtes bien jeune... Recommencez:";
		$informations["Birthdate"]=readline();
		break;
	}
	
	while (empty($informations["Birthdate"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	print("Date de naissance au format dd-mm-yyyy: ");
	$informations["Birthdate"]=readline();
}
print("Âge: ");
print $informations["AGE"]= age ($informations["BIRTHDATE"]);
print PHP_EOL;
$informations["ADRESS1"]=readline("Adresse: ");
$informations["ADRESS2"]= readline("Adresse suite: ");
$informations["POSTCODE"]= readline("Code postal: ");
$informations["TOWN"]= readline("Ville: ");
$informations["PHONE"]=readline("Téléphone fixe: ");
$informations["MOBILE"]=readline ("Téléphone portable: ");
/* strlen () => compte le nombre de caractères d'une chaine*/
/*while(!preg_match ("#^07[57-9][-. ]?\d{2}([-. ]?\d{3}){2}$#",$informations["MOBILE"]) || !preg_match ("#^0044[-. ]?7[57-9][-. ]?\d{2}([-. ]?\d{3}){2}$#",$informations["MOBILE"])) => version anglaise*/
while(!preg_match ("#^0[6,7]([-. ]?\d{2}){4}$#",$informations["MOBILE"]))
	{	
	if (empty($informations["MOBILE"]))
		{
		print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
		$informations["MOBILE"]=readline ("Téléphone portable: ");
		}
	else
		{		
		print " CE NUMÉRO N'EST PAS VALIDE.". PHP_EOL;
		$informations["MOBILE"]=readline ("Téléphone portable: ");
		}
	}
$informations["MAIL"]= readline("MAIL: ");
while (empty($informations["MAIL"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	$informations["MAIL"]= readline("MAIL: ");
}
$informations["PROFILE"]=readline ("Profil recherché: ");
while (empty($informations["PROFILE"]))
{
	print " CETTE INFORMATION EST OBLIGATOIRE POUR L'AJOUT DE TOUTE NOUVELLE CANDIDATURE.". PHP_EOL;
	$informations["PROFILE"]=readline ("Profil recherché: ");
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
$informations["SKILLS"]=$Skills;
return $informations;
}
?>
