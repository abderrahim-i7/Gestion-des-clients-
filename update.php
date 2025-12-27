<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"] != "POST"){
    echo "Accès interdit"; exit;
}
$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$sexe = $_POST['sexe'];
$ville = $_POST['ville'];
$loisirs = $_POST['loisirs'];

mysqli_query($conn, "UPDATE clients SET nom='$nom', prenom='$prenom', sexe='$sexe', ville='$ville', loisirs='$loisirs' WHERE id=$id");
header("Location: list.php");
exit;
?>
