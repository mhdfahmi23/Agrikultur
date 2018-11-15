<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- <link rel="shortcut icon" href="<?= base_url('assets/front/img/sl1500.png'); ?>" /> -->
        <title>Tutorial Sekolah Langit | Form Login CI</title>
        <!-- CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/admin/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/font-awesome/css/font-awesome.min.css'); ?>" >
        <link rel="stylesheet" href="<?= base_url('assets/admin/adminlte/css/AdminLTE.min.css'); ?>" >
        <link rel="stylesheet" href="<?= base_url('assets/admin/adminlte/css/skins/skin-green.min.css') ?>">

        <style type="text/css">
            input {
                color: #fff;
            }
        </style>

        <!-- JQUERY -->
        <script src="<?= base_url('assets/admin/js/jquery-latest.min.js'); ?>"></script>
    </head>
<body>
    <div class="login-box">
        <?php if(isset($_SESSION['err'])): ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> <?= $this->session->userdata('err'); ?>
            </div>
        <?php endif ?>
        <div class="login-logo">
            <img src="<?= base_url('assets/front/img/sl1500.png') ?>">
        </div>
        <div class="login-box-body">
            <form action="<?php echo base_url('login') ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="username" class="form-control" name="username" placeholder="Username" required="required" />
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="user_password" required="required" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets/admin/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
