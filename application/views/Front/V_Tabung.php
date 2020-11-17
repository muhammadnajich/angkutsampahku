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
<section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Tabung Sekarang</h3>
          <p>Isi data dengan teliti!</p>
        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form  method="post" action="<?php echo base_url() ?>index.php/C_Tabung/upload" enctype="multipart/form-data" onSubmit="validasi()">
            <div class="form-group">
              <label>Pilih Jenis Sampah</label>
              <select class="form-control" name="id_jenis" id="id_jenis"  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" style="width: 200px;" />
                <?php foreach ($jenis as $j) { ?>
                <option value="<?php echo $j->id_jenis ?>"><?php echo $j->jenis_sampah ?></option>
              <?php } ?>
              </select>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <label>Perkiraan Berat Sampah</label>
              <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user')  ?>">
              <p style="text-align: justify;"><input type="number" class="form-control" name="berat" id="berat"  data-rule="minlen:4" data-msg="More than 10 Kg" placeholder="Berat" style="width: 100px; height: 10px; float: left;" /> Kg</p> 
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <label>Alamat Pengambilan</label>
                <textarea name="alamat" class="form-control" style="width: 400px"></textarea>
            </div>
            <div class="form-group">
              <label>Foto</label>
              <input type="file" class="form-control" name="gambar" id="gambar" style="width: 400px;"/>
            </div>
            <div class="text-center"><button type="submit">Submit</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->
<script type="text/javascript">
  function validasi() {
      var berat = document.getElementById('berat').value;
      if(berat <= 10 ){
        alert('More than 10 Kg !');
      }
  }
</script>
<?php $this->load->view('Front/Parts/V_Footer') ?>