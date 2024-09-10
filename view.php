<?php

require_once 'FileUtility.php';

$people = FileUtility::readFileContent('persons.csv');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Records</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Record of 300 People</h1>
    <table>
        <thead>
            <tr>
                <?php foreach ($people[0] as $header): ?>
                    <th><?php echo $header; ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i < count($persons); $i++): ?>
                <tr>
                    <?php foreach ($people[$i] as $data): ?>
                        <td><?php echo $data; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>
