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
        <a href="<?php echo base_url(); ?>index.php/C_Jenis/Tambah" class="btn btn-primary" style="margin-left: 15px; margin-bottom: 20px;">Compose</a>
          <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Jenis Sampah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Sampah</th>
                  <th>Kode</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                     $no = 1;
    foreach($jenis as $b){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $b->jenis_sampah ?></td>
      <td><?php echo $b->kode ?></td>
      <td><?php echo $b->deskripsi ?></td>
      <td><?php echo $b->harga ?></td>
      <td><a href="<?php echo base_url('index.php/C_Jenis/edit/'.$b->id_jenis); ?>" class="btn btn-warning" data-toggle="tooltip" title="Edit Data!"><span class="fa fa-pencil" ></span></a>
            <?php
            $hapus = array(
                'class' => 'btn btn-danger',
                'data-toggle' => 'tooltip',
                'title' => 'Hapus Data!',
                'onclick' => 'javascript: return confirm(\'Anda yakin menghapus ' . $b->jenis_sampah . '?\')'
            );
            echo anchor(site_url('index.php/C_Jenis/delete/' . $b->id_jenis), '<span class="fa fa-trash"></span>', $hapus);
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