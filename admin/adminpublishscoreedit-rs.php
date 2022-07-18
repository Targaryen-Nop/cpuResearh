<?php
session_start();
ob_start();
if (!isset($_SESSION['username_rs'])) {
   header('Location: pages-login.php');
}
$un = $_SESSION['username_rs'];
?>

<?php
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost","root","","research2020" );
    mysqli_set_charset($conn,'utf8');
    if(mysqli_connect_errno())
     { 
    echo "Failed to connect to MySQL:".mysqli_connect_error();
     }
    $sql="SELECT * FROM rs_scorepublish  where id='$id'" ;
    $sql_query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($sql_query);
    mysqli_free_result($sql_query);
    mysqli_close($conn);
?> 

<!DOCTYPE html>
<html lang="en"> 

<head>
    <title>CPU RESEARCH | แก้ไขคะแนนวิจัยที่ตีพิมพ์เผยแพร่</title>
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

          
           <?php $page='adminpublishscore-rs'; include 'menu.php';  ?>


          
<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="adminpublishscoreedits-rs.php" method ="post"enctype="multipart/form-data">                    
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
                                                        <h5>แก้ไขคะแนนวิจัยที่ตีพิมพ์เผยแพร่</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    <form class="form-material">

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ปีการศึกษา</label>
                    <div class="col-sm-10">
                    <input type="hidden" name="id" class="form-control" id="id" value="<?php echo "$row[id]";?>">
                    <input type="text" name="yearsc" class="form-control form-control-success" id="yearsc" placeholder="พ.ศ."onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="4" value="<?php echo "$row[yearsc]";?>" required >
                    </div>
                    </div> 

                    <hr> 

                    <h3 align="center" class="h6 mb-2 text-gray-900"><label><h2>ARTICLE ADMINISTRATION AND MANAGEMENT</h2></label></h3>
                    

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">NATIONAL</label>
                    <div class="col-sm-10">
                   <input type="text" id='m02' class="form-control form-control-primary" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="m02" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[m02]";?>" required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">INTERNATIONAL</label>
                    <div class="col-sm-10">
                    <input type="text" id='m04' class="form-control form-control-primary" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="m04" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[m04]";?>"required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">TCI 2</label>
                    <div class="col-sm-10">
                   <input type="text" id='m06' class="form-control form-control-primary" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="m06" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[m06]";?>" required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">TCI 1</label>
                    <div class="col-sm-10">
                   <input type="text" id='m08' class="form-control form-control-primary" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="m08" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[m08]";?>" required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">SCOPUS</label>
                    <div class="col-sm-10">
                   <input type="text" id='m10' class="form-control form-control-primary" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="m10" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[m10]";?>" required >
                    </div>
                    </div>

                   <hr> 

                    <h3 align="center" class="h6 mb-2 text-gray-900"><label><h2>ARTICLE HUMANITY AND SCIENCE</h2></label></h3>

                      <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">NATIONAL</label>
                    <div class="col-sm-10">
                   <input type="text" id='h02' class="form-control form-control-danger" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="h02" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[h02]";?>" required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">INTERNATIONAL</label>
                    <div class="col-sm-10">
                <input type="text" id='h04' class="form-control form-control-danger" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="h04" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[h04]";?>" required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">TCI 2</label>
                    <div class="col-sm-10">
                   <input type="text" id='h06' class="form-control form-control-danger" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="h06" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[h06]";?>" required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">TCI 1</label>
                    <div class="col-sm-10">
                   <input type="text" id='h08' class="form-control form-control-danger" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="h08" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[h08]";?>" required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">SCOPUS</label>
                    <div class="col-sm-10">
                   <input type="text" id='h10' class="form-control form-control-danger" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="h10" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[h10]";?>" required >
                    </div>
                    </div>

                      <hr> 

                    <h3 align="center" class="h6 mb-2 text-gray-900"><label><h2>ARTICLE SCIENCE AND TECHNOLOGY</h2></label></h3>

                   <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">NATIONAL</label>
                    <div class="col-sm-10">
                   <input type="text" id='s02' class="form-control form-control-warning" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="s02" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[s02]";?>"required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">INTERNATIONAL</label>
                    <div class="col-sm-10">
                  <input type="text" id='s04' class="form-control form-control-warning" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="s04" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[s04]";?>" required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">TCI 2</label>
                    <div class="col-sm-10">
                   <input type="text" id='s06' class="form-control form-control-warning" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="s06" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[s06]";?>" required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">TCI 1</label>
                    <div class="col-sm-10">
                   <input type="text" id='s08' class="form-control form-control-warning" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="s08" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[s08]";?>" required >
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">SCOPUS</label>
                    <div class="col-sm-10">
                   <input type="text" id='s10' class="form-control form-control-warning" placeholder="(จำนวนบทความที่ตีพิมพ์เผยแพร่)" name="s10" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8" value="<?php echo "$row[s10]";?>" required >
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
