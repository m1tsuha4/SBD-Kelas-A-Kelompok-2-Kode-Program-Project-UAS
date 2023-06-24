@extends('layouts.pustakawan')
@section('content')
    @foreach($kategori as $k)
    <form method="post" action="/pustakawan/kategori/update" >
        @csrf
        <div class="form-group">
            <input type="hidden" name="id_kategori" value="{{ $k->id_kategori }}">
            <label for="example-text-input" class="form-control-label">Nama Kategori</label>
            <input class="form-control" type="text"  name="nama_kategori" value="{{ $k->nama_kategori }}" id="example-text-input">
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
    @endforeach
@endsection
