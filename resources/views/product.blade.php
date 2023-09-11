@extends('layouts.main')
@section('container')
@if (Request::is('product'))
<body style="overflow: auto">
    
<section id="product">
    <div class="container">
      @if ($product->count())
          
        <div class="dropdown mb-4">
            <button class="btn btn-outline-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Pedas</a></li>
              <li><a class="dropdown-item" href="#">Asin</a></li>
              <li><a class="dropdown-item" href="#">Pedas Asin</a></li>
            </ul>
          </div>
          <div class="input-group mb-5 w-50 ">
            <input type="text" class="form-control" placeholder="search produk..." aria-label="Recipient's username" aria-describedby="basic-addon2">
            <button class="btn btn-warning">Search..</button>
          </div>
        <div class="row align-items-center justify-content-start">
            @foreach ($product as $p)
                
            <div class="col-md-3 col-7">
               <div class="card card-product">
                <div class="card-img">

                    <img src="img/{{ $p->gambar }}" class="card-img-top" alt="">
                </div>
                <div class="card-body p-3">
                    <p class="fw-normal fs-6">{{ $p->nama }}</p>
                    <h3 class="price fw-bold fs-5" style="margin-top: -10px">Rp.{{ $p->harga }}</h3>
                    @if ($p->diskon)
                        
                    <div class="discount d-flex  align-items-center">
                        <p class="bg-danger-subtle rounded-2 me-2 p-1 text-danger fw-bold">{{ $p->diskon }}</p>
                        <p class="text-decoration-line-through">Rp.{{ $p->harga }}</p>
                    </div>
                    
                    @endif
                        <div class="rating d-flex">
                        <p class="fw-semibold me-2"><i class="bi bi-star-fill"></i> 5.0</p>
                        <p>| 30+ terjual</p>
                        </div>
                </div>
               </div>
            </div>
            @endforeach

            
        </div>
        @else
        <h1 class="text-center text-warning fw-bold">Produk Tidak ditemukan</h1>
      @endif

    </div>
</section>
</body>

@endif

@endsection