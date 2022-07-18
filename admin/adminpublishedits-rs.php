<?php
session_start();
ob_start();
?>

<?php
if(isset($_POST["submit"])){
	$id = $_POST["id"];
$idportfolio_rs = $_POST["idportfolio_rs"];	
$yearpf_rs = $_POST["yearpf_rs"];
$researcher_rs = $_POST["researcher_rs"];
$board_rs = $_POST["board_rs"];
$subject_rs = $_POST["subject_rs"];
$timeprint_rs = $_POST["timeprint_rs"];
$idportfolio_rs = $_POST["idportfolio_rs"];
$typers_rs = $_POST["typers_rs"];
$nameth_rs = $_POST["nameth_rs"];
$nameen_rs = $_POST["nameen_rs"];
$researcher1_rs = $_POST["researcher1_rs"];
$researcher2_rs = $_POST["researcher2_rs"];
$sort_rs = $_POST["sort_rs"];
$namejournal_rs = $_POST["namejournal_rs"];
$yearjournal_rs = $_POST["yearjournal_rs"];
$issuejournal_rs = $_POST["issuejournal_rs"];
$monthjournal_rs = $_POST["monthjournal_rs"];
$pagejournal_rs = $_POST["pagejournal_rs"];
$meeting_rs = $_POST["meeting_rs"];
$typeat_rs = $_POST["typeat_rs"];
$province_rs = $_POST["province_rs"];
$year_rs = $_POST["year_rs"];
$page_rs = $_POST["page_rs"];
$format_rs = $_POST["format_rs"];
$score_rs = $_POST["score_rs"];
$abstractth_rs = $_POST["abstractth_rs"];
$abstracten_rs = $_POST["abstracten_rs"];
$username_rs = $_SESSION['username_rs'];
$conn = new mysqli("localhost","root","","research2020" );
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
die("connect fail:".$conn->connect_error);
}

$Qtotal4 = mysqli_query($conn,"select * from rs_information");
$total_data4 = mysqli_num_rows($Qtotal4);
$p_id4="$idportfolio_rs";


date_default_timezone_set('Asia/Bangkok');
  $date = date("Y-m-d H:i:s");
  $date2 = date("Y-m-d");
//ฟังก์ชั่นสุ่มตัวเลข
    $numrand = (mt_rand());

if ($_FILES['fileToUpload']['name']!= '') {
$path='../filepublish/';
$file=$_FILES['fileToUpload']['name'];
$file_type= strrchr( $file , '.' );
$pic_name=$p_id4.$file_type;
copy ($_FILES['fileToUpload']['tmp_name'],$path.$pic_name);
$fileToUpload=$pic_name;
}


$sql = "UPDATE rs_portfolio set
idportfolio_rs='$idportfolio_rs',
yearpf_rs='$yearpf_rs',
researcher_rs='$researcher_rs',
board_rs='$board_rs',
subject_rs='$subject_rs',
timeprint_rs='$timeprint_rs',
typers_rs='$typers_rs',
nameth_rs='$nameth_rs',
nameen_rs='$nameen_rs',
researcher1_rs='$researcher1_rs',
researcher2_rs='$researcher2_rs',
sort_rs='$sort_rs',
namejournal_rs='$namejournal_rs',
yearjournal_rs='$yearjournal_rs',
issuejournal_rs='$issuejournal_rs',
monthjournal_rs='$monthjournal_rs',
pagejournal_rs='$pagejournal_rs',
meeting_rs='$meeting_rs',
typeat_rs='$typeat_rs',
province_rs='$province_rs',
year_rs='$year_rs',
page_rs='$page_rs',
format_rs='$format_rs',
score_rs='$score_rs',
abstractth_rs='$abstractth_rs',
filepublish='$p_id4.pdf',
abstracten_rs='$abstracten_rs' where id ='$id'";

$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/admin/adminpublish-rs.php'</script>";
mysqli_close($conn);
}
?>