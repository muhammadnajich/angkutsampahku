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
          <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Request</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Jenis Sampah</th>
                  <th>Berat</th>
                  <th>Gambar</th>
                  <th>Alamat</th>
                  <th>Verifikasi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                     $no = 1;
    foreach($order as $b){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $b->username ?></td>
      <td><?php echo $b->jenis_sampah ?></td>
      <td><?php echo $b->berat ?> kg</td>
      <td><img src="<?php echo base_url('assets/images/'.$b->gambar); ?>" alt="<?php echo $b->gambar; ?>" width="50" height="50" /></td>
      <td><?php echo $b->alamat ?></td>
      <td>
            <?php
            $terima = array(
                'class' => 'btn btn-info',
                'data-toggle' => 'tooltip',
                'title' => 'Terima Data!',
                'onclick' => 'javascript: return confirm(\'Anda yakin akan menerima request dari ' . $b->username . '?\')'
            );
            echo anchor(site_url('index.php/C_Order/penerimaan/' . $b->id_sampah), '<span class="fa fa-check"></span>', $terima);
            ?>
            <?php
            $terima = array(
                'class' => 'btn btn-danger',
                'data-toggle' => 'tooltip',
                'title' => 'Tolak Data!',
                'onclick' => 'javascript: return confirm(\'Anda yakin akan menolak request dari ' . $b->username . '?\')'
            );
            echo anchor(site_url('index.php/C_Order/tolak/' . $b->id_sampah), '<span class="fa fa-times"></span>', $terima);
            ?>
      </td>
    </tr>
    <?php } ?>
                </tbody>
              </table>
            </div>
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