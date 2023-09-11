@extends('layouts.main')
@section('container')


<div class="container col-md-5 mt-5">
  @if (session()->has('sucess'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><i class="bi bi-check-circle-fill"></i> Horai</strong> {{ session('sucess') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    
@endif
  @if (session()->has('delete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><i class="bi bi-check-circle-fill"></i> Horai</strong> {{ session('delete') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    
@endif
  @if (session()->has('update'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><i class="bi bi-check-circle-fill"></i> Horai</strong> {{ session('update') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    
@endif

  <button type="button" class="btn btn-warning mb-3 fw-semibold" data-bs-toggle="modal" data-bs-target="#addData">
    Add data <i class="bi bi-plus"></i>
  </button>

  @include('bukutamu.add')
  @if ($bukutamu->count())
  <table class="table table-striped table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">No Telepon</th>
        <th scope="col">Pesanan</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($bukutamu as $buku)
            
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $buku->nama }}</td>
            <td>{{ $buku->no_telp }}</td>
            <td>{{ $buku->pesanan }}</td>
            <td><button class="badge bg-warning border-0 rounded-2">pending</button></td>
            <td>
              @auth
                  
              <form action="/bukutamu/{{ $buku->id }}/delete" class="d-inline">
              @csrf
              @method('delete')
            <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')"><i class="bi bi-trash"></i></button>    
            </form>
           <a href="/bukutamu/update/{{ $buku->id }}" class="badge bg-warning text-decoration-none fw-semibold"><i class="bi bi-pencil-square"></i></a>
           @else
           <button class="badge bg-primary border-0">Login</button>
              @endauth
          
        </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  @else
  <h1 class="text-center text-danger fw-bold">Data Not Found</h1>
  @endif
 
</div>
@endsection