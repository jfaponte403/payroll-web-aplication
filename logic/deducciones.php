<?php
    function Saludpension($n1){
        return $n1*0.4;
    }


    function Fondosoli($n1){
        if(n1>3124968){
            return $n1*0.1;
        }else{
            return 0;
        }
    }

    function Cuotasdescontar($n1, $n2){
        return $n1-$n2;
    }

    function Totaldeducciones($n1,$n2,$n3,$n4,$n5,$n6){
        return $n1+$n2+$n2+$n3+$n4+$n5;
    }

    function Nominapagar($n1,$n2){
        return $n1-$n2;
    }
    

?>