@extends('layouts.main')
@section('container')
<section id="home">

  <div class="circle"></div>
 <div class="container">
    <div class="row">
        <div class="col-md-7">
            <h1>Welcome to <span class="text-warning">Ciki Caka</span></h1>
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse repudiandae, recusandae reiciendis earum beatae quod aperiam eligendi laudantium maxime sit ipsum eveniet animi fuga velit repellendus voluptatum ducimus dolorum et labore perspiciatis asperiores molestiae possimus facilis hic. Dicta, sunt at.</p>
           <a href="/product"><button type="button" class="btn btn-outline-warning fw-semibold">Get Product</button></a>
        </div>
            
        <div class="col-md-4" style="z-index:1">
            <img src="img/ciki1.png" class="ciki" alt="">
        </div>

     </div>
</div>
</section>
@endsection