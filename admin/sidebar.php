<!-- sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="img/login.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>
                    <?php
                  if(isset($_SESSION['name'])){
                      echo "<h5 style='margin: -5px 12px'>".$_SESSION['name']."</h5>";
                   }
             ?>
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                    <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Dashbord</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a>
                    <ul class="treeview-menu">
                        <li><a href="index.php"><i class="fa fa-circle-o"></i> Dashbord</a></li>
                    </ul>
            </li>
            <li class="treeview">
                <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Academics</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Notice</span>
                        <span class="pull-right-container">
                          <span class="label label-primary pull-right"></span>
                        </span>
                      </a>
                        <ul class="treeview-menu">
                            <li><a href="notice-entry.php"><i class="fa fa-circle-o"></i>Insert Notice</a></li>
                            <li><a href="notice-view.php"><i class="fa fa-circle-o"></i>View Notice</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Result</span>
                        <span class="pull-right-container">
                          <span class="label label-primary pull-right"></span>
                        </span>
                      </a>
                        <ul class="treeview-menu">
                            <li><a href="result.php"><i class="fa fa-circle-o"></i>Insert Result</a></li>
                            <li><a href="result-view.php"><i class="fa fa-circle-o"></i>View Result</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Routine</a></li>
                </ul>
            </li>

            <!-- Multilevel -->
            <li class="treeview">
                <a href="#">
            <i class="fa fa-files-o"></i> <span>Information</span>
            <span class="pull-right-container">
                <span class="label label-primary pull-right"></span>
            </span>
          </a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="#"><i class="fa fa-files-o"></i> Teacher's
                <span class="pull-right-container">
                  <span class="label label-primary pull-right"></span>
                </span>
              </a>
                        <ul class="treeview-menu">
                            <li><a href="principal-entry.php"><i class="fa fa-circle-o"></i>Principal Entry</a></li>
                            <li><a href="principal-view.php"><i class="fa fa-circle-o"></i>Principal View</a></li>
                            <li><a href="thr-entry%20.php"><i class="fa fa-circle-o"></i>Teacher Entry</a></li>
                            <li><a href="thr-view.php"><i class="fa fa-circle-o"></i>Teacher View</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-files-o"></i> Student's
                <span class="pull-right-container">
                  <span class="label label-primary pull-right"></span>
                </span>
              </a>
                        <ul class="treeview-menu">
                            
                            <li><a href="std-entry.php"><i class="fa fa-circle-o"></i>Students Entry</a></li>
                            <li><a href="std-view.php"><i class="fa fa-circle-o"></i>Students View</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            
            <li class="treeview">
                <a href="#">
            <i class="fa fa-files-o"></i> <span>Gallery</span>
            <span class="pull-right-container">
             <span class="label label-primary pull-right"></span>
            </span>
          </a>
                <ul class="treeview-menu">
                    <li><a href="all_img_upload.php"><i class="fa fa-circle-o"></i> Images</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> Videos</a></li>
                </ul>
            </li>
          
            <li class="treeview">
                    <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Others</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right"></span>
                    </span>
                  </a><ul class="treeview-menu">
                    <li class="treeview">
                        <a href="#"><i class="fa fa-files-o"></i> Slider
                <span class="pull-right-container">
                  <span class="label label-primary pull-right"></span>
                </span>
              </a>
                        <ul class="treeview-menu">
                            <li><a href="slider_upload.php"><i class="fa fa-circle-o"></i>Slider Upload</a></li>
                            <li><a href="slider_view.php"><i class="fa fa-circle-o"></i>Slider View</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="singup.php"><i class="fa fa-circle-o"></i> Register Form</a></li>
                    <li><a href="feedback.php"><i class="fa fa-circle-o"></i> FeedBack</a></li>
                </ul>
            </li>
            
            <li><a href="logout.php"><i class="fa fa-circle-o text-aqua"></i> <span>Logout</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<!-- / sidebar -->
