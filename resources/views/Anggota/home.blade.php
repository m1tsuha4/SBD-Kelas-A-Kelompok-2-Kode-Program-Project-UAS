@extends('layouts.mandiri')
@section('content')
    <div class="site-index" style="margin-top: 0px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="callout callout-info">
                                <div class="row">
                                    <div class="col-md-10">
                                        @foreach($anggota as $a)
                                            <h4>Hi {{ $a->nama_anggota }} ({{ $a->nomor_anggota }})</h4>
                                        @endforeach

                                        <p style="text-align: justify;">
                                            Sistem Informasi Perpustakaan merupakan aplikasi pendukung yang dikembangkan untuk memudahkan mahasiswa mengakses layanan yang ada di Perpustakaan Universitas Andalas secara daring.
                                        </p>
                                    </div>
{{--                                    <div class="col-md-2" style="text-align: right;vertical-align: middle;padding-top: 3px;padding-bottom: 3px;font-size: 26px;">--}}
{{--                                        18 Juni 2023                    </div>--}}
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
@endsection
