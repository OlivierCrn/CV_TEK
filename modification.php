<?php
    function modificationCandidats($candidats)
    {
        $validation = FALSE;
        $search ="";
        print PHP_EOL;
        $search= cleanInput(readline("Tapez le nom de la personne dont vous voulez modifier le profil: "));
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
            else
            {
            print PHP_EOL;
            print("Aucune correspondance trouvée..."). PHP_EOL;
            print PHP_EOL;
            return;
            }
        } 

    
        print PHP_EOL;
        $ID = readline("Entrez l'ID de la personne que vous souhaitez modifier:");
        $Askey = readline("Que voulez-vous modifier? (Entrer une option):" );
        if($Askey == "Skills")
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
            $buffer = readline("Entrez la nouvelle valeur:");
                while(empty($buffer))
                {
                    $buffer = readline("Erreur, vous devez obligatoirement saisir une valeur..");
                }
            $candidats[$ID][$Askey] = $buffer;
                
        }
    return $candidats;
    }
    ?>