<?php
//FUNCTIONS
//--FUNCTION THAT SUPRESSES ACCENTS
function removeAccents($str) {
    $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ', 'Ά', 'ά', 'Έ', 'έ', 'Ό', 'ό', 'Ώ', 'ώ', 'Ί', 'ί', 'ϊ', 'ΐ', 'Ύ', 'ύ', 'ϋ', 'ΰ', 'Ή', 'ή');
    $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', 'Α', 'α', 'Ε', 'ε', 'Ο', 'ο', 'Ω', 'ω', 'Ι', 'ι', 'ι', 'ι', 'Υ', 'υ', 'υ', 'υ', 'Η', 'η');
    return str_replace($a, $b, $str);
}
//--FONCTION THAT CLEANS  THE INPUT
function cleanInput($str) {
	//if the users types spaces by mistakes
	
	$str=trim($str);
	
	//if the user types in accents, this removes it
	$str=removeAccents($str);
	
	//if the user types in small letters it turns them into capitals
	$str=strtoupper($str);
	
	return $str;
}
// FUNCTION FOR THE CANDIDATES DISPLAY WHETHER STANDARD OR SORTED (THE SEARCH FUNCTION DOES NOT CALL ON THIS FUNCTION)
function affichage($candidats)
{
    print PHP_EOL;
    print PHP_EOL;
    foreach($candidats as $key => $value)
    {
        foreach($value as $key1 => $value1)
        {
            if($key1 == "SKILLS")
                {
                print($key1.":") .PHP_EOL;
                for($i = 0; $i <  count($value1); $i++)
                    {
                     print($value1[$i]." | ");
                    }
                }
            else
            {
            print($key1);
            print(": ");
            print($value1);
            print(" ") .PHP_EOL;
            }
        }
        print PHP_EOL;
        print PHP_EOL;
        print PHP_EOL;
    }
}
//--FUNCTION THAT EXTRACT THE CVS FILE
function csv_to_array($filename='hrdata.csv', $delimiter=';')
{
    $nul= "NULL";
    if(!file_exists($filename) || !is_readable($filename)) //Check if the file exist and is readable
    {
        return FALSE;
    }
    $candidats = array();
    if (($handle = fopen($filename, 'r')) !== FALSE) // Open the file
    {
        while (($information = fgetcsv($handle, 1000, $delimiter)) !== FALSE) // Allows the program to go through all the csv file until the end. 
        {
            $temp=array();
            $temps=array();
            $temp["ID"]= $information[0];
            $temp["LASTNAME"] = strtoupper(removeAccents($information[1]));
            $temp["FIRSTNAME"] = strtoupper(removeAccents($information[2]));
            $temp["BIRTHDATE"] = trim($information[4]);
            $temp["AGE"] = age($information[4]);
            $temp["ADRESS1"] = strtoupper(removeAccents($information[5]));
            $temp["ADRESS2"]= strtoupper(removeAccents($information[6]));
            $temp["POSTCODE"]=strtoupper(removeAccents($information[7]));
            $temp["TOWN"]=strtoupper(removeAccents($information[8]));
            $temp["MOBILE"] = trim($information[9]);
            $temp["PHONE"] =trim($information[10]);
            $temp["MAIL"] = strtoupper(removeAccents($information[11]));
            $temp["PROFILE"] = strtoupper(removeAccents($information[12]));
			$count_skills=0;
            for($i=0; $i<10; $i++) // Set all "skills" in the same array
            {    
                if ($information[$i+13] !=$nul)
				{
					$count_skills++;
					$temps[]=strtoupper(removeAccents($information[$i+13]));
				}
            }
            $temp["SKILLS"] = $temps;
			if ($count_skills>=5 && $temp["LASTNAME"]!=$nul && $temp["FIRSTNAME"]!=$nul && $temp["BIRTHDATE"]!=$nul && $temp["MOBILE"]!=$nul && $temp["MAIL"]!=$nul && $temp["PROFILE"]!=$nul)
			{
            $candidats[] = $temp; //Set the $temp values at the last line of $candidats before cycle through until done. 
			}
        }
        fclose($handle);    
    }   
    unset($candidats[0]); //Removes the first line which contains olds keys 
    return $candidats;
}
//--FUNCTION THAT CALCULATES THE AGE BASED ON THE BIRTHDATE INPUT
function age ($DOB)
{
    $DOB = str_replace("/", "-", $DOB); // replaces / by - so it's readable in PHP
    $today = date("d-m-Y");
    $cal = strtotime($today) - strtotime($DOB); //turns the date into a readable string for the program
    $age = intval($cal/(60*60*24*365.25)); //intval rounds up the age then the years difference ($cal) is divided by the seconds, minutes, hours and days - days are 365.25 to take in the leap years- 
	return $age;
}


