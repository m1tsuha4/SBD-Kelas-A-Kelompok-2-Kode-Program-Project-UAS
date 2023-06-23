
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="images/logo-header.png" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-param" content="_csrf">
<meta name="csrf-token" content="PlyW_5QJheNNu1hHB7WK-h1RHB7euluZTSkGnD3Kq_NyNPWO0GH3lhjcHy1UgOGLeglOcurXD8kubUrQe6_hyw==">
        <title>Sistem Informasi Perpustakaan - Login</title>
        <link href="assets/82ce6ab9/css/bootstrap.css" rel="stylesheet">
<link href="css/site.css" rel="stylesheet">
<link href="css/eofficestyle.css" rel="stylesheet">
<link href="css/eofficestyle_bo.css" rel="stylesheet">
<link href="adminlte/css/AdminLTE.css" rel="stylesheet">
<link href="css/proses-step.css" rel="stylesheet">
<link href="css/loading.css" rel="stylesheet">
<link href="assets/9f702a68/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/8b93b1c2/css/AdminLTE.min.css" rel="stylesheet">
<link href="assets/8b93b1c2/css/skins/_all-skins.min.css" rel="stylesheet">    </head>
    <body class="hold-transition skin-blue-light layout-top-nav">
                <div class="wrapper">
            
<header class="main-header">
    
        <!--</nav>-->
</header>
            
<div class="content-wrapper bg-body">
    <div class="container">
        <section class="content">
                        
<div class="login-box" style="margin-top: 2%;">
    <div class="box box-success-">
        <div class="box-body bg-gray-light">
            <div class="profile-user-img img-responsive img-circle" style="text-align: center;border: none;">
                <a href="dashboard.php"><img src="images/logo-header.png" alt="" style="width:50%;text-align:center;"></a>            </div>
            <h3 class="profile-username text-center" style="font-weight: bold;padding-left: 3px;padding-right: 3px;margin-bottom: -6px;margin-top: 0px;">
                <font style="font-size: 26px;color: green;letter-spacing: 2px;font-style: italic;">Pustaka Mandiri</font>
            </h3>
            <h3 class="profile-username text-center" style="font-weight: bold;padding-left: 3px;padding-right: 3px;margin-bottom: -12px;">
                <font style="font-size: 14px;font-style: italic;font-weight: bold;">Sistem Informasi Perpustakaan</font>
            </h3>
            <h3 class="profile-username text-center" style="font-weight: bold;padding-left: 3px;padding-right: 3px;">
                <font style="font-size: 14px;">UNIVERSITAS ANDALAS</font>
            </h3>
            <div class="login-box-body bg-gray-light" style="margin-top: -10px;">
                <div class="alert alert-info" style="text-align: center;padding: 10px;">
                    Bagi mahasiswa silakan login menggunakan akun perpustakaan. Hubungi perpustakaan jika tidak bisa login.
                </div>
                <form id="login-form" action="login" method="post" style="margin-top:0px;">
<input type="hidden" name="_csrf" value="PlyW_5QJheNNu1hHB7WK-h1RHB7euluZTSkGnD3Kq_NyNPWO0GH3lhjcHy1UgOGLeglOcurXD8kubUrQe6_hyw==">
                <div class="form-group has-feedback field-loginform-username required">

<input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" placeholder="Username" aria-required="true"><span class='glyphicon glyphicon-envelope form-control-feedback'></span>

<p class="help-block help-block-error"></p>
</div>
                <div class="form-group has-feedback field-loginform-password required">

<input type="password" id="loginform-password" class="form-control" name="LoginForm[password]" placeholder="Password" aria-required="true"><span class='glyphicon glyphicon-lock form-control-feedback'></span>

<p class="help-block help-block-error"></p>
</div>
                <div class="form-group has-feedback field-loginform-verifycode" style="">

<div class="row"><div class="col-lg-4" style="text-align:center;margin-top:0px"><img id="loginform-verifycode-image" src="captcha?v=648e7300e96878.99993205" alt=""></div><div class="col-lg-8"><input type="text" id="loginform-verifycode" class="form-control" name="LoginForm[verifyCode]" placeholder="Kode Verifikasi"></div></div>

<p class="help-block help-block-error"></p>
</div>
                <div class="row" style="margin-bottom: -10px;">
                    <div class="col-md-12" style="padding-left: 0px;padding-right: 0px;text-align: center;">
                        <button type="submit" class="btn btn-primary btn-flat" name="login-button"><i class="fa fa-key"></i> Masuk</button>                    </div>
                </div>


                </form>                <div class="row">
                    <div class="col-sm-12" style="text-align: center;margin-top: 20px;font-size: 12px;">
                        <b>
                            <i>
                                &copy; <a href="http://www.unand.ac.id" target="_blank">2021</a> <a href="http://www.unand.ac.id/" target="_blank">Universitas Andalas</a>. All rights reserved. V.2.0.40-0.1                            </i>
                        </b>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
<!-- /.login-box-body -->
        </section>
    </div>
</div>

<!--<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0.40-0.1    </div>
    <strong>&copy; <a href="http://www.unand.ac.id" target="_blank">2021-2023</a> <a href="http://www.unand.ac.id/" target="_blank">Universitas Andalas</a>.</strong> All rights reserved.
</footer>-->
        </div>

        <script src="assets/28cefd75/jquery.js"></script>
<script src="assets/9d28d2c7/yii.js"></script>
<script src="adminlte/js/app.min.js"></script>
<script src="js/loading.js"></script>
<script src="assets/9d28d2c7/yii.validation.js"></script>
<script src="assets/9d28d2c7/yii.captcha.js"></script>
<script src="assets/9d28d2c7/yii.activeForm.js"></script>
<script src="assets/82ce6ab9/js/bootstrap.js"></script>
<script src="assets/8b93b1c2/js/adminlte.min.js"></script>
<script>jQuery(function ($) {
jQuery('#loginform-verifycode-image').yiiCaptcha({"refreshUrl":"\mandiri\/captcha?refresh=1","hashKey":"yiiCaptcha\/site\/captcha"});
jQuery('#login-form').yiiActiveForm([{"id":"loginform-username","name":"username","container":".field-loginform-username","input":"#loginform-username","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Username Wajib diisi!"});}},{"id":"loginform-password","name":"password","container":".field-loginform-password","input":"#loginform-password","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Password Wajib diisi!"});}},{"id":"loginform-verifycode","name":"verifyCode","container":".field-loginform-verifycode","input":"#loginform-verifycode","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.captcha(value, messages, {"hash":432,"hashKey":"yiiCaptcha/site/captcha","caseSensitive":false,"message":"Kode Verifikasi salah!"});}}], []);
});</script>    </body>
</html>
