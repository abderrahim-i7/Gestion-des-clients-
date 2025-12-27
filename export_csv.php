<?php
include "db.php";
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=clients.csv');
$output = fopen('php://output', 'w');
fputcsv($output, ['ID','Nom','Prénom','Sexe','Ville','Loisirs']);
$result = mysqli_query($conn,"SELECT * FROM clients");
while($row = mysqli_fetch_assoc($result)){
    fputcsv($output, $row);
}
fclose($output);
exit;
?>
