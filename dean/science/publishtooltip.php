<?php
if(isset($_POST["id"]))
{
$conn=mysqli_connect("localhost","root","","research2020");
 $output = '';
 $query = "SELECT * FROM rs_portfolio WHERE id='".$_POST["id"]."'";
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result))
 {
  $output = '
  <p><label>รหัสงานวิจัยเผยแพร่ : </label>'.$row['idportfolio_rs'].'</p>
  <p><label>ประเภทงานวิจัย : </label>'.$row['typers_rs'].'</p>
  <p><label>ประเภทการนำเสนอ :'.$row['sort_rs'].'</p>
  <p><label>รูปแบบการเผยแพร่ :'.$row['format_rs'].'</p>
  <p><label>ระดับคะแนน :'.$row['score_rs'].'</p>
  ';
 }
 echo $output;
}
?>