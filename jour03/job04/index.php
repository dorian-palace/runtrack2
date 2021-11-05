<?php

$str ='Dans l\'espace, personne ne
vous entend crier';

/*for //($i=0; $i <= $str; $i++) {

    if(isset($str[$i]) == $i){
        echo $i. '<br/>';
    }
}*/
$i = 0;

while(isset($str[$i])){
    
    echo $str[$i];
    $i++; 
}

//var_dump($i);
print_r($i);
?>