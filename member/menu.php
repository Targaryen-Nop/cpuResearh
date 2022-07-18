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
                                    <a href="/rs-cpu/member/dashboard-rs.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">หน้าแรก</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>  
                              <li class="nav-item <?php if($page=='profile-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/member/profile-rs.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa fa-address-card-o"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ข้อมูลส่วนตัว</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li> 
                          </ul>

                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">แบบฟอร์ม</div>
                          <ul class="pcoded-item pcoded-left-item">
                                  <li class="nav-item <?php if($page=='memberhome1-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/member/memberhome1-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-announcement"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ประกาศ</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  <li class="nav-item <?php if($page=='memberhome-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/member/memberhome-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-files"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">แบบฟอร์มดาวน์โหลด</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                          </ul>

                         <div class="pcoded-navigation-label" data-i18n="nav.category.forms">โครงการวิจัย</div>
                          <ul class="pcoded-item pcoded-left-item">
                                  <li class="nav-item <?php if($page=='memberdata-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/member/memberdata-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-agenda"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ข้อมูลโครงการวิจัย</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                   <li class="nav-item <?php if($page=='membersavedata-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/member/membersavedata-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-pencil-alt"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">เสนอโครงการวิจัย</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                          </ul>

                         

                              <div class="pcoded-navigation-label" data-i18n="nav.category.forms">งานวิจัยที่เผยแพร่</div>
                              <ul class="pcoded-item pcoded-left-item">
                                   <li class="nav-item <?php if($page=='memberpublish-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/member/memberpublish-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-bookmark-alt"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ข้อมูลงานวิจัยที่เผยแพร่</span>
                                      <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                                  <li class="nav-item <?php if($page=='memberpublishadd-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/member/memberpublishadd-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-pencil-alt"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">เพิ่มงานวิจัยที่เผยแพร่</span>
                                      <span class="pcoded-mcaret"></span>
                                      </a>
                                  </li>
                              </ul>

                               <div class="pcoded-navigation-label" data-i18n="nav.category.forms">ฐานข้อมูลงานวิจัย</div>
                          <ul class="pcoded-item pcoded-left-item">
                                  <li class="nav-item <?php if($page=='memberdbrs-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/member/memberdbrs-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-folder"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ฐานข้อมูลโครงการวิจัย</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  </li>
                                   <li class="nav-item <?php if($page=='memberdbpbrs-rs'){echo 'active';} ?>">
                                      <a href="/rs-cpu/member/memberdbpbrs-rs.php" class="waves-effect waves-dark ">
                                      <span class="pcoded-micon"><i class="ti-folder"></i><b></b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">ฐานข้อมูลงานวิจัยที่เผยแพร่</span>
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

                 