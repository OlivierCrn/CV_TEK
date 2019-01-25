<?php
    function modificationCandidats($candidats)
    {
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
            return $candidats;
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
    return $candidats;
    }
    ?>