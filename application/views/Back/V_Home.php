<?php
$this->load->view("Back/Parts/V_Header");
$this->load->view("Back/Parts/V_Navigation");
$warna = array('#3c8dbc','#00a65a','#f56954','#00c0ef');
$ukuran = array('90', '120');
$a = 0;
$b = 0;
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
   <div class="row">
        
        <!-- <div class="col-lg-6 col-xs-6">
             small box           <div class="small-box bg-aqua">
            <div class="inner">
              <?php foreach ($home as $h) { ?>
              <h3><?php echo $h->total  ?></h3>
              <p><?php echo $h->status ?></p>
            <?php } ?>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="<?php echo base_url() ?>index.php/C_Order" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
      </div>

    <div class="row">
        <!-- <div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Rating Employee</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <?php foreach ($pegawai as $p) { 
                  $nilai = $p->total_rating / $p->jumlah_rating;
                  ?>
                <div class="col-xs-6 col-md-3 text-center">
                  <input type="text" class="knob" value="<?php echo $nilai ?>" data-skin="tron" data-thickness="0.2" data-width="<?php echo $ukuran[$a] ?>" data-height="<?php echo $ukuran[$a] ?>" data-fgColor="<?php echo $warna[$b] ?>" data-readonly="true" data-angleArc="250" >

                  <div class="knob-label"><?php echo $p->designer_name ?></div>
                </div>
              <?php 
              $a++;
              $b++;
              if ($a == 2) {
                $a = 0;
              }else if ($b == 4) {
                $b = 0;
              }
            } ?>


              </div>
            
            </div>
            
          </div>
        </div>
         -->
      </div>
      <!-- <div class="row"> 
        <div class="col-lg-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="myChart" style="height: 100px;"></canvas>
            </div>
             /.box-body -->
          <!-- </div>
          </div>
      </div>  -->
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


<script type="text/javascript">
  $(function(){
     $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle          // Previous start angle
              , sat = this.startAngle         // Start angle
              , ea                            // Previous end angle
              , eat = sat + a                 // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
  });
</script>