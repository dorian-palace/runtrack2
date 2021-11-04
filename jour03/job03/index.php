<?php

$str = 'I\'m sorry Dave I\'m afraid I can\'t
do that';
$voy= "aeiouyI";
$i = 0;
while (isset($str[$i])) {
    $a = 0;
    while (isset($voy[$a])){
        if ($str[$i] == $voy[$a])
            echo $str[$i] . '<br>';
            $a = $a +1;
    }
    $i = $i+1;
}
?>