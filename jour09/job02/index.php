<?php
//mysqli_connet = connexion mysql
$bdd = mysqli_connect('localhost','root', 'root', 'jour08');

//mysqli_query = executer requete
$req = mysqli_query($bdd, "SELECT nom, prenom, naissance FROM etudiants WHERE sexe = 'femme' ");

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
Réduire
index.php
1 Ko
<?php
//mysqli_connet = connexion mysql
$bdd = mysqli_connect('localhost','root', 'root', 'jour08');

//mysqli_query = executer requete
$req = mysqli_query($bdd, "SELECT nom, capacite FROM salles");

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
            </td>
        </tr>

        <tr>

            <?php foreach($res[2] as $key => $value){
                        echo "<td>$value</td>";
                    } ?>
            </td>
        </tr>

        <tr>

            <?php foreach($res[3] as $key => $value){
                        echo "<td>$value</td>";
                    } ?>
            </td>
        </tr>

        <tr>

            <?php foreach($res[4] as $key => $value){
                        echo "<td>$value</td>";
                    } ?>
            </td>
        </tr>

        <tr>

            <?php foreach($res[5] as $key => $value){
                        echo "<td>$value</td>";
                    } ?>
            </td>
        </tr>