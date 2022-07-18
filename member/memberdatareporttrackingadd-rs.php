<?php
session_start();
ob_start();
if (!isset($_SESSION['username_rs'])) {
   header('Location: pages-login.php');
}
$un = $_SESSION['username_rs'];
?>

<?php
    error_reporting(~E_NOTICE);
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost","root","","research2020" );
    mysqli_set_charset($conn,'utf8');
    if(mysqli_connect_errno())
     { 
    echo "Failed to connect to MySQL:".mysqli_connect_error();
     }
    $sql="SELECT * FROM rs_information where id='$id'";
    $sql_query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($sql_query);
    mysqli_free_result($sql_query);
    mysqli_close($conn);    
?>


<?php
if(isset($_POST["submit"])){
$idtracking_rs = $_POST["idtracking_rs"];
$yeartk_rs = $_POST["year_rs"];
$nametk_rs = $_POST["nametk_rs"];
$usernametk_rs = $_POST["usernametk_rs"];
$boardtk_rs = $_POST["boardtk_rs"];
$subjecttk_rs = $_POST["subjecttk_rs"];
$statusproject_rs = $_POST["statusproject_rs"];
$typers_rs = $_POST["typers_rs"];
$mfn = $_POST["mfn"];
$yfn = $_POST["yfn"];
$performance1_rs = $_POST["performance1_rs"];
$barriers1_rs = $_POST["barriers1_rs"];
$help1_rs = $_POST["help1_rs"];
$performance2_rs = $_POST["performance2_rs"];
$barriers2_rs = $_POST["barriers2_rs"];
$help2_rs = $_POST["help2_rs"];
$performance3_rs = $_POST["performance3_rs"];
$barriers3_rs = $_POST["barriers3_rs"];
$help3_rs = $_POST["help3_rs"];
$performance4_rs = $_POST["performance4_rs"];
$barriers4_rs = $_POST["barriers4_rs"];
$help4_rs = $_POST["help4_rs"];
$performance5_rs = $_POST["performance5_rs"];
$barriers5_rs = $_POST["barriers5_rs"];
$help5_rs = $_POST["help5_rs"];
$username_rs = $_SESSION['username_rs'];

$conn = new mysqli('localhost','root','','research2020');
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
die("connect fail:".$conn->connect_error);
}

$Qtotal4 = mysqli_query($conn,"select * from rs_tracking");
$total_data4 = mysqli_num_rows($Qtotal4);
$p_id4="$idtracking_rs";


date_default_timezone_set('Asia/Bangkok');
  $date = date("Y-m-d H:i:s");
  $date2 = date("Y-m-d");
//ฟังก์ชั่นสุ่มตัวเลข
    $numrand = (mt_rand());
  

if ($_FILES['fileToUpload']['name']!= '') {
$path='../filetracking/';
$file=$_FILES['fileToUpload']['name'];
$file_type= strrchr( $file , '.' );
$pic_name=$p_id4.$file_type;
copy ($_FILES['fileToUpload']['tmp_name'],$path.$pic_name);
$fileToUpload=$pic_name;
}


$sql = "insert into rs_tracking values ('null', '$idtracking_rs', '$yeartk_rs', '$nametk_rs', '$usernametk_rs', '$boardtk_rs','$subjecttk_rs','$statusproject_rs','$typers_rs','$mfn $yfn', '$performance1_rs', '$barriers1_rs', '$help1_rs', '$performance2_rs', '$barriers2_rs', '$help2_rs', '$performance3_rs', '$barriers3_rs', '$help3_rs', '$performance4_rs', '$barriers4_rs', '$help4_rs','$performance5_rs','$barriers5_rs','$help5_rs','$fileToUpload','$username_rs')";
$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/member/memberdata-rs.php'</script>";
mysqli_close($conn);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | รายงานประจำเดือน</title>
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

          <?php $page='memberdata-rs'; include 'menu.php';  ?>


