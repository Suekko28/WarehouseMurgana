<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Warehouse Murgana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.1.2/esm/ionicons.min.js" integrity="sha512-2ySmquu6HK3CAvwLllh0R8K8buFPMZsUwWLZIlB7WW8c8ilUtoNyhsmEsQn2U0IV1USr2Oc/9DJzlr4cxAbuxA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
  </head>
  <body>
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5 shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="/template/logo_murgana.png" alt="Logo Murgana" width="60" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item me-2">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="#">Perusahaan</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="#">Pengguna</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="#">Peralatan</a>
            </li>
          </ul>
          <form class="d-flex w-50" role="search" id="formSearch">
            <input class="form-control me-2" type="search" placeholder="Cari Disini" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"></button>
          </form>
        </div>

        <div class="nav-right d-flex">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown me-2">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Admin
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Welcome ! </a></li>
                <li><a class="dropdown-item" href="#">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      </div>
    </nav> --}}

    <nav class="navbar navbar-expand-lg bg-body-light shadow-sm mb-5">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/dashboard">
          <img src="/template/logo_murgana.png" alt="Logo Murgana" width="60" height="60">
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
            <li class="nav-item me-2">
              <a class="nav-link active" aria-current="page" href="/dashboard">Beranda</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="/perusahaan">Perusahaan</a>
            </li>
            @if(auth()->user()->role==1)
            <li class="nav-item me-2">
              <a class="nav-link" href="/pengguna">Pengguna</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="/peralatan">Peralatan</a>
            </li>
            @endif
          </ul>
          <form class="d-flex" role="search" id="formSearch">
            <input class="form-control me-2 rounded-pill  p-2" type="search" placeholder="Cari Disini" aria-label="Search">
            <button class="btn btn-outline-success fa fa-solid fa-magnifying-glass" type="submit"></button>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown me-2">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{auth()->user()->name}}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-muted disabled" href="#">Welcome ! </a></li>
                <li>
                  <form action="/logout" method="post" >
                  @csrf
                  <!-- <a class="dropdown-item" href="#">Log out</a> -->
                    <button type="submit" class="dropdown-item">Log out</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>
  </body>


</html>
@yield('Navbar')

