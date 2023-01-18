<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Albums-photos</title>
</head>
<body>
    <h1>Mes Albums</h1>

<div class="menu_albums">
    
<?php
if(!isset($_GET['id'])){
    $_GET['id']=1;
}

   $cnx = mysqli_connect("localhost", "root", "", "albums");
   
   if (mysqli_connect_errno()) {
    echo "Echec de la connexion : ".mysqli_connect_error();
    exit ();
}

$sql = "SELECT * from albums";
$res = mysqli_query($cnx, $sql);

while ($albums = mysqli_fetch_array($res)){
    $id=$albums["idAlb"]==$_GET['id'] ? ' id="actif" ' : ''; 
    echo '<a '.$id.' href="index.php?id='.$albums["idAlb"].'">'.$albums["nomAlb"].'</a>';
}

?>

</div>
<div class="photos">
<?php

$cnx = mysqli_connect("localhost", "root", "", "albums");

if (mysqli_connect_errno()) {
    echo "Echec de la connexion : ".mysqli_connect_error();
    exit ();
}

$sql = "SELECT nomPh from photos INNER JOIN comporter ON comporter.idPh=photos.idPh WHERE idAlb=".$_GET['id'];
$res = mysqli_query($cnx, $sql);

while ($ligne = mysqli_fetch_array($res)){
    echo "<img src='photos/".$ligne['nomPh'].".jpg'>";
}

mysqli_free_result($res);

mysqli_close($cnx);

?>
</div>
    
</body>
<script src="effects.js"></script>
</html>