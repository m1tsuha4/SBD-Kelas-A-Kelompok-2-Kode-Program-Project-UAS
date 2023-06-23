@extends('layouts.mandiri')
@section('content')
    <section class="content">
            <div class="loan-index">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 style="margin: 0px;"><i class="fa fa-history"></i> Riwayat Peminjaman Buku</h4>
                    </div>
                    <div class="panel-body center" style="padding-bottom: 0px;">

                        <div class="loan-search">

                        </div>
                        <div id="pjax-peminjaman" data-pjax-container="">
                            <div id="w2-pjax" data-pjax-container="" data-pjax-push-state data-pjax-timeout="1000">
                                <div class="kv-loader-overlay">
                                    <div class="kv-loader">
                                    </div>
                                </div>
                                <div id="w2" class="grid-view is-bs3 hide-resize" data-krajee-grid="kvGridInit_daa33f7b" data-krajee-ps="ps_w2_container">
                                    <div class="panel panel-default">
                                        <div id="w2-container" class="table-responsive kv-grid-container">
                                            <table class="kv-grid-table table table-hover table-bordered table-striped table-condensed kv-table-wrap">
                                                <thead>
                                                <tr>
                                                    <th class="kv-align-center kv-align-top" style="width:50px;" data-col-seq="0">#</th>
                                                    <th class="kv-align-center" style="width:100px;;" data-col-seq="1">Kode Buku</th>
                                                    <th class="kv-align-left" data-col-seq="2">Judul Buku</th>
                                                    <th class="kv-align-center" style="width:100px;" data-col-seq="3">Tanggal Pinjam</th>
                                                    <th class="kv-align-center" style="width:100px;" data-col-seq="3">Tanggal Batas</th>
                                                    <th class="kv-align-center" style="width:100px;" data-col-seq=3">Tanggal Kembali</th>
                                                    <th class="kv-align-center" style="width:100px;" data-col-seq="5">Keterangan</th>
                                                    <th class="kv-align-center kv-grid-group-header w2" data-group-key="89b66db2" data-col-seq="6"></th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                @php
                                                    $nomor = 1;
                                                @endphp
                                                @foreach($peminjaman as $p)
                                                    <tr class="w2" data-key="534274">
                                                        <td>{{ $nomor }}</td>
                                                        <td>{{ $p->kd_exmp }}</td>
                                                        <td>{{ $p->judul }}</td>
                                                        <td>{{ $p->tanggal_peminjaman }}</td>
                                                        <td>{{ $p->tanggal_batas }}</td>
                                                        <td>{{ $p->tanggal_pengembalian }}</td>
                                                        <td>{{ $p->status_pengembalian  }}</td>
                                                        <td>
                                                        @php
                                                            $nomor++;
                                                        @endphp
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
