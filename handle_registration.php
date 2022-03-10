<?php


include "configure.php";

if ( isset($_POST["fullname"]) || isset($_POST["emailAddress"]) || isset($_POST["password"]) ||  isset($_POST["confirmPass"])) {

    $fullname = $_POST["fullname"];
    $emailAddress = $_POST["emailAddress"];
    $password = $_POST['password'];
    $confirmPass = $_POST["confirmPass"];

}
// Validate

    if (strlen($password) < 6) {
        $passError = "Password must have more than 6 characters";
        echo $passError;
    } else {
        $storePass = password_hash($password, PASSWORD_DEFAULT);
    }

    if ($confirmPass != $password) {
        $conPassErr = "Passwords do not Match!";
        echo $confirmPass;
    }


    if (empty($passError) and empty($conPassErr)) {

        $sql = "INSERT INTO `participants`(`fullname`, `emailAddress`, `password`)  
                 VALUES ('$fullname','$emailAddress','$storePass')";


        if (isset($link)) {
            $result = mysqli_query($link, $sql);
        }

        if ($result) {
            echo "You have been registered";
            header("location:LOGIN.php");

        } else {
            echo "Error executing query" . mysqli_error($link);
        }


    }


    mysqli_close($link);



