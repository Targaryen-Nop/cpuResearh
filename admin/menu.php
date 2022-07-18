           <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="assets/images/cpu.jpg" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details">
                        <div class="username hidden-xs"><?php 
                        if (isset($_SESSION['username_rs']) && $_SESSION['username_rs']){
                        echo 'User : '.$_SESSION['status_rs']."";
                        }  
                       else{
                           echo 'กรุณา Login ';
                       }
                       ?></div>  
                                      
                              </div>
                              </div>
                              </div>

                          <!-- เมนู -->
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">เมนู</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="nav-item <?php if($page=='dashboard-rs'){echo 'active';} ?>">
                                    <a href="/rs-cpu/admin/dashboard-rs.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">หน้าแรก</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>                              
                          </ul>

                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">จัดการข้อมูล</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="nav-item <?php if($page=='adminhome-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/admin/adminhome-rs.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-zip"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">แบบฟอร์มดาวน์โหลด</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="nav-item <?php if($page=='adminmenber-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/admin/adminmenber-rs.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa fa-address-card-o"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ข้อมูลสมาชิก</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>        
                          </ul>
        
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">ข้อมูลโครงการวิจัย</div>
                          <ul class="pcoded-item pcoded-left-item">
                             <li class="nav-item <?php if($page=='admindata-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/admin/admindata-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-agenda"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">โครงการวิจัย</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="nav-item <?php if($page=='admindbrs-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/admin/admindbrs-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-files"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ฐานข้อมูลโครงการวิจัย</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              </ul>

                              <div class="pcoded-navigation-label" data-i18n="nav.category.forms">งานวิจัยที่เผยแพร่</div>
                              <ul class="pcoded-item pcoded-left-item">
                                  <li class="nav-item <?php if($page=='adminpublishscore-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/admin/adminpublishscore-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">คะแนนงานวิจัยที่เผยแพร่</span>
                                      <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                                   <li class="nav-item <?php if($page=='adminpublish-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/admin/adminpublish-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-comment-alt"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ฐานข้อมูลงานวิจัยที่เผยแพร่</span>
                                      <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>                                  
                              </ul>

                              <div class="pcoded-navigation-label" data-i18n="nav.category.forms">งบประมาณโครงการวิจัย</div>
                              <ul class="pcoded-item pcoded-left-item">
                                   <li class="nav-item <?php if($page=='adminbudget-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/admin/adminbudget-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-pie-chart"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ฐานข้อมูลงบประมาณ</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                            </ul>

                            
                              <ul class="pcoded-item pcoded-left-item">
                                   <li class="nav-item">
                                      <a href="../logout.php" class="waves-effect waves-dark ">
                                      <h3 align = 'center'>  
               <span class="btn waves-effect waves-light btn-danger btn-square btn-block" data-i18n="nav.form-components.main">ออกจากระบบ</span>
                                      <span class="pcoded-mcaret"></span>
                                      </h3>
                                  </a>
                              </li>





                           </ul>
                              </li>
                          </ul>
                      </div>
                  </nav>  

                 