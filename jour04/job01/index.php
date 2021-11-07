<?php
$i=0;
foreach($_GET as $nb => $infos){
        echo $infos.'<br/>';
    }
    $i++;

?>


<!DOCTYPE HTML>
<html>  
<body>

<form action="index.php" method="get">
Name: <input type="text" name="name"><br>
Age :  <input type="text" name="age"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>