@extends('layouts.mandiri')
@section('content')
    <section class="content">
        <div class="loan-index">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="margin: 0px;"><i class="fa fa-archive"></i> Daftar Buku</h4>
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
                                                <th class="kv-align-center" style="width:100px;" data-col-seq="2">ISBN</th>
                                                <th class="kv-align-center" style="width:100px;" data-col-seq="3">Judul</th>
                                                <th class="kv-align-center" style="width:100px;" data-col-seq="3">Penulis</th>
                                                <th class="kv-align-center" style="width:100px;" data-col-seq=3">Tahun Terbit</th>
                                            </tr>

                                            </thead>
                                            <tbody>
                                            @php
                                                $nomor = 1;
                                            @endphp
                                            @foreach($buku as $p)
                                                <tr class="w2" data-key="534274">
                                                    <td>{{ $nomor }}</td>
                                                    <td>{{ $p->kd_exmp }}</td>
                                                    <td>{{ $p->isbn }}</td>
                                                    <td>{{ $p->judul }}</td>
                                                    <td>{{ $p->penulis }}</td>
                                                    <td>{{ $p->tahun_terbit }}</td>
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

