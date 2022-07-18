<?php session_start(); 
 ob_start();
if (isset($_SESSION['username_rs'])){
    unset($_SESSION['username_rs']); // xóa session login
}
ob_clean(); 
header("Location: login-rs.php"); 
?>
