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
$idportfolio_rs = $_POST["idportfolio_rs"];
$typers_rs = $_POST["typers_rs"];
$yearpf_rs = $_POST["yearpf_rs"];
$nameth_rs = $_POST["nameth_rs"];
$nameen_rs = $_POST["nameen_rs"];
$researcher_rs = $_POST["researcher_rs"];
$board_rs = $_POST["board_rs"];
$subject_rs = $_POST["subject_rs"];
$researcher1_rs = $_POST["researcher1_rs"]; 
$researcher2_rs = $_POST["researcher2_rs"];
$sort_rs = $_POST["sort_rs"];
$yearjournal_rs = $_POST["yearjournal_rs"];
$issuejournal_rs = $_POST["issuejournal_rs"];
$monthjournal_rs = $_POST["monthjournal_rs"];
$namejournal_rs = $_POST["namejournal_rs"];
$pagejournal_rs = $_POST["pagejournal_rs"];
$td = $_POST["td"];
$tm = $_POST["tm"];
$ty = $_POST["ty"];
$typeat_rs = $_POST["typeat_rs"];
$province_rs = $_POST["province_rs"];
$year_rs = $_POST["year_rs"];
$meeting_rs =$_POST["meeting_rs"];
$score_rs = $_POST["score_rs"];
$page_rs = $_POST["page_rs"];
$format_rs = $_POST["format_rs"];
$abstractth_rs = $_POST["abstractth_rs"];
$abstracten_rs = $_POST["abstracten_rs"];
$username_rs = $_SESSION['username_rs'];

$conn = new mysqli('localhost','root','','research2020');
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
die("connect fail:".$conn->connect_error);
}

$Qtotal4 = mysqli_query($conn,"select * from rs_portfolio");
$total_data4 = mysqli_num_rows($Qtotal4);
$total_data4=$total_data4+1;
$p_id4="A".($total_data4+10000);
$str4 = "PR"; 

date_default_timezone_set('Asia/Bangkok');
  $date = date("Y-m-d H:i:s");
  $date2 = date("Y-m-d");
//ฟังก์ชั่นสุ่มตัวเลข
    $numrand = (mt_rand());  

if ($_FILES['fileToUpload']['name']!= '') {
$path='../filepublish/';
$file=$_FILES['fileToUpload']['name'];
$file_type= strrchr( $file , '.' );
$pic_name=$str4.$p_id4.$file_type;
copy ($_FILES['fileToUpload']['tmp_name'],$path.$pic_name);
$fileToUpload=$pic_name;
}

$sql = "insert into rs_portfolio values ('', '$idportfolio_rs','$typers_rs','$yearpf_rs','$nameth_rs','$nameen_rs','$researcher_rs','$board_rs','$subject_rs','$researcher1_rs','$researcher2_rs','$sort_rs','$yearjournal_rs','$issuejournal_rs','$monthjournal_rs','$namejournal_rs','$pagejournal_rs','$td $tm $ty', '$typeat_rs','$province_rs','$year_rs','$meeting_rs','$score_rs','$page_rs','$format_rs','$abstractth_rs','$abstracten_rs','$pic_name','$username_rs')";
$result = mysqli_query($conn,$sql);//
echo "<script>alert('บันทึกข้อมูลเรียบร้อย')</script>";
echo "<script language='javascript'>window.location.href='/rs-cpu/member/memberpublish-rs.php'</script>";
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | เพิ่มงานวิจัยที่เผยแพร่</title>
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
          
          <?php $page='memberpublishadd-rs'; include 'menu.php';  ?>

