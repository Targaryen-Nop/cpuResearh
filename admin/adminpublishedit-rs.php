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
    $sql="SELECT * FROM rs_portfolio where id='$id'";
    $sql_query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($sql_query);
    mysqli_free_result($sql_query);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | แก้ไขข้อมูลงานวิจัยที่เผยแพร่</title>
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
          
          <?php $page='adminpublish-rs'; include 'menu.php';  ?>

<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="adminpublishedits-rs.php" method ="post"enctype="multipart/form-data">                    
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
                    <h5>แก้ไขฐานข้อมูลงานวิจัยที่เผยแพร่</h5>
                    </div>
                  <div class="card-block">
                <form>

                  <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">รหัสงานวิจัยที่เผยแพร่</label>
                    <div class="col-sm-2">
                <input type="hidden" name="id" class="form-control" id="id"  value="<?php echo "$row[id]";?>">
                 <input type="text" name="idportfolio_rs" class="form-control form-control-primary" id="idportfolio_rs"  value="<?php echo "$row[idportfolio_rs]";?>">
                    </div>
                    </div> 

                  <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ผลงานวิจัยปี</label>
                    <div class="col-sm-2">
                <input type="text" name="yearpf_rs" id="yearpf_rs" class="form-control form-control-primary" placeholder="ผลงานวิจัยปี" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4"  value="<?php echo "$row[yearpf_rs]";?>">
                    </div>
                    </div>                    

                    <div class="form-group row">   
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ประเภทงานวิจัย</label>
                    <div class="col-sm-4">
                        <select class="btn btn-block btn-outline-success btn-flat" type="text" name="typers_rs" id="typers_rs">
                        <option value="<?php echo "$row[typers_rs]";?>"><?php echo "$row[typers_rs]";?></option>
                          <option value="กาวิจัยพื้นฐาน">การวิจัยพื้นฐาน</option>
                          <option value="การวิจัยประยุกต์">การวิจัยประยุกต์</option>
                          <option value="การพัฒนาทดลอง">การพัฒนาทดลอง</option>
                     </select>  
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่องานวิจัย (ภาษาไทย)</label>
                    <div class="col-sm-10">
                 <input type="text" name="nameth_rs" class="form-control form-control-primary" id="nameth_rs" placeholder="ชื่องานวิจัย (ภาษาไทย)"value="<?php echo "$row[nameth_rs]";?>">
                    </div>
                    </div> 

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่องานวิจัย (ภาษาอังกฤษ)</label>
                    <div class="col-sm-10">
                 <input type="text" name="nameen_rs" class="form-control form-control-primary" id="nameen_rs" placeholder="ชื่องานวิจัย (ภาษาอังกฤษ)" value="<?php echo "$row[nameen_rs]";?>">
                    </div>
                    </div> 

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อนักวิจัย</label>
                    <div class="col-sm-4">
           <input type="text" name="researcher_rs" class="form-control form-control-primary" id="researcher_rs"  value="<?php echo "$row[researcher_rs]";?>">
                    </div>
                    </div> 

                     <div class="form-group row">   
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">คณะ</label>
                    <div class="col-sm-4">
                        <select placeholder="คณะ"   class="btn btn-block btn-outline-success btn-flat"  name="board_rs" id="board_rs" >
                              <option value="<?php echo "$row[board_rs]";?>"><?php echo "$row[board_rs]";?></option>
                              <option value="คณะบริหารและการจัดการ">คณะบริหารและการจัดการ</option>
                              <option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
                              <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                         </select>  
                    </div>
                    </div>

                     <div class="form-group row">   
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">หลักสูตร</label>
                    <div class="col-sm-4">
                <select placeholder="หลักสูตร"   class="btn btn-block btn-outline-success btn-flat"  name="subject_rs" id="subject_rs" >
 <option value="<?php echo "$row[subject_rs]";?>"><?php echo "$row[subject_rs]";?></option>
 <option value="หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการ">หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการ</option>
 <option value="หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการตลาด">หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการตลาด</option>
 <option value="หลักสูตรบัญชีบัณฑิต สาขาวิชาการบัญชี">หลักสูตรบัญชีบัณฑิต สาขาวิชาการบัญชี</option>
 <option value="หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาคอมพิวเตอร์ธุรกิจ">หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาคอมพิวเตอร์ธุรกิจ</option>
 <option value="หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการโรงแรมและการท่องเที่ยว">หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการโรงแรมและการท่องเที่ยว</option>
 <option value="หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการนวัตกรรมการค้า">หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาการจัดการนวัตกรรมการค้า</option>
 <option value="หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์">หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์</option>
 <option value="หลักสูตรวิทยาศาสตรบัณฑิตสาขาวิชาคอมพิวเตอร์มัลติมีเดีย">หลักสูตรวิทยาศาสตรบัณฑิตสาขาวิชาคอมพิวเตอร์มัลติมีเดีย</option>
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
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">นักวิจัยร่วม (คนที่1)</label>
                    <div class="col-sm-4">
                 <input type="text" name="researcher1_rs" class="form-control form-control-primary" id="researcher1_rs"  placeholder="นักวิจัยร่วม (คนที่1)"value="<?php echo "$row[researcher1_rs]";?>">
                    </div>
                    </div> 

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">นักวิจัยร่วม (คนที่2)</label>
                    <div class="col-sm-4">
                 <input type="text" name="researcher2_rs" class="form-control form-control-primary" id="researcher2_rs"  placeholder="นักวิจัยร่วม (คนที่2)" value="<?php echo "$row[researcher2_rs]";?>">
                    </div>
                    </div> 

                    <div class="form-group row">   
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ประเภทการนำเสนอ</label>
                    <div class="col-sm-4">
