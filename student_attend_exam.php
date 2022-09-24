<?php

include 'con.php';

$exam_id = $_GET['exam_id'];


    $st_id = $_SESSION['st_id'];

    $sql = "SELECT * FROM exam_schedule WHERE exam_id = $exam_id";

    $results = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($results)){
        $exam_title =  $row['exam_title'];
        $exam_subtitle =  $row['exam_subtitle'];
        
 
         
     }


     $sql2 = "SELECT * FROM exam_tbl WHERE exam_id = $exam_id";

     $results2 = mysqli_query($con, $sql2);

     while($row2=mysqli_fetch_assoc($results2)){
        $question1 = $row2['question1'];
        $question2 = $row2['question2'];
        $correctans1 = $row2['qc1'];
        $correctans2 = $row2['qc2'];
        $ans1 = $row2['ans1'];
        $ans2 = $row2['ans2'];
        $ans3 = $row2['ans3'];
        $ans4 = $row2['ans4'];
     }

    if(isset($_POST['submitbtn'])){
    $stans1 = $_POST['q1'];
    $stans2 = $_POST['q2'];
        
    $sql_add = "INSERT INTO `student_ans` (`exam_id`, `st_id`, `st_ans1`, `st_ans2`) VALUES ('$exam_id', '$st_id', '$stans1', '$stans2');";
    
    $sql_status = mysqli_query($con, $sql_add);

    header('Location student_profile.php');                   
    }

    $sql3 = "SELECT * FROM student_ans WHERE exam_id = $exam_id AND st_id = $st_id";
 
     $results3 = mysqli_query($con, $sql3);
 
     while($row3 = mysqli_fetch_assoc($results3)){
         $st_ans1 =  $row3['st_ans1'];
         $st_ans2 =  $row3['st_ans2'];
        
           
      }
      
    if(isset($st_ans1)){
        echo '<script>alert("Exam already attended!");
        window.location.href="student_view_exam.php";</script>';

    }else if(!isset($question1)){
        echo '<script>alert("Exam is not ready yet!");
        window.location.href="student_view_exam.php";</script>';

    }
    
    if(!isset($_SESSION['st_id'])){
        echo "<script>
            alert('Please login to view this page!');
            window.location.href='student_login.php';
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
                        include 'student_nav.php';

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
                       
                        <form id="" method="post">
                            
                            
                            <div class=" mb-3" >
                                <!-- Email input-->
                                    <div class="form-floating mb-3">
                                        <h4><?php echo $question1?></h4>
                                    </div>

                            <!-- Password input -->
                                    <div class=" mb-3">
                                        <input type="radio" name="q1" class="mb-2" id=""  placeholder=""  value="<?php echo $ans1?>"/>
                                        <label for="answer 1"><?php echo $ans1?></label> <br>

                                        <input type="radio" name="q1" class="" id=""  placeholder=""  value="<?php echo $ans2?>"/>
                                        <label for="answer 1"><?php echo $ans2?></label>
                                    </div>


                                     <!-- Email input-->
                                     <div class="form-floating mb-3">
                                        <h4><?php echo $question2?></h4>
                                    </div>

                            <!-- Password input -->
                                    <div class=" mb-3">
                                        <input type="radio" name="q2" class="mb-2" id=""  placeholder=""  value="<?php echo $ans3?>"/>
                                        <label for="answer 2"><?php echo $ans3?></label> <br>

                                        <input type="radio" name="q2" class="" id=""  placeholder=""  value="<?php echo $ans4?>"/>
                                        <label for="answer 2"><?php echo $ans4?></label>
                                    </div>
                                      
                            
                           
                            <!-- Submit Button-->
                            <p class=""> <button name="submitbtn" class="btn btn-secondary" id="submitButton" type="submit">Submit answers</button></p>
                            
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
