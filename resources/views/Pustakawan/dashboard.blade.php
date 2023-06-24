@extends('layouts.pustakawan')
@section('content')
    <div class="site-index" style="margin-top: 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="callout callout-info">
                    <div class="row">
                        <div class="col-md-10">
                            @foreach($pustakawan as $a)
                                <h4>Selamat Datang {{ $a->nama_pustakawan }}</h4>
                            @endforeach
                            <p style="text-align: justify;">
                                Sistem Informasi Perpustakaan merupakan aplikasi pendukung yang dikembangkan untuk memudahkan mahasiswa mengakses layanan yang ada di Perpustakaan Universitas Andalas secara daring.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