<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="memberdatareporttrackingadd-rs.php" method ="post"enctype="multipart/form-data">                    
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
                    <h5>ข้อมูลรายงานประจำเดือน</h5> 
                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                    </div>
                    <div class="card-block">
                    <form class="form-material">

                    <div class="col-md-12">
                    <div class="form-group">  
                    <h4 align="center" class="h6 mb-2 text-gray-900" ><label><h3>ข้อมูลรายงานประจำเดือน</h3></label></h4>           
                     </div>               
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">รายงานเดือน</label>
                    <div class="col-sm-4">
                    <select class="btn btn-block btn-outline-danger btn-flat" data-placeholder="เลือกเดือน..." type="text" id="mfn" name="mfn">    
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
                   
                    <div class="col-sm-2">
                    <input type="text" id="yfn" class="form-control form-control-danger" placeholder="พ.ศ." name="yfn" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4" required> 
                    </div>
                    </div>   

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สถานะ</label>
                    <div class="col-sm-10">
      <select class="btn btn-block btn-outline-danger btn-flat" onChange="chksatatus(this.value);" type="text" name="statusproject_rs" id="statusproject_rs">
                          <option value="มีความประสงค์ดำเนินงานวิจัยต่อไปจนเสร็จโครงการ">มีความประสงค์ดำเนินงานวิจัยต่อไปจนเสร็จโครงการ</option>
                          <option value="ดำเนินกาวิจัยแล้วเสร็จ">ดำเนินกาวิจัยแล้วเสร็จ</option>
                     </select>
                      </div>
                    </div>

                  <script>
                  function chksatatus(sx){
                  if (sx=="มีความประสงค์ดำเนินงานวิจัยต่อไปจนเสร็จโครงการ"){
                     document.getElementById('det1').style.display='none';
                      document.getElementById('det2').style.display='none';
                      document.getElementById('det3').style.display='none';
                      
                  }else{
                      document.getElementById('det1').style.display='block';
                      document.getElementById('det2').style.display='block';
                      document.getElementById('det3').style.display='block';
                  }
                  }
               </script>                    

                    <div class="col-md-12">
                    <div class="form-group">  
                    </div>               
                    </div>

                    <hr>

                    <div class="col-md-12">
                    <div class="form-group">  
                    <h4 align="center" class="h6 mb-2 text-gray-900" id='det3'  style="display: none;"><label><h3>ไฟล์เล่มโครงการเมื่อดำเนินการวิจัยแล้วเสร็จ</h3></label></h4>           
                    </div>               
                    </div>

                    <div class="form-group row">
                    <label id='det1'  style="display: none;" class="col-sm-2 col-form-label icofont icofont-double-right">ไฟล์เล่ม</label>
                    <div class="col-sm-10">
                    <div class="custom-file" >
                    <input align="left" id='det2'  style="display: none;" class="btn waves-effect waves-light btn-danger btn-outline-black"type="file" class="custom-file-input" name="fileToUpload" accept="application/pdf"><label > </label>
                    </div>
                    </div>
                    </div> 
                    
                    </div>
                    </div>
                    </div>
                    </div>
                    <!-- ข้อมูลรายงานประจำเดือน -->



                    <!-- Page body start -->
                    <div class="col-md-6">
                    <div class="card">
                    <div class="card-header">
                    <div class="sub-title">
                    <h5>รายระเอียดโครงการวิจัย</h5>
                   
                    </div>
                    
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">วิจัยปี</label>
                    <div class="col-sm-10">
                    <input type="hidden" name="typers_rs" class="form-control" id="typers_rs" readonly value="<?php echo "$row[typers_rs]";?>">
                    <input type="text" name="year_rs" class="form-control form-control-success" id="year_rs" readonly value="<?php echo "$row[year_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">รหัสงานวิจัย</label>
                    <div class="col-sm-10">
                    <input type="text" name="idtracking_rs" class="form-control form-control-success" id="idtracking_rs" readonly value="<?php echo "$row[idinformation_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อโครงการ</label>
                    <div class="col-sm-10">  
                    <textarea type="text" name="nametk_rs" class="form-control form-control-success" id="nametk_rs" placeholder="ชื่อโครงการวิจัย/งานสร้างสรรค์(ภาษาไทย)" readonly ><?php echo "$row[nameth_rs]";?></textarea> 
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ผู้วิจัย</label>
                    <div class="col-sm-10">
                   <input type="text" name="usernametk_rs" class="form-control form-control-success" id="usernametk_rs" readonly value="<?php echo "$row[usernameif_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">คณะ</label>
                    <div class="col-sm-10">
                   <input type="text" name="boardtk_rs" class="form-control form-control-success" id="boardtk_rs" readonly value="<?php echo "$row[board_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">หลักสูตร</label>
                    <div class="col-sm-10">
                   <input type="text" name="subjecttk_rs" class="form-control form-control-success" id="subjecttk_rs" readonly value="<?php echo "$row[subject_rs]";?>">
                    </div>
                    </div>

                    </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    <!-- จบรายระเอียดโครงการวิจัย -->
                    



                    <div class="row">
                    <div class="col-sm-12">
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                    <div class="card-header">
                    <div class="sub-title">  
                    <h5>การดำเนินการวิจัยแยกตามบท</h5>
                   
                    </div>                    
                    <div class="card-block">
                    <div class="form-group row">
                    <div class="col">

                   

                    <div class="col-md-12">
                    <div class="form-group">  
                    <h4 align="center" class="h6 mb-2 text-gray-900" ><label><h3>การดำเนินการวิจัยแยกตามบท</h3></label></h4>           
                    </div>               
                    </div>

               <hr>     

               <div class="col-md-12">
               <div class="form-group">
               <label class="h3 mb-2 ">บทที่ 1 (บทนำ)</label> 
               </div>               
               </div>


                
               <div class="col-md-5">
                <div class="form-group">
                  <label class="h6 mb-2 text-gray-900">ผลการดำเนินงาน</label>
                      <select class="btn btn-block btn-outline-success btn-flat" onChange="chksatatus(this.value);" type="text" name="performance1_rs" id="performance1_rs">
                          <option value="แล้วเสร็จสมบรูณ์">แล้วเสร็จสมบรูณ์</option>
                          <option value="อยู่ระหว่างดำเนินการ">อยู่ระหว่างดำเนินการ</option>
                          <option value="ยังไม่ได้ดำเนินการ">ยังไม่ได้ดำเนินการ</option>
                          </select>
                      </div>
                    </div>

                <div class="col-md-7">
                <div class="form-group"> 
                </div>
                </div>  


                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ปัญหาและอุปสรรค์ในการดำเนินงาน</label>  
                <textarea type="result_rs" rows="4" class="form-control form-control-primary" placeholder="ปัญหาและอุปสรรค์ในการดำเนินงาน.............." name="barriers1_rs" id="barriers1_rs"></textarea>
                </div>               
                </div>


                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ความช่วยเหลือที่ต้องการ</label>  
  <textarea type="result_rs" rows="4" class="form-control form-control-primary" placeholder="ความช่วยเหลือที่ต้องการ.............." name="help1_rs" id="help1_rs"></textarea>
                </div>               
                </div>
                
                <div class="col-md-12">
                <div class="form-group"> 
                </div>
                </div>  

                <hr> 

               <div class="col-md-12">
               <div class="form-group">
               <label class="h3 mb-2 ">บทที่ 2 (วรรณกรรมที่เกี่ยวข้อง)</label> 
               </div>               
               </div>

                
               <div class="col-md-5">
                <div class="form-group">
                  <label class="h6 mb-2 text-gray-900">ผลการดำเนินงาน</label>
                      <select class="btn btn-block btn-outline-success btn-flat" onChange="chksatatus(this.value);" type="text" name="performance2_rs" id="performance2_rs">
                          <option value="แล้วเสร็จสมบรูณ์">แล้วเสร็จสมบรูณ์</option>
                          <option value="อยู่ระหว่างดำเนินการ">อยู่ระหว่างดำเนินการ</option>
                          <option value="ยังไม่ได้ดำเนินการ">ยังไม่ได้ดำเนินการ</option>
                          </select>
                      </div>
                    </div>

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ปัญหาและอุปสรรค์ในการดำเนินงาน</label>  
               <textarea type="result_rs" rows="4" class="form-control form-control-primary" placeholder="ปัญหาและอุปสรรค์ในการดำเนินงาน.............." name="barriers2_rs" id="barriers2_rs"></textarea>
                </div>               
                </div>


                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ความช่วยเหลือที่ต้องการ</label>  
         <textarea type="result_rs" rows="4" class="form-control form-control-primary" placeholder="ความช่วยเหลือที่ต้องการ.............." name="help2_rs" id="help2_rs"></textarea>
                </div>               
                </div>

                <div class="col-md-12">
                <div class="form-group"> 
                </div>
                </div>  

                 <hr>

                <div class="col-md-12">
                <div class="form-group">
                <label class="h3 mb-2 ">บทที่ 3 (วิธีดำเนินการวิจัย)</label>  
                </div>               
               </div>
                
                <div class="col-md-5">
                <div class="form-group">
                  <label class="h6 mb-2 text-gray-900">ผลการดำเนินงาน</label>
                      <select class="btn btn-block btn-outline-success btn-flat" onChange="chksatatus(this.value);" type="text" name="performance3_rs" id="performance3_rs">
                          <option value="แล้วเสร็จสมบรูณ์">แล้วเสร็จสมบรูณ์</option>
                          <option value="อยู่ระหว่างดำเนินการ">อยู่ระหว่างดำเนินการ</option>
                          <option value="ยังไม่ได้ดำเนินการ">ยังไม่ได้ดำเนินการ</option>
                          </select>
                      </div>
                    </div>

                <div class="col-md-7">
                <div class="form-group"> 
                </div>
                </div> 

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ปัญหาและอุปสรรค์ในการดำเนินงาน</label>  
<textarea type="result_rs" rows="4" class="form-control form-control-primary" placeholder="ปัญหาและอุปสรรค์ในการดำเนินงาน.............." name="barriers3_rs" id="barriers3_rs"></textarea>
                </div>               
                </div>

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ความช่วยเหลือที่ต้องการ</label>  
<textarea type="result_rs" rows="4" class="form-control form-control-primary" placeholder="ความช่วยเหลือที่ต้องการ.............." name="help3_rs" id="help3_rs"></textarea>
                </div>               
                </div>

                <div class="col-md-12">
                <div class="form-group"> 
                </div>
                </div>

               <hr>

               <div class="col-md-12">
               <div class="form-group">
                <label class="h3 mb-2 ">บทที่ 4 (ผลการวิเคราะห์ข้อมูล)</label>  
               </div>               
               </div>

               <div class="col-md-5">
                <div class="form-group">
                  <label class="h6 mb-2 text-gray-900">ผลการดำเนินงาน</label>
                      <select class="btn btn-block btn-outline-success btn-flat" onChange="chksatatus(this.value);" type="text" name="performance4_rs" id="performance4_rs">
                          <option value="แล้วเสร็จสมบรูณ์">แล้วเสร็จสมบรูณ์</option>
                          <option value="อยู่ระหว่างดำเนินการ">อยู่ระหว่างดำเนินการ</option>
                          <option value="ยังไม่ได้ดำเนินการ">ยังไม่ได้ดำเนินการ</option>
                          </select>
                      </div>
                    </div>

                <div class="col-md-7">
                <div class="form-group"> 
                </div>
                </div>  

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ปัญหาและอุปสรรค์ในการดำเนินงาน</label>  
<textarea type="result_rs" rows="4" class="form-control form-control-primary" placeholder="ปัญหาและอุปสรรค์ในการดำเนินงาน.............." name="barriers4_rs" id="barriers4_rs"></textarea>
                </div>               
                </div>

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ความช่วยเหลือที่ต้องการ</label>  
<textarea ttype="result_rs" rows="4" class="form-control form-control-primary" placeholder="ความช่วยเหลือที่ต้องการ.............." name="help4_rs" id="help4_rs"></textarea>
                </div>               
                </div>

                <div class="col-md-12">
                <div class="form-group"> 
                </div>
                </div> 

                 <hr>

                <div class="col-md-12">
                <div class="form-group">
               <label class="h3 mb-2 ">บทที่ 5 (สรุปอภิปรายผลและข้อเสนอแนะ)</label>  
               </div>               
               </div>
                
               <div class="col-md-5">
                <div class="form-group">
                  <label class="h6 mb-2 text-gray-900">ผลการดำเนินงาน</label>
                      <select class="btn btn-block btn-outline-success btn-flat" onChange="chksatatus(this.value);" type="text" name="performance5_rs" id="performance5_rs">
                          <option value="แล้วเสร็จสมบรูณ์">แล้วเสร็จสมบรูณ์</option>
                          <option value="อยู่ระหว่างดำเนินการ">อยู่ระหว่างดำเนินการ</option>
                          <option value="ยังไม่ได้ดำเนินการ">ยังไม่ได้ดำเนินการ</option>
                          </select>
                      </div>
                    </div>

                <div class="col-md-7">
                <div class="form-group"> 
                </div>
                </div>  

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ปัญหาและอุปสรรค์ในการดำเนินงาน</label>  
<textarea type="result_rs" rows="4" class="form-control form-control-primary" placeholder="ปัญหาและอุปสรรค์ในการดำเนินงาน.............." name="barriers5_rs" id="barriers5_rs"> </textarea>
                </div>               
                </div>

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ความช่วยเหลือที่ต้องการ</label>  
 <textarea type="result_rs" rows="4" class="form-control form-control-primary" placeholder="ความช่วยเหลือที่ต้องการ.............." name="help5_rs" id="help5_rs" ></textarea>
                </div>               
                </div>


                <div class="col-md-12">
                <div class="form-group"> 
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
