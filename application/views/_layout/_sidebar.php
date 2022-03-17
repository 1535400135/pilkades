<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/profil1.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name'); ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <!-- <li class="header">LIST MENU</li> -->
      <!-- Optionally, you can add icons to the links -->
      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <?php
        if (($this->session->userdata('id_role') == 1)) {
      ?>

      <li class="header">MENU UTAMA</li>      
      <li <?php if ($page == 'calon') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('calon'); ?>">
          <i class="fa fa-male"></i>
          <span>Daftar Calon Kades</span>
        </a>
      </li> 
      <?php } ?>

      <li class="header">HASIL PEMILIHAN</li>
      
      <li <?php if ($page == 'Rekap Hasil') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('rekaphasil'); ?>">
          <i class="fa fa-table"></i>
          <span>Hasil Perolehan</span>
        </a>
      </li>

      <li <?php if ($page == 'Pemilihan') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('pemilihan'); ?>">
          <i class="fa fa-table"></i>
          <span>E-Voting</span>
        </a>
      </li>
      
      <!-- This links only appear to admin user(s)-->
        <?php
      if (($this->session->userdata('id_role') == 1)) {
        ?>

      <li class="header">PEMILIH</li>
      <li <?php if ($page == 'pengguna') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Pengguna'); ?>">
          <i class="fa fa-users"></i>
          <span>Data Pemilih </span>
        </a>
      </li>
      <?php } ?>
      <li class="header">KUNCI RSA</li>
      
      <li <?php if ($page == 'Rekap Hasil') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('rsa'); ?>">
          <i class="fa fa-table"></i>
          <span>Kunci RSA</span>
        </a>
      </li>  
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>