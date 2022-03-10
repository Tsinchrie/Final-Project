<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>participants</title>
    <link href="css/stylehome.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>

        <nav>
            <ul class="styleul">
                <li><a href="Home.php">Dashboard </a></li>
                <li><a href="Home.php">About YOOUP</a></li>
                <li><a href="Users.php">Participants</a></li>
                <li><a href="Home.php">Find an opportunity </a></li>
                <li><a href="Home.php">Post an opportunity </a></li>
                <li><a href="">Contact us </a></li>

            </ul>
        </nav>

        <form action="handleaddparticipants.php" method="post" enctype="multipart/form-data">
            <div class="row p-2">
                <div class="col-md-12">
                    <label class="form-label grey">Full Name</label>
                    <input class="form-control" type="text" name="fullName" placeholder="Enter your name">
                </div>
            </div>
        </form>
            <div class="row p-2">
                <div class="col-md-12">
                    <label class="form-label grey">Email Address</label><input class="form-control" type="text" name="emailAddress">
                </div>

            </div>
            <div class="row p-2">
                <div class="col-md-12">
                    <label class="form-label grey">Date of Birth</label>
                    <input class="form-control" type="date" name="dob" >
                </div>
            </div>
            <div class="row p-2">
                <div class="col-md-12">
                    <label class="form-label grey">Gender</label>
                    <select class="form-control" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="row p-2">
                    <div class="col-md-12">
                        <label class="form-label grey">Your Photo</label>
                        <input class="form-control" type="file" name="photo">

                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-12">
                        <label class="form-label grey">Your CV</label>
                        <input class="form-control" type="file" name="cv">

                    </div>

                </div>



            </div>






            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="submit" class="col-6 btn btn-outline-danger" value="SUBMIT">
            </div>





            <div class="row m-2 p-2">
                <?php
    include "configure.php";

    $sql = "SELECT * FROM `user data`";

    $result = mysqli_query($link,$sql);

    if ($result){

        $data = mysqli_num_rows($result);

        if ($data>0){

                echo "<table class='table table-striped table-hover'>";
                echo "<tr>";
                    echo "<th>#</th>";
                    echo "<th>Full Name</th>";
                    echo "<th>Email Address</th>";
                    echo "<th>DoB</th>";
                    echo "<th>Gender</th>";
                    echo "<th>Actions</th>";
                    echo "</tr>";
                while ($row=mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>".$row['id']."</td>" ;
                    echo "<td>".$row['fullName']."</td>" ;
                    echo "<td>".$row['emailAddress']."</td>" ;
                    echo "<td>".$row['dob']."</td>" ;
                    echo "<td>".$row['gender']."</td>" ;
                    echo " <td>

                        <a class='m-2' href='delete.php?id=".$row['id']."'><span class='fa fa-trash'></span></a>
                        <a class='m-2' href='update.php?id=".$row['id']."'><span class='fa fa-pencil'></span></a>
                        <a class='m-2' href='view.php?id=".$row['id']."'><span class='fa fa-eye'></span></a>
                    </td>";

                    echo "</tr>";



                }


                echo "</table>";




                }else{
                echo "<p class='alert alert-primary'>No Record was found in the database</p>";
                }



                }else{
                echo "Error executing query $sql".mysqli_error($link);
                }







                ?>



            </div>






</body>
</html>