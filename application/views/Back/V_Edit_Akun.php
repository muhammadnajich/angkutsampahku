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
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Akun</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart('index.php/C_Akun/update/'.$id_user); ?>
              <div class="box-body">
                <div class="form-group">
                  <?php echo form_label('Username', 'username'); ?>
            <?php echo form_error('username'); ?>
            <?php
                $data = array('type' => 'text',
                              'name' => 'username',
                              'value' => set_value('username', $username),
                              'class' => 'form-control',
                              'id' => 'username',
                              'placeholder' => 'Username',
                              'autofocus' => 'autofocus'
                );
                echo form_input($data);
            ?>
                </div>
                <div class="form-group">
                  <?php echo form_label('Password', 'password'); ?>
            <?php echo form_error('password'); ?>
            <?php
                $data = array('type' => 'password',
                              'name' => 'password',
                              'value' => set_value('password', $password),
                              'class' => 'form-control',
                              'id' => 'password',
                              'placeholder' => 'Password',
                              'autofocus' => 'autofocus'
                );
                echo form_input($data);
            ?>
                </div>
                <div class="form-group">
                  <label>Hak Akses</label>
                  <select name="hak_akses" class="form-control" value="<?php echo $hak_akses ?>">
                      <option>Admin</option>
                      <option>Pegawai</option>
                      <option>User</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
          <?php echo anchor(site_url('index.php/C_Akun'), 'Kembali', 'class="btn btn-default"'); ?>
                <?php echo form_submit('submit', 'Edit', 'class="btn btn-warning"'); ?>
          <?php echo form_hidden('id', $id_user); ?>
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