<!--navbar-->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <form action="<?php echo site_url('') ?>" method="get" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input value="<?php echo $this->query ?>" id="q" name="q" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> 

          <!-- Topbar Navbar -->
          <?php if(!empty($this->session->userdata('username'))) : ?>
            <ul class="navbar-nav ml-auto">
               

               <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline small"><?php echo $this->session->userdata('username') ?></span>
                  <img class="img-profile rounded-circle" src="http://pluspng.com/img-png/user-png-icon-account-avatar-human-male-man-men-people-person-download-svg-download-png-edit-icon-512.png">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
             
            
            </ul>
          <?php else : ?>
            <ul class="navbar-nav ml-auto">

              <a href="<?php echo site_url('Login') ?>" class="btn btn-primary" role="button">Login</a>

            <div class="topbar-divider d-none d-sm-block"></div>


              <a href="<?php echo site_url('Register') ?>" class="btn btn-primary" role="button">Register</a>
             
            
            </ul>   
          <?php endif; ?>  

        </nav>