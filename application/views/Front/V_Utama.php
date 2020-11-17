<?php $this->load->view('Front/Parts/V_Header') ?>
<?php $this->load->view('Front/Parts/V_Navigation') ?>


  <!--==========================
    Header
  ============================-->
 
  <!--==========================
    Intro Section
  ============================-->
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

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Angkut sammpahku adalah program untuk menjembantani antar masyarakat yang ingin membuang sampah ke bank sampah untuk mendapatkan dari hasil membuang sampah melalui aplikasi ini</p>
        </header>

        <div class="row about-cols">

          

        </div>

      </div>
    </section><!-- #about -->

    <!-- #call-to-action -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Sampah Anorganik</h3>
          <p>Adapun jenis jenis sampah yang perlu anda ketahui</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Plastik</a></h4>
            <p class="description">Plastik memiliki efek yang merusak lingkungan karena sulit untuk membusuk secara alami. Diperkirakan, butuh sekitar 500 hingga 1.000 tahun agar plastik bisa terurai di alam.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Kertas</a></h4>
            <p class="description">Kertas berbahan dasar kayu akan merugikan dan mempengaruhi kelestarian hutan. Jika kertas didaur ulang, setidaknya bisa menyelamatkan pohon di hutan dari penebangan.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Logam</a></h4>
            <p class="description">Kaleng yang dibuang di tanah akan sangat sulit terurai, sehingga memicu korosi atau karat. Korosif ini dapat mengandung beberapa logam berat yang nantinya dapat dibawa ke dalam air tanah.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Kaca</a></h4>
            <p class="description">Kaca dapat didaur ulang dan menghemat sumber daya energi yang baru. Membuat produk dari kaca daur ulang menggunakan lebih sedikit bahan daripada memulai dari awal.</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    

    <!--==========================
      Skills Section
    ============================-->
    <!--==========================
      Facts Section
    ============================-->
    
    <!--==========================
      Portfolio Section






    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>if you have any question or suggest contact us at</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Jl. Parakan Arum No. 11 A, Batununggal, Bandung</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+6282 321 057 005</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">najich.muhammad2703@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
<?php $this->load->view('Front/Parts/V_Footer') ?>
