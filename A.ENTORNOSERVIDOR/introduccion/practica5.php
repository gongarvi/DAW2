<?php
    $estadios_futbol = array("Barcelona" => "Camp Nou", "Real Madrid" => "SantiagoBernabeu", "Valencia" => "Mestalla", "Real Sociedad" => "Anoeta");
    
    echo "<p>";
    foreach($estadios_futbol as $estadio => $indice){
        echo $indice.", ";
    }
    echo "</p>";
    echo "<p>";
    unset($estadios_futbol["Real Madrid"]);
    foreach($estadios_futbol as $estadio =>$indice){
        echo $indice.",";
    }
    
    echo "</p>";
    
?>