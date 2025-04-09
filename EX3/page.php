<?php
try{
    $bd = new PDO('mysql:host=localhost;dbname=mybase','root','sabri123456*');
}catch(PDOException $e){
    print("erreur : " . $e->getMessage());
    exit(); 
}
$req = "select * from etudiant ";
$reponse = $bd->query($req);
$etudiants = $reponse->fetchall(PDO::FETCH_OBJ) ;

?>
<link rel="stylesheet" href="node_modules/bootswatch/dist/cerulean/bootstrap.css">
<div class="container">
<table class="table " >
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">details</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($etudiants as $etudiant){?>
    <tr>
        <td><?=$etudiant->ID?></td>
        <td><?=$etudiant->Nom?></td>
        <td><a href="detail.php?id=<?=$etudiant->ID?>">Link</a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
</div>