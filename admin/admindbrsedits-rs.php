<?php
session_start();
ob_start();
?>



<?php
if(isset($_POST["submit"])){
	$id = $_POST["id"];
$idinformation_rs = $_POST["idinformation_rs"];
$year_rs = $_POST["year_rs"];
$nameth_rs = $_POST["nameth_rs"];
$researcher_rs = $_POST["researcher_rs"];
$board_rs = $_POST["board_rs"];
$subject_rs = $_POST["subject_rs"];
$typepj_rs = $_POST["typepj_rs"];
$conn = new mysqli("localhost","root","","research2020" );
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
die("connect fail:".$conn->connect_error);
}

$Qtotal4 = mysqli_query($conn,"select * from rs_dbresearch");
$total_data4 = mysqli_num_rows($Qtotal4);
$p_id4="$idinformation_rs";


date_default_timezone_set('Asia/Bangkok');
  $date = date("Y-m-d H:i:s");
  $date2 = date("Y-m-d");
//ฟังก์ชั่นสุ่มตัวเลข
    $numrand = (mt_rand());

if ($_FILES['fileToUpload']['name']!= '') {
$path='../filedbrs/';
$file=$_FILES['fileToUpload']['name'];
$file_type= strrchr( $file , '.' );
$pic_name=$p_id4.$file_type;
copy ($_FILES['fileToUpload']['tmp_name'],$path.$pic_name);
$fileToUpload=$pic_name;
}



$sql = "UPDATE rs_dbresearch set
year_rs='$year_rs',
nameth_rs='$nameth_rs',
researcher_rs='$researcher_rs',
board_rs='$board_rs',
subject_rs='$subject_rs',
typepj_rs='$typepj_rs' where id ='$id'";


$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/admin/admindbrs-rs.php'</script>";
mysqli_close($conn);
}
?>