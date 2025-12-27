<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter client</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Ajouter un client</h2>
    <form method="post" action="insert.php" name="formClient" onsubmit="return verifierFormulaire()">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prenom">
        <select name="sexe">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select>
        <input type="text" name="ville" placeholder="Ville">
        <input type="text" name="loisirs" placeholder="Loisirs">
        <button type="submit">Enregistrer</button>
    </form>
    <a href="list.php">Voir la liste des clients</a>
</div>

<script>
function verifierFormulaire() {
    var nom = document.forms["formClient"]["nom"].value;
    var prenom = document.forms["formClient"]["prenom"].value;
    var ville = document.forms["formClient"]["ville"].value;
    if(nom === "" || prenom === "" || ville === "") {
        alert("Sisaire le Nom, Prenom et Ville !");
        return false;
    }
    return true;
}

</script>
</body>
</html>
