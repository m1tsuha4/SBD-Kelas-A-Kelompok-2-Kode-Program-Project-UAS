@extends('layouts.pustakawan')
@section('content')
    <section class="content">
        <div class="loan-index">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="margin: 0px;"><i class="fa fa-archive"></i> Daftar Peminjaman</h4>
                    <br>
                    @php
                        $previousNamaAnggota = null;
                    @endphp
                    @foreach($peminjaman as $p)
                        @if($previousNamaAnggota !== $p->nama_anggota)
                            <h4><strong>{{ $p->nama_anggota }}</strong></h4>
                            @php
                                $previousNamaAnggota = $p->nama_anggota;
                            @endphp
                        @endif
                    @endforeach
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
                                                <th scope="col" class="sort" data-sort="name">No</th>
                                                <th scope="col" class="sort" data-sort="budget">Kode</th>
                                                <th scope="col" class="sort" data-sort="status">Judul</th>
                                                <th scope="col" class="sort" data-sort="status">Tanggal Peminjaman</th>
                                                <th scope="col" class="sort" data-sort="completion">Tanggal Batas</th>
                                                <th scope="col" class="sort" data-sort="completion">Tanggal Pengembalian</th>
                                                <th scope="col" class="sort" data-sort="completion">Status Pengembalian</th>
                                                <th scope="col" class="sort" data-sort="completion">Aksi</th>
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
                                                        <a href="/pustakawan/anggota/edit/{{ $p->id_peminjaman }}">Edit</a>
                                                        |
                                                        <a href="/pustakawan/anggota/hapus/{{ $p->id_peminjaman }}">Hapus</a>
                                                    </td>
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
