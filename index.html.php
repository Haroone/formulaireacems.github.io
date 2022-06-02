<?php

require('config/config.php');


$valid = true;

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
    } else {
        $valid = false;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Formulaire d'enregistrement</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Base de donnees de l'ACEMS</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Prenom</label>
                                    <input class="input--style-4" required="required" type="text" name="prenom">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nom</label>
                                    <input class="input--style-4" required="required" type="text" name="nom">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">UFR</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" required="required" type="text" name="ufr">
                                        <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Filiere</label>
                                    <input class="input--style-4" required="required" type="text" name="filiere">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Niveau</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="niveau">
                                            <option disabled="disabled" selected="selected">Niveau d'études</option>
                                            <option selected="selected">Licence 1</option>
                                            <option>Licence 2</option>
                                            <option>Licence 3</option>
                                            <option>Master 1</option>
                                            <option>Master 2</option>
                                            <option>These</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">E-mail</label>
                                    <input class="input--style-4" type="email" required="required" name="email" id="">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Adress(ex : Campus, Sanar...)</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" required="required" type="text" name="adresse">
                                        <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Télephone (Whatsapp)</label>
                                    <input class="input--style-4" required="required" type="text" name="tel">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" name="S" type="submit">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->