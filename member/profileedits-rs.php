<?php
session_start();
ob_start();
?>


<?php
if(isset($_POST["submit"])){
	$id = $_POST["id"];
$title_rs = $_POST["title_rs"];
$password_rs = $_POST["password_rs"];
$firstname_rs = $_POST["firstname_rs"];
$lastname_rs = $_POST["lastname_rs"];
$sex_rs = $_POST["sex_rs"];
$phone_rs = $_POST["phone_rs"];
$email_rs = $_POST["email_rs"];
$board_rs = $_POST["board_rs"];
$subject_rs = $_POST["subject_rs"];
$conn = new mysqli("localhost","root","","research2020" );
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
die("connect fail:".$conn->connect_error);
}


$sql = "UPDATE rs_user set 
title_rs='$title_rs',
password_rs='$password_rs',
firstname_rs='$firstname_rs',
lastname_rs='$lastname_rs',
sex_rs='$sex_rs',
phone_rs='$phone_rs',
email_rs='$email_rs',
board_rs='$board_rs',
subject_rs='$subject_rs' where id ='$id'";


$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='profile-rs.php'</script>";
mysqli_close($conn);
}
?>