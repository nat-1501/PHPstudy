<?php

 echo maior ([20, 33.5, 10.8, 50, 50.9, 80, 8]) . PHP_EOL;
echo maior ([30, 50, 10.5]) . PHP_EOL;     

    function maior ($pacotes) {
        

        $ultimoPeso = 0;

        for ($i = 0; $i < count($pacotes); $i++){

            if ($pacotes[$i] > $ultimoPeso) {
                $ultimoPeso = $pacotes[$i];
            }
    


        }
        return $ultimoPeso;
    }
    

?>