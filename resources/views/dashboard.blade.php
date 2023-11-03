@extends('layout.app')

@section('Navbar')
    <main>
      {{-- <div class="container">
        <div class="d-flex justify-content-center">
        <div class="card me-5" style="width: 20em;">
            <div class="card-body text-center border border-5 border-dark rounded">
              <i class="fas fa-solid fa-box fa-lg mb-3"></i>
              <h1 class="card-title">45</h1>
              <a href=""><h5 class="card-text text-black">Data Barang</h5></a>
            </div>
          </div>

          <div class="card me-5" style="width: 20em;">
            <div class="card-body text-center border border-5 border-dark rounded">
              <i class="fas fa-solid fa-building fa-lg mb-3"></i>             
              <h1 class="card-title">45</h1>
              <a href=""><h5 class="card-text text-black">Perusahaan</h5></a>
            </div>
          </div>

          <div class="card me-5" style="width: 20em;">
            <div class="card-body text-center border border-5 border-dark rounded">
              <i class="fas fa-solid fa-user fa-lg mb-3"></i>              
              <h1 class="card-title">45</h1>
              <a href=""><h5 class="card-text text-black">Pengguna</h5></a>
            </div>
          </div> --}}

          

          {{-- <div class="card me-5" style="width: 30rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card me-5" style="width: 30rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div> --}}

{{-- 
          <div class="container">
            <h2 class="text-capitalize text-center mb-5">Overview Dashboard</h2>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col text-center">
              <div class="card h-100 shadow-sm">
                <div class="card-body">
                  <div class="d-flex justify-content-center">
                  <i class="fas fa-solid fa-building fa-lg me-2"></i>             
                  <h5 class="card-title text-success">Perusahaan</h5></i> 
                </div> 
                  <p class="card-text text-success fw-bold">1234123</p>
                </div>
            </div>
            </div>
            <div class="col text-center mx-auto">
              <div class="card shadow-sm">
                <div class="card-body">
                  <div class="d-flex justify-content-center">
                  <i class="fas fa-solid fa-building fa-lg me-2"></i>             
                  <h5 class="card-title text-success">Pengguna</h5></i> 
                </div> 
                  <p class="card-text text-success fw-bold">1234123</p>
                </div>
            </div>
            </div>
           
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="container">
      <h2 class="text-capitalize text-center mb-4">Overview Dashboard</h2>
    <div class="card-group">
      <div class="card  me-3 shadow border">
        <div class="card-body text-center p-5">
            <h5 class="card-title text-success"><i class="fas fa-regular fa-building me-2"></i><a href="/perusahaan" class="text-success">Perusahaan</h5></a>            
            @if(auth()->user()->role==1)
          <h4 class="card-text text-success fw-bold mt-3">{{$company->count()}}</h4>
        </div>
      </div>

      <div class="card  me-3 shadow border">
        <div class="card-body text-center p-5">
            <h5 class="card-title text-success"><i class="fas fa-solid fa-screwdriver-wrench  me-2"></i><a href="/peralatan" class="text-success">Peralatan</h5></a>         
          <h4 class="card-text text-success fw-bold mt-3">{{$tools->count()}}</h4>
        </div>
      </div>

      <div class="card  me-3 shadow border">
        <div class="card-body text-center p-5">
            <h5 class="card-title text-success"><i class="fas fa-solid fa-user me-2"></i><a href="/pengguna" class="text-success">Pengguna</h5></a>            
          <h4 class="card-text text-success fw-bold mt-3">{{$user->count()}}</h4>
        </div>
      </div>
      @endif
  </div>

    </main>
@endsection
