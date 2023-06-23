@extends('layouts.argon')
@section('content')
    <form action="/pustakawan/buku/store" method="post">
        @csrf
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">ISBN</label>
            <input class="form-control" type="text" name="isbn" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Judul</label>
            <input class="form-control" type="text" name="judul" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Penulis</label>
            <input class="form-control" type="text" name="penulis" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Tahun Terbit</label>
            <input class="form-control" type="text" name="tahun_terbit" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Jumlah Stock</label>
            <input class="form-control" type="text" name="jumlah_stock" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Jumlah Terpinjam</label>
            <input class="form-control" type="text" name="jumlah_terpinjam" id="example-text-input">
            <label for="id_pnb">Penerbit</label>
            <select id="id_pnb" name="id_pnb" class="form-control">
                @foreach($penerbit as $p)
                    <option value="{{ $p->id_pnb }}">{{ $p->nama_penerbit }}</option>
                @endforeach
            </select>
            <label for="id_kategori">kategori</label>
            <select id="id_kategori" name="id_kategori" class="form-control">
                @foreach($kategori as $k)
                    <option value="{{ $k->id_kategori }}">{{ $k->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
@endsection
