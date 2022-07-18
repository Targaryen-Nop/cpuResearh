<?php
	session_start();
	
$con=mysqli_connect("localhost","root","","research2020");
    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	

	$strSQL = "SELECT * FROM rs_user WHERE username_rs = '".mysqli_real_escape_string($con,$_POST['username_rs'])."' 
	and password_rs = '".mysqli_real_escape_string($con,$_POST['password_rs'])."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
		echo "<script> alert('ชื่อผู้ใช้หรือรหัสผิด กรุณาเข้าระบบอีกครั้งค่ะ');</script>
					<META HTTP-EQUIV=refresh Content=0;URL=login-rs.php>";
		exit();
	}	
		else
		{
			//*** Update Status Login
			$sql = "SELECT * FROM rs_user WHERE username_rs = '".$objResult["username_rs"]."' ";
			$query = mysqli_query($con,$sql);
			$_SESSION["username_rs"] = $objResult["username_rs"];
			$_SESSION["status_rs"] = $objResult["status_rs"];
			$_SESSION["board_rs"] = $objResult["board_rs"];
			

			session_write_close();
			
			if($objResult["status_rs"] == "admin")
			{
				header("location:../rs-cpu/admin/dashboard-rs.php");
			}
			elseif($objResult["status_rs"] == "member")
			{
				header("location:../rs-cpu/member/dashboard-rs.php");
			}
			elseif($objResult["status_rs"] == "dean")
			{
				if($objResult["board_rs"] =="คณะวิทยาศาสตร์และเทคโนโลยี")
				{
				header("location:../rs-cpu/dean/science/dashboard-rs.php");
				}
				if($objResult["board_rs"] =="คณะบริหารและการจัดการ")
				{
				header("location:../rs-cpu/dean/management/dashboard-rs.php");
				}
				if($objResult["board_rs"] =="คณะมนุษยศาสตร์และสังคมศาสตร์")
				{
				header("location:../rs-cpu/dean/human/dashboard-rs.php");
				}
			}
			else
			{
				header("location:login-rs.php");
			}
	}
	mysqli_close($con);
?> -->