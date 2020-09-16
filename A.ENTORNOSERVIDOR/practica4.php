<?php 
    $min=1;
    $max=10;
    $numero=rand($min,$max);
    $array=array();
    if($numero>=1 && $numero<=10){
        for($i=0;$i<$numero;$i++){
            $array[]=rand($min,$max);
        }
    }

    $size=sizeof($array);
    $total=0;
    for($i=$size-1;$i>=0;$i--){
        $total+=$array[$i];
        
    }
    echo "<p>";
    echo "$total";
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