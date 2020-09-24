<?php
    
    function quickShort(&$array){
        $size=sizeof($array);
        $pivote=$size-1;
        $j=$pivote-1;
        
        for($i=0; $i!=$j && $i<$size; $i++){
            if($j<0 || $i==$j){
                if( $i-$j==1 || $j-$i==-1){
                    if($array[$j]<$array[$i]){
                        $j=$i;
                    }
                }
                break;
            }
            if($array[$i] >= $array[$j] && $array[$i] >= $array[$pivote]){
                interchange($array,$i,$j);
                $j--;
                
            }
            else{
                if($array[$j]>=$array[$pivote]){
                    $j--;
                }
                if($array[$i]>$array[$pivote]){
                    $i--;
                }
            }
        }

        
        interchange($array,$j,$pivote);
        $pivote=$j;

        echo "Pivote: $pivote ";
        echo "Array:";
        printArray($array);

        for($i=0;$i<$pivote;$i++){
            if($array[$i]>$array[$pivote]){
                interchange($array,$i,$pivote);
                $i=0;
            }
        }
        for($j=($pivote+1);$j<$size;$j++){
            if($array[$j]>$array[$size-1]){
                interchange($array,$j,$size-1);
                $j=$pivote+1;
            }
        }
       
    }

    function printArray(&$array){
        $size=sizeof($array);
        for($i=0;$i<$size;$i++){
            echo $array[$i].", ";
        }
    }
    function interchange(&$array, $i,$j){
        $aux=$array[$j];
        $array[$j]=$array[$i];
        $array[$i]=$aux;

    }
    echo "<h1>Ordenación</h1>";

    $arrayx=array();
    echo "<p> Array desordenado:";

    for($i=0;$i<5;$i++){
        $arrayx[]=rand(0,20);
        echo " $arrayx[$i],";
    }
    
    echo "</p>";
    if(sizeof($arrayx)>1){
        quickShort($arrayx);
    }
    echo "<p> Array ordenado:";
    printArray($arrayx);
    echo "</p>";

?>