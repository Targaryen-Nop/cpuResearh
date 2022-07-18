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

$sql="SELECT*FROM rs_user where username_rs = '$_SESSION[username_rs]'";
$result=mysqli_query($conn,$sql);
//$row=msqli_fetch_array($result,MYSQLI_NUM);
//$strSQL="SELECT*FROM score_exam WHERE idrs LIKE'%".$_SESSION["idrs"]."%";
//$objQuery=mysqli_query($strSQL,$con) or die ("Error Query [".$strSQL."]");
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | ข้อมูลส่วนตัว</title>
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

         <?php $page='profile-rs'; include 'menu.php';  ?>

         
<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="profile-rs.php" method ="post"enctype="multipart/form-data">                    
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
                    <h5>ข้อมูลส่วนตัว</h5>
                    </div>
                  <div class="card-block">
                <form>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">UserID</label>
                    <div class="col-sm-5">
                        <input type="text" name="usernameif_rs" class="form-control form-control-primary" id="usernameif_rs" readonly value="<?php
                        $conn=mysqli_connect("localhost","root","","research2020" );
                        mysqli_set_charset($conn,'utf8');
                        if(mysqli_connect_errno())
                        { 
                          echo "Failed to connect to MySQL:".mysqli_connect_error();
                        }
                        $sql="SELECT * FROM rs_user where username_rs = '$un'";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                          echo $row{"username_rs"};
                                
                        } 
                          mysqli_free_result($result);
                          mysqli_close($conn);
                        ?>">
                    </div>
                    </div>                    

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">ชื่อ-นามสกุล</label>
                    <div class="col-sm-5">
                          <input type="text" name="usernameif_rs" class="form-control form-control-primary" id="usernameif_rs" readonly value="<?php
                  $conn=mysqli_connect("localhost","root","","research2020" );
                  mysqli_set_charset($conn,'utf8');
                  if(mysqli_connect_errno())
                  { 
                    echo "Failed to connect to MySQL:".mysqli_connect_error();
                  }
                  $sql="SELECT * FROM rs_user where username_rs = '$un'";
                  $result=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                  {
                    echo $row{"title_rs"}." ".$row{"firstname_rs"}." ".$row{"lastname_rs"};
                          
                  } 
                    mysqli_free_result($result);
                    mysqli_close($conn);
                  ?>">
                    </div>
                    </div>
                  

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">เพศ</label>
                    <div class="col-sm-5">
                       <input type="text" name="subject_rs" class="form-control form-control-primary" id="subject_rs" readonly value="<?php
                        $conn=mysqli_connect("localhost","root","","research2020" );
                        mysqli_set_charset($conn,'utf8');
                        if(mysqli_connect_errno())
                        { 
                          echo "Failed to connect to MySQL:".mysqli_connect_error();
                        }
                        $sql="SELECT * FROM rs_user where username_rs = '$un'";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                          echo $row{"sex_rs"};
                                
                        } 
                          mysqli_free_result($result);
                          mysqli_close($conn);
                        ?>">   
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">คณะ</label>
                    <div class="col-sm-5">
                        <input type="text" name="board_rs" class="form-control form-control-primary" id="board_rs" readonly value="<?php
                        $conn=mysqli_connect("localhost","root","","research2020" );
                        mysqli_set_charset($conn,'utf8');
                        if(mysqli_connect_errno())
                        { 
                          echo "Failed to connect to MySQL:".mysqli_connect_error();
                        }
                        $sql="SELECT * FROM rs_user where username_rs = '$un'";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                          echo $row{"board_rs"};
                                
                        } 
                          mysqli_free_result($result);
                          mysqli_close($conn);
                        ?>">    
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">หลักสูตร</label>
                    <div class="col-sm-5">
                        <input type="text" name="subject_rs" class="form-control form-control-primary" id="subject_rs" readonly value="<?php
                        $conn=mysqli_connect("localhost","root","","research2020" );
                        mysqli_set_charset($conn,'utf8');
                        if(mysqli_connect_errno())
                        { 
                          echo "Failed to connect to MySQL:".mysqli_connect_error();
                        }
                        $sql="SELECT * FROM rs_user where username_rs = '$un'";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                          echo $row{"subject_rs"};
                                
                        } 
                          mysqli_free_result($result);
                          mysqli_close($conn);
                        ?>">    
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">E-mail</label>
                    <div class="col-sm-5">
                         <input type="text" name="subject_rs" class="form-control form-control-primary" id="subject_rs" readonly value="<?php
                          $conn=mysqli_connect("localhost","root","","research2020" );
                          mysqli_set_charset($conn,'utf8');
                          if(mysqli_connect_errno())
                          { 
                            echo "Failed to connect to MySQL:".mysqli_connect_error();
                          }
                          $sql="SELECT * FROM rs_user where username_rs = '$un'";
                          $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                          {
                            echo $row{"email_rs"};
                                  
                          } 
                            mysqli_free_result($result);
                            mysqli_close($conn);
                          ?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label icofont icofont-double-right">เบอร์โทร</label>
                    <div class="col-sm-5">
                         <input type="text" name="subject_rs" class="form-control form-control-primary" id="subject_rs" readonly value="<?php
                        $conn=mysqli_connect("localhost","root","","research2020" );
                        mysqli_set_charset($conn,'utf8');
                        if(mysqli_connect_errno())
                        { 
                          echo "Failed to connect to MySQL:".mysqli_connect_error();
                        }
                        $sql="SELECT * FROM rs_user where username_rs = '$un'";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                          echo $row{"phone_rs"};
                                
                        } 
                          mysqli_free_result($result);
                          mysqli_close($conn);
                        ?>">
                    </div>
                    </div>

                    <hr>



                      
                    <div class="form-group row">
                    <label class="col-sm-1 col-form-label icofont  "> </label>
                    <div class="col-sm-5">  
                  <?php
                  $conn=mysqli_connect("localhost","root","","research2020" );
                  mysqli_set_charset($conn,'utf8');
                  if(mysqli_connect_errno())
                  { 
                    echo "Failed to connect to MySQL:".mysqli_connect_error();
                  }
                  $sql="SELECT * FROM rs_user where username_rs = '$un'";
                  $result=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                  {                    
                  ?>
 <a href="profileedit-rs.php?id=<?php echo $row["id"];?>" class=" btn btn-out waves-effect waves-light btn-primary btn-square"> แก้ไขข้อมูลส่วนตัว</a>               <?php
                    }
                  ?>
                 </div>
                 </div>
                 <?php
                    mysqli_free_result($result);
                    mysqli_close($conn);
                 ?>

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
