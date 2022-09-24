<?php

session_start();

if(isset($_SESSION['st_id'])){
    unset($_SESSION['st_id']);
    
    header('Location: student_login.php');
}else{
    echo "<script>
alert('No users logged in!');
window.location.href='student_login.php';
</script>";

}


?>