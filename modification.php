<?php
    function modificationCandidats($candidats)
    {
        search($candidats); 
        print PHP_EOL;
        $ID = readline("Entrez l'ID de la personne que vous souhaitez modifier:");
        $Askey = cleanInput(readline("Que voulez-vous modifier? (Entrer une option):" ));
        if($Askey == "SKILLS")
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
                    $buffer = readline("Erreur, vous devez obligatoirement saisir quelque chose..");
                }
            $candidats[$ID][$Askey] = $buffer;    
        }
    return $candidats;
    }
    ?>