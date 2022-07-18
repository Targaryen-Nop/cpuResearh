<?php
session_start();
ob_start();
?>


<?php
if(isset($_POST["submit"])){
$id = $_POST["id"];
$money1_rs = $_POST["money1_rs"];
$money2_rs = $_POST["money2_rs"];
$money3_rs = $_POST["money3_rs"];
$d1mn_rs = $_POST["d1mn_rs"];
$d2mn_rs = $_POST["d2mn_rs"];
$d3mn_rs = $_POST["d3mn_rs"];
$m1mn_rs = $_POST["m1mn_rs"];
$m2mn_rs = $_POST["m2mn_rs"];
$m3mn_rs = $_POST["m3mn_rs"];
$y1mn_rs = $_POST["y1mn_rs"];
$y2mn_rs = $_POST["y2mn_rs"];
$y3mn_rs = $_POST["y3mn_rs"];


$conn = new mysqli("localhost","root","","research2020" );
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
die("connect fail:".$conn->connect_error);
}



$sql = "UPDATE rs_information set 
money1_rs='$money1_rs',
money2_rs='$money2_rs',
money3_rs='$money3_rs',
d1mn_rs='$d1mn_rs',
d2mn_rs='$d2mn_rs',
d3mn_rs='$d3mn_rs',
m1mn_rs='$m1mn_rs',
m2mn_rs='$m2mn_rs',
m3mn_rs='$m3mn_rs',
y1mn_rs='$y1mn_rs',
y2mn_rs='$y2mn_rs',
y3mn_rs='$y3mn_rs'  where id ='$id'";


$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/admin/admindata-rs.php'</script>";
mysqli_close($conn);
}
?>