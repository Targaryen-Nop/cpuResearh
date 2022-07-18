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

$sql="SELECT*FROM rs_budget";
$result=mysqli_query($conn,$sql);
//$row=msqli_fetch_array($result,MYSQLI_NUM);
//$strSQL="SELECT*FROM score_exam WHERE idrs LIKE'%".$_SESSION["idrs"]."%";
//$objQuery=mysqli_query($strSQL,$con) or die ("Error Query [".$strSQL."]");
?>

 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPU RESEARCH | ฐานข้อมูลงบประมาณโครงการวิจัย</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   
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

         <?php $page='adminbudget-rs'; include 'menu.php';  ?>

         
<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="adminbudget-rs.php" method ="post"enctype="multipart/form-data">                    
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
                        <h5>จัดการฐานข้อมูลงบประมาณโครงการวิจัย</h5>
                    </div>
                        <!-- หัวข้อย้อย-->
                        <ul class="nav nav-tabs  tabs" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active " data-toggle="tab" href="#tab" role="tab">เพิ่มงบประมาณโครงการวิจัย</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab1" role="tab">งบประมาณโครงการวิจัยระดับคณะ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">งบประมาณโครงการวิจัยคณะบริหารและการจัดการ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">งบประมาณโครงการวิจัยคณะวิทยาศาสตร์และเทคโนโลยี</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab">งบประมาณโครงการวิจัยคณะมนุษยศาสตร์และสังคมศาสตร์</a>
                        </li>
                        </ul>



                        <div class="tab-content tabs card-block">
                        <div class="tab-pane active" id="tab" role="tabpanel">
                        <p class="m-0">
  <a href="adminbudgetadd-rs.php" class=" btn waves-effect waves-light btn-primary btn-outline-primary "> จัดการงบประมาณโครงการวิจัยระดับคณะ</a> &nbsp;  &nbsp;  
  <a href="adminbudgetcourseadd-rs.php" class=" btn waves-effect waves-light btn-primary btn-outline-primary "> จัดการงบประมาณโครงการวิจัยระดับหลักสูตร</a>                          
                         </p>
                        </div>
                        

                       
                        <!-- Tab 1 -->
                        <div class="tab-pane" id="tab1" role="tabpanel">
                        <p class="m-0">

                        <table id="myTable1" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                             <th class="h6 mb-2 ">ปีการศึกษา</th>                     
                             <th class="h6 mb-2 ">คณะบริหารและการจัดการ</th> 
                             <th class="h6 mb-2 ">คณะวิทยาศาสตร์และเทคโนโลยี</th>
                             <th class="h6 mb-2 ">คณะมนุษยศาสตร์และสังคมศาสตร์</th>   
                             <th class="h6 mb-2 ">รวม</th>   
                             <th class="h6 mb-2 ">จัดการ</th>   
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql="SELECT*FROM rs_budget";
                            $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                              $mbudget_rs = (int)$row{"mbudget_rs"};
                              $sbudget_rs = (int)$row{"sbudget_rs"};
                              $hbudget_rs = (int)$row{"hbudget_rs"};
                              $total = $mbudget_rs + $sbudget_rs + $hbudget_rs;

                              $point = 123456.02;
                        ?>
                        <tr style="color:#000;">
                <td><div align="left"><?php echo $row{"yearbg_rs"};?></div></td>  
                <td><div align="left"><?php echo number_format($mbudget_rs);?></div></td> 
                <td><div align="left"><?php echo number_format($sbudget_rs);?></div></td>  
                <td><div align="left"><?php echo number_format($hbudget_rs);?></div></td> 
                <td><div align="left"><?php echo number_format($total);?></div></td> 
                <td lign="center">
           <div class="card-block">
           <div class="dropdown-success dropdown open">
