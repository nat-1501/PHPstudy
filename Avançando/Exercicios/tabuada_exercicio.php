<?php

    calcula(2);

  function calcula ($valor) {

      for ($i = 0; $i <= 10; $i++){
          $total = ($valor * $i);
          echo $total . PHP_EOL;
          
      }
  }


?>