@extends('layouts.argon')
@section('content')
    @foreach($peminjaman as $p)
        <form action="/pustakawan/anggota/update" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" name="id_peminjaman" value="{{ $p->id_peminjaman }}">
                <label for="tanggal_pengembalian" class="form-control-label">Tanggal Pengembalian</label>
{{--                Fungsi strtotime() digunakan untuk mengonversi nilai tanggal saat ini menjadi representasi --}}
{{--                UNIX timestamp yang dapat diproses oleh fungsi date(). Kemudian, fungsi date('Y-m-d') akan --}}
{{--                mengembalikan nilai tanggal yang diformat sesuai dengan format yang diinginkan.--}}
                <input class="form-control" type="date" name="tanggal_pengembalian" value="{{ date('Y-m-d', strtotime($p->tanggal_pengembalian)) }}" id="tanggal_pengembalian">
                <label for="status_pengembalian" class="form-control-label">Status Pengembalian</label>
                <select class="form-control" name="status_pengembalian" id="status_pengembalian">
                    <option value="Belum Dikembalikan"{{ $p->status_pengembalian === 'Belum Dikembalikan' ? ' selected' : '' }}>Belum Dikembalikan</option>
                    <option value="Sudah Dikembalikan"{{ $p->status_pengembalian === 'Sudah Dikembalikan' ? ' selected' : '' }}>Sudah Dikembalikan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
    @endforeach
@endsection