<button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">จัดการข้อมูล</button>
           <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/adminbudgetedit-rs.php?id=<?php echo $row["id"];?>">แก้ไข</a>
           <div class="dropdown-divider"></div>
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/deletebg-rs.php?id=<?php echo $row["id"];?>">ลบ</a>
           </div>
           </div>
           </div> 
                  <?php
                  }?>
                  </tbody>
                  </table>


                        <table id="myTable5" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                             <th class="h6 mb-2 ">ปีการศึกษา</th>                     
                             <th class="h6 mb-2 ">งบคณะบริหารและการจัดการที่อนุมัติ</th> 
                             <th class="h6 mb-2 ">งบคณะบริหารและการจัดการที่ขออนุมัติ</th>
                             <th class="h6 mb-2 ">รวม</th>   
                             
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                           $sql="SELECT*FROM rs_budget";
                            $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                              $mbudget_rs = (int)$row{"mbudget_rs"};
                              $madd_rs = (int)$row{"madd_rs"};
                              $total = $mbudget_rs - $madd_rs;

                              $point = 123456.02;
                        ?>
                        <tr style="color:#000;">
                <td><div align="left"><?php echo $row{"yearbg_rs"};?></div></td>  
                <td><div align="left"><?php echo number_format($mbudget_rs);?></div></td> 
                <td><div align="left"><?php echo number_format($madd_rs);?></div></td>  
                <td><div align="left"><?php echo number_format($total);?></div></td> 
            
                  <?php
                  }?>
                  </tbody>
                  </table>


                   <table id="myTable6" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                             <th class="h6 mb-2 ">ปีการศึกษา</th>                     
                             <th class="h6 mb-2 ">งบคณะวิทยาศาสตร์และเทคโนโลยีที่อนุมัติ</th> 
                             <th class="h6 mb-2 ">งบคณะวิทยาศาสตร์และเทคโนโลยีที่ขออนุมัติ</th>
                             <th class="h6 mb-2 ">รวม</th>   
                             
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                           $sql="SELECT*FROM rs_budget";
                            $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                              $sbudget_rs = (int)$row{"sbudget_rs"};
                              $sadd_rs = (int)$row{"sadd_rs"};
                              $total = $mbudget_rs - $madd_rs;

                              $point = 123456.02;
                        ?>
                        <tr style="color:#000;">
                <td><div align="left"><?php echo $row{"yearbg_rs"};?></div></td>  
                <td><div align="left"><?php echo number_format($sbudget_rs);?></div></td> 
                <td><div align="left"><?php echo number_format($sadd_rs);?></div></td>  
                <td><div align="left"><?php echo number_format($total);?></div></td> 
            
                  <?php
                  }?>
                  </tbody>
                  </table>


                   <table id="myTable7" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                             <th class="h6 mb-2 ">ปีการศึกษา</th>                     
                             <th class="h6 mb-2 ">งบคณะมนุษยศาสตร์และสังคมศาสตร์ที่อนุมัติ</th> 
                             <th class="h6 mb-2 ">งบคณะมนุษยศาสตร์และสังคมศาสตร์ที่ขออนุมัติ</th>
                             <th class="h6 mb-2 ">รวม</th>   
                             
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                           $sql="SELECT*FROM rs_budget";
                            $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                              $hbudget_rs = (int)$row{"hbudget_rs"};
                              $hadd_rs = (int)$row{"hadd_rs"};
                              $total = $mbudget_rs - $madd_rs;

                              $point = 123456.02;
                        ?>
                        <tr style="color:#000;">
                <td><div align="left"><?php echo $row{"yearbg_rs"};?></div></td>  
                <td><div align="left"><?php echo number_format($hbudget_rs);?></div></td> 
                <td><div align="left"><?php echo number_format($hadd_rs);?></div></td>  
                <td><div align="left"><?php echo number_format($total);?></div></td> 
            
                  <?php
                  }?>
                  </tbody>
                  </table>






                  </p>
                  </div>

                        <div class="tab-pane " id="tab2" role="tabpanel">
                        <p class="m-0">

                        <table id="myTable2" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                             <th class="h6 mb-2 ">ปีการศึกษา</th>                     
                             <th class="h6 mb-2 ">การจัดการ</th> 
                             <th class="h6 mb-2 ">การตลาด</th>
                             <th class="h6 mb-2 ">การบัญชี</th>   
                             <th class="h6 mb-2 ">คอมพิวเตอร์ธุรกิจ</th> 
                             <th class="h6 mb-2 ">การโรงแรมและการท่องเที่ยว</th>  
                             <th class="h6 mb-2 ">นวัตกรรมการค้า</th>  
                             <th class="h6 mb-2 ">การบริหารการพัฒนาองค์การ</th>  
                             <th class="h6 mb-2 ">รวม</th>  
                             <th class="h6 mb-2 ">จัดการ</th>   
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                          $sql="SELECT*FROM rs_budgetcourse ";
                          $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                              $mgt_re = (int)$row{"mgt_re"};
                              $mak_rs = (int)$row{"mak_rs"};
                              $acc_rs = (int)$row{"acc_rs"};
                              $bco_rs = (int)$row{"bco_rs"};
                              $htm_rs = (int)$row{"htm_rs"};
                              $cpa_rs = (int)$row{"cpa_rs"};
                              $dop_rs = (int)$row{"dop_rs"};
                              $totalm = $mgt_re + $mak_rs + $acc_rs + $bco_rs + $htm_rs + $cpa_rs + $dop_rs;

                              $point = 123456.02;
                        ?>

                        <tr style="color:#000;">
                <td><div align="left"><?php echo $row{"yearcr_rs"};?></div></td>  
                <td><div align="left"><?php echo number_format($mgt_re);?></div></td>
                <td><div align="left"><?php echo number_format($mak_rs);?></div></td>  
                <td><div align="left"><?php echo number_format($acc_rs);?></div></td>  
                <td><div align="left"><?php echo number_format($bco_rs);?></div></td>  
                <td><div align="left"><?php echo number_format($htm_rs);?></div></td>  
                <td><div align="left"><?php echo number_format($cpa_rs);?></div></td>  
                <td><div align="left"><?php echo number_format($dop_rs);?></div></td>  
                <td><div align="left"><?php echo number_format($totalm);?></div></td> 
                <td lign="center">
           <div class="card-block">
           <div class="dropdown-success dropdown open">
