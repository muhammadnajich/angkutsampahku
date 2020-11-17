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
              <h3 class="box-title">History Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Menarik Point</th>
                  <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                     $no = 1;
                  foreach($transaksi as $b){ 
                  ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $b->username ?></td>
      <td><?php echo $b->tarik_point ?></td>
      <td><?php echo $b->tanggal ?></td>
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