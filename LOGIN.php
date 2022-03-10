
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

<body class="bg-primary">

<
<div class="createaccount">

</div>
<form action="handlelogin.php" class="bg-light shadow" method="post">
    <h1>Login to YOOUP</h1>
    <div class="container">
        <label><b>Email Address</b></label>
        <input type="text" placeholder="" name="Email" required>

        <input type="password" placeholder="Enter Password" name="psw" required>

        <label>
            <input type="checkbox" checked="" name="remember"> Remember me
</label>
        <div class="row mb-1">
            <input type="submit" name="login" class= "rounded-pill btn btn-outline-primary" value="Login">
        </div>


    </div>

    <div class="container">

        <span class="createaccount">Dont have an account?<a href="register.php">Register</a></span>
    </div>
</form>




</body>
</html>








