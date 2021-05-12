<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table, td {
        width: 100px;
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>
<body>
    <?php
    $a = 3;
    $b = 8;
    $c = 5;

    ?>
    <table>
    <tr>
        <td><?= $a?></td>
        <td><?= $a*$a?></td>

    </tr>
    <tr>
        <td><?= $b?></td>
        <td><?= $b*$b?></td>

    </tr>
    <tr>
        <td><?= $c?></td>
        <td><?= $c*$c?></td>

    </tr>
    </table>

    
</body>
</html>