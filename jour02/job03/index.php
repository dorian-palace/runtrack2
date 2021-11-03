<?php
$pla = "La Plateforme_";
for($x = 0; $x <= 100; $x++ ){
    if($x <=20){
        echo "<i><br>$x</i>";
    }
    elseif($x == 42){
        echo "<br>$pla";

    }elseif($x>=25 && $x<=50){
        echo "<br><u>$x</u>";
    }
    
    else{
        echo "<br>$x";
    }

}
?>