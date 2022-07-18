<?php
session_start();
ob_start();
?>


<?php
if(isset($_POST["submit"])){
$id = $_POST["id"];
$idinformation_rs = $_POST["idinformation_rs"];
$usernameif_rs = $_POST["usernameif_rs"];
$board_rs = $_POST["board_rs"];
$subject_rs = $_POST["subject_rs"];
$year_rs = $_POST["year_rs"];
$dtstart_rs = $_POST["dtstart_rs"];
$dtfinish_rs = $_POST["dtfinish_rs"];
$budget_rs = $_POST["budget_rs"];
$typepj_rs = $_POST["typepj_rs"];
$nameth_rs = $_POST["nameth_rs"];
$nameen_rs = $_POST["nameen_rs"];
$typers_rs = $_POST["typers_rs"];
$keyword_rs = $_POST["keyword_rs"];
$sort_rs = $_POST["sort_rs"];
$rs_funding = $_POST["rs_funding"];
$rs_fundingmoney = $_POST["rs_fundingmoney"];
$budget_rs = $_POST["budget_rs"];
$result_rs = $_POST["result_rs"];
$ztilization_rs = $_POST["ztilization_rs"];
$ztilizationcmc_rs = $_POST["ztilizationcmc_rs"];
$ztilizationsm_rs = $_POST["ztilizationsm_rs"];
$details_rs = $_POST["details_rs"];
$username_rs = $_SESSION['username_rs'];
$conn = new mysqli("localhost","root","","research2020" );
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
die("connect fail:".$conn->connect_error);
}

$Qtotal4 = mysqli_query($conn,"select * from rs_information");
$total_data4 = mysqli_num_rows($Qtotal4);
$p_id4="$idinformation_rs";


date_default_timezone_set('Asia/Bangkok');
  $date = date("Y-m-d H:i:s");
  $date2 = date("Y-m-d");
//ฟังก์ชั่นสุ่มตัวเลข
    $numrand = (mt_rand());

if ($_FILES['fileToUpload']['name']!= '') {
$path='../filers/';
$file=$_FILES['fileToUpload']['name'];
$file_type= strrchr( $file , '.' );
$pic_name=$p_id4.$file_type;
copy ($_FILES['fileToUpload']['tmp_name'],$path.$pic_name);
$fileToUpload=$pic_name;
}


$sql = "UPDATE rs_information set
idinformation_rs='$idinformation_rs',
usernameif_rs='$usernameif_rs',
board_rs='$board_rs',
subject_rs='$subject_rs',
year_rs='$year_rs',
dtstart_rs='$dtstart_rs',
dtfinish_rs='$dtfinish_rs',
budget_rs='$budget_rs',
typepj_rs='$typepj_rs',
nameth_rs='$nameth_rs',
nameen_rs='$nameen_rs',
typers_rs='$typers_rs',
keyword_rs='$keyword_rs',
sort_rs='$sort_rs',
rs_funding='$rs_funding',
rs_fundingmoney='$rs_fundingmoney',
budget_rs='$budget_rs',
result_rs='$result_rs',
ztilization_rs='$ztilization_rs',
ztilizationcmc_rs='$ztilizationcmc_rs',
ztilizationsm_rs='$ztilizationsm_rs',
filefrom_rs='$p_id4.pdf',
details_rs='$details_rs' where id ='$id'";


$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/member/memberdata-rs.php'</script>";
mysqli_close($conn);
}
?>