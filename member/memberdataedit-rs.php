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
    <title>CPU RESEARCH | แก้ไขโครงการวิจัย</title>
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
<form class="panel-body form-horizontal form-padding" name="reinfor" action="memberdataedits-rs.php" method ="post"enctype="multipart/form-data">                    
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
                    <h5>แก้ไขโครงการวิจัย</h5>
                    </div>
                  <div class="card-block">
                <form>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อผู้เสนอโครงการ</label>
                    <div class="col-sm-10">
                 <input type="hidden" name="id" class="form-control" id="id" readonly value="<?php echo "$row[id]";?>">
                 <input readonly type="text" name="usernameif_rs" class="form-control form-control-primary" id="usernameif_rs"  value="<?php echo "$row[usernameif_rs]";?>">
                    </div>
                    </div>                    

                    <div class="form-group row">   
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">คณะ</label>
                    <div class="col-sm-10">
                       <input readonly type="text" name="board_rs" class="form-control form-control-primary" id="board_rs"  value="<?php echo "$row[board_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">หลักสูตร</label>
                    <div class="col-sm-10">
                        <input readonly type="text" name="subject_rs" class="form-control form-control-primary" id="subject_rs"  value="<?php echo "$row[subject_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">รหัสงานวิจัย</label>
                    <div class="col-sm-10">
                       <input readonly type="text" name="idinformation_rs" class="form-control form-control-primary" id="idinformation_rs"  value="<?php echo "$row[idinformation_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ปีการศึกษา</label>
                    <div class="col-sm-10">
                       <input  type="text" name="year_rs" class="form-control form-control-primary" id="year_rs" placeholder="พ.ศ." onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"/ maxlength="4"  value="<?php echo "$row[year_rs]";?>">
                    </div>
                    </div>

                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ประเภทโครงการ</label>
                    <div class="col-sm-10">
                        <select  class="form-control form-control-primary" type="text" name="typepj_rs" id="typepj_rs" >
                          <option value="<?php echo "$row[typepj_rs]";?>"><?php echo "$row[typepj_rs]";?></option>
                          <option value="โครงการวิจัยใหม่">โครงการวิจัยใหม่</option>
                          <option value="โครงการวิจัยต่อเนื่อง">โครงการวิจัยต่อเนื่อง</option>
                     </select>  
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อโครงการวิจัย (ภาษาไทย)</label>
                    <div class="col-sm-10">
                       <input  type="text" name="nameth_rs" class="form-control form-control-primary" id="nameth_rs" placeholder="ชื่อโครงการวิจัย/งานสร้างสรรค์(ภาษาไทย)" required value="<?php echo "$row[nameth_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ชื่อโครงการวิจัย (ภาษาอังกฤษ)</label>
                    <div class="col-sm-10">
                        <input  type="text" name="nameen_rs" class="form-control form-control-primary" id="nameen_rs" placeholder="ชื่อโครงการวิจัย/งานสร้างสรรค์(ภาษาอังกฤษ)" required value="<?php echo "$row[nameen_rs]";?>">
                    </div>
                    </div>

                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ประเภทงานวิจัย</label>
                    <div class="col-sm-10">
                     <select class="form-control form-control-primary" type="text" name="typers_rs" id="typers_rs">
                       <option value="<?php echo "$row[typers_rs]";?>"><?php echo "$row[typers_rs]";?></option>
                          <option value="การวิจัยพื้นฐาน">การวิจัยพื้นฐาน</option>
                          <option value="การวิจัยประยุกต์">การวิจัยประยุกต์</option>
                          <option value="การพัฒนาทดลอง">การพัฒนาทดลอง</option>
                     </select>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">วันเริ่มต้นโครงการ</label>
                    <div class="col-sm-10">
                        <input  type="text" name="dtstart_rs" class="form-control form-control-primary" id="dtstart_rs"   value="<?php echo "$row[dtstart_rs]";?>">
                    </div>
                    </div>

                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">วันสิ้นสุดโครงการ</label>
                    <div class="col-sm-10">
                     <input  type="text" name="dtfinish_rs" class="form-control form-control-primary" id="dtfinish_rs"   value="<?php echo "$row[dtfinish_rs]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">คำสำคัญ (keyword)</label>
                    <div class="col-sm-10">
                    <input type="text" id="keyword_rs" class="form-control form-control-primary" placeholder="คำสำคัญ (keyword)" name="keyword_rs" required value="<?php echo "$row[keyword_rs]";?>">
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
                      <select  class="form-control form-control-primary" onChange="chksatatus(this.value);" type="text" id="sort_rs" name="sort_rs">
                              <option value="<?php echo "$row[sort_rs]";?>"><?php echo "$row[sort_rs]";?></option>
                              <option value="ภายใน">ภายใน</option>
                              <option value="ภายนอก">ภายนอก</option>
                      </select>  
                    </div>
                    </div>

                    <div class="form-group row">
                        <label id='det1' class="col-sm-2 col-form-label icofont icofont-double-right">แหล่งทุนวิจัย</label>
                    <div class="col-sm-10">
                      <input type="text" id='det2' style="display: none;" class="form-control" placeholder="แหล่งทุนวิจัย" name="rs_funding" id="rs_funding" value="<?php echo "$row[rs_funding]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label id='det3' class="col-sm-2 col-form-label icofont icofont-double-right">จำนวนทุนจากภายนอก</label>
                    <div class="col-sm-10">
       <input type="text" id='det4' style="display: none;" class="form-control" placeholder="จำนวนทุนจากภายนอก (บาท)" name="rs_fundingmoney" 
                        id="rs_fundingmoney" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"value="<?php echo "$row[rs_fundingmoney]";?>">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">งบประมาณโครงการวิจัย</label>
                    <div class="col-sm-10">
                       <input  type="text" id='budget_rs' class="form-control form-control-primary" placeholder="งบประมาณโครงการวิจัย (บาท)" name="budget_rs" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}"value="<?php echo "$row[budget_rs]";?> ">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ผลที่คาดว่าจะได้รับ</label>
                    <div class="col-sm-10">
                        <textarea type="text" rows="4" class="form-control form-control-primary" placeholder="รายละเอียดเพิ่มเติม............." name="result_rs" id="result_rs"><?php echo "$row[result_rs]";?></textarea> 
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ระดับการนำไปใช้ประโยชน์</label>
                    <div class="col-sm-10">
                       <select class="btn btn-block btn-outline-success btn-flat" type="text" id="ztilization_rs" name="ztilization_rs"> 
                      <option value="<?php echo "$row[ztilization_rs]";?>"><?php echo "$row[ztilization_rs]";?></option>   
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
                      <option value="<?php echo "$row[ztilizationcmc_rs]";?>"><?php echo "$row[ztilizationcmc_rs]";?></option> 
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
                   <option value="<?php echo "$row[ztilizationsm_rs]";?>"><?php echo "$row[ztilizationsm_rs]";?></option>
                          <option value="ใช่">ใช่</option>
                          <option value="ไม่ใช่">ไม่ใช่</option>
                          <option value="ไม่ระบุ">ไม่ระบุ</option>
                      </select>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">รายละเอียดเพิ่มเติม</label>
                    <div class="col-sm-10">
                       <textarea type="text" rows="4" class="form-control form-control-primary" placeholder="รายละเอียดเพิ่มเติม............." name="details_rs" id="details_rs"><?php echo "$row[details_rs]";?></textarea>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ไฟล์โครงร่าง</label>
                    <div class="col-sm-10">
                      <div class="custom-file" >
                      <div align="left" class="btn btn-out waves-effect waves-light btn-primary btn-square " ><a href="../filers/<?php echo $row{"filefrom_rs"};?>"><?php echo $row{"filefrom_rs"};?></a></div></td> 
                      </div>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label icofont icofont-double-right">ไฟล์โครงร่างแก้ไข</label>
                    <div class="col-sm-10">
                      <div class="custom-file" >
        <input class="custom-label"type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload" accept="application/pdf">
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
