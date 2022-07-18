<?php
session_start();
ob_start();
if (!isset($_SESSION['username_rs'])) {
   header('Location: pages-login.php');
}
?>
<?php

$conn=mysqli_connect("localhost","root","","research2020");
mysqli_set_charset($conn,'utf8');
if(mysqli_connect_errno())
{ 
  echo "Failed to connect to MySQL:".mysqli_connect_error();
}

$sql="SELECT*FROM  rs_user";
$result=mysqli_query($conn,$sql);
//$row=msqli_fetch_array($result,MYSQLI_NUM);
//$strSQL="SELECT*FROM score_exam WHERE idrs LIKE'%".$_SESSION["idrs"]."%";
//$objQuery=mysqli_query($strSQL,$con) or die ("Error Query [".$strSQL."]");
?>

<?php
if(isset($_POST["submit"])){
$title_rs = $_POST["title_rs"];
$username_rs  = $_POST["username_rs"];
$password_rs = $_POST["password_rs"];
$firstname_rs = $_POST["firstname_rs"];
$lastname_rs = $_POST["lastname_rs"];
$sex_rs = $_POST["sex_rs"];
$phone_rs = $_POST["phone_rs"];
$board_rs = $_POST["board_rs"];
$subject_rs = $_POST["subject_rs"];
$email_rs = $_POST["email_rs"];


$conn = new mysqli('localhost','root','','research2020');
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
  die("connect fail:".$conn->connect_error);
}

$sql = "insert into rs_user values ('null','$title_rs','$username_rs', '$password_rs', '$firstname_rs', '$lastname_rs','$sex_rs', '$phone_rs', '$board_rs', '$subject_rs', '$email_rs', 'member')";
$result = mysqli_query($conn,$sql);//
echo "<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>";
  echo "<script language='javascript'>window.location.href='/rs-cpu/admin/adminmenber-rs.php'</script>";
mysqli_close($conn);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | เพิ่มสมาชิก</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->     
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- datatables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<!--<body class="fix-menu dark-layout">-->

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                       </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          
                          
                      </ul>
                      <ul class="nav-right">                          
                          <li class="user-profile header-notification">
                          <a class="waves-effect waves-light">
                          <div class="username hidden-xs"><?php 
                       if (isset($_SESSION['username_rs']) && $_SESSION['username_rs']){
                          echo 'สวัสดี: '.$_SESSION['username_rs']."";
                       }  
                       else{
                           echo 'กรุณา Login ';
                       }
                       ?>
                       </div>
                       </a>
                          <ul class="show-notification profile-notification">
                          <li class="waves-effect waves-light">
                          <a href="../logout.php">
                          <i class="ti-layout-sidebar-left"></i> ออกจากระบบ
                      </a>
                      </li>
                      </ul>
                      </li>
                      </ul>
                  </div>
              </div>
          </nav>

        <?php $page='adminmenber-rs'; include 'menu.php';  ?>

        
