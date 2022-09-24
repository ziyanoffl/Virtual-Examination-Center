<?php

include 'con.php';


$exam_id = $_GET['exam_id'];


$lecturer_id = $_SESSION['lecturer_id'];

$sql = "SELECT * FROM exam_schedule WHERE exam_id = $exam_id;";

$results = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($results)){
        $exam_title =  $row['exam_title'];
        $exam_subtitle =  $row['exam_subtitle'];
        
         
     }

     $sql2 = "SELECT * FROM exam_tbl WHERE exam_id = $exam_id;";

     $results2 = mysqli_query($con, $sql2);
     
     while($row = mysqli_fetch_assoc($results2)){
             $q1 =  $row['question1'];
            
              
          }
          if(isset($q1)){
            echo '<script>alert("Questions already added!");
            window.location.href="lecturer_view_exam.php";</script>';
            // header('Location: lecturer_view_exam.php');

        }

     
//  display available data
// $displaySql = "SELECT * FROM exam_tbl WHERE exam_id = $exam_id;";

 

// $statusView = mysqli_query($con,$displaySql);
     
// $rows = mysqli_num_rows($statusView);

//      $edited_question1 =Null;
//             $edited_question2 = Null;
//             $edited_correctans1 = Null;
//             $edited_correctans2 = Null;
//             $edited_ans1 = Null;
//             $edited_ans2 = Null;
//             $edited_ans3 = Null;
//             $edited_ans4 = Null;
    
     
//          while($row1 = mysqli_fetch_assoc($statusView)){
//             $edited_question1 = $row1['question1'];
//             $edited_question2 = $row1['question2'];
//             $edited_correctans1 = $row1['qc1'];
//             $edited_correctans2 = $row1['qc2'];
//             $edited_ans1 = $row1['ans1'];
//             $edited_ans2 = $row1['ans2'];
//             $edited_ans3 = $row1['ans3'];
//             $edited_ans4 = $row1['ans4'];
//          }


if(isset($_POST['submitbtn'])){
    $question1 = $_POST['txtquestion1'];
    $question2 = $_POST['txtquestion2'];
    $correctans1 = $_POST['correctans1'];
    $correctans2 = $_POST['correctans2'];
    $ans1 = $_POST['txtans1'];
    $ans2 = $_POST['txtans2'];
    $ans3 = $_POST['txtans3'];
    $ans4 = $_POST['txtans4'];
    
  
    
    $sql_registration = "INSERT INTO `exam_tbl` (`exam_id`, `question1`, `question2`, `ans1`, `ans2`, `qc1`, `ans3`, `ans4`, `qc2`) VALUES ('$exam_id', '$question1', '$question2', '$ans1', '$ans2', '$correctans1', '$ans3', '$ans4', '$correctans2');";
    
    $sql_run = mysqli_query($con, $sql_registration);

    echo '<script>alert("Questions successfully added!");
    window.location.href="lecturer_view_exam.php";</script>';

                
    }
    // error_reporting(E_ALL ^ E_NOTICE);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lecturer</title>
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
                <h1 class="  text-uppercase text-center text-primary mt-5 mb-5">Add new questions</h1>
                
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                       
                        <form id="contactForm" method="POST">

                            <h2 class="text-s mt-5 mb-5">Title: <?php echo $exam_title; ?></h2>
                            
                            <!-- Question 1 -->
                            <h3 class="text-secondary mt-5 mb-5">Subtitle: <?php echo $exam_subtitle; ?> </h3>

                            <div class="form-group mb-3" >
                                <!-- Question 1 input-->
                                    <div class="form-group mb-4">

                                    <h4>Question 1</h4>
                                        <input name="txtquestion1" class="form-control" id="q1" type="text" placeholder="" value=""  />

                                        <label class="font-weight-bold" for="email">Answer 1</label>
                                        <input name="txtans1" class="form-control " id="" type="text" placeholder=""  />
                                       
                                        <label class="font-weight-bold" for="email">Answer 2</label>
                                        <input name="txtans2" class="form-control" id="" type="text" placeholder=""  />

                                        <p class="fw-bold mb-0">Retype correct answer</p>
                                        <input name="correctans1" class="form-control" id="" type="text" placeholder=""  />
                                        
                                    </div>


                                    <!-- Question 1 input-->
                                    <div class="form-group mb-3">

                                    <h4>Question 2</h4>
                                        <input name="txtquestion2" class="form-control" id="q1" type="text" placeholder=""  />

                                        <label for="email">Answer 1</label>
                                        <input name="txtans3" class="form-control" id="" type="text" placeholder=""  />
                                       
                                        <label for="email">Answer 2</label>
                                        <input name="txtans4" class="form-control" id="" type="text" placeholder=""  />

                                        <p class="fw-bold mb-0">Retype correct answer</p>
                                        <input name="correctans2" class="form-control" id="" type="text" placeholder=""  />
                                        
                                    </div>                                                                           
                            
                            
                            <!-- Submit Button-->
                            <button name="submitbtn" class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button>
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
