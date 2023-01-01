<?php

include 'connect.php';

$exam_id = $_GET['exam_id'];



$sql = "SELECT * FROM exam_schedule WHERE exam_id = $exam_id";

$results = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($results)) {
    $exam_title =  $row['exam_title'];
    $exam_subtitle =  $row['exam_subtitle'];
}


$sql2 = "SELECT * FROM exam_tbl WHERE exam_id = $exam_id";

$results2 = mysqli_query($con, $sql2);

while ($row2=mysqli_fetch_assoc($results2)) {
    $question1 = $row2['question1'];
    $question2 = $row2['question2'];
    $correctans1 = $row2['qc1'];
    $correctans2 = $row2['qc2'];
    $ans1 = $row2['ans1'];
    $ans2 = $row2['ans2'];
    $ans3 = $row2['ans3'];
    $ans4 = $row2['ans4'];
}

if (!isset($question1)) {
    echo "<script>
        alert('No questions available! Please add questions for this exam!');
        window.location.href='lecturer_view_exam.php';
        </script>";
}

if (!isset($_SESSION['lecturer_id'])) {
    echo "<script>
            alert('Please login to view this page!');
            window.location.href='lecturer_login.php';
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
        <title>Student - exam</title>
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
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
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
                <h2 class="  text-uppercase text-center text-primary mt-5 mb-5"><?php echo $exam_title?></h2>
                <h3 class="  text-uppercase text-center text-secondary mt-5 mb-5"><?php echo $exam_subtitle?></h3>
                
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                       
                        
                            
                            
                           
                            <h4><?php echo $question1?></h4>
                                  

                                <p>1. <?php echo $ans1?><br>
                                   2. <?php echo $ans2?></p>

                                    

                                    
                            <h4><?php echo $question2?></h4>
                                   <p>
                                      1. <?php echo $ans3?><br>
                                      2. <?php echo $ans4?>
                                   </p>                                                            
                
                    </div>
                </div>
            </div>
        </section>
        

         <!-- footer -->
         <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Supported Regions</h4>
                        <p class="lead mb-0">
                            All over Sri Lanka!
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Social Media</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About VEC</h4>
                        <p class="lead mb-0">
                            Virtual Examination Centre is an online examination website that can be used by teachers all over Sri Lanka!
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        

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
