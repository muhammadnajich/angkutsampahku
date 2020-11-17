<?php
$this->load->view("Back/Parts/V_Header");
$this->load->view("Back/Parts/V_Navigation");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
          <?php echo $this->session->userdata('message'); ?>
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Account</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <?php echo form_open_multipart('index.php/C_Akun/tambah_aksi'); ?>
              
              <div class="box-body">
                <div class="form-group">
                  <?php echo form_label('Username', 'username'); ?>
                  <?php echo form_error('password'); ?>
                  <?php
                  $data = array('type' => 'text',
                              'name' => 'username',
                              'class' => 'form-control',
                              'id' => 'username',
                              'placeholder' => 'Username',
                              'required' => 'required',
                              'autofocus' => 'autofocus'
                );
                echo form_input($data);
            ?>
                </div>
                <div class="form-group">
                  <?php echo form_label('Password', 'password'); ?>
                  <?php echo form_error('password'); ?>
                  <?php
                  $data = array('type' => 'text',
                              'name' => 'password',
                              'class' => 'form-control',
                              'id' => 'password',
                              'placeholder' => 'Password',
                              'autofocus' => 'autofocus',
                              'required' => 'required'
                );
                echo form_input($data);
            ?>
                </div>
                <div class="form-group">
                  <label>Hak Akses</label>
                  <select name="hak_akses" class="form-control">
                      <option>Admin</option>
                      <option>Pegawai</option>
                      <option>User</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
          <?php echo anchor(site_url('index.php/C_Akun'), 'Kembali', 'class="btn btn-default"'); ?>
          <?php echo form_submit('submit', 'Tambah', 'class="btn btn-primary"'); ?>
              </div>
        <?php echo form_close(); ?>
          </div>
          </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
     
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          
          <!-- /.box -->

         

      
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
  $this->load->view("Back/Parts/V_Footer");
 ?>