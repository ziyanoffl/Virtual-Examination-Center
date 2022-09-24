<?php

include 'con.php';

$Id = $_GET['st_id'];

$sql = "DELETE FROM st_reg WHERE st_id = $Id";

$status = mysqli_query($con,$sql);

echo '<script>alert("Successfully deleted student!");
window.location.href="lecturer_view_students.php";</script>';