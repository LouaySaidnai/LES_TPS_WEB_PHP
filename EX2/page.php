<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/darkly/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Menu</title>
</head>

<body style="background-color:rgb(117, 73, 135) ;">

<div style="display: flex; justify-content: center;height: 740px;align-items: center;" class="container">

<?php
include_once 'ClasseSession.php' ;
if (isset($_POST['button'])){
    Session::destroy();
    header("Location: page.php"); 
    exit(); 
}?>

<?php
    if(isset($_SESSION['nbrvisite'])){
        echo "<div style='margin : 8px ;user-select: none; font-size : 28px ; color : black ;font-style: oblique ; font-family: serif;' > Merci pour votre fidélité , c'est votre ".$_SESSION['nbrvisite']. " éme visite</div> ";
        Session::incrémenter();
    }
    else{
        Session::initialiser();
        echo" <div style='margin : 8px ; font-size : 28px ; color : black ;font-style: oblique ;user-select: none; font-family: serif;' > Bienvenu à notre plateforme </div> " ;
    }
?>

<i class="fa-solid fa-rotate" style="color: #36a324;; font-size:26px ; margin : 20px ;user-select: none;cursor: pointer;"></i>
</div>
<script src="script.js"></script>

<form action="page.php" method="POST">
    <button type="submit" class="btn btn-dark" style="position: absolute; top: 60%;left: 45%;" name = 'button'>Réinitialiser</button>
</form>


</body>
</html>