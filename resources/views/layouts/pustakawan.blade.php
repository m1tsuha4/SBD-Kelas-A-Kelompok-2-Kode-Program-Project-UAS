<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" type="image/x-icon" href="{{asset('2023061803/mandiri/images/logo-header.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="J2ymltZadc-n9AoZQ3vb9XqoLwN1tG4gZf_B3jNmmjdvONTuuz9Dqp-afyh1Ke-mPc5MTUTtKBIftpO_HiDibQ==">
    <title>Dashboard Pustakawan</title>
    <link href="{{asset('2023061803/mandiri/assets/82ce6ab9/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('2023061803/mandiri/css/site.css')}}" rel="stylesheet">
    <link href="{{asset('2023061803/mandiri/css/eofficestyle.css')}}" rel="stylesheet">
    <link href="{{asset('2023061803/mandiri/css/eofficestyle_bo.css')}}" rel="stylesheet">
    <link href="{{asset('2023061803/mandiri/adminlte/css/AdminLTE.css')}}" rel="stylesheet">
    <link href="{{asset('2023061803/mandiri/css/proses-step.css')}}" rel="stylesheet">
    <link href="{{asset('2023061803/mandiri/css/loading.css')}}" rel="stylesheet">
    <link href="{{asset('2023061803/mandiri/assets/9f702a68/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('2023061803/mandiri/assets/8b93b1c2/css/AdminLTE.min.css')}}" rel="stylesheet">
    <link href="{{asset('2023061803/mandiri/assets/8b93b1c2/css/skins/_all-skins.min.css')}}" rel="stylesheet">
</head>
<body class="hold-transition skin-green fixed sidebar-collapse- sidebar-mini-">
<div class="main">


    <header class="main-header">
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <!--<span style="font-weight: bold;">MENU</span>-->
            </a>

            <div class="navbar-custom-menu">

                <ul class="nav navbar-nav">
                    <!-- Tasks: style can be found in dropdown.less -->
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('2023061803/images/person_outline.svg')}}" class="user-image" alt="User Image" style="background-color: white"/>
                            <span class="hidden-xs">
                            Akun Saya
                        </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a class="btn btn-primary btn-flat" href="/pustakawan/profile" data-method="get"> Profile</a>
                                </div>
                                <div class="pull-right">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-flat">
                                            <i class="fa fa-power-off"></i> Keluar
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--overflow-y: auto;overflow-x: hidden;-->
    <aside class="main-sidebar" style="height: 100%;scrollbar-width:thin;overflow-y: auto;overflow-x: hidden;">
        <section class="sidebar">
            <div class="user-panel" style="height: 80px;">
                <div class="pull-left image">
                    <img src="{{asset('2023061803/mandiri/images/image 2.svg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <h4>
                        E - Perpus                   <br/>
                        <i style="font-size: 11px;">UNIVERSITAS ANDALAS</i>
                    </h4>
                </div>
            </div>
{{--            <ul class="sidebar-menu"><li class="header"><span><span>MENU UTAMA</span></span></li>--}}
{{--                <li class="active"><a href="/anggota/home"><i class="fa fa-home"></i>  <span>Home</span></a></li>--}}
{{--                <li><a href="/anggota/buku"><i class="fa fa-archive"></i>  <span>Daftar Buku</span></a></li>--}}
{{--                <li><a href="/anggota/tambah"><i class="fa fa-refresh"></i>  <span>Peminjaman Buku</span></a></li>--}}
{{--                <li><a href="/anggota/detail"><i class="fa fa-history"></i>  <span>Riwayat Peminjaman Buku</span></a></li>--}}
{{--            </ul>--}}
            <ul class="sidebar-menu">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('pustakawan.dashboard') }}">
                        <i class="ni ni-tv-2 text-primary"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pustakawan.anggota') }}">
                        <i class="ni ni-planet text-orange"></i>
                        <span class="nav-link-text">Anggota</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pustakawan.buku') }}">
                        <i class="ni ni-pin-3 text-primary"></i>
                        <span class="nav-link-text">Buku</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pustakawan.kategori') }}">
                        <i class="ni ni-bullet-list-67 text-default"></i>
                        <span class="nav-link-text">Kategori</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pustakawan.penerbit') }}">
                        <i class="ni ni-key-25 text-info"></i>
                        <span class="nav-link-text">Penerbit</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <footer class="main-footer" style="font-size: 13px;font-style: italic;">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.5    </div>
        <strong>&copy; <a href="" target="_blank">2023</a> <a href="" target="_blank">Kelompok 2</a>.</strong> All rights reserved.
    </footer>

</div>

<script src="{{asset('2023061803/mandiri/assets/28cefd75/jquery.js')}}"></script>
<script src="{{asset('2023061803/mandiri/assets/9d28d2c7/yii.js')}}"></script>
<script src="{{asset('2023061803/mandiri/adminlte/js/app.min.js')}}"></script>
<script src="{{asset('2023061803/mandiri/js/loading.js')}}"></script>
<script src="{{asset('2023061803/mandiri/assets/82ce6ab9/js/bootstrap.js')}}"></script>
<script src="{{asset('2023061803/mandiri/assets/8b93b1c2/js/adminlte.min.js')}}"></script>
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

