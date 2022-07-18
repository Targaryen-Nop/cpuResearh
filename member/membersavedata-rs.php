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
$usernameif_rs = $_POST["usernameif_rs"];
$board_rs = $_POST["board_rs"];
$subject_rs = $_POST["subject_rs"];
$idinformation_rs = $_POST["idinformation_rs"];
$year_rs = $_POST["year_rs"];
$typepj_rs = $_POST["typepj_rs"];
$nameth_rs = $_POST["nameth_rs"];
$nameen_rs = $_POST["nameen_rs"];
$typers_rs = $_POST["typers_rs"];
$dst = $_POST["dst"];
$mst = $_POST["mst"];
$yst = $_POST["yst"];
$dfn = $_POST["dfn"];
$mfn = $_POST["mfn"];
$yfn = $_POST["yfn"];
$keyword_rs = $_POST["keyword_rs"];
$sort_rs = $_POST["sort_rs"];
$rs_funding = $_POST["rs_funding"];
$rs_fundingmoney = $_POST["rs_fundingmoney"];
$budget_rs = $_POST["budget_rs"];
$result_rs = $_POST["result_rs"];
$ztilization_rs = $_POST["ztilization_rs"];
$ztilizationcmc_rs = $_POST["ztilizationcmc_rs"];
$ztilizationsm_rs = $_POST["ztilizationsm_rs"];
$details_rs = $_POST["details_rs"];
$username_rs = $_SESSION['username_rs'];


$conn = new mysqli('localhost','root','','research2020');
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
die("connect fail:".$conn->connect_error);
}

$Qtotal4 = mysqli_query($conn,"select * from rs_information");
$total_data4 = mysqli_num_rows($Qtotal4);
$total_data4=$total_data4+1;
$p_id4="A".($total_data4+1000);
$str4 = "PT"; 
$date4 = date("Y")+543;


date_default_timezone_set('Asia/Bangkok');
  $date = date("Y-m-d H:i:s");
  $date2 = date("Y-m-d");
//ฟังก์ชั่นสุ่มตัวเลข
    $numrand = (mt_rand());
  

if ($_FILES['fileToUpload']['name']!= '') {
$path='../filers/';
$file=$_FILES['fileToUpload']['name'];
$file_type= strrchr( $file , '.' );
$pic_name=$str4.$date4.$p_id4.$file_type;
copy ($_FILES['fileToUpload']['tmp_name'],$path.$pic_name);
$fileToUpload=$pic_name;
}

// move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"filers/".$_FILES["fileToUpload"]["name"]);
    

$sql = "insert into rs_information values ('null','$usernameif_rs','$board_rs','$subject_rs','$idinformation_rs','$year_rs','$typepj_rs','$nameth_rs','$nameen_rs','$typers_rs', '$dst $mst $yst','$dfn $mfn $yfn', '$keyword_rs', '$sort_rs', '$rs_funding', '$rs_fundingmoney', '$budget_rs', '$result_rs', '$ztilization_rs', '$ztilizationcmc_rs', '$ztilizationsm_rs', '$details_rs', '$pic_name', 'อยู่ระหว่างพิจารณา' , '$username_rs','','','','','','','','','','','','','','','','','','')";
$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/member/memberdata-rs.php'</script>";
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | เสนอโครงการวิจัย</title>
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

          <?php $page='membersavedata-rs'; include 'menu.php';  ?>
          
