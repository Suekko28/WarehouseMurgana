@extends('layout.app')

@section('Navbar')
    <main>
      <div class="container">
        <div class="card p-5">
      <div class="row justify-content-center">
        <div class="col">
          <h5 class="text-success fw-bold">List Perusahaan</h5>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        <div class="col-2 btn-pengguna">
          <button type="button" class="btn btn-outline-success btn-md mb-5 fa fa-plus text-right me-5 " data-bs-toggle="modal" data-bs-target="#exampleModal"> Perusahaan</button>
      </div> 
        
        <div class="row justify-content-between text-center">

          <div class="card . mb-5" style="width: 20rem;">
            <img src="/template/logo_murgana.png" class="gambar-pt card-img-top position-relative" alt="...">
            <p class="nama-pt bg-success text-white position-absolute">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="/template/logo_murgana.png" class="gambar-pt card-img-top position-relative" alt="...">
            <p class="nama-pt bg-success text-white position-absolute">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="/template/logo_murgana.png" class="gambar-pt card-img-top position-relative" alt="...">
            <p class="nama-pt bg-success text-white position-absolute">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="/template/logo_murgana.png" class="gambar-pt card-img-top position-relative" alt="...">
            <p class="nama-pt bg-success text-white position-absolute">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="/template/logo_murgana.png" class="gambar-pt card-img-top position-relative" alt="...">
            <p class="nama-pt bg-success text-white position-absolute">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="/template/logo_murgana.png" class="gambar-pt card-img-top position-relative" alt="...">
            <p class="nama-pt bg-success text-white position-absolute">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="/template/logo_murgana.png" class="gambar-pt card-img-top position-relative" alt="...">
            <p class="nama-pt bg-success text-white position-absolute">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="/template/logo_murgana.png" class="gambar-pt card-img-top position-relative" alt="...">
            <p class="nama-pt bg-success text-white position-absolute">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="/template/logo_murgana.png" class="gambar-pt card-img-top position-relative" alt="...">
            <p class="nama-pt bg-success text-white position-absolute">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>

          

          {{-- <div class="card . mb-5" style="width: 20rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card . mb-5" style="width: 20rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div> --}}

        </div>
      </div>

      
    </main>
          
@endsection