<button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">จัดการข้อมูล</button>
           <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/adminbudgetcourseedit-rs.php?id=<?php echo $row["id"];?>">แก้ไข</a>
           <div class="dropdown-divider"></div>
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/deletebgcs-rs.php?id=<?php echo $row["id"];?>">ลบ</a>
           </div>
           </div>
           </div> 
                  <?php
                  }?>
                  </tbody>
                  </table>
                  </p>
                  </div>

                        <div class="tab-pane " id="tab3" role="tabpanel">
                        <p class="m-0">

                        <table id="myTable3" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                             <th class="h6 mb-2 ">ปีการศึกษา</th>                     
                             <th class="h6 mb-2 ">วิทยาการคอมพิวเตอร์</th> 
                             <th class="h6 mb-2 ">คอมพิวเตอร์มัลติมีเดีย</th>
                             <th class="h6 mb-2 ">รวม</th>  
                             <th class="h6 mb-2 ">จัดการ</th>   
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $sql="SELECT*FROM rs_budgetcourse ";
                        $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                              $csc_rs = (int)$row{"csc_rs"};
                              $cmd_rs = (int)$row{"cmd_rs"};
                              $totals = $csc_rs + $cmd_rs;

                              $point = 123456.02;
                        ?>

                        <tr style="color:#000;">
                <td><div align="left"><?php echo $row{"yearcr_rs"};?></div></td>  
                <td><div align="left"><?php echo number_format($csc_rs);?></div></td>
                <td><div align="left"><?php echo number_format($cmd_rs);?></div></td>
                <td><div align="left"><?php echo number_format($totals);?></div></td> 
                <td lign="center">
           <div class="card-block">
           <div class="dropdown-success dropdown open">
