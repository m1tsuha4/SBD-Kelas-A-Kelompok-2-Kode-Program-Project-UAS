@extends('layouts.argon')
@section('content')
    <div class="main-content" id="panel">
        <!-- Topnav -->

        <!-- Header -->
        <!-- Header -->

        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Tabel Peminjaman</h3>
                            <br>
{{--                            <a href="/pustakawan/anggota/tambah">Tambah Anggota</a>--}}
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
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
                                @php
                                    $nomor = 1;
                                @endphp
                                @foreach($peminjaman as $p)
                                    <tr>
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
                                </thead>
                                <tbody class="list">
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Dark table -->

            <!-- Footer -->

        </div>
    </div>
@endsection
