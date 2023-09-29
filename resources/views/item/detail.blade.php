@extends('layout.app')

@section('Navbar')
    <main>
        <div class="container">
          <div class="row">
            <div class="col-12 col-xl-12 col-lg-12 col-md-12">
  
            <div class="card p-5 shadow-md">
                <div class="row justify-content-between">
                    <div class="col">
                      <h5 class="text-success fw-bold">{{ $data->name }}</h5>
                    </div>
                    <div class="col text-right">
                        <button type="button" class="btn btn-outline-success btn-md mb-5 me-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Barang</button>
                        <button type="button" class="btn btn-outline-danger btn-md mb-5 me-2"><i class="fa-solid fa-file-import"></i> Import</button>
                        <button type="button" class="btn btn-outline-primary btn-md mb-5 "><i class="fa-solid fa-download"></i> Download</button>
                    </div>   
            </div>

            @include('item.create')


            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <caption>List of users</caption>
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori Alat</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Pabrik Pembuat</th>
                        <th scope="col">No.Seri</th>
                        <th scope="col">No.Pengesahan</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      </tr>
                      <tr>
                        {{-- @foreach ($items as $item)
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$item->alat}}</td>
                        <td>{{$item->lokasi}}</td>
                        <td>{{$item->seri}}</td>
                        <td>{{$item->Company->name}}</td>
                        <td>{{$item->keterangan}}</td>
                        <td class="btn bg-success text-white mt-1">Sisa masa berlaku 7 hari</td>
                        <td>
                          <button type="button" class="btn btn-primary mb-2"><i class=" fa fa-file">{{$item->file}}</i></button>
                          <button type="button" class="btn btn-warning mb-2"><i class=" fa fa-solid fa-pen-to-square" style="color:white;"></i></button>
                          <button type="button" class="btn btn-danger mb-2"><i class="fa fa-solid fa-trash"></i></button>    
                      </td>
                      @endforeach --}}

                      </tr>
                    </tbody>
                </table>
              </div>
              
             
        </div>
            </div>
          </div>

        
     
          

      
    </main>
          
@endsection