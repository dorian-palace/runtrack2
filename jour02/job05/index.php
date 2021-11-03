<?php
$n = 2 ;
while ($n < 1000 )
{
$count=0;
for ( $x=1;$x<=$n;$x++)
{
if (($n%$x)==0)
{
$count++;
}
}
if ($count<3)
{
echo $n."<br/>";
}
$n=$n+1;
}
?>