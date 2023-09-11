<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container">
      <a class="navbar-brand fw-bold fs-4 logo" href="#">CK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : ''}}" aria-current="page" href="/">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('product') ? 'active' : ''}}" href="/product">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Distributor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('bukutamu') ? 'active' : ''}}" href="/bukutamu" >Buku tamu</a>
          </li>
        </ul>
        <button class="btn1">Login <i class="bi bi-box-arrow-in-right"></i></button>
        <button class="btn-register">Daftar</button>
      </div>
    </div>
  </nav>