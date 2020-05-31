 <!-- Main Navigation -->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
            <a target="_blank" href="<?= base_url() ?>/assets/html/dashboards/v-1.html" class="pl-0"><img src="<?= base_url('assets/img/logo.png') ?>"></a>
          </div>
        </li>

        <!-- Search Form -->
        <li>
          <form class="search-form" role="search">
            <div class="md-form mt-0 waves-light">
              <input type="text" class="form-control py-2" placeholder="Search">
            </div>
          </form>
        </li>

        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">

            <?php

                $main_menu = $this->db->get_where('menus', 
                                          array('sub_menu' => 0, 'level_menu' => $this->session->userdata('level')));
                foreach ($main_menu->result() as $main) {

                  $sub_menu = $this->db->get_where('menus', 
                                          array('sub_menu' => $main->id, 'level_menu' => $this->session->userdata('level')));

              if ($sub_menu->num_rows() > 0) {?>
                <li class="h5">
                  <a class="collapsible-header waves-effect arrow-r ">
                    <i class="w-fa <?= $main->icon ?>"></i><?= $main->nama_menu ?><i class="fas fa-angle-down rotate-icon"></i>
                  </a>
                  <div class="collapsible-body">

                    <ul>
                      <?php foreach ($sub_menu->result() as $sub) {?>
                        <li class="h5">
                          <h5><a href="<?= base_url($this->session->userdata('link')) ?>/<?= $sub->link ?>" class="waves-effect"><?= $sub->nama_menu ?></a></h5>
                        </li>
                      <?php } ?>
                    </ul>
                  </div>
                </li>
              <?php } else { ?>
                <li class="h5">
                  <a href="<?= base_url($this->session->userdata('link')) ?>/<?= $main->link ?>" class=" <?= $this->uri->segment(4) == $main->link ?'active':'' ?> collapsible-header waves-effect"><i
                  class="w-fa <?= $main->icon ?>"></i><?= $main->nama_menu ?></a>
                </li>
              <?php }
              }
            ?>
              
          </ul>
        </li>
        <!-- Side navigation links -->

      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>

      <!-- Breadcrumb -->
      <div class="breadcrumb-dn mr-auto">
        <p>Dashboard v.1</p>
      </div>

      <div class="d-flex change-mode">

        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

          <!-- Dropdown -->
          <li class="nav-item dropdown notifications-nav">
            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span class="badge red">3</span> <i class="fas fa-bell"></i>
              <span class="d-none d-md-inline-block">Notifications</span>
            </a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">
                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                <span>New order received</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                <span>New order received</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                <span>Your campaign is about to end</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span
                class="clearfix d-none d-sm-inline-block">Contact</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span
                class="clearfix d-none d-sm-inline-block">Support</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">Log Out</a>
              <a class="dropdown-item" href="#">My account</a>
            </div>
          </li>

        </ul>
        <!-- Navbar links -->

      </div>

    </nav>
    <!-- Navbar -->

    <!-- Fixed button -->
    <div class="fixed-action-btn clearfix d-none d-xl-block" style="bottom: 45px; right: 24px;">

      <a class="btn-floating btn-lg red">
        <i class="fas fa-pencil-alt"></i>
      </a>

      <ul class="list-unstyled">
        <li><a class="btn-floating red"><i class="fas fa-star"></i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="fas fa-user"></i></a></li>
        <li><a class="btn-floating green"><i class="fas fa-envelope"></i></a></li>
        <li><a class="btn-floating blue"><i class="fas fa-shopping-cart"></i></a></li>
      </ul>

    </div>
    <!-- Fixed button -->

  </header>
  <!-- Main Navigation -->