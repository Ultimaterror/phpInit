<?php

// Un nom, une couleur préférée, un âge
$users = [
    [
        'name' => 'Paulette', 
        'color' => 'Rouge',
        'age' => 55
    ],
    [
        'name' => 'Martin', 
        'color' => 'Vert',
        'age' => 17
    ],
    [
        'name' => 'Octave', 
        'color' => 'Bleu',
        'age' => 79
    ],
];

//var_dump($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/users.css">
</head>                  
<body>
    <?php include('header.php'); ?>
    <main>
        <h1>Users</h1>
        <table>
            <tr>
                <th>Nom</th>
                <th>Couleur</th>
                <th>Age</th>
            </tr>
            <?php foreach ($users as $soleUser) : ?>
                <tr>
                    <td><?= $soleUser['name'] ?></td> <!-- '<'?=  ça équivaut à  '<'?php echo -->
                    <td><?= $soleUser['color'] ?></td>
                    <td><?= $soleUser['age'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </main>
</body>
</html>