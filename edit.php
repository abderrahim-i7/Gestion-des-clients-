<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM clients WHERE id=$id");
$client = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier client</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'db.php';
if (!isset($_GET['id'])) {
    echo "ID non trouvé";
    exit;
}
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM clients WHERE id=$id");
if (mysqli_num_rows($result) == 0) {
    echo "Client introuvable";
    exit;
}
$client = mysqli_fetch_assoc($result);
?>
<div class="container">
    <h2>Modifier client</h2>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?= $client['id'] ?>">
        <input type="text" name="nom" value="<?= $client['nom'] ?>" required>
        <input type="text" name="prenom" value="<?= $client['prenom'] ?>" required>
        <select name="sexe">
            <option value="Homme" <?= $client['sexe']=="Homme"?"selected":"" ?>>Homme</option>
            <option value="Femme" <?= $client['sexe']=="Femme"?"selected":"" ?>>Femme</option>
        </select>
        <input type="text" name="ville" value="<?= $client['ville'] ?>" required>
        <input type="text" name="loisirs" value="<?= $client['loisirs'] ?>">
        <button type="submit">Modifier</button>
    </form>
    <a href="list.php">Retour</a>
</div>
</body>
</html>
