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
                                    <a href="/rs-cpu/dean/human/dashboard-rs.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">หน้าแรก</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>  
                              <li class="nav-item <?php if($page=='profile-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/dean/human/profile-rs.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa fa-address-card-o"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ข้อมูลส่วนตัว</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li> 
                          </ul>

                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">แบบฟอร์ม</div>
                          <ul class="pcoded-item pcoded-left-item">
                                  <li class="nav-item <?php if($page=='deanhome1-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/dean/human/deanhome1-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-announcement"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ประกาศ</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  <li class="nav-item <?php if($page=='deanhome-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/dean/human/deanhome-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-files"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">แบบฟอร์มดาวน์โหลด</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                          </ul>

                         <div class="pcoded-navigation-label" data-i18n="nav.category.forms">โครงการวิจัย</div>
                          <ul class="pcoded-item pcoded-left-item">
                                  <li class="nav-item <?php if($page=='deandata-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/dean/human/deandata-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-agenda"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ข้อมูลโครงการวิจัย</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                          </ul>
                         

                              <div class="pcoded-navigation-label" data-i18n="nav.category.forms">งานวิจัยที่เผยแพร่</div>
                              <ul class="pcoded-item pcoded-left-item">
                                   <li class="nav-item <?php if($page=='deanpublish-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/dean/human/deanpublish-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-bookmark-alt"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ข้อมูลงานวิจัยที่เผยแพร่</span>
                                      <span class="pcoded-mcaret"></span>
                                      </a>
                                   <li class="nav-item <?php if($page=='deanpublishscore-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/dean/human/deanpublishscore-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-bookmark-alt"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">คะแนนงานวิจัยที่เผยแพร่</span>
                                      <span class="pcoded-mcaret"></span>
                                      </a>
                              </ul>

                               <div class="pcoded-navigation-label" data-i18n="nav.category.forms">งบประมาณโครงการวิจัย</div>
                              <ul class="pcoded-item pcoded-left-item">
                                   <li class="nav-item <?php if($page=='deanbudget-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/dean/human/deanbudget-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-bookmark-alt"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ฐานข้อมูลงบประมาณ</span>
                                      <span class="pcoded-mcaret"></span>
                                      </a>
                              </ul>

                               <div class="pcoded-navigation-label" data-i18n="nav.category.forms">ฐานข้อมูลงานวิจัย</div>
                          <ul class="pcoded-item pcoded-left-item">
                                  <li class="nav-item <?php if($page=='deandbrs-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/dean/human/deandbrs-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-folder"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ฐานข้อมูลโครงการวิจัย</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  </li>
                                   <li class="nav-item <?php if($page=='deandbpbrs-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/dean/human/deandbpbrs-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-folder"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ฐานข้อมูลงานวิจัยที่เผยแพร่</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  </li>
                          </ul>

                            
                              <ul class="pcoded-item pcoded-left-item">
                                   <li class="nav-item">
                                      <a href="../../logout.php" class="waves-effect waves-dark ">
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

                 