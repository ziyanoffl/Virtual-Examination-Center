<?php

include 'connect.php';

$Id = $_GET['exam_id'];

$sql = "DELETE FROM exam_schedule WHERE exam_id = $Id";

$status = mysqli_query($con, $sql);

if ($status) {
    echo "A record has been deleted!";
    header('Location: lecturer_view_exam.php');
} else {
    echo "Error!";
}
