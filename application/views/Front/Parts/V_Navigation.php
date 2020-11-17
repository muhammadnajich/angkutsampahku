 <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1 style="color: white;"><img src="<?php echo base_url() ?>assets/images/logo.png" width="50px;"> Angkut Sampahku</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <?php if ($this->session->userdata('isLoginAdmin') == TRUE) { ?>
          <li class="menu-active"><a href="<?php echo base_url() ?>index.php/C_Utama">Home</a></li>
          <li><a href="<?php echo base_url() ?>index.php/C_Tabung">Tabung Sekarang</a></li>
          <li><a href="<?php echo base_url() ?>index.php/C_Utama/Akun">Akun</a></li>
          <li><a href="<?php echo base_url() ?>index.php/C_Login/logout">Logout</a></li>
          <?php }else{ ?>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="<?php echo base_url() ?>index.php/C_Login">Login</a></li>
          <?php } ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
