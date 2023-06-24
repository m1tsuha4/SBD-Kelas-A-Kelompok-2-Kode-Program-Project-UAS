@extends('layouts.pustakawan')
@section('content')
    @foreach($buku as $b)
    <form action="/pustakawan/buku/update" method="post">
        @csrf
        <div class="form-group">
            <input type="hidden" name="kd_exmp" value="{{ $b->kd_exmp }}">
            <label for="example-text-input" class="form-control-label">ISBN</label>
            <input class="form-control" type="text" name="isbn" value="{{ $b->isbn }}" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Judul</label>
            <input class="form-control" type="text" name="judul" value="{{ $b->judul }}" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Penulis</label>
            <input class="form-control" type="text" name="penulis" value="{{ $b->penulis }}" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Tahun Terbit</label>
            <input class="form-control" type="text" name="tahun_terbit" value="{{ $b->tahun_terbit }}" id="example-text-input">
            <label for="id_pnb">Penerbit</label>
            <select id="id_pnb" name="id_pnb" class="form-control">
                @foreach($penerbit as $p)
                    <option value="{{ $p->id_pnb }}" @if($p->id_pnb == $b->id_pnb) selected @endif>{{ $p->nama_penerbit }}</option>
                @endforeach
            </select>
            <label for="id_kategori">kategori</label>
            <select id="id_kategori" name="id_kategori" class="form-control">
                @foreach($kategori as $k)
                    <option value="{{ $k->id_kategori }}" @if($k->id_kategori == $b->id_kategori) selected @endif>{{ $k->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
    @endforeach
@endsection
