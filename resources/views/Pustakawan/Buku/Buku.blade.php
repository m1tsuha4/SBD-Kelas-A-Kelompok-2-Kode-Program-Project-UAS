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
                            <h3 class="mb-0">Tabel Buku</h3>
                            <br>
                            <a href="/pustakawan/buku/tambah">Tambah Buku</a>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">No</th>
                                    <th scope="col" class="sort" data-sort="budget">Kode</th>
                                    <th scope="col" class="sort" data-sort="status">ISBN</th>
                                    <th scope="col" class="sort" data-sort="status">Judul</th>
                                    <th scope="col" class="sort" data-sort="status">Penulis</th>
                                    <th scope="col" class="sort" data-sort="status">Tahun Terbit</th>
                                    {{--                                <th scope="col">Banyak Buku</th>--}}
                                    <th scope="col" class="sort" data-sort="completion">Aksi</th>
                                    <th scope="col"></th>
                                </tr>
                                @php
                                    $nomor = 1;
                                @endphp
                                @foreach($buku as $p)
                                    <tr>
                                        <td>{{ $nomor }}</td>
                                        <td>{{ $p->kd_exmp }}</td>
                                        <td>{{ $p->isbn }}</td>
                                        <td>{{ $p->judul }}</td>
                                        <td>{{ $p->penulis }}</td>
                                        <td>{{ $p->tahun_terbit }}</td>
                                        <td>
                                            <a href="/pustakawan/buku/edit/{{ $p->kd_exmp }}">Edit</a>
                                            |
                                            <a href="/pustakawan/buku/hapus/{{ $p->kd_exmp }}">Hapus</a>
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
