<?php
session_start();
ob_start();
if (!isset($_SESSION['username_rs'])) {
   header('Location: pages-login.php');
}
$un = $_SESSION['username_rs'];
?> 

<?php
if(isset($_POST["submit"])){
$yearcr_rs = $_POST["yearcr_rs"];
$mgt_re = $_POST["mgt_re"];
$mak_rs = $_POST["mak_rs"];
$acc_rs = $_POST["acc_rs"];
$bco_rs = $_POST["bco_rs"];
$htm_rs = $_POST["htm_rs"];
$cpa_rs = $_POST["cpa_rs"];
$csc_rs = $_POST["csc_rs"];
$cmd_rs = $_POST["cmd_rs"];
$cma_rs = $_POST["cma_rs"];
$law_rs = $_POST["law_rs"];
$pad_rs = $_POST["pad_rs"];
$tp_rs = $_POST["tp_rs"];
$moe_rs = $_POST["moe_rs"];
$dop_rs = $_POST["dop_rs"];



$conn = new mysqli('localhost','root','','research2020');
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
  die("connect fail:".$conn->connect_error);
}



$sql = "insert into rs_budgetcourse values ('null','$yearcr_rs','$mgt_re','$mak_rs','$acc_rs','$bco_rs','$htm_rs','$cpa_rs','$csc_rs','$cmd_rs','$cma_rs','$law_rs','$pad_rs','$tp_rs','$moe_rs','$dop_rs')";
$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='adminbudget-rs.php'</script>";
mysqli_close($conn);
}
?>




<?php
$conn=mysqli_connect("localhost","root","","research2020");
mysqli_set_charset($conn,'utf8');
if(mysqli_connect_errno())
{ 
  echo "Failed to connect to MySQL:".mysqli_connect_error();
}
$sql="SELECT*FROM rs_budgetcourse ";
$result=mysqli_query($conn,$sql);
//$row=msqli_fetch_array($result,MYSQLI_NUM);
//$strSQL="SELECT*FROM score_exam WHERE idrs LIKE'%".$_SESSION["idrs"]."%";
//$objQuery=mysqli_query($strSQL,$con) or die ("Error Query [".$strSQL."]");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | เพิ่มงบประมาณโครงการวิจัยระดับหลักสูตร</title>
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

          
           <?php $page='adminbudget-rs'; include 'menu.php';  ?>


          
<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="adminbudgetcourseadd-rs.php" method ="post"enctype="multipart/form-data">                    
     <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                  
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                      <div class="sub-title">
                                                        <h5>เพิ่มงบประมาณโครงการวิจัยระดับหลักสูตร</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    <form class="form-material">

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ปีการศึกษา</label>
                    <div class="col-sm-10">
                    <input type="text" name="yearcr_rs" class="form-control form-control-success" id="yearcr_rs" placeholder="พ.ศ."onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="4"/required >
                    </div>
                    </div> 

                    <hr> 

                    <h3 align="center" class="h6 mb-2 text-gray-900"><label><h2>คณะบริหารและการจัดการ</h2></label></h3>
                    

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชาการจัดการ</label>
                    <div class="col-sm-10">
                   <input type="text" id='mgt_re' class="form-control form-control-primary" placeholder="(บาท)" name="mgt_re" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชาการตลาด</label>
                    <div class="col-sm-10">
                    <input type="text" id='mak_rs' class="form-control form-control-primary" placeholder="(บาท)" name="mak_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชาการบัญชี</label>
                    <div class="col-sm-10">
                   <input type="text" id='acc_rs' class="form-control form-control-primary" placeholder="(บาท)" name="acc_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชาคอมพิวเตอร์ธุรกิจ</label>
                    <div class="col-sm-10">
                   <input type="text" id='bco_rs' class="form-control form-control-primary" placeholder="(บาท)" name="bco_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชาการจัดการโรงแรม</label>
                    <div class="col-sm-10">
                   <input type="text" id='htm_rs' class="form-control form-control-primary" placeholder="(บาท)" name="htm_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชาการจัดการนวัตกรรมการค้า</label>
                    <div class="col-sm-10">
                   <input type="text" id='cpa_rs' class="form-control form-control-primary" placeholder="(บาท)" name="cpa_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชาการบริหารการพัฒนาองค์การ</label>
                    <div class="col-sm-10">
                  <input type="text" id='dop_rs' class="form-control form-control-primary" placeholder="(บาท)" name="dop_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
                    </div>
                    </div>

                    <hr> 

                    <h3 align="center" class="h6 mb-2 text-gray-900"><label><h2>คณะวิทยาศาสตร์และเทคโนโลยี</h2></label></h3>


                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชาวิทยาการคอมพิวเตอร์</label>
                    <div class="col-sm-10">
                   <input type="text" id='csc_rs' class="form-control form-control-warning" placeholder="(บาท)" name="csc_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชาคอมพิวเตอร์มัลติมีเดีย</label>
                    <div class="col-sm-10">
                  <input type="text" id='cmd_rs' class="form-control form-control-warning" placeholder="(บาท)" name="cmd_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
                    </div>
                    </div>

                      <hr> 

                    <h3 align="center" class="h6 mb-2 text-gray-900"><label><h2>คณะมนุษยศาสตร์และสังคมศาสตร์</h2></label></h3>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชาการโฆษณาและการประชาสัมพันธ์</label>
                    <div class="col-sm-10">
                   <input type="text" id='cma_rs' class="form-control form-control-danger" placeholder="(บาท)" name="cma_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชานิติศาสตร์</label>
                    <div class="col-sm-10">
                    <input type="text" id='law_rs' class="form-control form-control-danger" placeholder="(บาท)" name="law_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชารัฐประศาสนศาสตร์</label>
                    <div class="col-sm-10">
                   <input type="text" id='pad_rs' class="form-control form-control-danger" placeholder="(บาท)" name="pad_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ประกาศนียบัตรบัณฑิตวิชาชีพครู</label>
                    <div class="col-sm-10">
                     <input type="text" id='tp_rs' class="form-control form-control-danger" placeholder="(บาท)" name="tp_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required > 
                    </div>
                    </div> 

                     <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สาขาวิชาการบริหารการศึกษา</label>
                    <div class="col-sm-10">
                    <input type="text" id='moe_rs' class="form-control form-control-danger" placeholder="(บาท)" name="moe_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required >
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
                    </div>
                    </div>
                                                    <!-- Row end -->
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
