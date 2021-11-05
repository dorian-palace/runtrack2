<?php

$str = 'On n est pas le meilleur quand on le croit mais quand on le sait.';
$dic = ["a","e","i","o","u","y"] ;
$dic1 = ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","y","z"];

?>
<table border = 1>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>

<?php $i=0;

    while(isset($str[$i])){
        
        $a = 0;

        while(isset($dic[$a])){

            if($str[$i] == $dic[$a])
            echo $str[$i] . '<br>'; 
            $a++;
        }
        $i++;

    } ?> 
        </td>
   


        <td> 
            <?php $x = 0;
        
        while(isset($str[$x])){

            $z = 0;

            while(isset($dic1[$z])){
                if($str[$x] == $dic1[$z])
                echo $str[$x] . '<br>';
                $z++;
            }
            $x++;
        }
?>
</td>
</tbody>
</table>
</body>
</html>