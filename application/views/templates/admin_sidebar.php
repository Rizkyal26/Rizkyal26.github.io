<!-- Sidebar -->
 <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/img/granat.png'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo site_url('admin/dashboard'); ?>" class="d-block"><?php echo $this->session->userdata('nama'); ?></a>
        </div>
      </div>

      
      <!-- (Fungsi Untuk tombol warna preview)
        ?php echo $this->uri->segment(2) == 'Dashboard' ? 'active' : '' ?-->


    <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo site_url('admin/dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          <li class="nav-item">
            <a href="<?php echo site_url('admin/fakultas'); ?>" class="nav-link">
              <i class="nav-icon fas fa-landmark -alt"></i>
              <p>
                Fakultas
              </p>
            </a>

          <li class="nav-item">
            <a href="<?php echo site_url('admin/paslon'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Paslon
              </p>
            </a>

          <li class="nav-item">
            <a href="<?php echo site_url('admin/visi_misi'); ?>" class="nav-link">
              <i class="nav-icon fas fa-eye -alt"></i>
              <p>
                Visi & Misi
              </p>
            </a>

          <li class="nav-item">
            <a href="<?php echo site_url('admin/suara'); ?>" class="nav-link">
              <i class="nav-icon fas fa-users -alt"></i>
              <p>
                Suara
              </p>
            </a>

          <li class="nav-item">
            <a href="<?php echo site_url('admin/user'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user-check -alt"></i>
              <p>
                User
              </p>
            </a>

          <li class="nav-item">
            <a href="<?php echo site_url('auth/logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-door-closed alt"></i>
              <p>
                Log Out
              </p>
            </a>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">