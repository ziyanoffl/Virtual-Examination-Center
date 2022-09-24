<?php

include 'con.php';



$lecturer_id = $_SESSION['lecturer_id'];

$sql = "SELECT * FROM lecturer_reg WHERE lecturer_id = $lecturer_id";

$results = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($results)){
    $email = $row['lecturer_email'];
    $password = $row['lecturer_password'];
    $name = $row['lecturer_name'];
    $address = $row['lecturer_address'];
    $school = $row['lecturer_school'];

        
         
     }


if(isset($_POST['submitbtn'])){
    $edited_email = $_POST['txtemail'];
    $edited_password = $_POST['txtpassword'];
    $edited_name = $_POST['txtname'];
    $edited_address = $_POST['txtaddress'];
    $edited_school = $_POST['txtschool'];

    
    $sql_registration = "UPDATE `lecturer_reg` SET `lecturer_name` = '$edited_name', `lecturer_address` = '$edited_address', `lecturer_school` = '$edited_school', `lecturer_email` = '$edited_email', `lecturer_password` = '$edited_password' WHERE `lecturer_reg`.`lecturer_id` = '$lecturer_id';";
    
    $sql_status = mysqli_query($con, $sql_registration);

    echo "<script>
alert('Edit successful!');
window.location.href='lecturer_home.php';
</script>";

                       
    }

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
        <title>Freelancer - Start Bootstrap Theme</title>
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
                <h2 class="  text-uppercase text-center text-secondary mt-5 mb-5">Edit Your Profile</h2>
                
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
                                        <input name="txtemail" class="form-control" id="" type="email" placeholder="name@example.com" value="<?php echo $email; ?>" />
                                        <label for="email">Enter Email</label>
                                    </div>

                            <!-- Password input -->
                                    <div class="form-floating mb-3">
                                        <input name="txtpassword" class="form-control" id="" type="text" placeholder="xxxxxxx" value="<?php echo $password; ?>"  />
                                        <label for="email">Enter Password</label>
                                    </div>

                            <!-- Name input -->
                                    <div class="form-floating mb-3">
                                        <input name="txtname" class="form-control" id="" type="text" placeholder="xxxxxxx" value="<?php echo $name; ?>"  />
                                        <label for="email">Enter Name</label>
                                    </div>

                            <!-- Address input -->
                                    <div class="form-floating mb-3">
                                        <input name="txtaddress" class="form-control" id="" type="text" placeholder="xxxxxxx" value="<?php echo $address; ?>"  />
                                        <label for="email">Enter Address</label>
                                    </div>
                            
                            <!-- School input -->
                                    <div class="form-floating mb-3">
                                        <input name="txtschool" class="form-control" id="" type="text" placeholder="xxxxxxx" value="<?php echo $school; ?>"  />
                                        <label for="email">Enter school</label>
                                    </div>

                                                                                   
                            <!-- Submit Button-->
                            <button name="submitbtn" class="btn btn-primary btn-xl" id="submitButton" type="submit">Edit</button>
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