<select  class="btn btn-block btn-outline-success btn-flat" onChange="chksatatus(this.value);" type="text" id="sort_rs" name="sort_rs">
                             <option value="<?php echo "$row[sort_rs]";?>"><?php echo "$row[sort_rs]";?></option>
                             <option value="วารสารวิชาการระดับชาติ"selected>วารสารวิชาการระดับชาติ</option>
                             <option value="วารสารวิชาการระดับนานาชาติ">วารสารวิชาการระดับนานาชาติ</option>
                             <option value="งานประชุมวิชาการระดับชาติ">งานประชุมวิชาการระดับชาติ</option>
                             <option value="งานประชุมวิชาการระดับนานาชาติ">งานประชุมวิชาการระดับนานาชาติ</option>
                      </select>  
                    </div>
                    </div>

                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อวารสารที่ตีพิมพ์</label>
                    <div class="col-sm-10">
                 <input type="text" name="namejournal_rs" class="form-control form-control-primary"   value="<?php echo "$row[namejournal_rs]";?>">
                    </div>
                    </div> 

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ปีที่ตีพิมพ์ในวารสาร</label>
                    <div class="col-sm-2">
                  <input type="text" name="yearjournal_rs" class="form-control form-control-primary"  onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/maxlength="4" value="<?php echo "$row[yearjournal_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">ฉบับที่ตีพิมพ์ในวารสาร</label>
                    <div class="col-sm-2">
                 <input type="text" name="issuejournal_rs" class="form-control form-control-primary"  value="<?php echo "$row[issuejournal_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">   
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">เดือนที่ตีพิมพ์ในวารสาร</label>
                    <div class="col-sm-2">
  <select class="btn btn-block btn-outline-success btn-flat" data-placeholder="เลือกเดือน..." type="text" name="monthjournal_rs" id="monthjournal_rs">    
                      <option value="<?php echo "$row[monthjournal_rs]";?>"><?php echo "$row[monthjournal_rs]";?></option>
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
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">เลขที่หน้าที่พิมพ์ในวารสาร</label>
                    <div class="col-sm-2">
            <input type="text" name="pagejournal_rs" class="form-control form-control-primary"  maxlength="8" value="<?php echo "$row[pagejournal_rs]";?>">
                    </div>
                    </div>

                     <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อการประชุม</label>
                    <div class="col-sm-10">
                <input type="text" name="meeting_rs" class="form-control form-control-primary" id=""   value="<?php echo "$row[meeting_rs]";?>">
                    </div>
                    </div>

                     <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">สถานที่นำเสนอ</label>
                    <div class="col-sm-10">
                <input type="text" name="typeat_rs" class="form-control form-control-primary"  value="<?php echo "$row[typeat_rs]";?>">
                    </div>
                    </div>

                     <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">จังหวัด</label>
                    <div class="col-sm-4">
           <input type="text" name="province_rs" class="form-control form-control-primary"  value="<?php echo "$row[province_rs]";?>">
                    </div>
                    </div>

                     <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">ผลงานปีที่</label>
                    <div class="col-sm-2">
                <input type="text" name="year_rs" class="form-control form-control-primary"   onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4" value="<?php echo "$row[year_rs]";?>">
                    </div>
                    </div>

                     <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">เลขที่หน้า</label>
                    <div class="col-sm-2">
   <input type="text" id="page_rs" class="form-control form-control-primary"   name="page_rs"  maxlength="8" value="<?php echo "$row[page_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">วันที่นำเสนอ</label>
                    <div class="col-sm-2">
            <input type="text" name="timeprint_rs" id="timeprint_rs" class="form-control form-control-primary"  value="<?php echo "$row[timeprint_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">รูปแบบการเผยแพร่</label>
                    <div class="col-sm-4">
                 <select class="btn btn-block btn-outline-success btn-flat" type="text" name="format_rs" id="format_rs">
                          <option value="<?php echo "$row[format_rs]";?>"><?php echo "$row[format_rs]";?></option>
                          <option value="บทความวิจัย">บทความวิจัย</option>
                          <option value="บทความวิชาการ">บทความวิชาการ</option>
                     </select>
                    </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">ระดับคะแนน</label>
                    <div class="col-sm-2">
  <select class="btn btn-block btn-outline-success btn-flat" data-placeholder="ระดับคะแนน" type="text" id="score_rs" name="score_rs"required> 
                          <option value="<?php echo "$row[score_rs]";?>"><?php echo "$row[score_rs]";?></option>   
                          <option value="0.2">0.2</option>
                          <option value="0.4">0.4</option>
                          <option value="0.6">0.6</option>
                          <option value="0.8">0.8</option>
                          <option value="1">1</option>                          
                      </select>
                    </div>
                    </div>

                   <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">บทคัดย่อ</label>
                    <div class="col-sm-10">
               <textarea type="text" rows="4" class="form-control form-control-primary" placeholder="บทคัดย่อ............." name="abstractth_rs" id="abstractth_rs"><?php echo "$row[abstractth_rs]";?></textarea>
                    </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">Abstract</label>
                    <div class="col-sm-10">
               <textarea type="text" rows="4" class="form-control form-control-primary" placeholder="Abstract............." name="abstracten_rs" id="abstracten_rs"><?php echo "$row[abstracten_rs]";?></textarea> 
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ไฟล์ผลงานวิจัยเผยแพร่</label>
                    <div class="col-sm-10">
                      <div class="custom-file" >
                      <div align="left" class="btn btn-out waves-effect waves-light btn-primary btn-square " ><a href="../filepublish/<?php echo $row{"filepublish"};?>"><?php echo $row{"filepublish"};?></a></div></td> 
                      </div>
                    </div>
                    </div>

                      <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">ไฟล์ผลงานวิจัยเผยแพร่แก้ไข (.pdf)</label>
                    <div class="col-sm-10">
                    <div class="custom-file" >
      <input class="custom-label"type="file" class="custom-file-input" id="fileToUpload" accept="application/pdf" name="fileToUpload" >
                     <td>
                    </div> 
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
