<?php

include "configure.php";

if (isset($_POST['emailAddress'])) {

    $userEmail = $_POST["emailAddress"];
    $userPassword = $_POST["password"];
}

$userEmail=1;
    // compare
    $sql = " SELECT  `emailAddress`, `password` FROM `participants` WHERE emailAddress= $userEmail";



    if (!empty($link)) {
        $result = mysqli_query($link, $sql);
    }


    if ($result) {

        $data = mysqli_num_rows($result);


        if ($data == 1) {

            while ($row = mysqli_fetch_array($result)) {

                $id = $row['id'];
                $emailAddress = $row["emailAddress"];
                $password = $row["password"];

                // verify the password
                if (password_verify($userPassword, $password)) {

                    session_start();
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $emailAddress;

                    header("location:Home.php");
                } else {
                    echo "Passwords are not matching";
                }

            }


        } else {
            header("location:Home.php");
        }

    }


