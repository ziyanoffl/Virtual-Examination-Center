<?php

include 'connect.php';
if (isset($_POST['submitbtn'])) {
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];



    $sql = "SELECT * FROM `lecturer_reg` WHERE `lecturer_email` = '$username' AND `lecturer_password` = '$password'";

    $status = mysqli_query($con, $sql);

    $row = mysqli_num_rows($status);

    if ($row == 1) {
        while ($findUser = mysqli_fetch_assoc($status)) {
            $_SESSION['lecturer_id'] = $findUser["lecturer_id"];
            // $_SESSION['selectedUser'] = $findUser["email"];
            // $_SESSION['selectedContact'] = $findUser["contact"];
            // $_SESSION['selectedAddress'] = $findUser["address"];
            // $_SESSION['selectedUserid'] = $findUser["user_id"];

            // $userId = $_SESSION['selectedUserid'];

            // $sql2 = "SELECT * FROM user_info WHERE user_id = '$userId'";

            // $status2 = mysqli_query($con,$sql2);

            // $row2 = mysqli_num_rows($status2);

            // while($findUser2 = mysqli_fetch_assoc($status2)){
            //     $_SESSION['selectedExp1'] = $findUser2["exp1"];
            // }
        }
        header('Location: lecturer_home.php');
    } else {
        $_SESSION['login_error'] = 'ERROR! Please check your email or password';
    }
}
?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lecturer Login</title>
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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="student_login.php">Student Log in</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#lecturer_login">Lecturer Log in</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin_login.php">Admin Log in</a></li>                     
                    </ul>
                </div>
            </div>
        </nav>
       <br>
        <!-- Contact Section-->
        <section class="page-section" id="lecturer_login">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mt-5">Log in</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                       
                        <form id="contactForm" method="post" class="mt-5" >
                            
                            <!-- Email input-->
                            <div class="form-floating mb-3" method="post" class="mt-5">
                                <input name="txtusername" class="form-control" id="" type="email" placeholder="email@website.com"  />
                                <label for="username">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-floating mb-3">
                                <input name="txtpassword" class="form-control" id="" type="password" placeholder="xxxxxxx"  />
                                <label for="email">Password</label>
                            </div>
                            
                            
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error when trying to login! Try again!</div></div>
                            <!-- Submit Button-->
                            <button name="submitbtn" class="btn btn-primary btn-xl" id="submitButton" onmouseover="" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        

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
