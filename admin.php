<?php
require('config/config.php');

//Create Query
$query = 'SELECT * FROM form';

//GET Results
$result = mysqli_query($conn, $query);

//Fetch Data
$pers = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Free Result
mysqli_free_result($result);

//Close Connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="container py-5">
    <h2 class="text-center">Liste Des etudiants Mauritaniens rescencés</h2><br>
    <hr>
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">N</th>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">UFR</th>
                <th scope="col">Filiere</th>
                <th scope="col">Niveau</th>
                <th scope="col">Adresse</th>
                <th scope="col">Telephone</th>
                <th scope="col">E-mail</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($pers as $membre) { ?>
        <!--Parcourir le tableau des plats-->
        <tr>
            <td><?php echo $membre['id'] ?></td>
            <td><?php echo $membre['prenom'] ?></td>
            <td><?php echo $membre['nom'] ?></td>
            <td><?php echo $membre['ufr'] ?></td>
            <td><?php echo $membre['filiere'] ?></td>
            <td><?php echo $membre['niveau'] ?></td>
            <td><?php echo $membre['adresse'] ?></td>
            <td><?php echo $membre['tel'] ?></td>
            <td><?php echo $membre['email'] ?></td>
        </tr>
    <?php } ?>
        </tbody>
    </table>
</body>

</html>