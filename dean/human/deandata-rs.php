<?php
session_start();
ob_start();
if (!isset($_SESSION['username_rs'])) {
   header('Location: pages-login.php');
}
$un = $_SESSION['username_rs'];
?>
<?php
 
$conn=mysqli_connect("localhost","root","","research2020");
mysqli_set_charset($conn,'utf8');
if(mysqli_connect_errno())
{ 
  echo "Failed to connect to MySQL:".mysqli_connect_error();
}

$sql="SELECT*FROM rs_information ";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | ข้อมูลโครงการวิจัย</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   
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
                          <a href="../../logout.php">
                          <i class="ti-layout-sidebar-left"></i> ออกจากระบบ
                      </a>
                      </li>
                      </ul>
                      </li>
                      </ul>
                  </div>
              </div>
          </nav>

          
           <?php $page='deandata-rs'; include 'menu.php';  ?>


<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="deandata-rs.php" method ="post"enctype="multipart/form-data">                    
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
                        <h5>สถานะโครงการวิจัยทั้งหมด</h5>
                    </div>
                         <!-- หัวข้อย้อย-->
                       <ul class="nav nav-tabs  tabs" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active " data-toggle="tab" href="#t1" role="tab">คณะมนุษยศาสตร์และสังคมศาสตร์</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#t2" role="tab">การโฆษณาและการประชาสัมพันธ์</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#t3" role="tab">นิติศาสตร์</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#t4" role="tab">รัฐประศาสนศาสตร์</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#t5" role="tab">ประกาศนียบัตรบัณฑิตวิชาชีพครู</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#t6" role="tab">การบริหารการศึกษา</a>
                        </li>

                        </ul>
                        <!-- task, page, download counter  start -->

                         <!-- T1 -->
                        <div class="tab-content tabs card-block">
                        <div class="tab-pane active" id="t1" role="tabpanel">
                        <p class="m-0">

                        <div class="page-body">
                        <div class="row">
                        <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
                                  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์'" ;
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-agenda f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">โครงการวิจัยทั้งหมด</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and statusinformation_rs = 'อยู่ระหว่างพิจารณา'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-comment-alt f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">อยู่ระหว่างพิจารณา</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-yellow">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and statusinformation_rs = 'อนุมัติโครงการ'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-pencil-alt f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-yellow">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-black m-b-0">อยู่ระหว่างดำเนินงาน</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
    $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and statusinformation_rs = 'เสร็จสมบูรณ์'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-check-box f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">เสร็จสมบูรณ์</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and statusinformation_rs = 'ยกเลิกโครงการ'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-trash f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">ยกเลิกโครงการ</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              </div>                                            
                                            <!-- task, page, download counter  end -->  
                                              </p>
                                              </div>
                                              </div> 

                        <!-- T2 -->
                        <div class="tab-pane" id="t2" role="tabpanel">
                        <p class="m-0">      
                        <div class="page-body">
                        <div class="row">
                        <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
$sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรนิเทศศาสตรบัณฑิต สาขาวิชาการโฆษณาและการประชาสัมพันธ์'" ;
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-agenda f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">โครงการวิจัยทั้งหมด</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรนิเทศศาสตรบัณฑิต สาขาวิชาการโฆษณาและการประชาสัมพันธ์'and statusinformation_rs = 'อยู่ระหว่างพิจารณา'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-comment-alt f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">อยู่ระหว่างพิจารณา</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-yellow">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรนิเทศศาสตรบัณฑิต สาขาวิชาการโฆษณาและการประชาสัมพันธ์' and statusinformation_rs = 'อนุมัติโครงการ'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-pencil-alt f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-yellow">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-black m-b-0">อยู่ระหว่างดำเนินงาน</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
    $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรนิเทศศาสตรบัณฑิต สาขาวิชาการโฆษณาและการประชาสัมพันธ์' and statusinformation_rs = 'เสร็จสมบูรณ์'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-check-box f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">เสร็จสมบูรณ์</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรนิเทศศาสตรบัณฑิต สาขาวิชาการโฆษณาและการประชาสัมพันธ์' and statusinformation_rs = 'ยกเลิกโครงการ'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-trash f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">ยกเลิกโครงการ</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              </div>                                            
                                            <!-- task, page, download counter  end -->  
                                              </p>
                                              </div>
                                              </div>  

                        <!-- T3 -->
                        <div class="tab-pane" id="t3" role="tabpanel">
                        <p class="m-0">      
                        <div class="page-body">
                        <div class="row">
                        <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
 $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรนิติศาสตรบัณฑิต สาขาวิชานิติศาสตร์'" ;
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-agenda f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">โครงการวิจัยทั้งหมด</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรนิติศาสตรบัณฑิต สาขาวิชานิติศาสตร์'and statusinformation_rs = 'อยู่ระหว่างพิจารณา'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-comment-alt f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">อยู่ระหว่างพิจารณา</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-yellow">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรนิติศาสตรบัณฑิต สาขาวิชานิติศาสตร์' and statusinformation_rs = 'อนุมัติโครงการ'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-pencil-alt f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-yellow">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-black m-b-0">อยู่ระหว่างดำเนินงาน</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
    $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรนิติศาสตรบัณฑิต สาขาวิชานิติศาสตร์' and statusinformation_rs = 'เสร็จสมบูรณ์'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-check-box f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">เสร็จสมบูรณ์</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรนิติศาสตรบัณฑิต สาขาวิชานิติศาสตร์' and statusinformation_rs = 'ยกเลิกโครงการ'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-trash f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">ยกเลิกโครงการ</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              </div>                                            
                                            <!-- task, page, download counter  end -->  
                                              </p>
                                              </div>
                                              </div>

                         <!-- T4 -->
                        <div class="tab-pane" id="t4" role="tabpanel">
                        <p class="m-0">      
                        <div class="page-body">
                        <div class="row">
                        <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรรัฐประศาสนศาสตรบัณฑิต สาขาวิชารัฐประศาสนศาสตร์'" ;
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-agenda f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">โครงการวิจัยทั้งหมด</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรรัฐประศาสนศาสตรบัณฑิต สาขาวิชารัฐประศาสนศาสตร์' and statusinformation_rs = 'อยู่ระหว่างพิจารณา'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-comment-alt f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">อยู่ระหว่างพิจารณา</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-yellow">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรรัฐประศาสนศาสตรบัณฑิต สาขาวิชารัฐประศาสนศาสตร์' and statusinformation_rs = 'อนุมัติโครงการ'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-pencil-alt f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-yellow">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-black m-b-0">อยู่ระหว่างดำเนินงาน</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
    $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรรัฐประศาสนศาสตรบัณฑิต สาขาวิชารัฐประศาสนศาสตร์' and statusinformation_rs = 'เสร็จสมบูรณ์'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-check-box f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">เสร็จสมบูรณ์</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรรัฐประศาสนศาสตรบัณฑิต สาขาวิชารัฐประศาสนศาสตร์' and statusinformation_rs = 'ยกเลิกโครงการ'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-trash f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">ยกเลิกโครงการ</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              </div>                                            
                                            <!-- task, page, download counter  end -->  
                                              </p>
                                              </div>
                                              </div>


                        <!-- T5 -->
                        <div class="tab-pane" id="t5" role="tabpanel">
                        <p class="m-0">      
                        <div class="page-body">
                        <div class="row">
                        <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
   $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรประกาศนียบัตรบัณฑิตวิชาชีพครู'" ;
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-agenda f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">โครงการวิจัยทั้งหมด</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรประกาศนียบัตรบัณฑิตวิชาชีพครู'and statusinformation_rs = 'อยู่ระหว่างพิจารณา'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-comment-alt f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">อยู่ระหว่างพิจารณา</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-yellow">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรประกาศนียบัตรบัณฑิตวิชาชีพครู' and statusinformation_rs = 'อนุมัติโครงการ'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-pencil-alt f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-yellow">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-black m-b-0">อยู่ระหว่างดำเนินงาน</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
    $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรประกาศนียบัตรบัณฑิตวิชาชีพครู' and statusinformation_rs = 'เสร็จสมบูรณ์'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-check-box f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">เสร็จสมบูรณ์</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรประกาศนียบัตรบัณฑิตวิชาชีพครู'and statusinformation_rs = 'ยกเลิกโครงการ'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-trash f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">ยกเลิกโครงการ</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              </div>                                            
                                            <!-- task, page, download counter  end -->  
                                              </p>
                                              </div>
                                              </div>

                        <!-- T6 -->
                        <div class="tab-pane" id="t6" role="tabpanel">
                        <p class="m-0">      
                        <div class="page-body">
                        <div class="row">
                        <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
                                  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาการบริหารการพัฒนาองค์การ'" ;
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-agenda f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">โครงการวิจัยทั้งหมด</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาการบริหารการพัฒนาองค์การ' and statusinformation_rs = 'อยู่ระหว่างพิจารณา'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-comment-alt f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">อยู่ระหว่างพิจารณา</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-yellow">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาการบริหารการพัฒนาองค์การ' and statusinformation_rs = 'อนุมัติโครงการ'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-pencil-alt f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-yellow">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-black m-b-0">อยู่ระหว่างดำเนินงาน</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
    $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาการบริหารการพัฒนาองค์การ'and statusinformation_rs = 'เสร็จสมบูรณ์'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-check-box f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">เสร็จสมบูรณ์</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-2 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                                             <?php 
  $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาการบริหารการพัฒนาองค์การ' and statusinformation_rs = 'ยกเลิกโครงการ'";
                                             $result=mysqli_query($conn,$sql);
                                             $num_rows = mysqli_num_rows($result);  
                                                echo $num_rows;
                                             ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-trash f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">ยกเลิกโครงการ</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              </div>                                            
                                            <!-- task, page, download counter  end -->  
                                              </p>
                                              </div>
                                              </div>                                             






                                        
                                        
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>

                                              
                                              

                 
                  
                   
                    <!-- Page body start -->
                   
                    <!-- Bootstrap tab card start -->
                    <div class="card">
                    <div class="card-header">                        

                       <!-- Row start -->
                    <div class="row">
                    <div class="col-lg-12 col-xl-12">
                    <div class="sub-title">
                        <h5>โครงการวิจัย</h5>
                    </div>
                  
                         <!-- หัวข้อย้อย-->
                       <ul class="nav nav-tabs  tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active " data-toggle="tab" href="#tab5" role="tab">โครงการวิจัยทั้งหมด</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab6" role="tab">ความคืบหน้าโครงการวิจัย</a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab8" role="tab">การเบิกงบโครงการวิจัย</a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab7" role="tab">รายงานความคืบหน้าโครงการวิจัย</a>
                        </li>

                        </ul>

                         <!-- Tab5 -->
                        <div class="tab-content tabs card-block">
                        <div class="tab-pane active" id="tab5" role="tabpanel">
                        <p class="m-0">
                        <table id="myTable" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                            <th class="h6 mb-2 ">วิจัยปี</th>
                            <th class="h6 mb-2 ">เลขที่โครงการ</th>
                            <th class="h6 mb-2 ">ชื่อโครงการ</th>
                            <th class="h6 mb-2 ">โครงร่าง</th>                                             
                            <th class="h6 mb-2 ">สัญญาวิจัย</th>
                            <th class="h6 mb-2 ">สถานะ</th>
                            <th class="h6 mb-2 ">จัดการข้อมูล</th>            
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                             $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์'" ;
                             $result=mysqli_query($conn,$sql);
                             while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {?>
                <tr style="color:#000;">
            <td><div align="left"><?php echo $row{"year_rs"};?></div></td> 
            <td><label><a href="#" class="hover" id="<?php echo $row["id"]; ?>"><?php echo $row["idinformation_rs"];?></a></label></td> 
            <td><label><a href="#" class="hover" id="<?php echo $row["id"]; ?>"><?php echo $row["nameth_rs"];?></a></label></td> 
            <td><div align="left"><a href="../../filers/<?php echo $row{"filefrom_rs"};?>"><?php echo $row{"filefrom_rs"};?></a></div></td>
            <td><div align="left"><a href="../../filect/<?php echo $row{"filect_rs"};?>"><?php echo $row{"filect_rs"};?></a></div></td>
            <td><div align="left"><?php echo $row{"statusinformation_rs"};?></div></td>
            <td lign="center">
            <div class="card-block">
              <div class="dropdown-success dropdown open">
                    <button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">เลือก</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/dean/human/deandatashow-rs.php?id=<?php echo $row["id"];?>">รายละเอียดโครงร่างงานวิจัย</a>

                    <div class="dropdown-divider"></div>
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/dean/human/deandatastatus-rs.php?id=<?php echo $row["id"];?>">อัพเดทสถานะโครงการวิจัย</a>
                </div>
                </div>
                </div>            
           <?php        
           }?>
                        </tbody>
                        </table>
                        </p>
                        </div>
                        <!-- endTab 5 -->     

                        <!-- Tab 6 -->
            <div class="tab-pane" id="tab6" role="tabpanel">
            <p class="m-0">
            <table id="myTable2" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                            <th class="h6 mb-2 ">วิจัยปี</th>
                            <th class="h6 mb-2 ">เลขที่โครงการ</th>
                            <th class="h6 mb-2 ">บทที่ 1</th>  
                            <th class="h6 mb-2 ">บทที่ 2</th>
                            <th class="h6 mb-2 ">บทที่ 3</th>
                            <th class="h6 mb-2 ">บทที่ 4</th>
                            <th class="h6 mb-2 ">บทที่ 5</th>                                             
                            <th class="h6 mb-2 ">สถานะ</th>
                                                                    
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                             $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์'" ;
                             $result=mysqli_query($conn,$sql);
                             while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {?>
                <tr style="color:#000;">
           <td><label><a href="#" class="hover1" id="<?php echo $row["id"]; ?>"><?php echo $row{"year_rs"};?></a></label></td>
           <td><label><a href="#" class="hover1" id="<?php echo $row["id"]; ?>"><?php echo $row["idinformation_rs"];?></a></label></td>
           <td><div align="left"><?php echo $row{"term1_rs"};?></div></td> 
           <td><div align="left"><?php echo $row{"term2_rs"};?></div></td> 
           <td><div align="left"><?php echo $row{"term3_rs"};?></div></td> 
           <td><div align="left"><?php echo $row{"term4_rs"};?></div></td> 
           <td><div align="left"><?php echo $row{"term5_rs"};?></div></td> 
           <td><div align="left"><?php echo $row{"statusinformation_rs"};?></div></td> 
          
                    <?php
                    }?>
                        </tbody>
                        </table>
                        </p>
                        </div>

           <!-- endTab 6 -->


                        <!-- Tab 7 -->
            <div class="tab-pane" id="tab7" role="tabpanel">
            <p class="m-0">
            <table id="myTable3" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                            <th class="h6 mb-2 ">วิจัยปี</th>
                            <th class="h6 mb-2 ">เลขที่โครงการ</th>
                            <th class="h6 mb-2 ">ชื่อโครงการ</th>
                            <th class="h6 mb-2 ">ผู้วิจัย</th>
                            <th class="h6 mb-2 ">รายงานประจำเดือน</th>
                            <th class="h6 mb-2 ">สถานะ</th>
                            <th class="h6 mb-2 ">ดูรายงาน</th> 
                                        
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                             $sql="SELECT*FROM rs_tracking where boardtk_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์'" ;
                             $result=mysqli_query($conn,$sql);
                             while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {?>
                <tr style="color:#000;">
           <td><div align="left"><?php echo $row{"yeartk_rs"};?></div></td>
           <td><div align="left"><?php echo $row["idtracking_rs"];?></div></td> 
           <td><div align="left"><?php echo $row["nametk_rs"];?></div></td>
           <td><div align="left"><?php echo $row{"usernametk_rs"};?></div></td> 
           <td><div align="left"><?php echo $row{"timetk_rs"};?></div></td> 
           <td><div align="left"><?php echo $row{"statusproject_rs"};?></div></td> 
           <td lign="center"><h3 align="center">
 <a href="/rs-cpu/dean/human/deandatareporttracking-rs.php?id=<?php echo $row["id"];?>" class="btn btn-success btn-round waves-effect waves-light">ดูรายงาน</a></h3></td>
                    <?php
                    }?>
                        </tbody>
                        </table>
                        </p>
                        </div>
           <!-- endTab 7 -->


           <!-- Tab8 -->
                        <div class="tab-pane " id="tab8" role="tabpanel">
                        <p class="m-0">
                        <table id="myTable4" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                            <th class="h6 mb-2 ">วิจัยปี</th>
                            <th class="h6 mb-2 ">เลขที่โครงการ</th>
                            <th class="h6 mb-2 ">ชื่อโครงการ</th>
                            <th class="h6 mb-2 ">งบโครงการวิจัย</th>
                            <th class="h6 mb-2 ">เบิกครั้งที่ 1</th>
                            <th class="h6 mb-2 ">เบิกครั้งที่ 2</th>                      
                            <th class="h6 mb-2 ">เบิกครั้งที่ 3</th> 
                            <th class="h6 mb-2 ">คงเหลือ</th> 
                                      
                        </tr>
                        </thead>
                        <tbody>
                       <?php
                             $sql="SELECT*FROM rs_information where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์'" ;;
                             $result=mysqli_query($conn,$sql);
                             while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                  {
                    $budget_rs = (int)$row{"budget_rs"};
                    $money1_rs = (int)$row{"money1_rs"};
                    $money2_rs = (int)$row{"money2_rs"};
                    $money3_rs = (int)$row{"money3_rs"};

                    $total = $budget_rs - $money1_rs - $money2_rs - $money3_rs;

                    $point = 123456.02;
                  ?>
                 <p> <tr style="color:#000;">
<td><label><a href="#" class="hover3" id="<?php echo $row["id"]; ?>"><?php echo $row["year_rs"];?></a></label></td> 
<td><label><a href="#" class="hover3" id="<?php echo $row["id"]; ?>"><?php echo $row["idinformation_rs"];?></a></label></td> 
<td><label><a href="#" class="hover3" id="<?php echo $row["id"]; ?>"><?php echo $row["nameth_rs"];?></a></label></td> 
                  <td><div align="left"><?php echo number_format($budget_rs);?></div></td>
                  <td><div align="left"><?php echo number_format($money1_rs);?></div></td>
                  <td><div align="left"><?php echo number_format($money2_rs);?></div></td>
                  <td><div align="left"><?php echo number_format($money3_rs);?></div></td> 
                  <td><div align="left"><?php echo number_format($total);?></div></td>      
         
                  <?php
                  }?>
                  </tbody>
                  </table>
                        </p>
                        </div>
                        </div> 
                        <!-- endTab 8 -->

                        





                       
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
<script>
   $(document).ready(function () {
   $("#myTable2").DataTable();
   });
