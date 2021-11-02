<?php
$jour = "mardi";
$date = 2021;
$nom = true;
$chiffres = 0.2;
$table = ["type","nom","valeur"];
?>


<table border=1>
    <thead>
    <tr>
        <td><?php echo $table [0];?></td>
        <td><?php echo $table [1];?></td>
        <td><?php echo $table [2];?></td>
    </tr>
    </thead>
<tbody>
<tr>
    <td><?php echo gettype($jour); ?></td>
        <td><?php echo '$jour'; ?></td>
        <td><?php echo $jour; ?></td>
</tr>
    <tr>
        <td><?php echo gettype($date); ?></td>
        <td><?php echo '$date'; ?></td>
        <td><?php echo $date; ?></td>
    </tr>
    <tr>
    <td><?php echo gettype($nom); ?></td>
        <td><?php echo '$nom'; ?></td>
        <td><?php echo $nom; ?></td>
</tr>
<tr>
    <td><?php echo gettype($chiffres); ?></td>
        <td><?php echo '$chiffres'; ?></td>
        <td><?php echo $chiffres; ?></td>
</tr>
</tbody>





</table>