<button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">จัดการข้อมูล</button>
           <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/adminbudgetcourseedit-rs.php?id=<?php echo $row["id"];?>">แก้ไข</a>
           <div class="dropdown-divider"></div>
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/deletebgcs-rs.php?id=<?php echo $row["id"];?>">ลบ</a>
           </div>
           </div>
           </div> 
                  <?php
                  }?>
                  </tbody>
                  </table>
                  </p>
                  </div>

                        <div class="tab-pane " id="tab4" role="tabpanel">
                        <p class="m-0">

                        <table id="myTable4" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                             <th class="h6 mb-2 ">ปีการศึกษา</th>                     
                             <th class="h6 mb-2 ">การโฆษณาและการประชาสัมพันธ์</th> 
                             <th class="h6 mb-2 ">นิติศาสตร์</th>
                             <th class="h6 mb-2 ">รัฐประศาสนศาสตร์</th>  
                             <th class="h6 mb-2 ">การบริหารการศึกษา</th> 
                             <th class="h6 mb-2 ">ประกาศนียบัตรบัณฑิตวิชาชีพครู</th>   
                             <th class="h6 mb-2 ">รวม</th>  
                             <th class="h6 mb-2 ">จัดการ</th>  
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $sql="SELECT*FROM rs_budgetcourse ";
                        $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                              $cma_rs = (int)$row{"cma_rs"};
                              $law_rs = (int)$row{"law_rs"};
                              $pad_rs = (int)$row{"pad_rs"};
                              $tp_rs = (int)$row{"tp_rs"};
                              $moe_rs = (int)$row{"moe_rs"};
                              $totalh = $cma_rs + $law_rs + $pad_rs + $tp_rs + $moe_rs;

                              $point = 123456.02;
                        ?>

                        <tr style="color:#000;">
                <td><div align="left"><?php echo $row{"yearcr_rs"};?></div></td>  
                <td><div align="left"><?php echo number_format($cma_rs);?></div></td>
                <td><div align="left"><?php echo number_format($law_rs);?></div></td>
                <td><div align="left"><?php echo number_format($pad_rs);?></div></td>
                <td><div align="left"><?php echo number_format($tp_rs);?></div></td>
                <td><div align="left"><?php echo number_format($moe_rs);?></div></td>  
                <td><div align="left"><?php echo number_format($totalh);?></div></td>  
                <td lign="center">
           <div class="card-block">
           <div class="dropdown-success dropdown open">
<button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">จัดการข้อมูล</button>
           <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/adminbudgetcourseedit-rs.php?id=<?php echo $row["id"];?>">แก้ไข</a>
           <div class="dropdown-divider"></div>
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/deletebgcs-rs.php?id=<?php echo $row["id"];?>">ลบ</a>
           </div>
           </div>
           </div> 
                  <?php
                  }?>
                  </tbody>
                  </table>
                  </p>
                  </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                              </div>
                                          
                                              
             
              <!-- Main-body start -->
              <div class="main-body">
              
              <div class="row">
