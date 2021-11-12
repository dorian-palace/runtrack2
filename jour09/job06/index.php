<?php
//mysqli_connet = connexion mysql
$bdd = mysqli_connect('localhost','root', 'root', 'jour08');

//mysqli_query = executer requete
$req = mysqli_query($bdd, "SELECT COUNT(*) FROM etudiants");

//mysqli_fetch_all = pour tout recuperer
$res= mysqli_fetch_all($req, MYSQLI_ASSOC);


echo "<pre>";
var_dump($res);
echo "<pre>";
?>

<table border="1"> 
    <thead>
        <th>nb_etudiants</th>    
        
    </thead>
    <tbody>
        <tr>
            <?php foreach($res[0] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>