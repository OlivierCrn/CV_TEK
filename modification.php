<?php
function modificationCandidats($candidats, $traduction)
{
    // Initialization of $key1 and $value1
    foreach($candidats as $key => $value)
    {
        foreach($value as $key1 => $value1)
        {}
    }
    print $traduction["MODIFY1"] .PHP_EOL;
    LastNameSearch($candidats); // We use LastNameSearch to display profil of people user wants to edit. 
    print PHP_EOL;
    $ID = readline($traduction["MODIFY2"]);
    $Askey = cleanInput(readline ($traduction["MODIFY3"]));
    if($Askey == "SKILLS") // Verification, if it's about skills we need to display them with ID.
    {
        for($i = 0; $i < count($value1) ; $i++)
        {
            print $traduction["SKILLS_COUNT"].$i." ";
            print($value1[$i]) .PHP_EOL;
        }
            $IDs = readline ($traduction["MODIFY4"]);
            $buffer = readline($traduction["MODIFY5"]);
            while(empty($buffer))
        {
            $buffer = readline($traduction["MODIFY6"]);
        }
        $candidats[$ID][$Askey][$IDs] = $buffer;
    }
    else
    {
        $buffer = "";
        $buffer = cleanInput(readline($traduction["MODIFY5"]));
            while(empty($buffer))
            {
                $buffer = cleanInput(readline($traduction["MODIFY6"]));
            }
        $candidats[$ID][$Askey] = $buffer;    
    }
    print $traduction["MODIFY7"];
    return $candidats; // Return the new array of candidats 
}
    ?>
