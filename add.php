<?php

function add($candidats , $traduction)

/* Display */
{
print ($traduction["SEARCH1"]).PHP_EOL;
print($traduction["ADD1"]).PHP_EOL;
print($traduction["ADD2"]).PHP_EOL;
print($traduction["ADD3"]).PHP_EOL;
print($traduction["ADD4"]).PHP_EOL;
print($traduction["ADD5"]).PHP_EOL;
print($traduction["ADD6"]).PHP_EOL;
print($traduction["ADD7"]).PHP_EOL;
print($traduction["ADD8"]).PHP_EOL;
print($traduction["ADD9"]).PHP_EOL;
print($traduction["ADD10"]).PHP_EOL;
print($traduction["ADD11"]).PHP_EOL;
print PHP_EOL;
print PHP_EOL;
print ($traduction["ADD12"]) .PHP_EOL;
print PHP_EOL;

/* Filling up informations for a new candidate */
$informations["LASTNAME"]=cleanInput(readline($traduction["SEARCH1"]));
while (empty($informations["LASTNAME"]))
{
	/*MANDATORY INFORMATION*/
	print ($traduction["ADD14"]). PHP_EOL;
	$informations["LASTNAME"]=cleanInput(readline($traduction["SEARCH1"]));
}	

$informations["FIRSTNAME"]=cleanInput(readline($traduction["ADD1"]));
while (empty($informations["FIRSTNAME"]))
{
	/*MANDATORY INFORMATION*/
	print ($traduction["ADD14"]). PHP_EOL;
	$informations["FIRSTNAME"]=cleanInput(readline($traduction["ADD1"]));
}
$informations["BIRTHDATE"]=cleanInput(readline($traduction["ADD13"]));
/* Verification for Birthdate, valid format entry and date entry */
$DOB = $informations["BIRTHDATE"];
$today = date("d-m-Y");
while (!preg_match("#^(0?[1-9]|[0-2][0-9]|3[0-1])[\/.-_ ](0?[1-9]|[0][1-9]|[1][0-2])[[\/.-_ ](19[0-9][0-9]|[2-9]\d{3})$#", $informations["BIRTHDATE"]) || strtotime($DOB) >= strtotime($today))
	{
		if (empty($informations["BIRTHDATE"]))
		{
		/*MANDATORY INFORMATION*/
		print ($traduction["ADD14"]). PHP_EOL;
		$informations["BIRTHDATE"]=readline($traduction["ADD13"]);
		}
		else
		{
		print $traduction["ADD23"]. PHP_EOL;
		$informations["BIRTHDATE"]=readline($traduction["ADD13"]);
		$DOB = $informations["BIRTHDATE"];		
		}
	}



print($traduction["SEARCH3"]);
print $informations["AGE"]= age ($informations["BIRTHDATE"]);
print PHP_EOL;

for($i = 1; $i < count($candidats); $i++)
{
    if ($informations["LASTNAME"] == $candidats[$i]["LASTNAME"] && $informations["FIRSTNAME"] == $candidats[$i]["FIRSTNAME"] && $informations["BIRTHDATE"] == $candidats[$i]["BIRTHDATE"]) 
    {     
        print $traduction["ADD24"];
        $YesNo = readline();
        $YesNo = strtoupper($YesNo);
           if($YesNo[0] == "Y")
            {
            print $traduction["ADD25"]. PHP_EOL;
            goto nextstep;
            }
        else
        {
            return($candidats);
        }
    }
}

nextstep:
$informations["ADRESS1"]=cleanInput(readline($traduction["ADD3"]));
$informations["ADRESS2"]= cleanInput(readline($traduction["ADD4"]));
$informations["POSTCODE"]= cleanInput(readline($traduction["ADD5"]));
$informations["TOWN"]= cleanInput(readline($traduction["ADD6"]));
$informations["PHONE"]=cleanInput(readline($traduction["ADD7"]));
$informations["MOBILE"]=cleanInput(readline ($traduction["ADD8"]));
/* Verification for Mobile phone number, valid format entry */
/*while(!preg_match ("#^07[57-9][-. ]?\d{2}([-. ]?\d{3}){2}$#",$informations["MOBILE"]) && !preg_match ("#^0044[-. ]?7[57-9][-. ]?\d{2}([-. ]?\d{3}){2}$#",$informations["MOBILE"])) => version anglaise*/
while(!preg_match ("#^0[6,7]([-. ]?\d{2}){4}$#",$informations["MOBILE"]) && !preg_match("#^0033[6,7]([-. ]?\d{2}){4}$#",$informations["MOBILE"]))
	{	
	if (empty($informations["MOBILE"]))
		{
		/*MANDATORY INFORMATION*/
		print ($traduction["ADD14"]). PHP_EOL;
		$informations["MOBILE"]=readline ($traduction["ADD8"]);
		}
	else
		{		
		print ($traduction["ADD15"]). PHP_EOL;
		$informations["MOBILE"]=readline ($traduction["ADD8"]);
		}
	}
$informations["MAIL"]= cleanInput(readline($traduction["ADD9"]));
/* Verification for Mail adress, valid format entry */
while(!preg_match ("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$#",$informations["MAIL"]))
	{
	if (empty($informations["MAIL"]))
		{
		/*MANDATORY INFORMATION*/
		print ($traduction["ADD14"]). PHP_EOL;
		$informations["MAIL"]= cleanInput(readline($traduction["ADD9"]));
		}
		else
		{		
		print ($traduction["ADD16"]). PHP_EOL;
		$informations["MAIL"]=cleanInput(readline ($traduction["ADD9"]));
		}
	}	
$informations["PROFILE"]=cleanInput(readline ($traduction["ADD10"]));
while (empty($informations["PROFILE"]))
{
	/*MANDATORY INFORMATION*/
	print ($traduction["ADD14"]). PHP_EOL;
	$informations["PROFILE"]=cleanInput(readline ($traduction["ADD10"]));
}	
print($traduction["ADD11"]) .PHP_EOL;
for($i=0; $i < 10; $i++)
{
    $buffer="";
     $NumComp = $i+1;
    print($traduction["SKILLS_COUNT"].$NumComp) .PHP_EOL;
    cleanInput($buffer = readline());
        if($i < 5 && empty($buffer))
        {
            while(empty($buffer))
            {
				/*MANDATORY INFORMATION, 5 min.*/
                print($traduction["ADD17"]) .PHP_EOL;
                $buffer = cleanInput(readline());
            }
        }
        if($i > 5 && empty($buffer))
        {
        break;
        }
		$Skills[$i] = $buffer;
}
$informations["SKILLS"]=$Skills;
stop:
$candidats[]= $informations ;
return($candidats);
}
?>
