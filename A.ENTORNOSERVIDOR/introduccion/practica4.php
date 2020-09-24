<?php 
    $min=1;
    $max=10;
    $numero=rand($min,$max);
    $array=array();
    echo "<p> Array:";

    if($numero>=1 && $numero<=10){
        for($i=0;$i<$numero;$i++){
            $array[]=rand($min,$max);
            echo " $array[$i],";
        }
    }
    echo "</p>";

    $size=sizeof($array);
    $total=0;
    for($i=0;$i<$size;$i++){
        $total+=$array[$size-$i-1];
        if($i+1==3){
            break;
        }
    }
    echo "<p>";
    echo "Total: $total";
    echo "</p>";
    echo "<p>";
    if($total<=10 && $total>0){
        echo "El número se encuentra entre 1 y 10";
    }
    elseif($total>10 && $total<=20){
        echo "El número se encuentra entre 10 y 20";
    }
    elseif($total>20){
        echo "El número es mayor que 20";
    }
    echo "</p>";
?>