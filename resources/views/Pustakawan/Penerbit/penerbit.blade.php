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
                            <h3 class="mb-0">Tabel Penerbit</h3>
                            <br>
                            <a href="/pustakawan/penerbit/tambah">Tambah Penerbit</a>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">No</th>
                                    <th scope="col" class="sort" data-sort="budget">Kode</th>
                                    <th scope="col" class="sort" data-sort="status">penerbit</th>
                                    <th scope="col" class="sort" data-sort="status">Alamat</th>
                                    <th scope="col" class="sort" data-sort="status">Telepon</th>
                                    <th scope="col" class="sort" data-sort="status">Email</th>
                                    <th scope="col" class="sort" data-sort="status">Banyak Buku</th>
                                    <th scope="col" class="sort" data-sort="completion">Aksi</th>
                                </tr>
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