<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="membersavedata-rs.php" method ="post"enctype="multipart/form-data">                    
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
                    <h5>เสนอโครงการวิจัย</h5>
                    </div>
                  <div class="card-block">
                <form>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อผู้เสนอโครงการ</label>
                    <div class="col-sm-10">
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
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">คณะ</label>
                    <div class="col-sm-10">
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
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">หลักสูตร</label>
                    <div class="col-sm-10">
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
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">รหัสงานวิจัย</label>
                    <div class="col-sm-10">
                  <?php
                  $conn=mysqli_connect("localhost","root","","research2020" );
                  mysqli_set_charset($conn,'utf8');
                  if(mysqli_connect_errno())
                  { 
                    echo "Failed to connect to MySQL:".mysqli_connect_error();
                  }
                                  

                    $Qtotal3 = mysqli_query($conn,"select * from rs_information");
                    $total_data3 = mysqli_num_rows($Qtotal3);
                    $total_data3=$total_data3+1;
                    $p_id="A".($total_data3+1000);
                    $str8 = "PT"; 
                    $date3 = date("Y")+543;
                  ?>
           <input type="text" name="idinformation_rs" class="form-control form-control-primary" id="idinformation_rs" readonly value="<?php echo $str8.$date3.$p_id;?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ปีการศึกษา</label>
                    <div class="col-sm-10">
                      <input type="text" name="year_rs" class="form-control form-control-primary" id="year_rs" placeholder="พ.ศ." onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4" required>
                    </div>
                    </div>

                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ประเภทโครงการ</label>
                    <div class="col-sm-10">
                        <select class="btn btn-block btn-outline-primary btn-flat" type="text" name="typepj_rs" id="typepj_rs">
                          <option value="โครงการวิจัยใหม่">โครงการวิจัยใหม่</option>
                          <option value="โครงการวิจัยต่อเนื่อง">โครงการวิจัยต่อเนื่อง</option>
                     </select>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อโครงการวิจัย (ภาษาไทย)</label>
                    <div class="col-sm-10">
                     <input type="text" name="nameth_rs" class="form-control form-control-primary" id="nameth_rs" placeholder="ชื่อโครงการวิจัย/งานสร้างสรรค์(ภาษาไทย)"  required>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อโครงการวิจัย (ภาษาอังกฤษ)</label>
                    <div class="col-sm-10">
                 <input type="text/javascript" name="nameen_rs" class="form-control form-control-primary" id="nameen_rs" placeholder="ชื่อโครงการวิจัย/งานสร้างสรรค์(ภาษาอังกฤษ)"   required>
                    </div>
                    </div>

                     <script type="text/javascript"> 
                      function isEnglishchar(str){   
                          var orgi_text="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890._-";   
                          var str_length=str.length;   
                          var isEnglish=true;   
                          var Char_At="";   
                          for(i=0;i<str_length;i++){   
                              Char_At=str.charAt(i);   
                              if(orgi_text.indexOf(Char_At)==-1){   
                                  isEnglish=false;   
                                  break;
                              }      
                          }   
                          return isEnglish; 
                      }  
                      </script>


                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ประเภทงานวิจัย</label>
                        <div class="col-sm-10">
                          <select class="btn btn-block btn-outline-primary btn-flat" type="text" name="typers_rs" id="typers_rs">
                          <option value="การวิจัยพื้นฐาน">การวิจัยพื้นฐาน</option>
                          <option value="การวิจัยประยุกต์">การวิจัยประยุกต์</option>
                          <option value="การพัฒนาทดลอง">การพัฒนาทดลอง</option>
                     </select>
                      </div>
                     </div>





                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">วันเริ่มต้นโครงการ</label>
                    <div class="col-sm-1">
                     <select class="btn btn-block btn-outline-primary btn-flat" data-placeholder="เลือกวัน..." type="text" id="dst" name="dst">  
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

                  <div class="col-sm-2">
                    <select class="btn btn-block btn-outline-primary btn-flat" data-placeholder="เลือกเดือน..." type="text" id="mst" name="mst">    
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

                  <div class="col-sm-1"> 
       <input type="text" id="yst" class="form-control form-control-primary" placeholder="พ.ศ." name="yst" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4" required>
                 </div> 
                    </div>


                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">วันสิ้นสุดโครงการ</label>
                    <div class="col-sm-1">
                      <select class="btn btn-block btn-outline-primary btn-flat" data-placeholder="เลือกวัน..." type="text" id="dfn" name="dfn">  
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

                  <div class="col-sm-2">
                   <select class="btn btn-block btn-outline-primary btn-flat" data-placeholder="เลือกเดือน..." type="text" id="mfn" name="mfn">     
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

                  <div class="col-sm-1"> 
       <input type="text" id="yfn" class="form-control form-control-primary" placeholder="พ.ศ." name="yfn" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4" required>
                 </div> 
                    </div>                  

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">คำสำคัญ (keyword)</label>
                    <div class="col-sm-10">
                     <input type="text" id="keyword_rs" class="form-control form-control-primary" placeholder="คำสำคัญ (keyword)" name="keyword_rs" required>
                    </div>
                    </div>

                  <script>
                  function chksatatus(sx){
                  if (sx=="ภายใน"){
                      document.getElementById('det1').style.display='none';
                      document.getElementById('det2').style.display='none';
                      document.getElementById('det3').style.display='none';
                      document.getElementById('det4').style.display='none';
                  }else{
                       document.getElementById('det1').style.display='block';
                      document.getElementById('det2').style.display='block';
                       document.getElementById('det3').style.display='block';
                        document.getElementById('det4').style.display='block';
                  }
                  }
               </script>

                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ประเภททุนวิจัย</label>
                    <div class="col-sm-10">
                      <select  class="btn btn-block btn-outline-primary btn-flat" onChange="chksatatus(this.value);" type="text" id="sort_rs" name="sort_rs">
                              <option value="ภายใน">ภายใน</option>
                              <option  value="ภายนอก"selected>ภายนอก</option>
                    </select>  
                    </div>
                    </div>

                    <div class="form-group row">
                        <label id='det1' class="col-sm-2 col-form-label icofont icofont-double-right">แหล่งทุนวิจัย</label>
                    <div class="col-sm-10">
                        <input type="text" id='det2' class="form-control form-control-primary" placeholder="แหล่งทุนวิจัย" name="rs_funding" id="rs_funding">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label id='det3' class="col-sm-2 col-form-label icofont icofont-double-right">จำนวนทุนจากภายนอก</label>
                    <div class="col-sm-10">
      <input type="text" id='det4' class="form-control form-control-primary" placeholder="จำนวนทุนจากภายนอก (บาท)" name="rs_fundingmoney" 
                        id="rs_fundingmoney" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/maxlength="8">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">งบประมาณโครงการวิจัย</label>
                    <div class="col-sm-10">
                      <input type="text" id='budget_rs' class="form-control form-control-primary" placeholder="งบประมาณโครงการวิจัย (บาท)" name="budget_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"maxlength="8"/required>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ผลที่คาดว่าจะได้รับ</label>
                    <div class="col-sm-10">
                        <textarea type="result_rs" rows="4" class="form-control form-control-primary" placeholder="ผลที่คาดว่าจะได้รับ.............." name="result_rs" id="result_rs"required></textarea>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ระดับการนำไปใช้ประโยชน์</label>
                    <div class="col-sm-10">
                        <select class="btn btn-block btn-outline-success btn-flat" type="text" id="ztilization_rs" name="ztilization_rs">    
                          <option value="ระดับชาติ">ระดับชาติ</option>
                          <option value="ระดับนานาชาติ">ระดับนานาชาติ</option>
                          <option value="ไม่ระบุ">ไม่ระบุ</option>
                      </select>
                    </div>
                    </div>

                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">การนําไปใช้ประโยชน์เชิงพาณิชย์</label>
                    <div class="col-sm-10">
                        <select class="btn btn-block btn-outline-success btn-flat" type="text" id="ztilizationcmc_rs" name="ztilizationcmc_rs">    
                          <option value="ใช่">ใช่</option>
                          <option value="ไม่ใช่">ไม่ใช่</option>
                          <option value="ไม่ระบุ">ไม่ระบุ</option>
                      </select>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">การนําไปใช้ประโยชน์ชุมชน-สังคม</label>
                    <div class="col-sm-10">
                        <select class="btn btn-block btn-outline-success btn-flat" type="text" id="ztilizationsm_rs" name="ztilizationsm_rs">    
                          <option value="ใช่">ใช่</option>
                          <option value="ไม่ใช่">ไม่ใช่</option>
                          <option value="ไม่ระบุ">ไม่ระบุ</option>
                      </select>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">รายละเอียดเพิ่มเติม</label>
                    <div class="col-sm-10">
                       <textarea type="text" rows="4" class="form-control form-control-primary" placeholder="รายละเอียดเพิ่มเติม............." name="details_rs" id="details_rs"  ></textarea>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">เอกสารแนบ (เฉพาะไฟล์ .PDF)</label>
                    <div class="col-sm-10">
                      <div class="custom-file" >
         <input class="custom-label"type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload" accept="application/pdf" required>
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
