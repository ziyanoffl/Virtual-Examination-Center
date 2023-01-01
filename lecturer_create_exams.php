<?php

include 'connect.php';
if (isset($_POST['submitbtn'])) {
    $title = $_POST['txttitle'];
    $subtitle = $_POST['txtsubtitle'];
    $startdate = $_POST['txtstart'];
    $enddate = $_POST['txtend'];


    $sql_add = "INSERT INTO `exam_schedule` (`exam_title`, `exam_subtitle`, `start_date`, `end_date`) VALUES ('$title', '$subtitle', '$startdate', '$enddate');";

    $sql_status = mysqli_query($con, $sql_add);

    header('Location: lecturer_view_exam.php');
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lecturer - Create exam</title>
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
                        include 'lecturer_nav.php';

?>
                    </ul>
                </div>
            </div>
        </nav>
       <br>
        <!-- Contact Section-->
        <section class="page-section" id="lecturer_registration">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="  text-uppercase text-center text-secondary mt-5 mb-5">schedule new exam</h2>
                
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                       
                        <form id="contactForm" method="post">
                            
                            
                            <div class="form-floating mb-3" >
                                <!-- Exam title input-->
                                    <div class="form-floating mb-3">
                                        <input name="txttitle" class="form-control" id="" type="text" placeholder="xxxxxxx"  />
                                        <label for="email">Enter exam title</label>
                                    </div>

                            <!-- Exam subtitle input -->
                                    <div class="form-floating mb-3">
                                        <input name="txtsubtitle" class="form-control" id="" type="text" placeholder="xxxxxxx"  />
                                        <label for="email">Enter exam subtitle</label>
                                    </div>

                            <!-- Start date and time input -->
                                    <div class="form-floating mb-3">
                                        <input name="txtstart" class="form-control" id="" type="datetime-local" placeholder="xxxxxxx"  />
                                        <label for="email">Enter starting date</label>
                                    </div>

                            <!-- End date time input -->
                                    <div class="form-floating mb-3">
                                        <input name="txtend" class="form-control" id="" type="datetime-local" placeholder="xxxxxxx"  />
                                        <label for="email">Enter ending date</label>
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