</script> 
<script>
   $(document).ready(function () {
   $("#myTable3").DataTable();
   });
</script>
<script>
   $(document).ready(function () {
   $("#myTable4").DataTable();
   });
</script>  

<script>
 $(document).ready(function(){

  $('.hover').tooltip({
   title: fetchData,
   html: true,
   placement: 'right'
  });

  function fetchData()
  {
   var fetch_data = '';
   var element = $(this);
   var id = element.attr("id");
   $.ajax({
    url:"infortooltip.php",
    method:"POST",
    async: false,
    data:{id:id},
    success:function(data)
    {
     fetch_data = data;
    }
   });   
   return fetch_data;
  }
 });
</script>

<script>
 $(document).ready(function(){

  $('.hover1').tooltip({
   title: fetchData,
   html: true,
   placement: 'right'
  });

  function fetchData()
  {
   var fetch_data = '';
   var element = $(this);
   var id = element.attr("id");
   $.ajax({
    url:"infortooltip1.php",
    method:"POST",
    async: false,
    data:{id:id},
    success:function(data)
    {
     fetch_data = data;
    }
   });   
   return fetch_data;
  }
 });
</script>

<script>
 $(document).ready(function(){

  $('.hover2').tooltip({
   title: fetchData,
   html: true,
   placement: 'right'
  });

  function fetchData()
  {
   var fetch_data = '';
   var element = $(this);
   var id = element.attr("id");
   $.ajax({
    url:"tktooltip.php",
    method:"POST",
    async: false,
    data:{id:id},
    success:function(data)
    {
     fetch_data = data;
    }
   });   
   return fetch_data;
  }
 });
</script>
<script>
 $(document).ready(function(){

  $('.hover3').tooltip({
   title: fetchData,
   html: true,
   placement: 'right'
  });

  function fetchData()
  {
   var fetch_data = '';
   var element = $(this);
   var id = element.attr("id");
   $.ajax({
    url:"mntooltip.php",
    method:"POST",
    async: false,
    data:{id:id},
    success:function(data)
    {
     fetch_data = data;
    }
   });   
   return fetch_data;
  }
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
