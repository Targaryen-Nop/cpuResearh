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
                          <a href="../../logout.php">
                          <i class="ti-layout-sidebar-left"></i> ออกจากระบบ
                      </a>
                      </li>
                      </ul>
                      </li>
                      </ul>
                  </div>
              </div>
          </nav>

         <?php $page='deanpublishscore-rs'; include 'menu.php';  ?>

         
<div class="pcoded-content">                         
<form class="panel-body form-horizontal form-padding" name="reinfor" action="deanpublishscore-rs.php" method ="post"enctype="multipart/form-data">                    
                   <div class="pcoded-inner-content">
                    <div class="main-body">
                    <div class="page-wrapper">
                    <!-- Page body start -->
               
               
              
              <div class="row">

         <!-- ARTICLE ADMINISTRATION AND MANAGEMENT -->
     <div class="col-md-12 col-lg-12">
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
          height: 600,
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
