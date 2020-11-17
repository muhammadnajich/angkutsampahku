<?php
$this->load->view("Back/Parts/V_Header");
$this->load->view("Back/Parts/V_Navigation");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <a href="<?php echo base_url(); ?>index.php/C_Order/Tambah" class="btn btn-primary" style="margin-left: 15px; margin-bottom: 20px;">Compose</a>
          <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Orders</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Customer Name</th>
                  <th>Order</th>
                  <th>Price</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                     $no = 1;
    foreach($order as $b){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $b->name ?></td>
      <td><?php echo $b->note ?></td>
      <th><?php echo number_format($b->price) ?></th>
    </tr>
    <?php } ?>
                </tbody>
                <tfoot>
                  <th colspan="3" style="text-align: right">Total :</th>
                  <th></th>
                </tfoot>
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
<style type="text/css">
  th { white-space: nowrap; }
</style>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 3, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 3 ).footer() ).html(
                'Rp.'+Number(pageTotal) +' ( Rp.'+ total +' total)'
            );
        }
    } );
} );

</script>
