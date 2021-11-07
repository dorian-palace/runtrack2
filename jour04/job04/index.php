<table border = 1>
    <thead>
        <tr>
            <th>Argument</th>
            <th>valeurs</th>
        </tr>
    </thead>
    <tbody>
        <tr>
<td>
<?php
$i=0;


foreach($_POST as $nb => $infos){
        echo $nb.'<br/>';
    }
    $i++;

?>
</td>

<td>
    <?php

$a=0;

foreach($_POST as $nb => $infos){
    echo $infos.'<br/>';
}
$a++;
    ?>
</td>



<form action="index.php" method="post">
Prénom: <input type="text" name="name"><br>
Nom:    <input type="text" name="nom"><br>
Age:    <input type="text" name="age"><br>
Adresse:<input type="text" name="adresse"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>