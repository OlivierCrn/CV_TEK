<?php
function modificationCandidats($candidats)
{
    // Initialization of $key1 and $value1
    foreach($candidats as $key => $value)
    {
        foreach($value as $key1 => $value1)
        {}
    }
    print("Veuillez entrer le nom de la personne dont vous souhaitez modifier le profil : ") .PHP_EOL;
    LastNameSearch($candidats); // We use LastNameSearch to display profil of people user wants to edit. 
    print PHP_EOL;
    $ID = readline("Entrez l'ID de la personne que vous souhaitez modifier:");
    $Askey = cleanInput(readline("Que voulez-vous modifier? (Entrer une option):" ));
    if($Askey == "SKILLS") // Verification, if it's about skills we need to display them with ID.
    {
        for($i = 0; $i < count($value1) ; $i++)
        {
            print("Compétence N°".$i." ");
            print($value1[$i]) .PHP_EOL;
        }
            $IDs = readline("Entrez l'ID de la compétence à éditer:" );
            $buffer = readline("Entrez la nouvelle valeur:" );
            while(empty($buffer))
        {
            $buffer = readline("Erreur, vous devez obligatoirement saisir une valeur..");
        }
        $candidats[$ID][$Askey][$IDs] = $buffer;
    }
    else
    {
        $buffer = "";
        $buffer = cleanInput(readline("Entrez la nouvelle valeur:"));
            while(empty($buffer))
            {
                $buffer = cleanInput(readline("Erreur, vous devez obligatoirement saisir quelque chose.."));
            }
        $candidats[$ID][$Askey] = $buffer;    
    }
    print("Mise à jour effectuée");
    return $candidats; // Return the new array of candidats 
}
    ?>