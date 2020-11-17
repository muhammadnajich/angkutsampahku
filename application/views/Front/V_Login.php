<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="<?php echo base_url() ?>assets/images/logo.png" rel="icon">
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/signup/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/signup/css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <?php
            if (validation_errors() || $this->session->flashdata('failed')) {
                ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Warning!</strong>
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('failed'); ?>
                </div>
            <?php } ?>
            <form method="POST" class="appointment-form" id="appointment-form" action="<?php echo base_url('index.php/C_Login/auth')?>">
                <h2>LOGIN</h2>
                <div class="form-group-1">
                    <input type="text" name="username" id="username" placeholder="Username" required />
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Login" />
                    <label for="login" class="label-agree-term"><span>Do not Have Account? <a href="<?php echo base_url() ?>index.php/C_Akun/signup" class="term-service">Sign Up</a></span></label>
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url() ?>assets/signup/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/signup/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>