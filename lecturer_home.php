<?php
    include 'con.php';
    $lecturerid = $_SESSION['lecturer_id'];

    $sql = "SELECT * FROM lecturer_reg WHERE lecturer_id = $lecturerid;";

    $results = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($results)){
       $name =  $row['lecturer_name'];
       $address =  $row['lecturer_address'];
       $school =  $row['lecturer_school'];
       $email =  $row['lecturer_email'];
       $password =  $row['lecturer_password'];

        
    }



    if(!isset($_SESSION['lecturer_id'])){
        echo "<script>
        alert('No users logged in! Log in to continue');
        window.location.href='lecturer_login.php';
        </script>";    }

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lecturer Profile</title>
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
                <a class="navbar-brand" href="#page-top">Web Exams</a>
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


        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center" id="admin_profile">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/profile.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Lecturer Profile</h1>
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
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="parent">
               
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <p class="text-center"><img class="masthead-avatar mt-0 mb-5" src="assets/img/profile2.png" alt="..." />
                    </p>

                </div>
                <div class="row justify-content-center">
                            
                                  
                <h4 class="   text-secondary mb-5" >Name: <span style="margin-left: 1em;" id="secondtext"><?php echo $name; ?></span></h4>
                    <h4 class="   text-secondary mb-5" >Address: <span style="margin-left: 1em;" id="secondtext"><?php echo $address; ?></span></h4>
                    <h4 class="   text-secondary mb-5" >School: <span style="margin-left: 1em;" id="secondtext"><?php echo $school; ?></span></h4>
                    <h4 class="   text-secondary mb-5" >Email Address: <span style="margin-left: 1em;" id="secondtext"><?php echo $email; ?></span></h4>
                    <h4 class="   text-secondary mb-5" >Password: <span style="margin-left: 1em;" id="secondtext"><?php echo $password; ?></span></h4>

                    <p><button type="button" class="btn btn-warning" onclick="document.location='lecturer_edit_profile.php'">Edit profile</button></p>

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
