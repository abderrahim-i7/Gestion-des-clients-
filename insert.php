<?php
include 'db.php';
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$sexe = $_POST['sexe'];
$ville = $_POST['ville'];
$loisirs = $_POST['loisirs'];

if($nom == "" || $prenom == "" || $ville == ""){
    echo "Veuillez remplir tous les champs obligatoires";
} else {
    mysqli_query($conn, "INSERT INTO clients (nom, prenom, sexe, ville, loisirs)
        VALUES ('$nom','$prenom','$sexe','$ville','$loisirs')");
    header("Location: list.php");
}
?>
