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
                            <h3 class="mb-0">Tabel Anggota</h3>
                            <br>
{{--                            <a href="/register">Tambah Anggota</a>--}}
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">No</th>
                                    <th scope="col" class="sort" data-sort="budget">NIM</th>
                                    <th scope="col" class="sort" data-sort="status">Nama Anggota</th>
                                    <th scope="col" class="sort" data-sort="status">No. HP</th>
                                    <th scope="col" class="sort" data-sort="status">Email</th>
                                    <th scope="col" class="sort" data-sort="completion">Aksi</th>
                                </tr>
                                @php
                                    $nomor = 1;
                                @endphp
                                @foreach($anggota as $p)
                                    <tr>
                                        <td>{{ $nomor }}</td>
                                        <td>{{ $p->nomor_anggota }}</td>
                                        <td>{{ $p->nama_anggota }}</td>
                                        <td>{{ $p->nomor_telepon }}</td>
                                        <td>{{ $p->email }}</td>
                                        <td>
                                            <a href="/pustakawan/anggota/detail/{{ $p->id }}">Detail</a>

{{--                                            <a href="/pustakawan/anggota/edit/{{ $p->id }}">Edit</a>--}}
{{--                                            |--}}
{{--                                            <a href="/pustakawan/anggota/hapus/{{ $p->id }}">Hapus</a>--}}
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
