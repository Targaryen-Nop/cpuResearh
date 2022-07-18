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
    <title>CPU RESEARCH | คะแนนงานวิจัยที่เผยแพร่</title>
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

         <?php $page='adminpublishscore-rs'; include 'menu.php';  ?>

         
<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="adminpublishscore-rs.php" method ="post"enctype="multipart/form-data">                    
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
                        <h5>จัดการกราฟเปรียบเทียบคะแนนวิจัยที่ตีพิมพ์เผยแพร่</h5>
                    </div>
                        <!-- หัวข้อย้อย-->
                        <ul class="nav nav-tabs  tabs" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active " data-toggle="tab" href="#tab" role="tab">จัดการข้อมูล</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tab1" role="tab">ARTICLE ADMINISTRATION AND MANAGEMENT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">ARTICLE HUMANITY AND SCIENCE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">ARTICLE SCIENCE AND TECHNOLOGY</a>
                        </li>
                        </ul>



                        <div class="tab-content tabs card-block">
                        <div class="tab-pane active" id="tab" role="tabpanel">
                        <p class="m-0">
  <a href="adminpublishscoreadd-rs.php" class=" btn waves-effect waves-light btn-primary btn-outline-primary ">จัดการข้อมูลจำนวนวิจัยที่ตีพิมพ์เผยแพร่</a>                      </p>
                        </div>
                        

                       
                        <!-- ARTICLE ADMINISTRATION AND MANAGEMENT -->
                        <div class="tab-pane" id="tab1" role="tabpanel">
                        <p class="m-0">
                        <table id="myTable1" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                             <th class="h6 mb-2 ">ปีการศึกษา</th>                     
                             <th class="h6 mb-2 ">NATIONAL</th> 
                             <th class="h6 mb-2 ">INTERNATIONAL</th>
                             <th class="h6 mb-2 ">TCI 2</th>   
                             <th class="h6 mb-2 ">TCI 1</th>   
                             <th class="h6 mb-2 ">SCOPUS</th> 
                             <th class="h6 mb-2 ">จัดการ</th>  
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT*FROM rs_scorepublish ";
                          $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                              $point = 123456.02;
                        ?>
                        <tr style="color:#000;">
                <td><div align="left"><?php echo $row{"yearsc"};?></div></td>  
                <td><div align="left"><?php echo $row{"m02"};?></div></td> 
                <td><div align="left"><?php echo $row{"m04"};?></div></td>  
                <td><div align="left"><?php echo $row{"m06"};?></div></td> 
                <td><div align="left"><?php echo $row{"m08"};?></div></td> 
                <td><div align="left"><?php echo $row{"m10"};?></div></td> 
                <td lign="center">
           <div class="card-block">
           <div class="dropdown-success dropdown open">
<button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">จัดการข้อมูล</button>
           <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/adminpublishscoreedit-rs.php?id=<?php echo $row["id"];?>">แก้ไข</a>
           <div class="dropdown-divider"></div>
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/deleteadminpublishscoreadd-rs.php?id=<?php echo $row["id"];?>">ลบ</a>
           </div>
           </div>
           </div> 
                  <?php
                  }?>
                  </tbody>
                  </table>
                  </p>
                  </div>


                  <!-- ARTICLE HUMANITY AND SCIENCE -->
                        <div class="tab-pane " id="tab2" role="tabpanel">
                        <p class="m-0">
                        <table id="myTable2" class="display" style="width: 100%;">
                        <thead>
                        <tr>
                             <th class="h6 mb-2 ">ปีการศึกษา</th>                     
                             <th class="h6 mb-2 ">NATIONAL</th> 
                             <th class="h6 mb-2 ">INTERNATIONAL</th>
                             <th class="h6 mb-2 ">TCI 2</th>   
                             <th class="h6 mb-2 ">TCI 1</th>   
                             <th class="h6 mb-2 ">SCOPUS</th> 
                             <th class="h6 mb-2 ">จัดการ</th>  
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT*FROM rs_scorepublish ";
                          $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                              $point = 123456.02;
                        ?>
                        <tr style="color:#000;">
                <td><div align="left"><?php echo $row{"yearsc"};?></div></td>  
                <td><div align="left"><?php echo $row{"h02"};?></div></td> 
                <td><div align="left"><?php echo $row{"h04"};?></div></td>  
                <td><div align="left"><?php echo $row{"h06"};?></div></td> 
                <td><div align="left"><?php echo $row{"h08"};?></div></td> 
                <td><div align="left"><?php echo $row{"h10"};?></div></td> 
                <td lign="center">
           <div class="card-block">
           <div class="dropdown-success dropdown open">
