<?php $this->load->view('Front/Parts/V_Header') ?>
<?php $this->load->view('Front/Parts/V_Navigation') ?>

<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo base_url() ?>assets/front/img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Ciptakan Pulau Bersih</h2>
                <p>Jadilah bagian dari perubahan!</p>
                <a href="<?php echo base_url() ?>index.php/C_Akun/signup" class="btn-get-started scrollto">Bergabung Sekarang</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url() ?>assets/front/img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>At vero eos et accusamus</h2>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
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

<section id="contact" class="section-bg wow fadeInUp">
      <center>
      <h2>Notifikasi</h2>
      </center>
      <div class="container">
          <div class="card bg-danger">
              <div class="card-body">
                <p style="color: white"></p>
              </div>
          </div>
      </div>
    </section><!-- #contact -->

<?php $this->load->view('Front/Parts/V_Footer') ?>