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
$namefrom_rs = $_POST["namefrom_rs"];
$statushome_rs = $_POST["statushome_rs"];

$conn = new mysqli('localhost','root','','research2020');
mysqli_set_charset($conn,'utf8');

if($conn->connect_error){
  die("connect fail:".$conn->connect_error);
}
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"../filehome/".$_FILES["fileToUpload"]["name"]);


$sql = "insert into rs_home values ('null','$namefrom_rs','$statushome_rs','".$_FILES["fileToUpload"]["name"]."')";
$result = mysqli_query($conn,$sql);//
echo "<script>alert('[บันทึกข้อมูลเรียบร้อย]')</script>";
echo "<script language='javascript'>window.location.href='adminhome-rs.php'</script>";
mysqli_close($conn);
}
?> 


<?php
$conn=mysqli_connect("localhost","root","","research2020");
mysqli_set_charset($conn,'utf8');
if(mysqli_connect_errno())
{ 
  echo "Failed to connect to MySQL:".mysqli_connect_error();
}

$sql="SELECT*FROM rs_home ";
$result=mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | แบบฟอร์มเอกสารดาวน์โหลด</title>
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

          
<?php $page='adminhome-rs'; include 'menu.php';  ?>


<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="adminhome-rs.php" method ="post"enctype="multipart/form-data">                    
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
                        <h5>แบบฟอร์มเอกสารดาวน์โหลด</h5>
                    </div>
                        <!-- หัวข้อย้อย-->
                        <ul class="nav nav-tabs  tabs" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active " data-toggle="tab" href="#home1" role="tab">เอกสารดาวน์โหลด</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#home2" role="tab">ประกาศคำสั่ง</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">เพิ่มข้อมูล</a>
                        </li>
                        </ul>

                        <!-- Tab 1 -->
                        <div class="tab-content tabs card-block">
                        <div class="tab-pane active" id="home1" role="tabpanel">
                        <p class="m-0">
                        <table id="myTable" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                             <th class="h6 mb-2 ">ลำดับ</th>   
                             <th class="h6 mb-2 ">ชื่อแบบฟอร์ม</th>                     
                             <th class="h6 mb-2 ">ไฟล์แบบฟอร์ม</th> 
                             <th class="h6 mb-2 ">ลบ</th>             
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                             $sql="SELECT*FROM rs_home where statushome_rs = 'แบบฟอร์ม'";
                             $result=mysqli_query($conn,$sql);
                             while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {?>
                      <tr style="color:#000;">
   <td><div align="left"><?=$i;?></div></td>                
   <td><div align="left"><?php echo $row{"namefrom_rs"};?></div></td>  
   <td><div align="left"><a href="../filehome/<?php echo $row{"filefrom_rs"};?>"><?php echo $row{"filefrom_rs"};?></a></div></td>
   <td lign="center"><h3 align="center">
   <a href="/rs-cpu/admin/delete-rs.php?id=<?php echo $row["id"];?>"class="btn btn-danger btn-round waves-effect waves-light" >ลบ</a></h3></td>    
                </td> 
                </tr>
                    <?php
                    $i++;
                    }?>
                        </tbody>
                        </table>
                        </p>
                        </div>



                        <!-- Tab 2 -->
                        <div class="tab-pane" id="home2" role="tabpanel">
                        <p class="m-0">
                        <table id="myTable1" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                             <th class="h6 mb-2 ">ลำดับ</th>   
                             <th class="h6 mb-2 ">ประกาศคำสั่ง</th>                     
                             <th class="h6 mb-2 ">ไฟล์ประกาศคำสั่ง</th> 
                             <th class="h6 mb-2 ">ลบ</th>             
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                              $sql="SELECT*FROM rs_home where statushome_rs = 'ประกาศคำสั่ง'";
                             $result=mysqli_query($conn,$sql);
                             while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {?>
                <tr style="color:#000;">
   <td><div align="left"><?=$i;?></div></td>                
   <td><div align="left"><?php echo $row{"namefrom_rs"};?></div></td>  
   <td><div align="left"><a href="../filehome/<?php echo $row{"filefrom_rs"};?>"><?php echo $row{"filefrom_rs"};?></a></div></td>
   <td lign="center"><h3 align="center">
   <a href="/rs-cpu/admin/delete-rs.php?id=<?php echo $row["id"];?>"class="btn btn-danger btn-round waves-effect waves-light" >ลบ</a></h3></td>    
                </td> 
                </tr>
                    <?php
                    $i++;
                    }?>
                        </tbody>
                        </table>
                        </p>
                        </div>


                        <!-- tab3 -->
            <div class="tab-pane" id="profile1" role="tabpanel">
            <p class="m-0">
            <!-- /.เพิ่มแบบฟอร์ม -->
            <div class="card-body">
            <div class="col-md-12">
            <div class="form-group"> 
            <label class="h6 mb-2 ">ชื่อ</label>
            <input type="text" name="namefrom_rs" class="form-control form-control-primary" id="namefrom_rs" placeholder="ชื่อแบบฟอร์ม"   required>
            </div>
            </div>   

             <div class="col-md-3">
            <div class="form-group"> 
            <label class="h6 mb-2 ">ประเภท</label>
            <select input type="list" class="btn btn-block btn-outline-primary btn-flat"  name="statushome_rs" id="statushome_rs" required>
                    <option value="แบบฟอร์ม">แบบฟอร์ม</option>
                    <option value="ประกาศคำสั่ง">ประกาศคำสั่ง</option>
            </select>    
            </div>
            </div>    
            
            <div class="col-md-12">
            <div class="form-group"> 
            <label class="h7 mb-2 ">ไฟล์แบบฟอร์ม</label>
            <div class="custom-file" >
            <input class="custom-label"type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload" required>
            <label ></label>
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
                      
            </div>                            
            </p>
            </div>

                       
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
<script>
   $(document).ready(function () {
   $("#myTable1").DataTable();
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
