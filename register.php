


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="css/dashstyle.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>

</head>

<body class="light blue">

<
<div class="createaccount">

</div>
<form action="handle_registration.php" class="bg-light shadow" method="post">
    <h1>KARIBU YOOUP</h1>
    <div class="container">
        <label><b>Full name</b></label>
        <input type="text" placeholder="Enter your name" name="fullname" required>

        <label><b>Email Address</b></label>
        <input type="text" placeholder="enter email adress" name="emailAddress" required>
        <label>

        </label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <input type="password" placeholder="Confirm Password" name="confirmPass" required>


        <div class="row mb-1">
            <input type="submit" name="register" class= "rounded-pill btn btn-outline-primary" value="Register">
        </div>

    </div>

    <div class="container">

        <a class="small" href="LOGIN.php">Already have an account? Login</a>
    </div>
</form>


</body>
</html>














