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
              <h3 class="box-title">Input Data Jenis Sampah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <?php echo form_open_multipart('index.php/C_Jenis/tambah_aksi'); ?>
              
              <div class="box-body">
                <div class="form-group">
                  <?php echo form_label('Jenis Sampah', 'jenis_sampah'); ?>
                  <?php echo form_error('jenis_sampah'); ?>
                  <?php
                  $data = array('type' => 'text',
                              'name' => 'jenis_sampah',
                              'class' => 'form-control',
                              'id' => 'jenis_sampah',
                              'placeholder' => 'Jenis Sampah',
                              'required' => 'required',
                              'autofocus' => 'autofocus'
                );
                echo form_input($data);
            ?>
                </div>
                <div class="form-group">
                  <?php echo form_label('Kode', 'kode'); ?>
                  <?php echo form_error('kode'); ?>
                  <?php
                  $data = array('type' => 'text',
                              'name' => 'kode',
                              'class' => 'form-control',
                              'id' => 'kode',
                              'placeholder' => 'Kode',
                              'autofocus' => 'autofocus',
                              'required' => 'required'
                );
                echo form_input($data);
            ?>
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" id="deskripsi"></textarea>
                </div>
                <div class="form-group">
                  <?php echo form_label('Harga', 'harga'); ?>
                  <?php echo form_error('harga'); ?>
                  <?php
                  $data = array('type' => 'number',
                              'name' => 'harga',
                              'class' => 'form-control',
                              'id' => 'harga',
                              'placeholder' => 'Harga',
                              'autofocus' => 'autofocus',
                              'required' => 'required'
                );
                echo form_input($data);
            ?>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
          <?php echo anchor(site_url('index.php/C_Jenis'), 'Kembali', 'class="btn btn-default"'); ?>
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