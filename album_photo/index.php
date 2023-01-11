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

<a  id="courant"  href="index.php?id=1">Chats</a>
<a  href="index.php?id=2">Chiens</a>
<a  href="index.php?id=3">Oiseaux</a>

<?php

if (isset($_GET['id']))
        echo 'vous etes sur la bonne page';
/* $cnx = mysqli_connect("localhost", "root", "", "albums");

if (mysqli_connect_errno()) {
    echo "Echec de la connexion : ".mysqli_connect_error();
    exit ();
}

$sql = "SELECT * from albums";
$res = mysqli_query($cnx, $sql);

while ($ligne = mysqli_fetch_array($res)){
    echo "<p class='nom_album'>".$ligne['nomAlb']."</p>";
}

mysqli_free_result($res);

mysqli_close($cnx);
*/
?>
</div>

<?php

$cnx = mysqli_connect("localhost", "root", "", "albums");

if (mysqli_connect_errno()) {
    echo "Echec de la connexion : ".mysqli_connect_error();
    exit ();
}

$sql = "SELECT * from photos";
$res = mysqli_query($cnx, $sql);

while ($ligne = mysqli_fetch_array($res)){
    echo "<p class='nom_album'>".$ligne['idPh']."</p>";
    echo "<img src='photos/".$ligne['nomPh'].".jpg'>";
}
mysqli_free_result($res);

mysqli_close($cnx);

?>

    
</body>
</html>