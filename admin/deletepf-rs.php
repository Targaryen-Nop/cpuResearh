<?php
session_start();
ob_start();
?>


<?php
$conn=mysqli_connect("localhost","root","","research2020");

if(mysqli_connect_errno())
{ 
  echo "Failed to connect to MySQL:".mysqli_connect_error();
}
$id=$_GET["id"];
$qr="DELETE FROM rs_portfolio WHERE id='$id'";
    mysqli_query($conn,$qr);
    echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
    echo "<script language='javascript'>window.location.href='/rs-cpu/admin/adminpublish-rs.php'</script>";
?>