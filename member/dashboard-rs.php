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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | หน้าแรก</title>
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


          <?php $page='dashboard-rs'; include 'menu.php';  ?>



          
<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="dashboard-rs.php" method ="post"enctype="multipart/form-data">                    
                       <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                        <div class="page-wrapper">
                        <!-- Page body start -->
                        <div class="page-body">
                        <div class="row">
                        <div class="col-md-6">
                        <div class="card">
                        <div class="card-header">
                        <div class="sub-title">
                        <h5>ข้อมูลโครงการวิจัย</h5>
                        </div>
                        <div class="page-body">
                        <div class="row">
                        <!-- task, page, download counter  start -->
                                            <div class="col-xl-12 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
                                             $sql="SELECT*FROM rs_information where username_rs = '$_SESSION[username_rs]'";
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


                                              <div class="col-xl-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-yellow">
                                             <?php 
        $sql="SELECT*FROM rs_information where username_rs = '$_SESSION[username_rs]' and statusinformation_rs = 'อยู่ระหว่างพิจารณา'";
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
                                                    <div class="card-footer bg-c-yellow">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-black m-b-0">อยู่ระหว่างพิจารณา</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">
                                             <?php 
        $sql="SELECT*FROM rs_information where username_rs = '$_SESSION[username_rs]' and statusinformation_rs = 'อนุมัติโครงการ'";
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
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">อยู่ระหว่างดำเนินงาน</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                             <?php 
        $sql="SELECT*FROM rs_information where username_rs = '$_SESSION[username_rs]' and statusinformation_rs = 'เสร็จสมบูรณ์'";
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

                                            <div class="col-xl-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">
                                             <?php 
        $sql="SELECT*FROM rs_information where username_rs = '$_SESSION[username_rs]' and statusinformation_rs = 'ยกเลิกโครงการ'";
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
                                              </div>
                                              </div>
                                              </div>
                                              </div>

                                            <!-- task, page, download counter  end -->     


                                           

                  <div class="col-md-6">
                 <div class="card">
                 <div class="card-header">
                    <div class="sub-title">
                        <h5>ข้อมูลงานวิจัยที่เผยแพร่</h5>
                    </div>
                        <div class="page-body">
                        <div class="row">
                        <!-- task, page, download counter  start -->
                                          <div class="col-xl-12 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                                              <?php 
        $sql="SELECT*FROM rs_portfolio where username_rs = '$_SESSION[username_rs]'";
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
                                                                <p class="text-white m-b-0">งานวิจัยที่เผยแพร่ทั้งหมด</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>


                                              <div class="col-xl-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                        <?php 
    $sql="SELECT*FROM rs_portfolio where username_rs = '$_SESSION[username_rs]' and score_rs = '0.2'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class=" ti-bar-chart f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">NATIONAL</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-xl-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                        <?php 
                       $sql="SELECT*FROM rs_portfolio where username_rs = '$_SESSION[username_rs]' and score_rs = '0.4'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                          echo $num_rows;
                        ?>
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-bar-chart f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">INTERNATIONAL</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                              <div class="col-xl-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                        <?php 
                        $sql="SELECT*FROM rs_portfolio where username_rs = '$_SESSION[username_rs]' and score_rs = '0.6'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                          echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-bar-chart f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">TCI 2</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                      </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>

                                                 <div class="col-xl-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                        <?php 
                        $sql="SELECT*FROM rs_portfolio where username_rs = '$_SESSION[username_rs]' and score_rs = '0.8'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-bar-chart f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">TCI 1</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-xl-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue">
                        <?php 
                        $sql="SELECT*FROM rs_portfolio where username_rs = '$_SESSION[username_rs]' and score_rs = '1'";
                        $result=mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($result);  
                            echo $num_rows;
                        ?> 
                                                                </h4>
                                                                <h6 class="text-muted m-b-0">โครงการ</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="ti-bar-chart f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">SCOPUS</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                              </div>               
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                            <!-- task, page, download counter  end -->   

                     
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
