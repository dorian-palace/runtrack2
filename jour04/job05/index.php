<?php
//POST est preferable a GET d'un point de vue de sécurité car GET affiche les données dans l'URL


if($_POST ['username'] == 'John'){

    if($_POST['password'] == 'Rambo')

        echo 'C\'est pas ma guerre';} 

    else{
    echo 'Votre pire cauchemar';
    }

?>


<form action="index.php" method="post">
Username: <input type="text" name="username"><br>
Password:    <input type="text" name="password"><br>
<input type="submit">
</form>