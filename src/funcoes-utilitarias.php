<?php

$situacao = function (float $media) :string {
    if($media >= 7){ 
    $resultado = "Aprovado";
  } elseif ( $media >= 5) { 
        $resultado = "Recuperação";
   } else {
     $resultado = "Reprovado";
   }
    return $resultado;
   } ;