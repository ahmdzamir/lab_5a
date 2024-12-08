<?php
function multiplication($multiplier) {
    $results = [];
    for ($i = 1; $i <= 12; $i++) {
        $results[] = [
            'no' => $i,
            'multiplier' => $multiplier,
            'answer' => $i * $multiplier,
        ];
    }
    return $results;
}

$multiplier = 2; 
$tableData = multiplication($multiplier);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lab 5a Q3</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<table>
    <tr>
        <th>No</th>
        <th>Multiplier</th>
        <th>Answer</th>
    </tr>
    <?php foreach ($tableData as $row): ?>
        <tr>
            <td><?php echo $row['no']; ?></td>
            <td><?php echo $row['multiplier']; ?></td>
            <td><?php echo $row['answer']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
