@extends('layouts.pustakawan')
@section('content')
    <form action="/pustakawan/kategori/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Kategori</label>
            <input class="form-control" type="text" name="nama_kategori" id="example-text-input">
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
@endsection
