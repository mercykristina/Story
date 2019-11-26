    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('user') ?>">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url('img/logo.png') ?>" style="width:80px; margin-right:20px">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('Guest') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Products_guest') ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Story</span></a>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-globe"></i>
          <span>Genre</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Genre</h6>
            <a class="collapse-item" href="<?php echo site_url('Products_guest/genreAction') ?>">Action</a>
            <a class="collapse-item" href="<?php echo site_url('Products_guest/genreAdventure') ?>">Adventure</a>
            <a class="collapse-item" href="<?php echo site_url('Products_guest/genreComedy') ?>">Comedy</a>
            <a class="collapse-item" href="<?php echo site_url('Products_guest/genreFiction') ?>">Fiction</a>
            <a class="collapse-item" href="<?php echo site_url('Products_guest/genreHistory') ?>">History</a>
            <a class="collapse-item" href="<?php echo site_url('Products_guest/genreHorror') ?>">Horror</a>
            <a class="collapse-item" href="<?php echo site_url('Products_guest/genreRomance') ?>">Romance</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Years</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Years</h6>
            <a class="collapse-item" href="<?php echo site_url('Products_guest/tahun2019') ?>">2019</a>
            <a class="collapse-item" href="<?php echo site_url('Products_guest/tahun2018') ?>">2018</a>
            <a class="collapse-item" href="<?php echo site_url('Products_guest/tahun2017krg') ?>">< 2017</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Login') ?>">
          <i class="fas fa-fw fa-pen"></i>
          <span>Create Story</span></a>
        </a>
      </li>

      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>