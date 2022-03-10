<?php


if (isset($_SESSION)) {
    $username = $_SESSION["username"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/stylehome.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>

</head>
<body>

<nav>
    <ul class="styleul">
        <li><a href="#dashboard">Dashboard </a></li>
        <li><a href="#about">About YOOUP</a></li>
        <li><a href="#find">Find an opportunity </a></li>
        <li><a href="#post">Post an opportunity </a></li>
        <li><a href="#contact">Contact us </a></li>

    </ul>
</nav>
   <div class= "col-10 bg-light" >
    <div class="row bg-white p-2">
        <div class="col-7">
            <nav class="navbar navbar-light">
                <div class="container-fluid">
                    <form class="d-flex">
                        <input class="col-8 form-control me-2" type="search" placeholder="Enter term to search " aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>

                    </form>

                </div>


            </nav>


        </div>
    </div>


</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chromium Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>




<section id="dashboard">




                    <div class="Dashboard " >
    <div class="hrstext">
        <h1></h1>
        <h3>CONNECTING THE YOUTH TO OPPORTUNITIES </h3>



    </div>

</div>
</section>

<section id="about">
    <h1 class="center">About YOOUP</h1>
    <div class="flexbox">

        <div>
            <h3 class="center bg-light shadow">Our Values</h3>
            <p class="green shadow">
                Trustworthy
                Accountability
                Value-centricity
            </p>
        </div>
        <div>
            <h3 class="center bg-light shadow">Our Mission</h3>
            <p class=" green shadow-sm">We are commited to ensuring the youth have access to opportunities.
                Through our platform. Going by the first sustainable development goal,we aim at eradicating poverty
                by ensuring youths are connected to opportunities.</p>
        </div>
        <div>
            <h3 class="center bg-light shadow">Our Goals</h3>
            <p class="green shadow">To ensure that 200 youth get a source of income by 2023 through our platform
                To ensure no youth miss opportunities</p>
        </div>


    </div>

</section>
<section id="find">
    <div class="Post">
        <h3>Find an opportunity </h3>
        <button type="button" class="grey shadow   rounded-pill">opportunities</button>
        <button type="button" class="grey shadow   rounded-pill" >Internships</button>
        <button type="button" class="grey shadow   rounded-pill">Learn content writing!</button><br>
        <button type="button" class="grey shadow   rounded-pill">Learn digital marketing</button>
        <button type="button" class="grey shadow   rounded-pill">Transcription jobs</button>
        <button type="button" class="grey shadow   rounded-pill">Job opportunities</button><br>
        <button type="button" class="grey shadow   rounded-pill">Academic writing</button>
        <button type="button" class="grey shadow   rounded-pill">Content creation</button>

    </div>
</section>

<section id="post">
    <h2>post an opportunity here</h2>
    <div class="Post">

        <button type="button" class="grey shadow   rounded-pill">Training opportunities</button>
        <button type="button" class="grey shadow   rounded-pill" >Internships</button>
        <button type="button" class="grey shadow   rounded-pill">Learn content writing!</button><br>
        <button type="button" class="grey shadow   rounded-pill">Learn digital marketing</button>
        <button type="button" class="grey shadow   rounded-pill">Transcription jobs</button>
        <button type="button" class="grey shadow   rounded-pill">Job opportunities</button><br>
        <button type="button" class="grey shadow   rounded-pill">Academic writing</button>
        <button type="button" class="grey shadow   rounded-pill">Content creation</button>

    </div>


</section>

<section id="contact">
    <h1 class="center">Fill this form to contact us </h1>
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-20">
                    <label>First Name</label>
                </div>

                <div class="col-80">
                    <input type="text" name="Firstname" placeholder="enter first name ">
                </div>

            </div>
            <div class="row">
                <div class="col-20">
                    <label> Second Name</label>
                </div>

                <div class="col-80">
                    <input type="text" name="Secondname" placeholder="enter second name">
                </div>

            </div>
            <div class="row">
                <div class="col-20">
                    <label>Email Address</label>
                </div>

                <div class="col-80">
                    <input type="email" name="email" placeholder="email@gmail.com">
                </div>

            </div>
            <div class="row">
                <div class="col-20">
                    <label>Subject</label>
                </div>

                <div class="col-80">
                    <textarea name="subject"  placeholder="Write your enquiry"
                              style="height: 150px"></textarea>
                </div>

            </div>

            <div>
                <button class="btnsubmit" type="submit">Submit</button>
            </div>

        </form>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery.min.js"></script>

        <a href="#" class="fa-2x fa   blue fa fa-facebook"></a>
        <a href="https://twitter.com/YooupYooup7?t=dnGqreC44RAs6_7v9vQKrw&s=08" class="fa-2x blue fa fa-twitter"></a>









    </div>






</section>


















<!---->
<!--        </div>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--    </div>-->
<!---->
<!---->
<!--</div>-->
<!---->
<!--</div>-->


</body>
</html>