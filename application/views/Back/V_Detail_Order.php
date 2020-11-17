<?php 
$this->load->view("Back/Parts/V_Header");
$this->load->view("Back/Parts/V_Navigation");
 ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Order
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Orders</a></li>
        <li class="active">Detail Order</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/admin/dist/img/avatar.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $designer_name ?></h3>

              <p class="text-muted text-center">Designer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Customer Name</b> <a class="pull-right"><?php echo $name; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Price</b> <a class="pull-right"><?php echo number_format($price) ?></a>
                </li>
                <li class="list-group-item">
                  <b>Rating</b> <a class="pull-right"><?php echo $rating ?></a>
                </li>
              </ul>

              <a href="<?php echo base_url() ?>index.php/C_Order" class="btn btn-primary btn-block"><b>Back</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Customer</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="glyphicon glyphicon-home margin-r-5"></i> Company Name</strong>

              <p class="text-muted">
                <?php echo $company_name ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

              <p class="text-muted"><?php echo $country ?>, <?php echo $province ?></p>
              <p class="text-muted"><?php echo $city ?></p>
              <p class="text-muted"><?php echo $address ?></p>

              <hr>

              <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>

              <p><?php echo $email ?></p>

              <hr>

			  <strong><i class="fa fa-phone margin-r-5"></i> Phone Number</strong>

              <p><?php echo $phone ?></p>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#timeline" data-toggle="tab">About Order</a></li>
            </ul>
            <div class="tab-content">
                <!-- Post -->
                
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          <?php echo $order_date ?>
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="glyphicon glyphicon-shopping-cart bg-blue"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Product Type</a></h3>

                      <div class="timeline-body">
                        <?php echo $product_type ?>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-file bg-aqua"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Note</a> </h3>
                       <div class="timeline-body">
                        <?php echo $note ?>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="glyphicon glyphicon-ok bg-yellow"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Status</a></h3>

                      <div class="timeline-body">
                        <?php echo $status ?>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
<?php $this->load->view('Back/Parts/V_Footer') ?>