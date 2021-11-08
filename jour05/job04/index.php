<?php


function calcule($a, $operation, $b){
    if ($operation == "addi")
    return ($a+$b);
    

    elseif($operation == "soustraction")
    return ($a-$b);

    elseif($operation == "division")
    return ($a/$b);

    elseif($operation == "multi")
    return ($a*$b);

    elseif($operation == "reste")
    return ($a%$b);
}

$result = calcule(10, "division", 7);
echo $result;
?>