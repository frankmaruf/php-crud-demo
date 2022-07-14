<?php
include_once 'dbConnection.php';

$connection = new Connection("mysql:host=localhost;dbname=demo-1", "root", "");
$connection->connect();
$data = $connection->getData("SELECT * FROM students_info");
// echo "<pre>";
// print_r($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <thead>
            <th>Name</th>
            <th>Age</th>
            <th>Roll</th>
            <th>Class</th>
        </thead>
        <tbody>
            <?php foreach($data as $row): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['roll']; ?></td>
                <td><?php echo $row['class']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>