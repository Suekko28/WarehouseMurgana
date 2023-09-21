@extends('layout.app')

@section('Navbar')
    <main>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-12 col-lg-12 col-md-12">
    
        <div class="card p-5">
          <div class="row justify-content-between">
            <div class="col">
              <h5 class="text-success fw-bold">List Perusahaan</h5>
            </div>
            <div class="col text-right">
              <button type="button" class="btn btn-outline-success btn-md mb-5 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Perusahaan</button>
            </div>   
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Input Data Perusahaan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      
      <div class="modal-body">
        <form action="{{ url('perusahaan')}}" method="post">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nama Perusahaan</label>
            <input  type="text" class="form-control w-100" id="name" aria-describedby="name">
          </div>
        
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Simpan Data</button>
      </div>
    </form>
    
    </div>
  </div>
</div>


        
       @foreach ($data as $item)
       
       <div class="row justify-content-between text-center mb-5">
         <div class="card . mb-5 shadow rounded" style="width: 20rem;">
           {{-- <img src="/template/logo_murgana.png" class="gambar-pt card-img-top position-relative" alt="..."> --}}
           <p class="nama-pt bg-success text-white position-absolute bottom-0 start-50 translate-middle-x w-100 h-25 ">{{$item->$name}}</p>
         </div>

       @endforeach 

          

      </div>
        </div>
      </div>

      
    </main>
          
@endsection