<?php
session_start();
ob_start();
?>


<?php
	error_reporting(~E_NOTICE);
	if($_GET["Action"] == "Save")
	{
		// Statement

	}
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
$path='../filect/';
$file=$_FILES['fileToUpload']['name'];
$file_type= strrchr( $file , '.' );
$pic_name=$p_id4.$file_type;
copy ($_FILES['fileToUpload']['tmp_name'],$path.$pic_name);
$fileToUpload=$pic_name;
}


$sql = "UPDATE rs_information set
idinformation_rs='$idinformation_rs',
filect_rs='$pic_name' where id ='$id'";


$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/admin/admindata-rs.php'</script>";
mysqli_close($conn);
}
?>