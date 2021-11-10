<?php

function occurences($str, $char)
{
    $x =0;
    for ($i=0;isset($str[$i]); $i++)
    {
        if ($char == $str[$i])
        {
            $x++;
        }
    }
    return $x;
}

$function = occurences('hello la plateforme', 'e');

echo $function;
?>