function write ($candidats)
{
    $temp = "";
    $delimiter = ";";
    $today = date("d-m-Y");
    rename('hrdata.csv' , 'hrdata'.$today.'.csv'); // to add today's date to the file name so it can be saved in a new file.
    
    $firstline=true;
    $handle = fopen('hrdata.csv', 'w');
    foreach($candidats as $key => $value)
    {  
	    // The program checks if it's the first line to insert keys.
        if ($firstline==true) 
        {
            $headers= array_keys($value);
                
            for($i = 2; $i < 11 ; $i++ )
                {
                $headers[12+$i]="SKILLS ".$i;
                }
            $headers[] = "WEBSITE";
            fputcsv($handle , $headers , $delimiter);
            $firstline=false;
        }
        else
        {
            $temp=array();
            $temp["ID"]= $value["ID"];
            $temp["LASTNAME"] = $value["LASTNAME"];
            $temp["FIRSTNAME"] = $value["FIRSTNAME"];
            $temp["BIRTHDATE"] = $value["BIRTHDATE"];
            $temp["AGE"] =  $value["AGE"];
            $temp["ADRESS1"] = $value["ADRESS1"];
            $temp["ADRESS2"]= $value["ADRESS2"];
            $temp["POSTCODE"]=$value["POSTCODE"];
            $temp["TOWN"]=$value["TOWN"];
            $temp["MOBILE"] = $value["MOBILE"];
            $temp["PHONE"] =$value["PHONE"];
            $temp["MAIL"] = $value["MAIL"];
            $temp["PROFILE"] =$value["PROFILE"];
		// The program divides the array "SKILLS" into 10 keys to become writable in csv file. 
                for($i = 0; $i < 10; $i++)
                {
                    if(empty($value["SKILLS"][$i]))
                    {
                        $temp["SKILL $i"] = "Null";
                    }
                    else
                    {
                        $temp["SKILLS $i"] = $value["SKILLS"][$i];
                    }
                    
                }
            $temp["WEBSITE"] = $value["WEBSITE"];
            $value = $temp;
            fputcsv($handle , $value , $delimiter);
        }
        

    }
    fclose($handle);
    return;
}


function open_cv($candidats, $traduction)
{
    print($traduction["ADD19"]);
    $cv = "";
    $YesNo = readline();
    $YesNo = strtoupper($YesNo);
        if($YesNo[0] == "Y")
        {   
            $cv = readline($traduction["ADD20"]);
            if (file_exists('C:/Users/16010-50-03/Desktop/ProjetCVtek/faits/'.$cv .'.pdf')) 
            {
                exec('C:/Users/16010-50-03/Desktop/ProjetCVtek/faits/'.$cv .'.pdf'); // opens a file with the appropriate software
            } 
            else if (file_exists('C:/Users/16010-50-03/Desktop/ProjetCVtek/faits/'.$cv .'.docx')) 
            {
                exec('C:/Users/16010-50-03/Desktop/ProjetCVtek/faits/'.$cv .'.docx');
            } else 
            {
                print($traduction["ADD21"]);
            }
        } else if ($YesNo != "Y" && $YesNo != "N")
        {
            print "Mauvaise saisie. Y or N ?  ";
            $YesNo = readline();
            $YesNo = strtoupper($YesNo);
            open_cv($candidats, $traduction) ;
        }
    print($traduction["ADD22"]);
    $YesNo = readline();
    $YesNo = strtoupper($YesNo);
    print_r($candidats);
    if($YesNo[0] == "Y")
        { 
            exec('"C:/Program Files (x86)/Mozilla Firefox/firefox.exe" "'.$candidats[$cv]["WEBSITE"] .'"');
        }
        else
        {
            print($traduction["ADD23"]);
        }
	
}
?>
