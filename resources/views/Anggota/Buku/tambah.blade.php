@extends('layouts.mandiri')
@section('content')
    <form action="/anggota/store" method="post">
        @csrf
        <h3>
            Proses Peminjaman Buku
        </h3>
        <br>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Kode Eksemplar</label>
            <input class="form-control" type="text" name="kd_exmp" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Tanggal Peminjaman</label>
            <input class="form-control" type="date" name="tanggal_peminjaman" id="tanggal_peminjaman">
            <label for="example-text-input" class="form-control-label">Pustakawan</label>
            <select id="id_ptkw" name="id_ptkw" class="form-control">
                @foreach($pustakawan as $p)
                    <option value="{{ $p->id }}">{{ $p->nama_pustakawan }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
@endsection
