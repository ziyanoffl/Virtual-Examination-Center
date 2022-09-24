<?php

session_start();

if(isset($_SESSION['lecturer_id'])){
    unset($_SESSION['lecturer_id']);
    
    header('Location: lecturer_login.php');
}else{
    header('Location: lecturer_login.php');
}


?>