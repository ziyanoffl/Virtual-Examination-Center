<?php

session_start();

if(isset($_SESSION['admin_username'])){
    unset($_SESSION['admin_username']);
    
    header('Location: admin_login.php');
}else{
    echo "No users logged!";
}


?>