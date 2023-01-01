<?php

include 'connect.php';

$Id = $_GET['lecturer_id'];

$sql = "DELETE FROM lecturer_reg WHERE lecturer_id = $Id";

$status = mysqli_query($con,$sql);

if(!isset($_SESSION['admin_username'])){
    echo "<script>
        alert('Please login to view this page!');
        window.location.href='admin_login.php';
        </script>";
     }

if($status){
    echo "A record has been deleted!";
    header('Location: admin_profile.php');
}else{
    echo "Error!";
}