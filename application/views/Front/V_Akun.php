<?php $this->load->view('Front/Parts/V_Header') ?>
<?php $this->load->view('Front/Parts/V_Navigation') ?>

<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo base_url() ?>assets/images/dump.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Ciptakan Pulau Bersih</h2>
                <p>Jadilah bagian dari perubahan!</p>
                <a href="<?php echo base_url() ?>index.php/C_Akun/signup" class="btn-get-started scrollto">Bergabung Sekarang</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url() ?>assets/images/trash.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Ciptakan Pulau Bersih</h2>
                <p>Jadilah bagian dari perubahan!</p>
                <a href="<?php echo base_url() ?>index.php/C_Akun/signup" class="btn-get-started scrollto">Bergabung Sekarang</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

<section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Akun</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="<?php echo base_url() ?>assets/images/profil.png" class="testimonial-img" alt="">
            <h3><?php echo $this->session->userdata('user') ?></h3>
            <h4>Point : </h4>
            <p><?php echo $this->session->userdata('point') ?></p>
          </div>
          </div>

        </div>

      </div>
    </section>

<?php $this->load->view('Front/Parts/V_Footer') ?>