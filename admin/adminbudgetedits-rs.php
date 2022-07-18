<?php
session_start();
ob_start();
?>

<?php
if(isset($_POST["submit"])){
	$id = $_POST["id"];
$yearbg_rs = $_POST["yearbg_rs"];
$mbudget_rs = $_POST["mbudget_rs"];
$sbudget_rs = $_POST["sbudget_rs"];
$hbudget_rs = $_POST["hbudget_rs"];
$madd_rs = $_POST["madd_rs"];
$sadd_rs = $_POST["sadd_rs"];
$hadd_rs = $_POST["hadd_rs"];


$conn = new mysqli("localhost","root","","research2020" );
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
die("connect fail:".$conn->connect_error);
}


$sql = "UPDATE rs_budget set
yearbg_rs='$yearbg_rs',
mbudget_rs='$mbudget_rs',
sbudget_rs='$sbudget_rs',
hadd_rs='$hbudget_rs',
madd_rs='$madd_rs',
sadd_rs='$sadd_rs',
hadd_rs='$hadd_rs' where id ='$id'";


$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/admin/adminbudget-rs.php'</script>";
mysqli_close($conn);
}
?>