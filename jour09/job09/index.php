<?php
//mysqli_connet = connexion mysql
$bdd = mysqli_connect('localhost','root', 'root', 'jour08');

//mysqli_query = executer requete
$req = mysqli_query($bdd, "SELECT nom FROM salles ORDER BY capacite DESC");

//mysqli_fetch_all = pour tout recuperer
$res= mysqli_fetch_all($req, MYSQLI_ASSOC);


echo "<pre>";
var_dump($res);
echo "<pre>";
?>

<table border="1"> 
    <thead>
            <?php foreach($res[0] as $key => $value){
                        echo "<th>$key</th>";
                    }
?>    
        
    </thead>
    <tbody>
        <tr>
            <?php foreach($res[0] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>

        <tr>
            <?php foreach($res[1] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>

        <tr>
            <?php foreach($res[2] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>

        <tr>
            <?php foreach($res[3] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>

        <tr>
            <?php foreach($res[4] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>

        <tr>
            <?php foreach($res[5] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>