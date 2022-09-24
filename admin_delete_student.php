<?php

include 'con.php';

$Id = $_GET['st_id'];

$sql = "DELETE FROM st_reg WHERE st_id = $Id";

$status = mysqli_query($con,$sql);

if(!isset($_SESSION['admin_username'])){
    echo "<script>
        alert('Please login to view this page!');
        window.location.href='admin_login.php';
        </script>";
     }