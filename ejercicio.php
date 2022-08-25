<?php
    $ano_actual=2022;
    $ano_nacimiento= readline("en que año nacio?");
  $edad= $ano_actual - $ano_nacimiento;

   if($edad>=18){
    echo "Es apto para prestar el servicio militar";
   }else{
    echo "No preseta servicio es menor de edad ";
   }

    
?>