<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des clients</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Liste des clients</h2>

    <a href="index.php">Ajouter un client</a> | 
    <a href="export_csv.php">Exporter CSV</a> |
    <a href="export_pdf.php">Exporter PDF</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Sexe</th>
            <th>Ville</th>
            <th>Loisirs</th>
            <th>Actions</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM clients");

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nom']}</td>
                <td>{$row['prenom']}</td>
                <td>{$row['sexe']}</td>
                <td>{$row['ville']}</td>
                <td>{$row['loisirs']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Modifier</a> |
                    <a href='delete.php?id={$row['id']}'>Supprimer</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
