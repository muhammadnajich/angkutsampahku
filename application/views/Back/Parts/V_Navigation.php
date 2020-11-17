
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>admin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>SK</span>
      <!-- logo for regular state and mobile devices -->
      <img src="<?php echo base_url() ?>assets/images/logo.png" width="50">
      <span>Sampahku</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->


          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>/assets/admin/dist/img/avatar.png" class="user-image" alt="User Image">
              <span class="hidden-xs"> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>/assets/admin/dist/img/avatar.png" class="img-circle" alt="User Image">

                <p>
                    <?php echo $this->session->userdata('user'); ?>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="center" style="margin-left: 90px;">
                  <a href="<?php echo base_url();?>index.php/C_Login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>/assets/admin/dist/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('user'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Utama</li>
        <?php if ($this->session->userdata('hak') == "admin"){ ?>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard text-yellow"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url() ?>index.php/C_Home"><i class="fa fa-circle-o text-aqua"></i> Dashboard</a></li> 
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-archive text-yellow"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($this->uri->segment(1)=="Account") {echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/C_Akun"><i class="fa fa-circle-o text-aqua"></i>Accounts</a></li>
            <li class="<?php if($this->uri->segment(1)=="Driver") {echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/C_Driver"><i class="fa fa-circle-o text-aqua"></i>Driver</a></li>
            <li class="<?php if($this->uri->segment(1)=="Jenis Sampah") {echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/C_Jenis"><i class="fa fa-circle-o text-aqua"></i>Kelola Sampah</a></li>
            <li class="<?php if($this->uri->segment(1)=="Request Sampah") {echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/C_Order"><i class="fa fa-circle-o text-aqua"></i>Request Sampah</a></li>
            <li class="<?php if($this->uri->segment(1)=="Canceled Sampah") {echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/C_Order/Canceled"><i class="fa fa-circle-o text-aqua"></i>Canceled Sampah</a></li>
            <li class="<?php if($this->uri->segment(1)=="Accepted Sampah") {echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/C_Order/Accepted"><i class="fa fa-circle-o text-aqua"></i>Accepted Sampah</a></li>
          </ul>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-money text-yellow"></i> <span>Transaction</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($this->uri->segment(1)=="transaksi") {echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/C_Transaction"><i class="fa fa-circle-o text-aqua"></i>Transaction</a></li>
            <li class="<?php if($this->uri->segment(1)=="history") {echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/C_Transaction/History"><i class="fa fa-circle-o text-aqua"></i>History</a></li>
          </ul>
        <?php }else{ ?>
          <li class="active treeview">
          <a href="#">
            <i class="fa fa-envelope text-yellow"></i> <span>Mail</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($this->uri->segment(1)=="mail") {echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/C_Mail"><i class="fa fa-circle-o text-aqua"></i>Mail</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-star text-yellow"></i> <span>Rating</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($this->uri->segment(1)=="rating") {echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/C_Rating"><i class="fa fa-circle-o text-aqua"></i>Rating</a></li>
          </ul>
        </li>
      <?php } ?>
        </li>
        
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