<!-- SITE VISIT CHART start -->
<div class="col-md-12 col-lg-6">
<div class="card">
<div class="card-header">
<h5>งบประมาณโครงการวิจัยระดับคณะ</h5>
</div>
<div class="card-block">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <div id="chart_div"></div>
            <script type="text/javascript">
            google.charts.load('current', {'packages': ['bar']
            });
            google.charts.setOnLoadCallback(drawChart); 

                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                             ['ปีการศึกษา','คณะบริหารและการจัดการ','คณะวิทยาศาสตร์และเทคโนโลยี','คณะมนุษยศาสตร์และสังคมศาสตร์'],
                             <?php
                                $query="select * from rs_budget";
                                $res=mysqli_query($conn,$query);
                                while ($data=mysqli_fetch_array($res)) {
                                    $year = $data['yearbg_rs'];
                                    $mb = $data['mbudget_rs'];
                                    $sb = $data['sbudget_rs']; 
                                    $hb = $data['hbudget_rs'];
                                    ?>
                                    ['<?php echo $year;?>',<?php echo $mb;?>,<?php echo $sb;?>,<?php echo $hb;?>],
                                    <?php
                                }
                             ?>
                            ]);

          var options = {
          chart: {
            // title: 'งบประมาณโครงการวิจัยระดับคณะ',
            // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'vertical', // Required for Material Bar Charts.
          hAxis: {
            format: 'scientific'
          },
          height: 600,
          colors: ['#059CF9', '#FFD812', '#FA5025']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

        btns.onclick = function(e) {

          if (e.target.tagName === 'BUTTON') {
            options.hAxis.format = e.target.id === 'none' ? '' : e.target.id;
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        }
      }
      </script>
                  </div>
                  </div>
                  </div>

                  


     <div class="col-md-12 col-lg-6">
     <div class="card">
     <div class="card-header">
     <h5>งบประมาณโครงการวิจัยระดับหลักสูตร</h5>
     </div>
     <div class="card-block">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <div id="chart_div1"></div>
            <script type="text/javascript">
            google.charts.load('current', {'packages': ['bar']
         });
            google.charts.setOnLoadCallback(drawChart); 

                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
    ['ปีการศึกษา','สาขาวิชาการจัดการ','สาขาวิชาการตลาด','สาขาวิชาการบัญชี','สาขาวิชาคอมพิวเตอร์ธุรกิจ','สาขาวิชาการจัดการโรงแรมและการท่องเที่ยว','สาขาวิชาการจัดการนวัตกรรมการค้า','สาขาวิชาการบริหารการพัฒนาองค์การ','สาขาวิชาวิทยาการคอมพิวเตอร์','สาขาวิชาคอมพิวเตอร์มัลติมีเดีย','สาขาวิชาการโฆษณาและการประชาสัมพันธ์','สาขาวิชานิติศาสตร์','สาขาวิชารัฐประศาสนศาสตร์','ประกาศนียบัตรบัณฑิตวิชาชีพครู','สาขาวิชาการบริหารการศึกษา'],
                             <?php
                                $query="select * from rs_budgetcourse";
                                $res=mysqli_query($conn,$query);
                                while ($data=mysqli_fetch_array($res)) {
                                   $yearcr_rs = $data['yearcr_rs'];
                                    $mgt_re = $data['mgt_re'];
                                    $mak_rs = $data['mak_rs']; 
                                    $acc_rs = $data['acc_rs']; 
                                    $bco_rs = $data['bco_rs']; 
                                    $htm_rs = $data['htm_rs']; 
                                    $cpa_rs = $data['cpa_rs'];
                                    $dop_rs = $data['dop_rs'];
                                    $csc_rs = $data['csc_rs'];
                                    $cmd_rs = $data['cmd_rs'];
                                    $cma_rs = $data['cma_rs'];
                                    $law_rs = $data['law_rs'];
                                    $pad_rs = $data['pad_rs'];
                                    $tp_rs = $data['tp_rs'];
                                    $moe_rs = $data['moe_rs'];
                                ?>
   ['<?php echo $yearcr_rs;?>',<?php echo $mgt_re;?>,<?php echo $mak_rs;?>,<?php echo $acc_rs;?>,<?php echo $bco_rs;?>,<?php echo $htm_rs;?>,<?php echo $cpa_rs;?>,<?php echo $dop_rs;?>,<?php echo $csc_rs;?>,<?php echo $cmd_rs;?>,<?php echo $cma_rs;?>,<?php echo $law_rs;?>,<?php echo $pad_rs;?>,<?php echo $tp_rs;?>,<?php echo $moe_rs;?>],
                                    <?php
                                }
                             ?>
                            ]);

          var options = {
          chart: {
            // title: 'งบประมาณโครงการวิจัยระดับคณะ',
            // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'vertical', // Required for Material Bar Charts.
          hAxis: {
            format: 'scientific'
          },
          height: 600,
          colors: ['#4D68FE', '#4778FF', '#14A2FA', '#06D3F2', '#06DEC0', '#45A1DE', '#1ABC9C', '#FFD812', '#FFB012', '#E40505', '#D4166C', '#EC3305', '#FA4316', '#FC8C70']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div1'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

        btns.onclick = function(e) {

          if (e.target.tagName === 'BUTTON') {
            options.hAxis.format = e.target.id === 'none' ? '' : e.target.id;
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        }
      }
      </script>
                </div>
                </div>
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
                   
                <!-- Main-body end -->
                
                <div id="styleSelector">
                
                </div>
            </div>
        </div>
    </div>
</div>
<script>
   $(document).ready(function () {
   $("#myTable1").DataTable();
   });
</script>  
<script>
   $(document).ready(function () {
   $("#myTable2").DataTable();
   });
</script> 
<script>
   $(document).ready(function () {
   $("#myTable3").DataTable();
   });
</script> 
<script>
   $(document).ready(function () {
   $("#myTable4").DataTable();
   });
</script>
<script>
   $(document).ready(function () {
   $("#myTable5").DataTable();
   });
</script> 
<script>
   $(document).ready(function () {
   $("#myTable6").DataTable();
   });
</script> 
<script>
   $(document).ready(function () {
   $("#myTable7").DataTable();
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
