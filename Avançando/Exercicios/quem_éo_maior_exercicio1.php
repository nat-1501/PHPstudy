<?php

echo maior ([20, 33.5, 10.8, 50, 50.9, 8]) . PHP_EOL;
echo maior ([30, 10.5]) . PHP_EOL;     
    function maior ($pacotes) {
        $maior = 1;
        for ($i=0;$i<count([$pacotes]);$i++){

            if ($pacotes[$i] > $maior) {
                $maior = $pacotes [$i];
            }
    


        }
        return $maior;
    }
    

?>