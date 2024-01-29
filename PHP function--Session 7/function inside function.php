<?php 

        function x ($y) {
            function y ($z) {
                return ($z*2);
            }

            return($y+3); 
            //1st function return to ($y+3); 2nd function return to ($z*2);
        }

        $y = 4;
        $z= 3;
        $n = x($y)*y($z);
        echo $n;

?>