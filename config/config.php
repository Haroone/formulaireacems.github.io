<?php
    // Create Connection
    $conn= mysqli_connect('localhost', 'root', '', 'formulaireacems');

    //check connection
    if(mysqli_connect_errno()){
        echo "Connection to Mysql failed ". mysqli_connect_errno();
    }
?>