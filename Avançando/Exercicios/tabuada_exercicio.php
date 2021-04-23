<?php

    calcula(2);

    

  function calcula ($valor) {

      for ($i = 0; $i <= 10; $i++){
          $total = ($valor * $i);
          echo "2x" . $total . PHP_EOL;
          
      }
  }


?>