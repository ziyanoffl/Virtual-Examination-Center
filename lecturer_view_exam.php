<?php
    include 'con.php';

    $sql = "SELECT * FROM exam_schedule";

    $results = mysqli_query($con, $sql);

    // $sql2 = "SELECT * from st_reg";
    // $results2 = mysqli_query($con, $sql2);


    if(!isset($_SESSION['lecturer_id'])){
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
        <title>Lecturer - View Exams</title>
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
                <img class="masthead-avatar mb-5" src="assets/img/exam.png" alt="..." /><br>
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Exam Schedule</h1>
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
        <section class="page-section portfolio" id="admin_profile">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="  text-uppercase text-secondary mb-0"></h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                   <p>
                       <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Exam Title</th>
                                <th scope="col">Exam sub title</th>
                                <th scope="col">Exam start date</th>
                                <th scope="col">Exam end date</th>
                                <th scope="col">Edit</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while($row = mysqli_fetch_assoc($results)){

                                 echo   "<tr style='vertical-align:middle';>";
                                 echo   "<td>".$row["exam_id"]."</td>";
                                 echo   "<td>".$row["exam_title"]."</td>";
                                 echo   "<td>".$row["exam_subtitle"]."</td>";
                                 echo   "<td>".$row["start_date"]."</td>";
                                 echo   "<td>".$row["end_date"]."</td>";

                                 echo "
                                        <td><a class='btn btn-danger' href='lecturer_delete_exam.php?exam_id=".$row["exam_id"]."'>DELETE</a>
                                        <a class='btn btn-warning' href = 'lecturer_view_questions.php?exam_id=".$row["exam_id"]."'>VIEW QUESTIONS</a>
                                        <a class='btn btn-secondary' href = 'lecturer_add_questions.php?exam_id=".$row["exam_id"]."'>ADD QUESTIONS</a>
                                        </td>";
                                  
                                 echo   "</tr>";
                                }
                                
                                ?>

                            </tbody>
                        </table>
                            </p>
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
