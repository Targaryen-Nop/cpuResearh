<?php
session_start();
ob_start();
?>


<?php
if(isset($_POST["submit"])){
	$id = $_POST["id"];
$statusinformation_rs = $_POST["statusinformation_rs"];
$typers_rs = $_POST["typers_rs"];
$term1_rs = $_POST["term1_rs"];
$term2_rs = $_POST["term2_rs"];
$term3_rs = $_POST["term3_rs"];
$term4_rs = $_POST["term4_rs"]; 
$term5_rs = $_POST["term5_rs"];
$conn = new mysqli("localhost","root","","research2020" );
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
die("connect fail:".$conn->connect_error);
}


$sql = "UPDATE rs_information set
statusinformation_rs='$statusinformation_rs',
typers_rs='$typers_rs',
term1_rs='$term1_rs',
term2_rs='$term2_rs',
term3_rs='$term3_rs',
term4_rs='$term4_rs',
term5_rs='$term5_rs' where id ='$id'";


$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/admin/admindata-rs.php'</script>";
mysqli_close($conn);
}
?>