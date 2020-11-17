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
              <h3 class="box-title">Input Catatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <?php echo form_open_multipart('index.php/C_Order/penolakan'); ?>
              
              <div class="box-body">
                <div class="form-group">
                  <label>Catatan</label>
                  <?php foreach ($sampah as $s): ?>
                  <input type="hidden" name="id_sampah" value="<?php echo $s->id_sampah ?>">
                  <input type="hidden" name="tanggal" value="<?php echo $s->tanggal ?>">
                  <?php endforeach ?>
                  <textarea class="form-control" name="catatan"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
          <?php echo anchor(site_url('index.php/C_Order'), 'Kembali', 'class="btn btn-default"'); ?>
          <?php echo form_submit('submit', 'Submit', 'class="btn btn-primary"'); ?>
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