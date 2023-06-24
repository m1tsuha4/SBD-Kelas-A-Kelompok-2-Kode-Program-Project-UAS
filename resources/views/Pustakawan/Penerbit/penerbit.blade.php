@extends('layouts.pustakawan')
@section('content')
    <section class="content">
        <div class="loan-index">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="margin: 0px;"><i class="fa fa-archive"></i> Daftar Penerbit</h4>
                    <br>
                    <a href="/pustakawan/penerbit/tambah">Tambah Penerbit</a>
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
                                                <th scope="col" class="sort" data-sort="status">penerbit</th>
                                                <th scope="col" class="sort" data-sort="status">Alamat</th>
                                                <th scope="col" class="sort" data-sort="status">Telepon</th>
                                                <th scope="col" class="sort" data-sort="status">Email</th>
                                                <th scope="col" class="sort" data-sort="completion">Aksi</th>
                                            </tr>

                                            </thead>
                                            <tbody>
                                            @php
                                                $nomor = 1;
                                            @endphp
                                            @foreach($penerbit as $p)
                                                <tr>
                                                    <td>{{ $nomor }}</td>
                                                    <td>{{ $p->id_pnb }}</td>
                                                    <td>{{ $p->nama_penerbit }}</td>
                                                    <td>{{ $p->alamat }}</td>
                                                    <td>{{ $p->telepon }}</td>
                                                    <td>{{ $p->email }}</td>
                                                    <td>
                                                        <a href="/pustakawan/penerbit/edit/{{ $p->id_pnb }}">Edit</a>
                                                        |
                                                        <a href="/pustakawan/penerbit/hapus/{{ $p->id_pnb }}">Hapus</a>
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
