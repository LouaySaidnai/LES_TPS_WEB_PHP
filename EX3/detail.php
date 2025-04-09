<?php
if(!isset($_GET['id'])){
    header('location:page.php');
    exit();
}

?>
<link rel="stylesheet" href="node_modules/bootswatch/dist/cerulean/bootstrap.css">
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Date_Naissance</th>
            <th scope="col">Section</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $bd = new PDO('mysql:host=localhost;dbname=mybase','root','sabri123456*');
            $id = $_GET['id'];
            $req = $bd->prepare("SELECT * FROM etudiant WHERE ID = ?");
            $req->execute([$id]);
            $etudiant = $req->fetch(PDO::FETCH_OBJ);
        ?>
        <tr>
            <td><?= $etudiant->ID?></td>
            <td><?= $etudiant->Nom?></td>
            <td><?= $etudiant->Date_Naissance?></td>
            <td><?= $etudiant->Section?></td>
        </tr>
    </tbody>
</table>
</div>