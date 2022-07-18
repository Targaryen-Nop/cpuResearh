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
    $sql="SELECT * FROM rs_information  where id='$id'" ;
    $sql_query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($sql_query);
    mysqli_free_result($sql_query);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | อัพเดทการเบิกงบโครงการวิจัย</title>
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

          <?php $page='admindata-rs'; include 'menu.php';  ?>
          
<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="adminmoneyadds-rs.php" method ="post"enctype="multipart/form-data">                    
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
                                                        <h5>รายระเอียดโครงการวิจัย</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    <form class="form-material">

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">วิจัยปี</label>
                    <div class="col-sm-10">
                    <input type="hidden" name="id" class="form-control form-control-success" id="id" readonly value="<?php echo "$row[id]";?>">
                    <input type="text" name="year_rs" class="form-control form-control-success" id="year_rs" readonly value="<?php echo "$row[year_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">รหัสงานวิจัย</label>
                    <div class="col-sm-10">
                    <input type="hidden" name="typers_rs" class="form-control form-control-success" id="typers_rs" readonly value="<?php echo "$row[typers_rs]";?>">
                    <input type="text" name="idinformation_rs" class="form-control form-control-success" id="idinformation_rs" readonly value="<?php echo "$row[idinformation_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อโครงการ</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="nameth_rs" class="form-control form-control-success" id="nameth_rs" placeholder="ชื่อโครงการวิจัย/งานสร้างสรรค์(ภาษาไทย)" readonly ><?php echo "$row[nameth_rs]";?></textarea> 
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อโครงการ</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="nameen_rs" class="form-control form-control-success" id="nameen_rs" placeholder="ชื่อโครงการวิจัย/งานสร้างสรรค์(ภาษาไทย)" readonly><?php echo "$row[nameen_rs]";?></textarea> 
                    </div>
                    </div>                   

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ผู้วิจัย</label>
                    <div class="col-sm-10">
                    <input type="hidden" name="id" class="form-control form-control-success" id="id" readonly value="<?php echo "$row[id]";?>">
                    <input type="text" name="usernameif_rs" class="form-control form-control-success" id="usernameif_rs" readonly value="<?php echo "$row[usernameif_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">คณะ</label>
                    <div class="col-sm-10">
                    <input type="text" name="board_rs" class="form-control form-control-success" id="board_rs" readonly value="<?php echo "$row[board_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">หลักสูตร</label>
                    <div class="col-sm-10">
                    <input type="text" name="subject_rs" class="form-control form-control-success" id="subject_rs" readonly value="<?php echo "$row[subject_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ประเภท</label>
                    <div class="col-sm-10">
                    <input type="text" name="typepj_rs" class="form-control form-control-success" id="typepj_rs" readonly value="<?php echo "$row[typepj_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">วันเริ่มต้น</label>
                    <div class="col-sm-10">
                    <input type="text" name="dtstart_rs" class="form-control form-control-success" id="dtstart_rs" readonly value="<?php echo "$row[dtstart_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">วันสิ้นสุด</label>
                    <div class="col-sm-10">
                    <input type="text" name="dtfinish_rs" class="form-control form-control-success" id="dtfinish_rs" readonly value="<?php echo "$row[dtfinish_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">งบโครงการ</label>
                    <div class="col-sm-10">
                    <input type="text" name="budget_rs" class="form-control form-control-danger" id="budget_rs" readonly value="<?php echo "$row[budget_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">โครงร่าง</label>
                    <div class="col-sm-10">
                    <div class="custom-file" >
                    <div align="left" class="btn btn-out waves-effect waves-light btn-primary btn-square " ><a href="../filers/<?php echo $row{"filefrom_rs"};?>"><?php echo $row{"filefrom_rs"};?></a></div></td> 
                    </div>
                    </div>
                    </div>
                    
                    </div>
                    </div>
                    </div>
                    </div>



                    <!-- Page body start -->
                    <div class="col-md-6">
                    <div class="card">
                    <div class="card-header">
                    <div class="sub-title">
                    <h5>อัพเดทการเบิกงบโครงการวิจัย</h5>
                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                    </div>
                    <div class="card-block">
                    <div class="form-group row">
                    <div class="col">
                   
                    <div class="col-md-12">
                    <div class="form-group">  
                    <h4 align="center" class="h6 mb-2 text-gray-900" ><label><h3>เบิกงบโครงการครั้งที่ 1</h3></label></h4>           
                     </div>               
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label icofont icofont-double-right">เบิกเงินครั้งที่ 1 จำนวน (บาท)</label>
                    <div class="col-sm-9">
                     <input type="text" name="money1_rs" class="form-control form-control-primary" id="money1_rs"  onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="8" value="<?php echo "$row[money1_rs]";?>">
                    </div>
                    </div>

                     <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">วันที่</label>
                    <div class="col-sm-2">
      <select class="btn btn-block btn-outline-primary btn-flat" data-placeholder="เลือกวัน..." type="text" id="d1mn_rs" name="d1mn_rs">
                       <option value="<?php echo "$row[d1mn_rs]";?>"><?php echo "$row[d1mn_rs]";?></option>
                          <option value=""></option>  
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                      </select>
                    </div>
                    
                    <div class="col-sm-3">
                     <select class="btn btn-block btn-outline-primary btn-flat" data-placeholder="เลือกเดือน..." type="text" id="m1mn_rs" name="m1mn_rs"> 
                       <option value="<?php echo "$row[m1mn_rs]";?>"><?php echo "$row[m1mn_rs]";?></option>  
                          <option value=""></option>   
                          <option value="มกราคม">มกราคม</option>
                          <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                          <option value="มีนาคม">มีนาคม</option>
                          <option value="เมษายน">เมษายน</option>
                          <option value="พฤษภาคม">พฤษภาคม</option>
                          <option value="มิถุนายน">มิถุนายน</option>
                          <option value="กรกฎาคม">กรกฎาคม</option>
                          <option value="สิงหาคม">สิงหาคม</option>
                          <option value="กันยายน">กันยายน</option>
                          <option value="ตุลาคม">ตุลาคม</option>
                          <option value="พฤศจิกายน">พฤศจิกายน</option>
                          <option value="ธันวาคม">ธันวาคม</option>
                      </select>
                    </div>

                    <div class="col-sm-3">
                   <input type="text" id="y1mn_rs" class="form-control form-control-primary" placeholder="พ.ศ." name="y1mn_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4" value="<?php echo "$row[y1mn_rs]";?>">
                    </div>
                    </div>

                    <hr> 

                    <div class="col-md-12">
                    <div class="form-group">  
                    <h4 align="center" class="h6 mb-2 text-gray-900" ><label><h3>เบิกงบโครงการครั้งที่ 2</h3></label></h4>           
                     </div>               
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label icofont icofont-double-right">เบิกเงินครั้งที่ 2 จำนวน (บาท)</label>
                    <div class="col-sm-9">
                  <input type="text" name="money2_rs" class="form-control form-control-primary" id="money2_rs"  onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="8" value="<?php echo "$row[money2_rs]";?>">
                    </div>
                    </div>

                     <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">วันที่</label>
                    <div class="col-sm-2">
   <select class="btn btn-block btn-outline-primary btn-flat" data-placeholder="เลือกวัน..." type="text" id="d2mn_rs" name="d2mn_rs">
                       <option value="<?php echo "$row[d2mn_rs]";?>"><?php echo "$row[d2mn_rs]";?></option>  
                          <option value=""></option>  
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                      </select>
                    </div>
                    
                    <div class="col-sm-3">
    <select class="btn btn-block btn-outline-primary btn-flat" data-placeholder="เลือกเดือน..." type="text" id="m2mn_rs" name="m2mn_rs">
                       <option value="<?php echo "$row[m2mn_rs]";?>"><?php echo "$row[m2mn_rs]";?></option>    
                          <option value=""></option>  
                          <option value="มกราคม">มกราคม</option>
                          <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                          <option value="มีนาคม">มีนาคม</option>
                          <option value="เมษายน">เมษายน</option>
                          <option value="พฤษภาคม">พฤษภาคม</option>
                          <option value="มิถุนายน">มิถุนายน</option>
                          <option value="กรกฎาคม">กรกฎาคม</option>
                          <option value="สิงหาคม">สิงหาคม</option>
                          <option value="กันยายน">กันยายน</option>
                          <option value="ตุลาคม">ตุลาคม</option>
                          <option value="พฤศจิกายน">พฤศจิกายน</option>
                          <option value="ธันวาคม">ธันวาคม</option>
                      </select>
                    </div>

                    <div class="col-sm-3">
                    <input type="text" id="y2mn_rs" class="form-control form-control-primary" placeholder="พ.ศ." name="y2mn_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4" value="<?php echo "$row[y2mn_rs]";?>">
                    </div>
                    </div>

                    <hr>

                    <div class="col-md-12">
                    <div class="form-group">  
                    <h4 align="center" class="h6 mb-2 text-gray-900" ><label><h3>เบิกงบโครงการครั้งที่ 3</h3></label></h4>           
                     </div>               
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label icofont icofont-double-right">เบิกเงินครั้งที่ 3 จำนวน (บาท)</label>
                    <div class="col-sm-9">
                    <input type="text" name="money3_rs" class="form-control form-control-primary" id="money3_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="8" value="<?php echo "$row[money3_rs]";?>">
                    </div>
                    </div>

                     <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">วันที่</label>
                    <div class="col-sm-2">
  <select class="btn btn-block btn-outline-primary btn-flat" data-placeholder="เลือกวัน..." type="text" id="d3mn_rs" name="d3mn_rs">
                       <option value="<?php echo "$row[d3mn_rs]";?>"><?php echo "$row[d3mn_rs]";?></option>  
                          <option value=""></option>  
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                      </select>
                    </div>
                    
                    <div class="col-sm-3">
    <select class="btn btn-block btn-outline-primary btn-flat" data-placeholder="เลือกเดือน..." type="text" id="m3mn_rs" name="m3mn_rs"> 
                       <option value="<?php echo "$row[m3mn_rs]";?>"><?php echo "$row[m3mn_rs]";?></option> 
                          <option value=""></option>  
                          <option value="มกราคม">มกราคม</option>
                          <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                          <option value="มีนาคม">มีนาคม</option>
                          <option value="เมษายน">เมษายน</option>
                          <option value="พฤษภาคม">พฤษภาคม</option>
                          <option value="มิถุนายน">มิถุนายน</option>
                          <option value="กรกฎาคม">กรกฎาคม</option>
                          <option value="สิงหาคม">สิงหาคม</option>
                          <option value="กันยายน">กันยายน</option>
                          <option value="ตุลาคม">ตุลาคม</option>
                          <option value="พฤศจิกายน">พฤศจิกายน</option>
                          <option value="ธันวาคม">ธันวาคม</option>
                      </select>
                    </div>

                    <div class="col-sm-3">
                    <input type="text" id="y3mn_rs" class="form-control form-control-primary" placeholder="พ.ศ." name="y3mn_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4" value="<?php echo "$row[y3mn_rs]";?>">>
                    </div>
                    </div>

                    <hr>

                    
                    <div class="card-block">
                    <div class="form-group row">
                    <div class="col">

                    

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
