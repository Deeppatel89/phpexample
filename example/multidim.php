<?php
    $multiDim=array(
        array(1,2,3,4),
        array(1,2,3,4),
        array(1,2,3,4));

        // echo var_dump($multiDim);
         

        for ($i=0; $i<count($multiDim) ; $i++) {
            

            for ($j=0; $j <count($multiDim[$i]) ; $j++) {
                
                
                echo $multiDim[$i][$j];
                echo" ";
                # code ...
            }
            echo"<br>";
            // echo var_dump( $multiDim[$i]);
            # code...
        }
?>