<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="memberpublishadd-rs.php" method ="post"enctype="multipart/form-data">                    
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
                    <h5>เพิ่มงานวิจัยที่เผยแพร่</h5>
                    </div>
                  <div class="card-block">
                <form>

                  <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">รหัสงานวิจัยที่เผยแพร่</label>
                    <div class="col-sm-2">
               <?php
                  $conn=mysqli_connect("localhost","root","","research2020" );
                  mysqli_set_charset($conn,'utf8');
                  if(mysqli_connect_errno())
                  { 
                    echo "Failed to connect to MySQL:".mysqli_connect_error();
                  }
                    $Qtotal3 = mysqli_query($conn,"select * from rs_portfolio");
                    $total_data3 = mysqli_num_rows($Qtotal3);
                    $total_data3=$total_data3+1;
                    $p_id="A".($total_data3+10000);
                    $str8 = "PR"; 
                  ?>
                 <input type="text" name="idportfolio_rs" class="form-control form-control-primary" id="idportfolio_rs" readonly value="<?php echo $str8.$p_id;?>">
                    </div>
                    </div> 

                  <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ผลงานวิจัยปี</label>
                    <div class="col-sm-2">
               <input type="text" name="yearpf_rs" id="yearpf_rs" class="form-control form-control-primary" placeholder="ผลงานวิจัยปี" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4" required>
                    </div>
                    </div>                    

                    <div class="form-group row">   
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ประเภทงานวิจัย</label>
                    <div class="col-sm-2">
                       <select class="btn btn-block btn-outline-primary btn-flat" type="text" name="typers_rs" id="typers_rs">
                          <option value="กาวิจัยพื้นฐาน">การวิจัยพื้นฐาน</option>
                          <option value="การวิจัยประยุกต์">การวิจัยประยุกต์</option>
                          <option value="การพัฒนาทดลอง">การพัฒนาทดลอง</option>
                     </select>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่องานวิจัย (ภาษาไทย)</label>
                    <div class="col-sm-10">
                  <input type="text" name="nameth_rs" class="form-control form-control-primary" id="nameth_rs" placeholder="ชื่องานวิจัย (ภาษาไทย)"required>
                    </div>
                    </div> 

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่องานวิจัย (ภาษาอังกฤษ)</label>
                    <div class="col-sm-10">
                 <input type="text" name="nameen_rs" class="form-control form-control-primary" id="nameen_rs" placeholder="ชื่องานวิจัย (ภาษาอังกฤษ)" required>
                    </div>
                    </div> 

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อนักวิจัย</label>
                    <div class="col-sm-4">
                  <input type="text" name="researcher_rs" class="form-control form-control-primary" id="researcher_rs" readonly value="<?php
                  $conn=mysqli_connect("localhost","root","","research2020");
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
                    <div class="col-sm-4">
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
                    <div class="col-sm-4">
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
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">นักวิจัยร่วม (คนที่1)</label>
                    <div class="col-sm-4">
     <input type="text" name="researcher1_rs" class="form-control form-control-primary" id="researcher1_rs"  placeholder="นักวิจัยร่วม (คนที่1)">
                    </div>
                    </div> 

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">นักวิจัยร่วม (คนที่2)</label>
                    <div class="col-sm-4">
      <input type="text" name="researcher2_rs" class="form-control form-control-primary" id="researcher2_rs"  placeholder="นักวิจัยร่วม (คนที่2)">
                    </div>
                    </div> 



                    <script>
                  function chksatatus(sx){
                  if (sx=="วารสารวิชาการระดับชาติ"){
                      document.getElementById('det1').style.display='none';
                      document.getElementById('det2').style.display='none';
                      document.getElementById('det3').style.display='none';
                      document.getElementById('det4').style.display='none';
                      document.getElementById('det5').style.display='none';
                      document.getElementById('det6').style.display='none';
                      document.getElementById('det7').style.display='none';
                      document.getElementById('det8').style.display='none';
                      document.getElementById('det9').style.display='none';
                      document.getElementById('det10').style.display='none';
                      document.getElementById('det11').style.display='none';
                      document.getElementById('det12').style.display='none';
                      document.getElementById('det13').style.display='none';
                      document.getElementById('det14').style.display='none';
                                           
                  }else{
                      document.getElementById('det1').style.display='block';
                      document.getElementById('det2').style.display='block';
                      document.getElementById('det3').style.display='block';
                      document.getElementById('det4').style.display='block';
                      document.getElementById('det5').style.display='block';
                      document.getElementById('det6').style.display='block';
                      document.getElementById('det7').style.display='block';
                      document.getElementById('det8').style.display='block';
                      document.getElementById('det9').style.display='block';
                      document.getElementById('det10').style.display='block';
                      document.getElementById('det11').style.display='block';
                      document.getElementById('det12').style.display='block';
                      document.getElementById('det13').style.display='block';
                      document.getElementById('det14').style.display='block';
                    }
                    }
                  </script>

                  <script>
                  function chksatatus(sx){
                  if (sx=="วารสารวิชาการระดับนานาชาติ"){
                      document.getElementById('det1').style.display='none';
                      document.getElementById('det2').style.display='none';
                      document.getElementById('det3').style.display='none';
                      document.getElementById('det4').style.display='none';
                      document.getElementById('det5').style.display='none';
                      document.getElementById('det6').style.display='none';
                      document.getElementById('det7').style.display='none';
                      document.getElementById('det8').style.display='none';
                      document.getElementById('det9').style.display='none';
                      document.getElementById('det10').style.display='none';
                      document.getElementById('det11').style.display='none';
                      document.getElementById('det12').style.display='none';
                      document.getElementById('det13').style.display='none';
                      document.getElementById('det14').style.display='none';
                      
                  }else{
                      document.getElementById('det1').style.display='block';
                      document.getElementById('det2').style.display='block';
                      document.getElementById('det3').style.display='block';
                      document.getElementById('det4').style.display='block';
                      document.getElementById('det5').style.display='block';
                      document.getElementById('det6').style.display='block';
                      document.getElementById('det7').style.display='block';
                      document.getElementById('det8').style.display='block';
                      document.getElementById('det9').style.display='none';
                      document.getElementById('det10').style.display='none';
                      document.getElementById('det11').style.display='none';
                      document.getElementById('det12').style.display='none';
                      document.getElementById('det13').style.display='none';
                      document.getElementById('det14').style.display='none';
                    }
                    }
                  </script>


                  <script>
                  function chksatatus(sx){
                  if (sx=="งานประชุมวิชาการระดับชาติ" || sx=="งานประชุมวิชาการระดับนานาชาติ"){
                      document.getElementById('det1').style.display='block';
                      document.getElementById('det2').style.display='block';
                      document.getElementById('det3').style.display='block';
                      document.getElementById('det4').style.display='block';
                      document.getElementById('det5').style.display='block';
                      document.getElementById('det6').style.display='block';
                      document.getElementById('det7').style.display='block';
                      document.getElementById('det8').style.display='block';
                      document.getElementById('det9').style.display='block';
                      document.getElementById('det10').style.display='block';
                      document.getElementById('det11').style.display='block';
                      document.getElementById('det12').style.display='block';
                      document.getElementById('det13').style.display='block';
                      document.getElementById('det14').style.display='block';
                      document.getElementById('det15').style.display='none';
                      document.getElementById('det16').style.display='none';
                      document.getElementById('det17').style.display='none';
                      document.getElementById('det18').style.display='none';
                      document.getElementById('det19').style.display='none';
                      document.getElementById('det20').style.display='none';
                      document.getElementById('det21').style.display='none';
                      document.getElementById('det22').style.display='none';
                      document.getElementById('det23').style.display='none';
                      document.getElementById('det24').style.display='none';
                    
                  }else {
                      document.getElementById('det1').style.display='none';
                      document.getElementById('det2').style.display='none';
                      document.getElementById('det3').style.display='none';
                      document.getElementById('det4').style.display='none';
                      document.getElementById('det5').style.display='none';
                      document.getElementById('det6').style.display='none';
                      document.getElementById('det7').style.display='none';
                      document.getElementById('det8').style.display='none';
                      document.getElementById('det9').style.display='none';
                      document.getElementById('det10').style.display='none';
                      document.getElementById('det11').style.display='none';
                      document.getElementById('det12').style.display='none';
                      document.getElementById('det13').style.display='none';
                      document.getElementById('det14').style.display='none';
                      document.getElementById('det15').style.display='block';
                      document.getElementById('det16').style.display='block';
                      document.getElementById('det17').style.display='block';
                      document.getElementById('det18').style.display='block';
                      document.getElementById('det19').style.display='block';
                      document.getElementById('det20').style.display='block';
                      document.getElementById('det21').style.display='block';
                      document.getElementById('det22').style.display='block';
                      document.getElementById('det23').style.display='block';
                      document.getElementById('det24').style.display='block';
                    }
                    }
               </script>


                    <div class="form-group row">   
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ประเภทการนำเสนอ</label>
                    <div class="col-sm-4">
 <select  class="btn btn-block btn-outline-success btn-flat" onChange="chksatatus(this.value);" type="text" id="sort_rs" name="sort_rs">
                             <option value="วารสารวิชาการระดับชาติ"selected>วารสารวิชาการระดับชาติ</option>
                             <option value="วารสารวิชาการระดับนานาชาติ">วารสารวิชาการระดับนานาชาติ</option>
                             <option value="งานประชุมวิชาการระดับชาติ">งานประชุมวิชาการระดับชาติ</option>
                             <option value="งานประชุมวิชาการระดับนานาชาติ">งานประชุมวิชาการระดับนานาชาติ</option>
                      </select>   
                    </div>
                    </div>

                     <div class="form-group row">
                    <label id='det15' class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อวารสารที่ตีพิมพ์</label>
                    <div class="col-sm-10">
                 <input id='det16' type="text" name="namejournal_rs" class="form-control form-control-success"  placeholder="ชื่อวารสารที่ตีพิมพ์">
                    </div>
                    </div> 

                    <div class="form-group row">
                    <label id='det17' class="col-sm-2 col-form-label icofont icofont-double-right">ปีที่ตีพิมพ์ในวารสาร</label>
                    <div class="col-sm-2">
                  <input id='det18' type="text" name="yearjournal_rs" class="form-control form-control-success" placeholder="พ.ศ."onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/maxlength="4">
                    </div>
                    </div>

                    <div class="form-group row">
                      <label id='det19' class="col-sm-2 col-form-label icofont icofont-double-right">ฉบับที่ตีพิมพ์ในวารสาร</label>
                    <div class="col-sm-2">
                <input id='det20' type="text" name="issuejournal_rs" class="form-control form-control-success" placeholder="ฉบับที่ตีพิมพ์ในวารสาร">
                    </div>
                    </div>

                    <div class="form-group row">   
                        <label id='det21' class="col-sm-2 col-form-label icofont icofont-double-right">เดือนที่ตีพิมพ์ในวารสาร</label>
                    <div class="col-sm-2">
  <select id='det22' class="btn btn-block btn-outline-success btn-flat" data-placeholder="เลือกเดือน..." type="text" name="monthjournal_rs" id="monthjournal_rs">
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
                    </div>

                    <div class="form-group row">
                      <label id='det23' class="col-sm-2 col-form-label icofont icofont-double-right">เลขที่หน้าที่พิมพ์ในวารสาร</label>
                    <div class="col-sm-2">
 <input id='det24' type="text" name="pagejournal_rs" class="form-control form-control-success" placeholder="หน้าที่ตีพิมพ์ในวารสาร" maxlength="10" >
                    </div>
                    </div>





                     <div class="form-group row">
                      <label  id='det1'  style="display: none;" class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อการประชุม</label>
                    <div class="col-sm-10">
 <input  id='det2'  style="display: none;" type="text" name="meeting_rs" class="form-control form-control-success" id="" placeholder="ชื่อการประชุม">
                    </div>
                    </div>

                     <div i class="form-group row">
                      <label id='det3' style="display: none;" class="col-sm-2 col-form-label icofont icofont-double-right">สถานที่นำเสนอ</label>
                    <div class="col-sm-10">
  <input  id='det4' style="display: none;" type="text" name="typeat_rs" class="form-control form-control-success" placeholder="สถานที่นำเสนอ">
                    </div>
                    </div>

                     <div   class="form-group row">
                      <label  id='det5' style="display: none;" class="col-sm-2 col-form-label icofont icofont-double-right">จังหวัด</label>
                    <div class="col-sm-4">
    <input  id='det6' style="display: none;" type="text" name="province_rs" class="form-control form-control-success" placeholder="จังหวัด">
                    </div>
                    </div>

                     <div  class="form-group row">
                      <label id='det7' style="display: none;" class="col-sm-2 col-form-label icofont icofont-double-right">ผลงานปีที่</label>
                    <div class="col-sm-2">
  <input  id='det8' style="display: none;"type="text" name="year_rs" class="form-control form-control-success" placeholder="ผลงานวิจัย" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4">
                    </div>
                    </div>

                     <div   class="form-group row">
                      <label  id='det9' style="display: none;" class="col-sm-2 col-form-label icofont icofont-double-right">เลขที่หน้า</label>
                    <div class="col-sm-2">
                    <input  id='det10' style="display: none;" type="text" id="page_rs" class="form-control form-control-success" placeholder="จำนวนหน้า" name="page_rs"  maxlength="8">
                    </div>
                    </div>

                    <div   class="form-group row">
                      <label  id='det11' style="display: none;" class="col-sm-2 col-form-label icofont icofont-double-right">วันที่นำเสนอ</label>
                    <div class="col-sm-1">
    <select  id='det12' style="display: none;" class="btn btn-block btn-outline-success btn-flat" class="form-group" data-placeholder="เลือกวัน..." type="text" id="td" name="td"> 
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


                    <div class="col-sm-2">
 <select  id='det13' style="display: none;"class="btn btn-block btn-outline-success btn-flat" data-placeholder="เลือกเดือน..." type="text" id="tm" name="tm">    
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


                    <div class="col-sm-1">
  <input  id='det14' style="display: none;" type="text" id="ty" class="form-control form-control-success" placeholder="พ.ศ." name="ty" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4">
                    </div>
                  </div>


                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">รูปแบบการเผยแพร่</label>
                    <div class="col-sm-2">
                  <select class="btn btn-block btn-outline-primary btn-flat" type="text" name="format_rs" id="format_rs">
                          <option value="บทความวิจัย">บทความวิจัย</option>
                          <option value="บทความวิชาการ">บทความวิชาการ</option>
                  </select>
                      </div>
                    </div>
                    

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">ระดับคะแนน</label>
                    <div class="col-sm-2">
   <select class="btn btn-block btn-outline-primary btn-flat" data-placeholder="ระดับคะแนน" type="text" id="score_rs" name="score_rs"required>    
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
               <textarea type="result_rs" rows="4" class="form-control form-control-primary" placeholder="บทคัดย่อ.............." name="abstractth_rs" id="abstractth_rs"required></textarea>
                    </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label icofont icofont-double-right">Abstract</label>
                    <div class="col-sm-10">
               <textarea type="result_rs" rows="4" class="form-control form-control-primary" placeholder="Abstract.............." name="abstracten_rs" id="abstracten_rs"required></textarea>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ไฟล์ผลงานวิจัยเผยแพร่</label>
                    <div class="col-sm-10">
                      <div class="custom-file" >
<input class="custom-label"type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload" accept="application/pdf" required>
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
