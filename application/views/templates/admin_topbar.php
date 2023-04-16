<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url('admin/dashboard'); ?>" class="nav-link">Home</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>

        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown user user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="<?php echo base_url('assets/img/granat.png'); ?>" class="user-image img-circle elevation-2 alt="User Image">
          <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
        </a>

      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <!-- User image -->
        <li class="user-header bg-primary">
        <img src="<?php echo base_url('assets/img/granat.png'); ?>" class="img-circle elevation-2" alt="User Image">
          <p>
            <?php echo $this->session->userdata('nama'); ?> - Admin
            <small>Admin E-Voting UKM Granat 2022</small>
          </p>
        </li>

      <!-- Menu Footer-->
      <li class="user-footer">
        <div class="pull-left">
          <a href="#" class="btn btn-default btn-flat">Profile</a>
        </div>
        
        <div class="pull-right">
          <a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-default btn-flat">Log out</a>
        </div>
      </li>
    </ul>

    </li>
  </ul>
</nav>

<!-- /.navbar -->


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo --
    <a-- href="<?php echo site_url('admin/dashboard'); ?>" class="brand-link">

      <img src="<?php echo base_url('assets/img/granat.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      
      <span class="brand-text font-weight-light">E-Voting UKM Granat</span>
    </a-->

   