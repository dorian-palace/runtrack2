<?php
// ( != est contraire Différent )
$number = array(200, 204, 173, 98, 171, 404, 459);

foreach($number as $val)
{
    if ($val % 2 == 0)
    {
    echo "$val est paire <br/>";
}
    
    elseif($val % 2 != 0)
    {
    echo "$val est impaire <br/>";
}
}

?>