<button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">จัดการข้อมูล</button>
           <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/adminpublishscoreedit-rs.php?id=<?php echo $row["id"];?>">แก้ไข</a>
           <div class="dropdown-divider"></div>
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/deleteadminpublishscoreadd-rs.php?id=<?php echo $row["id"];?>">ลบ</a>
           </div>
           </div>
           </div> 
                  <?php
                  }?>
                  </tbody>
                  </table>
                  </p>
                  </div>


                      <!-- ARTICLE SCIENCE AND TECHNOLOGY -->
                        <div class="tab-pane " id="tab3" role="tabpanel">
                        <p class="m-0">
                        <table id="myTable3" class="display" style="width: 100%;">
                        <thead>
                         <tr>
                             <th class="h6 mb-2 ">ปีการศึกษา</th>                     
                             <th class="h6 mb-2 ">NATIONAL</th> 
                             <th class="h6 mb-2 ">INTERNATIONAL</th>
                             <th class="h6 mb-2 ">TCI 2</th>   
                             <th class="h6 mb-2 ">TCI 1</th>   
                             <th class="h6 mb-2 ">SCOPUS</th> 
                             <th class="h6 mb-2 ">จัดการ</th>  
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT*FROM rs_scorepublish ";
                          $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                              $point = 123456.02;
                        ?>
                        <tr style="color:#000;">
                <td><div align="left"><?php echo $row{"yearsc"};?></div></td>  
                <td><div align="left"><?php echo $row{"s02"};?></div></td> 
                <td><div align="left"><?php echo $row{"s04"};?></div></td>  
                <td><div align="left"><?php echo $row{"s06"};?></div></td> 
                <td><div align="left"><?php echo $row{"s08"};?></div></td> 
                <td><div align="left"><?php echo $row{"s10"};?></div></td> 
                <td lign="center">
           <div class="card-block">
           <div class="dropdown-success dropdown open">
<button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">จัดการข้อมูล</button>
           <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/adminpublishscoreedit-rs.php?id=<?php echo $row["id"];?>">แก้ไข</a>
           <div class="dropdown-divider"></div>
<a class="dropdown-item waves-light waves-effect" href="/rs-cpu/admin/deleteadminpublishscoreadd-rs.php?id=<?php echo $row["id"];?>">ลบ</a>
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





                  </div>
                  </div>
                  </div>

                  

      <!-- ARTICLE ADMINISTRATION AND MANAGEMENT -->
     <div class="col-md-12 col-lg-6">
     <div class="card">
     <div class="card-header">
     <h5>ARTICLE ADMINISTRATION AND MANAGEMENT</h5>
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
    ['ปีการศึกษา','NATIONAL','INTERNATIONAL','TCI 2','TCI 1','SCOPUS'],
                             <?php
                                $query="select * from rs_scorepublish";
                                $res=mysqli_query($conn,$query);
                                while ($data=mysqli_fetch_array($res)) {
                                   $yearsc = $data['yearsc'];
                                    $m02 = $data['m02'];
                                    $m04 = $data['m04']; 
                                    $m06 = $data['m06']; 
                                    $m08 = $data['m08']; 
                                    $m10 = $data['m10']; 
                                ?>
              ['<?php echo $yearsc;?>',<?php echo $m02;?>,<?php echo $m04;?>,<?php echo $m06;?>,<?php echo $m08;?>,<?php echo $m10;?>],
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
          height: 400,
          colors: ['#C7EA46', '#29AB87', '#D0F0C0', '#8A9A5B', '#00A86B']
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



         <!-- ARTICLE HUMANITY AND SCIENCE -->
      <div class="col-md-12 col-lg-6">
     <div class="card">
     <div class="card-header"> 
     <h5>ARTICLE HUMANITY AND SCIENCE</h5> 
     </div>
     <div class="card-block">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <div id="chart_div2"></div>
            <script type="text/javascript">
            google.charts.load('current', {'packages': ['bar']
         });
            google.charts.setOnLoadCallback(drawChart); 

                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                      ['ปีการศึกษา','NATIONAL','INTERNATIONAL','TCI 2','TCI 1','SCOPUS'],
                             <?php
                                $query="select * from rs_scorepublish";
                                $res=mysqli_query($conn,$query);
                                while ($data=mysqli_fetch_array($res)) {
                                   $yearsc = $data['yearsc'];
                                    $h02 = $data['h02'];
                                    $h04 = $data['h04']; 
                                    $h06 = $data['h06']; 
                                    $h08 = $data['h08']; 
                                    $h10 = $data['h10']; 
                                ?>
              ['<?php echo $yearsc;?>',<?php echo $h02;?>,<?php echo $h04;?>,<?php echo $h06;?>,<?php echo $h08;?>,<?php echo $h10;?>],
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
          height: 400,
          colors: ['#ED2939', '#FA8072', '#FF2400', '#CA3433', '#960019']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div2'));

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


        <!-- ARTICLE SCIENCE AND TECHNOLOGY -->
     <div class="col-md-12 col-lg-6">
     <div class="card">
     <div class="card-header">
     <h5>ARTICLE SCIENCE AND TECHNOLOGY</h5>
     </div>
     <div class="card-block">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <div id="chart_div3"></div>
            <script type="text/javascript">
            google.charts.load('current', {'packages': ['bar']
         });
            google.charts.setOnLoadCallback(drawChart); 

                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
     ['ปีการศึกษา','NATIONAL','INTERNATIONAL','TCI 2','TCI 1','SCOPUS'],
                             <?php
                                $query="select * from rs_scorepublish";
                                $res=mysqli_query($conn,$query);
                                while ($data=mysqli_fetch_array($res)) {
                                   $yearsc = $data['yearsc'];
                                    $s02 = $data['s02'];
                                    $s04 = $data['s04']; 
                                    $s06 = $data['s06']; 
                                    $s08 = $data['s08']; 
                                    $s10 = $data['s10']; 
                                ?>
              ['<?php echo $yearsc;?>',<?php echo $s02;?>,<?php echo $s04;?>,<?php echo $s06;?>,<?php echo $s08;?>,<?php echo $s10;?>],
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
          height: 400,
          colors: ['#7C4700', '#997950', '#7E481C', '#613613', '#4B3A26']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div3'));

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
