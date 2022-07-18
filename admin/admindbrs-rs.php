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

$sql="SELECT*FROM  rs_dbresearch";
$result=mysqli_query($conn,$sql);
//$row=msqli_fetch_array($result,MYSQLI_NUM);
//$strSQL="SELECT*FROM score_exam WHERE idrs LIKE'%".$_SESSION["idrs"]."%";
//$objQuery=mysqli_query($strSQL,$con) or die ("Error Query [".$strSQL."]");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | ฐานข้อมูลงานวิจัย</title>
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

          <?php $page='admindbrs-rs'; include 'menu.php';  ?>
          
<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="admindbrs-rs.php" method ="post"enctype="multipart/form-data">                    
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
                        <h5>ฐานข้อมูลงานวิจัยทั้งหมด</h5>
                    </div>
                         <!-- หัวข้อย้อย-->
                       <ul class="nav nav-tabs  tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active " data-toggle="tab" href="#tab1" role="tab">ฐานข้อมูลงานวิจัย</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">คณะบริหารและการจัดการ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">คณะวิทยาศาสตร์และเทคโนโลยี</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab">คณะมนุษยศาสตร์และสังคมศาสตร์</a>
                        </li>

                        </ul>
                        <!-- task, page, download counter  start -->

                          <!-- Tab 1 -->
                        <div class="tab-content tabs card-block">
                        <div class="tab-pane active" id="tab1" role="tabpanel">
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
                                                              $sql="SELECT*FROM rs_dbresearch ";
                                                              $result=mysqli_query($conn,$sql);
                                                              $num_rows = mysqli_num_rows($result);  
                                                                  echo $num_rows;
                                                              ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-zip f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">ฐานข้อมูลงานวิจัยทั้งหมด</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                        <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะบริหารและการจัดการ'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class=" ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">คณะบริหารและการจัดการ</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-yellow">
                        <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะวิทยาศาสตร์และเทคโนโลยี'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                          echo $num_rows;
                        ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-yellow">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-black m-b-0">คณะวิทยาศาสตร์และเทคโนโลยี</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                        <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์'" ;
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                          echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">คณะมนุษยศาสตร์และสังคมศาสตร์</p>
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

                        <!-- TAB2 -->
                        <div class="tab-pane" id="tab2" role="tabpanel">
                        <p class="m-0">

                        <div class="page-body">
                        <div class="row">
                        <!-- คณะบริหารและการจัดการ -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green"> 
                        <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะบริหารและการจัดการ'" ;
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-zip f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">คณะบริหารและการจัดการ</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                        <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะบริหารและการจัดการ' and subject_rs = 'หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการ'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class=" ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">สาขาวิชาการจัดการ</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                        <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะบริหารและการจัดการ' and subject_rs = 'หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการตลาด'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">สาขาวิชาการตลาด</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                        <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะบริหารและการจัดการ' and subject_rs = 'หลักสูตรบัญชีบัณฑิต สาขาวิชาการบัญชี'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">สาขาวิชาการบัญชี</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                        <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะบริหารและการจัดการ' and subject_rs = 'หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาคอมพิวเตอร์ธุรกิจ'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">สาขาวิชาคอมพิวเตอร์ธุรกิจ</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                        <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะบริหารและการจัดการ' and subject_rs = 'หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการโรงแรมและการท่องเที่ยว'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">สาขาวิชาการจัดการโรงแรมและการท่องเที่ยว</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                        <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะบริหารและการจัดการ' and subject_rs = 'หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการนวัตกรรมการค้า'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">สาขาวิชาการจัดการนวัตกรรมการค้า</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                         <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะบริหารและการจัดการ' and subject_rs = 'หลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาการบริหารการพัฒนาองค์การ'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">สาขาวิชาการบริหารการพัฒนาองค์การ</p>
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


                        <!-- TAB3 -->
                        <div class="tab-pane" id="tab3" role="tabpanel">
                        <p class="m-0">

                        <div class="page-body">
                        <div class="row">
                        <!-- คณะวิทยาศาสตร์และเทคโนโลยี -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green"> 
                        <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะวิทยาศาสตร์และเทคโนโลยี'" ;
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-zip f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">คณะวิทยาศาสตร์และเทคโนโลยี</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-yellow">
                        <?php 
           $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะวิทยาศาสตร์และเทคโนโลยี' and subject_rs = 'หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class=" ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-yellow">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-black m-b-0">สาขาวิชาวิทยาการคอมพิวเตอร์</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-yellow">
                        <?php 
            $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะวิทยาศาสตร์และเทคโนโลยี' and subject_rs = 'หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาคอมพิวเตอร์มัลติมีเดีย'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-yellow">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-black m-b-0">สาขาวิชาคอมพิวเตอร์มัลติมีเดีย</p>
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

                        <!-- TAB4 -->
                        <div class="tab-pane" id="tab4" role="tabpanel">
                        <p class="m-0">

                        <div class="page-body">
                        <div class="row">
                        <!-- คณะมนุษยศาสตร์และสังคมศาสตร์ -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green"> 
                        <?php 
                        $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-zip f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">คณะมนุษยศาสตร์และสังคมศาสตร์</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                        <?php 
           $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรนิเทศศาสตรบัณฑิต สาขาวิชาการโฆษณาและการประชาสัมพันธ์'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class=" ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">สาขาวิชาการโฆษณาและการประชาสัมพันธ์</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                        <?php 
           $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรนิติศาสตรบัณฑิต สาขาวิชานิติศาสตร์'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class=" ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">สาขาวิชานิติศาสตร์</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                        <?php 
           $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรรัฐประศาสนศาสตรบัณฑิต สาขาวิชารัฐประศาสนศาสตร์'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class=" ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">สาขาวิชารัฐประศาสนศาสตร์</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                        <?php 
            $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรประกาศนียบัตรบัณฑิตวิชาชีพครู'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">หลักสูตรประกาศนียบัตรบัณฑิตวิชาชีพครู</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                        <?php 
           $sql="SELECT*FROM rs_dbresearch where board_rs = 'คณะมนุษยศาสตร์และสังคมศาสตร์' and subject_rs = 'หลักสูตรศึกษาศาสตรมหาบัณฑิต สาขาวิชาการบริหารการศึกษา'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class=" ti-file f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">สาขาวิชาการบริหารการศึกษา</p>
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



                      <!-- แถวที่ 2 -->    
                      <div class="row">
                      <div class="col-sm-12">
                      <!-- Material tab card start -->
                      <div class="card">
                      <div class="card-header">
                      <h5>ฐานข้อมูลโครงการวิจัย</h5>
                      <div class="sub-title"></div>
                      </div>

                        <div class="card-body">                          
                        <table id="myTable" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                            <th class="h6 mb-2 ">วิจัยปี</th>
                            <th class="h6 mb-2 ">ชื่อโครงการ</th>
                            <th class="h6 mb-2 ">ผู้วิจัย</th>
                            <th class="h6 mb-2 ">คณะ</th>
                            <th class="h6 mb-2 ">ไฟล์เล่มวิจัย</th>
                            <th class="h6 mb-2 ">จัดการ</th>             
                        </tr>
                        </thead>
                        <tbody>
                         <?php
                  $sql="SELECT*FROM  rs_dbresearch";
                  $result=mysqli_query($conn,$sql);   

                  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                  {?>
                 <p> <tr style="color:#000;">
                  <td><div align="left"><?php echo $row{"year_rs"};?></div></td>
                  <td><div align="left"><?php echo $row{"nameth_rs"};?></div></td>
                  <td><div align="left"><?php echo $row{"researcher_rs"};?></div></td>  
                  <td><div align="left"><?php echo $row{"board_rs"};?></div></td> 
        <td><div align="left"><a href="../filedbrs/<?php echo $row{"filefrom_rs"};?>"><?php echo $row{"filefrom_rs"};?></a></div></td>
           <td lign="center">
           <div class="card-block">
           <div class="dropdown-success dropdown open">
<button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">จัดการข้อมูล</button>
           <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/admindbrsedit-rs.php?id=<?php echo $row["id"];?>">แก้ไข</a>
           <div class="dropdown-divider"></div>
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/deletedbrs-rs.php?id=<?php echo $row["id"];?>">ลบ</a>
           </div>
           </div>
           </div> 
                  <?php
                  }?>
                  </tbody>
                  </table>

         
            

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