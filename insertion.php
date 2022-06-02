<?php

require('config/config.php');

// 1ere etape: on verifie si l'utilisateur a envoyé les données avec la methode isset
if (isset($_POST['S'])) {
    // On récupères les données de l'utilisateur
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ufr = $_POST['ufr'];
    $adresse = $_POST['adresse'];
    $filiere = $_POST['filiere'];
    $tel = $_POST['tel'];
    $niveau = $_POST['niveau'];
    $email = $_POST['email'];

    // On verifie dans la base s'il ya une correspondance username/password avec les données de l'utilisateur
    $query = "INSERT INTO form(prenom,nom,ufr,adresse,filiere,tel,niveau,email) values ('$prenom','$nom','$ufr','$adresse','$filiere','$tel','$niveau','$email')";
    $query2 = "SELECT * FROM form WHERE nom = $nom";

    //GET Results
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);

    // //Fetch Data
    // $user = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // //Free Result
    // mysqli_free_result($result);

    //Close Connection
    mysqli_close($conn);
    if ($result) {
        header("Location: getWay.php");
    }
}
?>


