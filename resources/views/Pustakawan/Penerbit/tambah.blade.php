@extends('layouts.pustakawan')
@section('content')
    <form action="/pustakawan/penerbit/store" method="post">
        @csrf
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Penerbit</label>
            <input class="form-control" type="text" name="nama_penerbit" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Alamat</label>
            <input class="form-control" type="text" name="alamat" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Telepon</label>
            <input class="form-control" type="text" name="telepon" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Email</label>
            <input class="form-control" type="text" name="email" id="example-text-input">
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
@endsection