<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="adminmenberadd-rs.php" method ="post"enctype="multipart/form-data">                    
                    <div class="pcoded-inner-content">
                    <div class="main-body">
                    <div class="page-wrapper">
                    <!-- Page body start -->
                    <div class="page-body">
                    <div class="row">
                    <div class="col-sm-12">
                    <!-- Bootstrap tab card start -->
                    <div class="card">
                    <div class="card-header">

                    <!-- Row start -->
                    <div class="row">
                    <div class="col-lg-12 col-xl-12">
                    <div class="sub-title">
                    <h5>เพิ่มสมาชิก</h5>
                    </div>
                  <div class="card-block">
                <form>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">UserID</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control form-control-primary" placeholder="Username" name="username_rs" id="username_rs" maxlength="20" required>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">Password</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control form-control-primary" placeholder="Password" name="password_rs" id="password_rs" maxlength="20" required>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">คำนำหน้า</label>
                    <div class="col-sm-11">
                        <select input type="list" class="form-control"  name="title_rs" id="title_rs" placeholder="คำนำหน้า">
                          <option value="อาจารย์">อาจารย์</option>
                          <option value="ดร.">ดร.</option>
                          <option value="ผศ.">ผศ.</option>
                          <option value="ผศ.ดร.">ผศ.ดร.</option>
                          <option value="รศ.ดร.">รศ.ดร.</option>
                          <option value="ศ.ดร.">ศ.ดร.</option>
                        </select>  
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">ชื่อ</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control form-control-normal" placeholder="ชื่อ" name="firstname_rs" id="firstname_rs" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"/ required>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">นามสกุล</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control form-control-normal" placeholder="นามสกุล" name="lastname_rs" id="lastname_rs" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}"/ required>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">เพศ</label>
                    <div class="col-sm-11">
                        <select placeholder="เพศ" input type="list" class="form-control"  name="sex_rs" id="sex_rs" required>
                              <option value="ชาย">ชาย</option>
                              <option value="หญิง">หญิง</option>
                        </select>    
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">คณะ</label>
                    <div class="col-sm-11">
                        <select placeholder="คณะ" input type="list" class="form-control"  name="board_rs" id="board_rs" required>
                              <option value="คณะบริหารและการจัดการ">คณะบริหารและการจัดการ</option>
                              <option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
                              <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                        </select>    
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">หลักสูตร</label>
                    <div class="col-sm-11">
                        <select placeholder="สาขาวิชา" input type="list" class="form-control"  name="subject_rs" id="subject_rs" required>
 <option value="หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการ">หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการ</option>
 <option value="หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการตลาด">หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการตลาด</option>
 <option value="หลักสูตรบัญชีบัณฑิต สาขาวิชาการบัญชี">หลักสูตรบัญชีบัณฑิต สาขาวิชาการบัญชี</option>
 <option value="หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาคอมพิวเตอร์ธุรกิจ">หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาคอมพิวเตอร์ธุรกิจ</option>
 <option value="หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการโรงแรมและการท่องเที่ยว">หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการโรงแรมและการท่องเที่ยว</option>
 <option value="หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการนวัตกรรมการค้า">หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการนวัตกรรมการค้า</option>
 <option value="หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์">หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์</option>
 <option value="หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาคอมพิวเตอร์มัลติมีเดีย">หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาคอมพิวเตอร์มัลติมีเดีย</option>
 <option value="หลักสูตรนิเทศศาสตรบัณฑิต สาขาวิชาการโฆษณาและการประชาสัมพันธ์">หลักสูตรนิเทศศาสตรบัณฑิต สาขาวิชาการโฆษณาและการประชาสัมพันธ์</option>
 <option value="หลักสูตรนิติศาสตรบัณฑิต สาขาวิชานิติศาสตร์">หลักสูตรนิติศาสตรบัณฑิต สาขาวิชานิติศาสตร์</option>
 <option value="หลักสูตรรัฐประศาสนศาสตรบัณฑิต สาขาวิชารัฐประศาสนศาสตร์">หลักสูตรรัฐประศาสนศาสตรบัณฑิต สาขาวิชารัฐประศาสนศาสตร์</option>
 <option value="หลักสูตรประกาศนียบัตรบัณฑิตวิชาชีพครู">หลักสูตรประกาศนียบัตรบัณฑิตวิชาชีพครู</option>
 <option value="หลักสูตรศึกษาศาสตรมหาบัณฑิต สาขาวิชาการบริหารการศึกษา">หลักสูตรศึกษาศาสตรมหาบัณฑิต สาขาวิชาการบริหารการศึกษา</option>
 <option value="หลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาการบริหารการพัฒนาองค์การ">หลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาการบริหารการพัฒนาองค์การ</option>
                        </select>    
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">E-mail</label>
                    <div class="col-sm-11">
                        <input type="email" class="form-control" placeholder="Email" name="email_rs" id="email_rs" required>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">เบอร์โทร</label>
                    <div class="col-sm-11">
                        <input type="email" class="form-control form-control-normal" placeholder="เบอร์โทร" name="phone_rs" id="phone_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/  maxlength="10" >
                    </div>
                    </div>

                    <hr> 

                    <div class="col-md-12">                  
                    <div class="form-group" style="text-align: center;">
                    <h3 align="center">
                    <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="submit">บันทึก</button> 
                    <button type="reset" class="btn btn-danger btn-round waves-effect waves-light">ยกเลิก</button>
                    </h3>
                    </div>
                    </div>  

                 </form>
                    </div>
                    </div>
          <!-- Input Alignment card end -->
                  
                        </div>
                        </div>
                        </div>
                        <!-- Row end -->
                        </div>
                        </div>
                        <!-- Bootstrap tab card end -->
                        </div>
                        </div>
                        <!-- Page body end -->
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Main-body end -->
                
                <div id="styleSelector">
                
                </div>
            </div>
        </div>
    </div>
</div>
<script>
   $(document).ready(function () {
   $("#myTable").DataTable();
   });
</script>   
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>     
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>     
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>     
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/vertical-layout.min.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
