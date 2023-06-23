
<!DOCTYPE html>
    <html lang="en-US">
        <head>
            <meta charset="UTF-8"/>
            <link rel="icon" type="image/x-icon" href="images/logo-header.png" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
            <meta name="csrf-param" content="_csrf">
<meta name="csrf-token" content="J2ymltZadc-n9AoZQ3vb9XqoLwN1tG4gZf_B3jNmmjdvONTuuz9Dqp-afyh1Ke-mPc5MTUTtKBIftpO_HiDibQ==">
            <title>Sistem Informasi Perpustakaan</title>
            <link href="assets/82ce6ab9/css/bootstrap.css" rel="stylesheet">
<link href="css/site.css" rel="stylesheet">
<link href="css/eofficestyle.css" rel="stylesheet">
<link href="css/eofficestyle_bo.css" rel="stylesheet">
<link href="adminlte/css/AdminLTE.css" rel="stylesheet">
<link href="css/proses-step.css" rel="stylesheet">
<link href="css/loading.css" rel="stylesheet">
<link href="assets/9f702a68/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/8b93b1c2/css/AdminLTE.min.css" rel="stylesheet">
<link href="assets/8b93b1c2/css/skins/_all-skins.min.css" rel="stylesheet">        </head>
        <body class="hold-transition skin-green fixed sidebar-collapse- sidebar-mini-">
                        <div lass="wrapper">

                
<header class="main-header">
        <a href="" class="logo">
        <span class="logo-mini art-object567354297-bo-mini"></span>
        <span class="logo-lg" style="text-align: left;">    
            <div class="art-object567354297-bo" data-left="0%"></div>
            <h1 class="art-headline-bo" data-left="10%">Pustaka Mandiri</h1>
            <h2 class="art-slogan-bo" data-left="10.09%">Universitas Andalas</h2>
        </span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <!--<span style="font-weight: bold;">MENU</span>-->
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span id="notifikasi-info-jml" class="label label-warning" style="font-size:12px;">0</span>
                    </a>
                    <ul id="notifikasi-info-list" class="dropdown-menu">
                        <!-- Notofikasi List Informasi -->
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="images/nobody.png" class="user-image" alt="User Image" style="background-color: white"/>
                        <span class="hidden-xs">
                            Akun Saya
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header" style="min-height: 80px;max-height:80px;">
                            <table border="0" style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 50px;">
                                            <img src="images/nobody.png" class="user-image" style="width: 50px;height:50px;background-color: white;margin: 0px;" alt="User Image"/>
                                        </td>
                                        <td style="text-align: left;color: white;font-stretch: condensed;padding-left: 10px;">
                                            RAZZAQ ARDANA                                            <br/>
                                            <small>Member sejak Aug,2017</small>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-danger btn-flat" href="logout" data-method="post"><i class="fa fa-power-off"></i> Keluar</a>                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <!-- Control Sidebar Toggle Button -->
                <!--                <li>
                                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-user"></i></a>
                                </li>-->
            </ul>
        </div>
    </nav>
</header>

<div id="modal-dialog-pengumuman" class="fade modal" role="dialog" tabindex="-1" data-backdrop="true">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
Pengumuman & Informasi
</div>
<div class="modal-body">
<div id="modalContent"></div>
</div>

</div>
</div>
</div>
                <!--overflow-y: auto;overflow-x: hidden;-->
<aside class="main-sidebar" style="height: 100%;scrollbar-width:thin;overflow-y: auto;overflow-x: hidden;">
    <section class="sidebar">
        <div class="user-panel" style="height: 80px;">
            <div class="pull-left image">
                <img src="images/nobody.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>
                    RAZZAQ ARDANA (17115...                    <br/>
                    <i style="font-size: 11px;">ID : 1711513011</i>
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu"><li class="header"><span><span>MENU UTAMA</span></span></li>
<li class="active"><a href=""><i class="fa fa-home"></i>  <span>Home</span></a></li>
<li><a href="member/peminjaman/perpanjang.php"><i class="fa fa-refresh"></i>  <span>Perpanjang Peminjaman Buku</span></a></li>
<li><a href="member/peminjaman/riwayat.php"><i class="fa fa-history"></i>  <span>Riwayat Peminjaman Buku</span></a></li>
<li><a href="member/kliring/index"><i class="fa fa-archive"></i>  <span>Kliring Perpustakaan</span></a></li></ul>    </section>
</aside>
                <div class="content-wrapper">
    <section class="content">
                <div class="site-index" style="margin-top: 0px;">
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-info">
                <div class="row">
                    <div class="col-md-10">
                        <h4>Hi RAZZAQ ARDANA (1711513011)</h4>
                        <p style="text-align: justify;">
                            Sistem Informasi Perpustakaan merupakan aplikasi pendukung yang dikembangkan untuk memudahkan mahasiswa mengakses layanan yang ada di Perpustakaan Universitas Andalas secara daring.
                        </p>
                    </div>
                    <div class="col-md-2" style="text-align: right;vertical-align: middle;padding-top: 3px;padding-bottom: 3px;font-size: 26px;">
                        18 Juni 2023                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="dashboard-list-pengumuman"></div>
        <div id="dashboard-list-jdih"></div>
    </div>
    <div class="row">
        <div id="dashboard-pagu"></div>
        <div id="dashboard-catatan"></div>
    </div>
</div>
    </section>
</div>

<footer class="main-footer" style="font-size: 13px;font-style: italic;">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0.40-0.1    </div>
    <strong>&copy; <a href="http://www.unand.ac.id" target="_blank">2021</a> <a href="http://www.unand.ac.id/" target="_blank">Universitas Andalas</a>.</strong> All rights reserved.
</footer>

            </div>

            <script src="assets/28cefd75/jquery.js"></script>
<script src="assets/9d28d2c7/yii.js"></script>
<script src="adminlte/js/app.min.js"></script>
<script src="js/loading.js"></script>
<script src="assets/82ce6ab9/js/bootstrap.js"></script>
<script src="assets/8b93b1c2/js/adminlte.min.js"></script>
<script>jQuery(function ($) {
jQuery('#modal-dialog-pengumuman').modal({"show":false,"keyboard":false});
        
    //Load Notifikasi
    function notifInfo() {
        $.ajax({
            type: 'GET',
            url: 'dashboard/notifikasi-info',
            success: function (data) {
                var rs = JSON.parse(data);
                $('#notifikasi-info-jml').html(rs.jml);
                $('#notifikasi-info-list').html(rs.list);
            }
        });
    }
    notifInfo();
        
        
});</script>        </body>
    </html>
        