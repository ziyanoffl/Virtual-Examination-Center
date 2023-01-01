<?php

include 'connect.php';
$st_id = $_SESSION['st_id'];


$sql = "SELECT * FROM st_reg WHERE st_id=$st_id";

$results = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($results)) {
    $email = $row['st_email'];
    $password = $row['st_password'];
    $name = $row['st_name'];
    $address = $row['st_address'];
    $dob = $row['st_dob'];
}




if (isset($_POST['submitbtn'])) {
    $edited_name = $_POST['txtname'];
    $edited_email = $_POST['txtemail'];
    $edited_password = $_POST['txtpassword'];
    $edited_dob = $_POST['txtdob'];
    $edited_address = $_POST['txtaddress'];


    $sql_registration = "UPDATE `st_reg` SET `st_name` = '$edited_name', `st_address` = '$edited_address', `st_email` = '$edited_email', `st_dob` = '$edited_dob', `st_password` = '$edited_password' WHERE `st_reg`.`st_id` = '$st_id';";

    $sql_status = mysqli_query($con, $sql_registration);
}
?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <!-- title -->
        <title>Student Profile Edit</title>

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
                    <?php include 'student_nav.php'; ?>
                    </ul>
                </div>
            </div>
        </nav>
       <br>
        <!-- Contact Section-->
        <section class="page-section" id="student_registration">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mt-5">Edit your profile</h2>
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
                       
                        <form class="mt-5" id="contactForm" method="post" >
                            
                            <!-- Username input-->
                            <div class="form-floating mb-3">
                                <input name="txtname" value="<?php echo $name; ?>" class="form-control" id="" type="txt" placeholder="name@example.com"   />
                                <label for="txtname">Name</label>
                            </div>

                             <!-- Address input-->
                             <div class="form-floating mb-3">
                                <input name="txtaddress" value="<?php echo $address; ?>" class="form-control" id="" type="txt" placeholder="name@example.com"  />
                                <label for="txtaddress">Address</label>
                            </div>

                             <!-- Date of birth input-->
                             <div class="form-floating mb-3">
                                <input name="txtdob" value="<?php echo $dob; ?>" class="form-control" id="" type="date" placeholder="name@example.com"  />
                                <label for="txtdob">Date of birth</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-floating mb-3">
                                <input name="txtemail" value="<?php echo $email; ?>" class="form-control" id="" type="email" placeholder="xxxxxxx"  />
                                <label for="txtemail">Email</label>
                            </div>

                            <!-- Password input-->
                            <div class="form-floating mb-3">
                                <input name="txtpassword" value="<?php echo $password; ?>" class="form-control" id="" type="password" placeholder="name@example.com"  />
                                <label for="txtpassword">Password</label>
                            </div>

                           
                                                     
                            
                            <!-- Submit Button-->
                            <button name="submitbtn" class="btn btn-primary btn-xl " id="" type="submit">Edit</button>
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
