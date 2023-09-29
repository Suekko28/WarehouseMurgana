@extends('layout.app')

@section('Navbar')
    <main>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-12 col-lg-12 col-md-12">
    
        <div class="card p-5 mb-3">
          <div class="row justify-content-between">
            <div class="col">
              <h5 class="text-success fw-bold">List Perusahaan</h5>
            </div>
            <div class="col text-right">
              <button type="button" class="btn btn-outline-success btn-md mb-5 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Perusahaan</button>
            </div>   
    </div>

{{-- <!-- Modal -->
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
            <input name="name" type="text" class="form-control w-100" id="name" aria-describedby="name">
          </div>
        
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </div>
    </form>
    
    </div>
  </div>
</div> --}}

@if ($errors->any())
<div class="pt-3">
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $item)
      <li>{{ $item }}</li>
          
      @endforeach
    </ul>

  </div>
</div>
@endif
       <div class="row justify-content-start text-center mb-5 ">
         @foreach ($data as $item)
         <div class="card mb-5 shadow rounded me-3" style="width: 18rem;">
           <img src="/template/logo_murgana.png" class="gambar-pt card-img-top position-relative" alt="...">
           <a href="{{ url('perusahaan/detail/' .$item->id) }}" class="nama-pt bg-success text-white position-absolute bottom-0 start-50 translate-middle-x w-100 h-25 ">{{$item->name}}</a>
          </div>
          @endforeach  
      </div>
        </div>
        {{$data ->links()}}
      </div>

      @include('company.create')
      
    </main>
          
@endsection