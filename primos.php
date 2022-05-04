<?php

    function primos($inicial, $final) {
        $array = array();
        for ($i = $inicial; $i <= $final; $i++) {
            $divisor = 0;
            for ($a = $i; $a >= 1; $a--) {
                if (($i % $a) == 0) {
                    $divisor++;
                }
            }
            if ($divisor == 2) {
                array_push($array,$i);
                
            }
            print_r($array);
        }
    }

    echo primos(1,100);
