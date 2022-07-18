<?php
if(isset($_POST["id"]))
{
$conn=mysqli_connect("localhost","root","","research2020");
 $output = '';
 $query = "SELECT * FROM rs_tracking WHERE id='".$_POST["id"]."'";
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result))
 {
  $output = '
  <p><label>เลขที่โครงการ : '.$row['idtracking_rs'].'</p>
  <p><label>ผู้วิจัย : </label> '.$row['usernametk_rs'].'</p>
  <p><label>คณะ : '.$row['boardtk_rs'].'</label></p>
  <p><label>หลักสูตร : '.$row['subjecttk_rs'].'</label></p>
  ';
 }
 echo $output;
}
?>