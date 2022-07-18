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
    $sql="SELECT * FROM rs_tracking  where id='$id'" ;
    $sql_query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($sql_query);
    mysqli_free_result($sql_query);
    mysqli_close($conn);
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
<form class="panel-body form-horizontal form-padding" name="reinfor" action="memberdatareporttracking-rs.php" method ="post"enctype="multipart/form-data">                    
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
                    <div class="col-sm-10">
                    <input type="text" name="timetk_rs" class="form-control form-control-danger" id="timetk_rs" readonly value="<?php echo "$row[timetk_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">สถานะ</label>
                    <div class="col-sm-10">
                     <input type="text" name="statusproject_rs" class="form-control form-control-danger" id="statusproject_rs" readonly value="<?php echo "$row[statusproject_rs]";?>">    
                        </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">  
                    </div>               
                    </div>

                    <hr>

                    <div class="col-md-12">
                    <div class="form-group">  
                    <h4 align="center" class="h6 mb-2 text-gray-900" ><label><h3>ไฟล์เล่มโครงการเมื่อดำเนินการวิจัยแล้วเสร็จ</h3></label></h4>           
                    </div>               
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ไฟล์เล่ม</label>
                    <div class="col-sm-10">
                    <div class="custom-file" >
                    <div align="left" class="btn waves-effect waves-light btn-success btn-outline-success"><a href="../filetracking/<?php echo $row{"filetracking"};?>"><?php echo $row{"filetracking"};?></a></div></td> 
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
                    <input type="text" name="yeartk_rs" class="form-control form-control-success" id="yeartk_rs" readonly value="<?php echo "$row[yeartk_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">รหัสงานวิจัย</label>
                    <div class="col-sm-10">
                    <input type="hidden" name="id" class="form-control form-control-success" id="id" readonly value="<?php echo "$row[id]";?>">
                    <input type="text" name="idtracking_rs" class="form-control form-control-success" id="idtracking_rs" readonly value="<?php echo "$row[idtracking_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อโครงการ</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="nametk_rs" class="form-control form-control-success" id="nametk_rs" placeholder="ชื่อโครงการวิจัย/งานสร้างสรรค์(ภาษาไทย)" readonly ><?php echo "$row[nametk_rs]";?></textarea> 
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">ผู้วิจัย</label>
                    <div class="col-sm-10">
                   <input type="text" name="usernametk_rs" class="form-control form-control-success" id="usernametk_rs" readonly value="<?php echo "$row[usernametk_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">คณะ</label>
                    <div class="col-sm-10">
                    <input type="text" name="boardtk_rs" class="form-control form-control-success" id="boardtk_rs" readonly value="<?php echo "$row[boardtk_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label icofont icofont-double-right">หลักสูตร</label>
                    <div class="col-sm-10">
                    <input type="text" name="subjecttk_rs" class="form-control form-control-success" id="subjecttk_rs" readonly value="<?php echo "$row[subjecttk_rs]";?>">
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
                      <input type="text" name="performance1_rs" class="form-control form-control-success" id="performance1_rs" readonly value="<?php echo "$row[performance1_rs]";?>">
                      </div>
                    </div>

                <div class="col-md-7">
                <div class="form-group"> 
                </div>
                </div>  


                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ปัญหาและอุปสรรค์ในการดำเนินงาน</label>  
                <textarea readonly type="result_rs" rows="4" class="form-control form-control-primary" placeholder=" " name="barriers1_rs" id="barriers1_rs"><?php echo "$row[barriers1_rs]";?></textarea>
                </div>               
                </div>


                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ความช่วยเหลือที่ต้องการ</label>  
               <textarea readonly type="result_rs" rows="4" class="form-control form-control-primary" placeholder=" " name="help1_rs" id="help1_rs"><?php echo "$row[help1_rs]";?></textarea>
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
                     <input type="text" name="performance2_rs" class="form-control form-control-success" id="performance2_rs" readonly value="<?php echo "$row[performance2_rs]";?>">
                     </div>
                    </div>

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ปัญหาและอุปสรรค์ในการดำเนินงาน</label>  
               <textarea readonly type="result_rs" rows="4" class="form-control form-control-primary" placeholder=" " name="barriers2_rs" id="barriers2_rs"><?php echo "$row[barriers2_rs]";?></textarea>
                </div>               
                </div>


                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ความช่วยเหลือที่ต้องการ</label>  
               <textarea readonly type="result_rs" rows="4" class="form-control form-control-primary" placeholder=" " name="help2_rs" id="help2_rs"><?php echo "$row[help2_rs]";?></textarea>
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
                    <input type="text" name="performance3_rs" class="form-control form-control-success" id="performance3_rs" readonly value="<?php echo "$row[performance3_rs]";?>">
                      </div>
                    </div>

                <div class="col-md-7">
                <div class="form-group"> 
                </div>
                </div> 

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ปัญหาและอุปสรรค์ในการดำเนินงาน</label>  
               <textarea readonly type="result_rs" rows="4" class="form-control form-control-primary" placeholder=" " name="barriers3_rs" id="barriers3_rs"><?php echo "$row[barriers3_rs]";?></textarea>
                </div>               
                </div>

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ความช่วยเหลือที่ต้องการ</label>  
               <textarea readonly type="result_rs" rows="4" class="form-control form-control-primary" placeholder=" " name="help3_rs" id="help3_rs"><?php echo "$row[help3_rs]";?></textarea>
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
                      <input type="text" name="performance4_rs" class="form-control form-control-success" id="performance4_rs" readonly value="<?php echo "$row[performance4_rs]";?>">
                      </div>
                    </div>

                <div class="col-md-7">
                <div class="form-group"> 
                </div>
                </div>  

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ปัญหาและอุปสรรค์ในการดำเนินงาน</label>  
            <textarea readonly type="result_rs" rows="4" class="form-control form-control-primary" placeholder=" " name="barriers4_rs" id="barriers4_rs"><?php echo "$row[barriers4_rs]";?></textarea>
                </div>               
                </div>

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ความช่วยเหลือที่ต้องการ</label>  
                <textarea readonly ttype="result_rs" rows="4" class="form-control form-control-primary" placeholder=" " name="help4_rs" id="help4_rs"><?php echo "$row[help4_rs]";?></textarea>
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
                       <input type="text" name="performance5_rs" class="form-control form-control-success" id="performance5_rs" readonly value="<?php echo "$row[performance5_rs]";?>">
                      </div>
                    </div>

                <div class="col-md-7">
                <div class="form-group"> 
                </div>
                </div>  

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ปัญหาและอุปสรรค์ในการดำเนินงาน</label>  
               <textarea readonly type="result_rs" rows="4" class="form-control form-control-primary" placeholder="" name="barriers5_rs" id="barriers5_rs"><?php echo "$row[barriers5_rs]";?></textarea>
                </div>               
                </div>

                <div class="col-md-12">
                <div class="form-group"> 
                <label class="h6 mb-2 text-gray-900">ความช่วยเหลือที่ต้องการ</label>  
                <textarea readonly type="result_rs" rows="4" class="form-control form-control-primary" placeholder="" name="help5_rs" id="help5_rs"><?php echo "$row[help5_rs]";?></textarea>
                </div>               
                </div>


                <div class="col-md-12">
                <div class="form-group"> 
                </div>
                </div>

                <hr>  

               
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
