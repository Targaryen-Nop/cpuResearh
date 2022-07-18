<?php
session_start();
ob_start();
?>

<?php
if(isset($_POST["submit"])){
$id = $_POST["id"];
$yearcr_rs = $_POST["yearcr_rs"];
$mgt_re = $_POST["mgt_re"];
$mak_rs = $_POST["mak_rs"];
$acc_rs = $_POST["acc_rs"];
$bco_rs = $_POST["bco_rs"];
$htm_rs = $_POST["htm_rs"];
$cpa_rs = $_POST["cpa_rs"];
$csc_rs = $_POST["csc_rs"];
$cmd_rs = $_POST["cmd_rs"];
$cma_rs = $_POST["cma_rs"];
$law_rs = $_POST["law_rs"];
$pad_rs = $_POST["pad_rs"];
$tp_rs = $_POST["tp_rs"];
$moe_rs = $_POST["moe_rs"];
$dop_rs = $_POST["dop_rs"];
$conn = new mysqli("localhost","root","","research2020" );
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
die("connect fail:".$conn->connect_error);
}


$sql = "UPDATE rs_budgetcourse set
yearcr_rs='$yearcr_rs',
mgt_re='$mgt_re',
mak_rs='$mak_rs',
acc_rs='$acc_rs',
bco_rs='$bco_rs',
htm_rs='$htm_rs',
cpa_rs='$cpa_rs',
csc_rs='$csc_rs',
cmd_rs='$cmd_rs',
cma_rs='$cma_rs',
law_rs='$law_rs',
pad_rs='$pad_rs',
tp_rs='$tp_rs',
moe_rs='$moe_rs',
dop_rs='$dop_rs' where id ='$id'";


$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/admin/adminbudget-rs.php'</script>";
mysqli_close($conn);
}
?>