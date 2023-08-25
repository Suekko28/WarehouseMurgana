@extends('layout.app')

@section('Navbar')
    <main>
      <div class="container">
        <div class="d-flex justify-content-center">
        <div class="card me-5" style="width: 20em;">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body text-center border border-5 border-dark rounded">
              <i class="fas fa-solid fa-box fa-lg mb-3"></i>
              <h1 class="card-title">45</h1>
              <a href=""><h5 class="card-text text-black">Data Barang</h5></a>
              {{-- <a href="#" class="btn btn-success">Data Barang</a> --}}
            </div>
          </div>

          <div class="card me-5" style="width: 20em;">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body text-center border border-5 border-dark rounded">
              <i class="fas fa-solid fa-building fa-lg mb-3"></i>             
              <h1 class="card-title">45</h1>
              <a href=""><h5 class="card-text text-black">Perusahaan</h5></a>
              {{-- <a href="#" class="btn btn-success">Data Barang</a> --}}
            </div>
          </div>

          <div class="card me-5" style="width: 20em;">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body text-center border border-5 border-dark rounded">
              <i class="fas fa-solid fa-user fa-lg mb-3"></i>              
              <h1 class="card-title">45</h1>
              <a href=""><h5 class="card-text text-black">Pengguna</h5></a>
              {{-- <a href="#" class="btn btn-success">Data Barang</a> --}}
            </div>
          </div>

          

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

        </div>
      </div>
    </main>
@endsection
