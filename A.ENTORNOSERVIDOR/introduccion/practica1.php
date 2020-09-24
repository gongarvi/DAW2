<?php
    $numero=11;
        $palabra="";
        switch($numero){
            case 1:
                $palabra="uno";
            break;
            case 2:
                $palabra="dos";
            break;
            case 3:
                $palabra="tres";
            break;
            case 4:
                $palabra="cuatro";
            break;
            case 5:
                $palabra="cinco";
            break;
            case 6:
                $palabra="seis";
            break;
            case 7:
                $palabra="siete";
            break;
            case 8:
                $palabra="ocho";
            break;
            case 9:
                $palabra="nueve";
            break;
            case 10:
                $palabra="diez";
            break;
            default:
                echo "El número no esta entre uno y diez";
                return;
        }
        echo "El número es $palabra";
?>