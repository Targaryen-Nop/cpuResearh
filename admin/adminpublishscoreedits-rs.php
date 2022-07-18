<?php
session_start();
ob_start();
?>

<?php
if(isset($_POST["submit"])){ 
$id = $_POST["id"];	
$yearsc = $_POST["yearsc"];
$m02 = $_POST["m02"];
$m04 = $_POST["m04"];
$m06 = $_POST["m06"];
$m08 = $_POST["m08"];
$m10 = $_POST["m10"];
$s02 = $_POST["s02"];
$s04 = $_POST["s04"];
$s06 = $_POST["s06"];
$s08 = $_POST["s08"];
$s10 = $_POST["s10"];
$h02 = $_POST["h02"];
$h04 = $_POST["h04"];
$h06 = $_POST["h06"];
$h08 = $_POST["h08"];
$h10 = $_POST["h10"];
$conn = new mysqli('localhost','root','','research2020');
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
  die("connect fail:".$conn->connect_error);
}


$sql = "UPDATE rs_scorepublish set
yearsc='$yearsc',
m02='$m02',
m04='$m04',
m06='$m06',
m08='$m08',
m10='$m10',
s02='$s02',
s04='$s04',
s06='$s06',
s08='$s08',
s10='$s10',
h02='$h02',
h04='$h04',
h06='$h06',
h08='$h08',
h10='$h10'where id ='$id'";


$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/admin/adminpublishscore-rs.php'</script>";
mysqli_close($conn);
}
?>