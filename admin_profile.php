<?php
    include 'connect.php';

    $sql = "SELECT * FROM lecturer_reg";

    $results = mysqli_query($con, $sql);

    $sql2 = "SELECT * from st_reg";
    $results2 = mysqli_query($con, $sql2);



    if (!isset($_SESSION['admin_username'])) {
        echo "<script>
            alert('Please login to view this page!');
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
        <title>Admin Profile</title>
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
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Welcome Admin!</h1>
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
                <h2 class="  text-uppercase text-secondary mb-0">Lecturers</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                   <p>
                       <table class="table text-center">
                            <thead>
                                <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Lecturer Name</th>
                                <th scope="col">School</th>
                                <th scope="col"></th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($row = mysqli_fetch_assoc($results)) 
                                    {
                                        echo   "<tr style='vertical-align:middle';>";
                                        echo   "<td>".$row["lecturer_id"]."</td>";
                                        echo   "<td>".$row["lecturer_name"]."</td>";
                                        echo   "<td>".$row["lecturer_school"]."</td>";

                                        echo "
                                                <td><a class='btn btn-danger' href='admin_delete_lecturer.php?lecturer_id=".$row["lecturer_id"]."'>Delete</a>
                                                <a class='btn btn-warning' href = 'admin_edit_lecturer.php?lecturer_id=".$row["lecturer_id"]."'>Edit</a></td>";

                                        echo   "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </p>
                            


                </div>
            </div>
        </section>
        
        <!-- Student Section-->
        <section class="page-section portfolio" id="">
            <div class="container">
                <!-- Student Section Heading-->
                <h2 class="text-uppercase text-secondary mb-0">Students</h2>
                <!-- Divider-->
                <div class="divider-custom">
                    
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                   <p>
                       <table class="table text-center">
                            <thead>
                                <tr >
                                <th scope="col">#ID</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                                while ($row = mysqli_fetch_assoc($results2)) 
                                {
                                    echo   "<tr style='vertical-align:middle';>";
                                    echo   "<td>".$row["st_id"]."</td>";
                                    echo   "<td>".$row["st_name"]."</td>";
                                    echo   "<td>".$row["st_email"]."</td>";
                                    echo   "
                                            <td><a class='btn btn-danger' href='admin_delete_student.php?st_id=".$row["st_id"]."'>Delete</a>
                                            <a class='btn btn-warning' href = 'admin_edit_student.php?st_id=".$row["st_id"]."'>Edit</a></td>";

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

        <!-- scroll reveal js -->
        <script src="https://unpkg.com/scrollreveal@4"></script>
            <script>
                ScrollReveal().reveal('.footer', { delay: 250 });
                ScrollReveal().reveal('.page-section', { delay: 250 });
            </script>
       
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
