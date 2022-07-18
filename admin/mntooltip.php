<?php
if(isset($_POST["id"]))
{
$conn=mysqli_connect("localhost","root","","research2020");
 $output = '';
 $query = "SELECT * FROM rs_information WHERE id='".$_POST["id"]."'";
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result))
 {
  $output = '
  <p><label>เลขที่โครงการ : '.$row['idinformation_rs'].'</p>
  <p><label>วันเริ่มโครงการ :'.$row['dtstart_rs'].'</p>
  <p><label>วันสิ้นสุดโครงการ :'.$row['dtfinish_rs'].'</p>
  <p><label>งบประมาณ : '.$row['budget_rs']. 'บาท</label></p>
  <p><label>เบิกเงินครั้งที่ 1 : '.$row['d1mn_rs'].$row['m1mn_rs'].$row['y1mn_rs'].'</p>
  <p><label>เบิกเงินครั้งที่ 2 : '.$row['d2mn_rs'].$row['m2mn_rs'].$row['y2mn_rs'].'</p>
  <p><label>เบิกเงินครั้งที่ 3 : '.$row['d3mn_rs'].$row['m3mn_rs'].$row['y3mn_rs'].'</p>
  <p><label>คณะ : '.$row['board_rs'].'</label></p>
  <p><label>หลักสูตร : '.$row['subject_rs'].'</label></p>
  ';
 }
 echo $output;
}
?>