<?php

    function somaArray($array){
        $soma = 0;
        for ($i=0; $i < sizeof($array); $i++) { 
            $soma = $soma + $array[$i];
        }
        return $soma;
    }

?>



