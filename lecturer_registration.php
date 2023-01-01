<?php

include 'connect.php';

$admin_username = $_SESSION['admin_username'];

if (isset($_POST['submitbtn'])) {
    $email = $_POST['txtemail'];
    $password = $_POST['txtpassword'];
    $name = $_POST['txtname'];
    $address = $_POST['txtaddress'];
    $school = $_POST['txtschool'];


    $sql_registration = "INSERT INTO `lecturer_reg` (`lecturer_email`,`lecturer_password`,`lecturer_name`,`lecturer_address`,`lecturer_school`) VALUES ('$email', '$password', '$name', '$address', '$school');";

    $sql_status = mysqli_query($con, $sql_registration);

    echo "<script>
alert('Account successfully created!');
window.location.href='admin_profile.php';
</script>";
}
if (!isset($admin_username)) {
    echo "<script>
alert('Please log in to register new Lecturers!!');
window.location.href='admin_login.php';
</script>";
}

?>








<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin - Lecturer registration</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">VEC</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    <?php
                        include 'admin_nav.php';

?>
                    </ul>
                </div>
            </div>
        </nav>
       

        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center" id="admin_profile">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/profile.png" alt="..." /><br>
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Lecturer Registration</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0"></p>
            </div>
        </header>


        
        <!-- Contact Section-->
        <section class="page-section" id="lecturer_registration">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="  text-uppercase text-center text-secondary mt-5 mb-5"></h2>
                
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                       
                        <form id="contactForm" method="post">
                            
                            
                            <div class="form-floating mb-3" >
                                <!-- Email input-->
                                    <div class="form-floating mb-3">
                                        <input name="txtemail" class="form-control" id="" type="email" placeholder="name@example.com"  />
                                        <label for="email">Enter Email</label>
                                    </div>

                            <!-- Password input -->
                                    <div class="form-floating mb-3">
                                        <input name="txtpassword" class="form-control" id="" type="text" placeholder="xxxxxxx"  />
                                        <label for="email">Enter Password</label>
                                    </div>

                            <!-- Name input -->
                                    <div class="form-floating mb-3">
                                        <input name="txtname" class="form-control" id="" type="text" placeholder="xxxxxxx"  />
                                        <label for="email">Enter Name</label>
                                    </div>

                            <!-- Address input -->
                                    <div class="form-floating mb-3">
                                        <input name="txtaddress" class="form-control" id="" type="text" placeholder="xxxxxxx"  />
                                        <label for="email">Enter Address</label>
                                    </div>
                            
                            <!-- School input -->
                                    <div class="form-floating mb-3">
                                        <input name="txtschool" class="form-control" id="" type="text" placeholder="xxxxxxx"  />
                                        <label for="email">Enter school</label>
                                    </div>

                            
                            
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Login Successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button name="submitbtn" class="btn btn-primary btn-xl" id="submitButton" type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
