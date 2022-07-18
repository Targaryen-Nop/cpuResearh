<?php
session_start();
ob_start();
?>


<?php
if(isset($_POST["submit"])){
	$id = $_POST["id"];
$idtracking_rs = $_POST["idtracking_rs"];
$timetk_rs = $_POST["timetk_rs"];
$statusproject_rs = $_POST["statusproject_rs"];
$performance1_rs = $_POST["performance1_rs"];
$barriers1_rs = $_POST["barriers1_rs"];
$help1_rs = $_POST["help1_rs"];
$performance2_rs = $_POST["performance2_rs"];
$barriers2_rs = $_POST["barriers2_rs"];
$help2_rs = $_POST["help2_rs"];
$performance3_rs = $_POST["performance3_rs"];
$barriers3_rs = $_POST["barriers3_rs"];
$help3_rs = $_POST["help3_rs"];
$performance4_rs = $_POST["performance4_rs"];
$barriers4_rs = $_POST["barriers4_rs"];
$help4_rs = $_POST["help4_rs"];
$performance5_rs = $_POST["performance5_rs"];
$barriers5_rs = $_POST["barriers5_rs"];
$help5_rs = $_POST["help5_rs"];
$conn = new mysqli("localhost","root","","research2020" );
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
die("connect fail:".$conn->connect_error);
}


$sql = "UPDATE rs_tracking set
statusproject_rs='$statusproject_rs', 
timetk_rs='$timetk_rs', 
performance1_rs='$performance1_rs',
barriers1_rs='$barriers1_rs',
help1_rs='$help1_rs',
performance2_rs='$performance2_rs',
barriers2_rs='$barriers2_rs',
help2_rs='$help2_rs',
performance3_rs='$performance3_rs',
barriers3_rs='$barriers3_rs',
help3_rs='$help3_rs',
performance4_rs='$performance4_rs',
barriers4_rs='$barriers4_rs',
help4_rs='$help4_rs',
performance5_rs='$performance5_rs',
barriers5_rs='$barriers5_rs',
help5_rs='$help5_rs'  where id ='$id'";


$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/admin/admindata-rs.php'</script>";
mysqli_close($conn);
}
?>

