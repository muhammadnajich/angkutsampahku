<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo base_url() ?>assets/images/logo.png" rel="icon">

    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/signup/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/signup/css/style.css">
</head>
<body>
            'name' => $name,
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kabupaten' => $kabupaten,
            'kecamatan' => $kecamatan,
            'jalan' => $jalan,
            'rt' => $rt,
            'rw' => $rw,
            'kodepos' => $kodepos,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'hak_akses' => $hak_akses
    <div class="main">

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form" action="<?php echo base_url() ?>index.php/C_Akun/tambah_aksi">
                <h2>SIGN UP</h2>
                <div class="form-group-1">
                    <input type="text" name="name" id="name" placeholder="Nama Anda" required />
                    <input type="text" name="provinsi" id="provinsi" placeholder="Provinsi"/>
                    <input type="text" name="kota" id="kota" placeholder="Kota"/>
                    <input type="text" name="kabupaten" id="kabupaten" placeholder="Kabupaten"/>
                    <input type="text" name="kecamatan" id="kecamatan" placeholder="Kecamatan"/>
                    <input type="text" name="jalan" id="jalan" placeholder="Jalan"/>
                    <input type="number" name="rt" id="rt" placeholder="RT" style="width: 50px"/>
                    <input type="number" name="rw" id="rw" placeholder="RW" style="width: 50px"/>
                    <input type="number" name="kodepos" id="kodepos" placeholder="Kode Pos" style="width: 60px"/>
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="text" name="username" id="username" placeholder="Username" required />
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Sign Up" />
                    <label for="login" class="label-agree-term"><span>Already Have Account? <a href="<?php echo base_url() ?>index.php/C_Login" class="term-service">Login</a></span></label>
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url() ?>assets/signup/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/signup/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>