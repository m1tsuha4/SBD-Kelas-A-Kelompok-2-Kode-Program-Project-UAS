@extends('layouts.argon')
@section('content')
    @foreach($penerbit as $p)
    <form method="post" action="/pustakawan/penerbit/update" >
        @csrf
        <div class="form-group">
            <input type="hidden" name="id_pnb" value="{{ $p->id_pnb }}">
            <label for="example-text-input" class="form-control-label">Nama Penerbit</label>
            <input class="form-control" type="text" name="nama_penerbit" value="{{ $p->nama_penerbit}}" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Alamat</label>
            <input class="form-control" type="text" name="alamat" value="{{ $p->alamat }}" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Telepon</label>
            <input class="form-control" type="text" name="telepon" value="{{ $p->telepon }}" id="example-text-input">
            <label for="example-text-input" class="form-control-label">Email</label>
            <input class="form-control" type="text" name="email" value="{{ $p->email }}" id="example-text-input">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

    </form>
    @endforeach
@endsection
