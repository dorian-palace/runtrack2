<?php

if($_POST['num']%2==0){
    echo 'Nombre pair';
}

else{
    echo 'Nombre impair';
}


?>

<form action="index.php" method="post">
Nombre: <input type="text" name="num"><br>
<input type="submit">
</form>