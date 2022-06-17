    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="<?=base_url('Dashboard')?>"><img src="<?=base_url()?>assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="<?=base_url('Dashboard')?>"><img src="<?=base_url()?>assets/images/icon-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="<?=base_url()?>assets/images/faces/user.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?= $this->session->userdata('username') ?></h5>
                  <?php if($this->session->userdata('level') == '1') {
                    echo "<span>Manajer</span>";
                  } else if($this->session->userdata('level') == '2') {
                    echo "<span>Admin</span>";
                  } else {
                    echo "<span>Kasir</span>";
                  }
                  ?>
                  <!-- <span>Gold Member</span> -->
                </div>
              </div>
              <!-- <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
              </div> -->
            </div>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?=base_url('Dashboard')?>">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <?php if ($this->session->userdata('level') === '1') : ?>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class=" mdi mdi-cube-outline "></i>
              </span>
              <span class="menu-title">Data kafe</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?=base_url('Data-Menu')?>">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('Data-Transaksi')?>">Transaksi</a></li>
             <!--   <li class="nav-item"><a class="nav-link" href="<?=base_url('Data-User')?>">User</a></li>-->
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?=base_url('Laporan-Penjualan')?>">
              <span class="menu-icon">
                <i class=" mdi mdi-file-document "></i>
              </span>
              <span class="menu-title">Laporan Penjualan</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?=base_url('User-Log')?>">
              <span class="menu-icon">
                <i class="mdi mdi-account-key "></i>
              </span>
              <span class="menu-title">User Log</span>
            </a>
          </li>
          <?php endif; ?>

          <?php if ($this->session->userdata('level') === '2') : ?>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?=base_url('Data-User')?>">
              <span class="menu-icon">
                <i class=" mdi mdi-account "></i>
              </span>
              <span class="menu-title">Data User</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?=base_url('User-Log')?>">
              <span class="menu-icon">
                <i class="mdi mdi-account-key "></i>
              </span>
              <span class="menu-title">User Log</span>
            </a>
          </li>
          <?php endif; ?>

          <?php if ($this->session->userdata('level') === '3') : ?>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?=base_url('Data-Transaksi')?>">
              <span class="menu-icon">
                <i class="mdi mdi-square-inc-cash "></i>
              </span>
              <span class="menu-title">Data Transaksi</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?=base_url('Laporan-Penjualan')?>">
              <span class="menu-icon">
                <i class=" mdi mdi-file-document "></i>
              </span>
              <span class="menu-title">Laporan Penjualan</span>
            </a>
          </li>
          <?php endif; ?>


        </ul>
      </nav>