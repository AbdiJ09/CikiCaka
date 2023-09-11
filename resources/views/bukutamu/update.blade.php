@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row align-items-center justify-content-center m-auto col-md-7">
        <form action="/bukutamu/{{ $data->id }}/edit" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="name@example.com" value="{{ old('nama',$data->nama) }}">
          </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No Telepon</label>
            <input type="number" class="form-control" id="no_hp" name="no_telp" placeholder="name@example.com" value="{{ old('no_telp',$data->no_telp) }}">
          </div>
        <div class="mb-3">
            <label for="pesanan" class="form-label">Pesanan</label>
            <input type="text" class="form-control" id="pesanan" name="pesanan" placeholder="name@example.com" value="{{ old('pesanan',$data->pesanan) }}">
          </div>
          <button class="btn btn-warning" type="submit">Submit</button>
        </form>
        
    </div>
 
</div>
@endsection