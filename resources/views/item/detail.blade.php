@extends('layout.app')

@section('Navbar')

<style>
  /* .table{
    overflow-x: auto;
  } */
</style>
    <main>
        <div class="container">
          <div class="row">
            <div class="col-12 col-xl-12 col-lg-12 col-md-12">
  
            <div class="card p-5 shadow-md">
                <div class="row justify-content-between">
                    <div class="col">
                      <h5 class="text-success fw-bold mb-5">{{ $data->name }}</h5>
                    </div>
                    <div class="col text-right">
                        <button type="button" class="btn btn-outline-success btn-md mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Barang</button>
                        <button type="button" class="btn btn-outline-danger btn-md mb-5" ><i class="fa-solid fa-file-import"></i> Import</button>
                        <button type="button" class="btn btn-outline-primary btn-md mb-5 "><i class="fa-solid fa-download"></i> Download</button>
                    </div>   
            </div>

            
            <!-- Modal -->
            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Input Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST">
                      @csrf
                      <div class="mb-3">
                        <label for="alat" class="form-label">Kategori Alat</label>
                        <input name="alat" type="text" class="form-control w-100" id="alat" aria-describedby="name" value="">
                      </div>
                      <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input name="lokasi" type="text" class="form-control w-100" id="lokasi" aria-describedby="email" value="">
                      </div>
                      <div class="mb-3">
                        <label for="pabrik" class="form-label">Pabrik Pembuatan</label>
                        <input name="pabrik" type="text" class="form-control w-100" id="pabrik">
                      </div>
                      <div class="mb-3">
                        <label for="seri" class="form-label">No.Seri</label>
                        <input name="seri" type="text" class="form-control w-100" id="seri">
                      </div>
                      <div class="mb-3">
                        <label for="pengesahan" class="form-label">No.Pengesahan</label>
                        <input name="pengesahan" type="text" class="form-control w-100" id="pengesahan">
                      </div>
                      <div class="mb-3">
                        <label for="file" class="form-label">File</label>
                        <input name="file" type="file" class="form-control w-100" id="file" accept=".pdf">
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
            
            <div class="table-responsive">
                <table class="table table-fixed table-bordered text-center vw-100 ">
                    <caption>List of users</caption>
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori Alat</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Pabrik Pembuat</th>
                        <th scope="col">No.Seri</th>
                        <th scope="col">No.Pengesahan</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Tanggal Keluar</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      </tr>
                      
                        @foreach ($data->item()->get() as $item)
                        <tr>
                        @php
                          $waktu_now=$item->tgl_msk;
                          $date1=new DateTime($item->tgl_klr);
                          $date2=new DateTime();
                          $keterangan=$date1->diff($date2);
                        @endphp
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$item->alat}}</td>
                        <td>{{$item->lokasi}}</td>
                        <td>{{$item->pabrik}}</td>
                        <td>{{$item->seri}}</td>
                        <td>{{$item->pengesahan}}</td>
                        <td>{{$item->tgl_msk}}</td>
                        <td>{{$item->tgl_klr}}</td>
                        <td class="text-white badge mt-3 bg-success rounded text-center">Sisa Waktu {{$keterangan->format('%d hari')}}</td>
                        <td>
                          <a href="{{ route('file.open',['file'=>$item->file]) }}" target="_blank"><button type="button" class="btn btn-primary mb-2"><i class=" fa fa-file"></i></button></a>

                          <button type="button" onclick="keluarkan({{$loop->iteration}},{{$item->id}},{{$data->file}})" id="btn-edit" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#editModal"><i class=" fa fa-solid fa-pen-to-square" style="color:white;"></i></button>
                          <a href="{{ url('delete-item/'.$item->id) }}" class="btn btn-danger mb-2"><i class="fa fa-solid fa-trash"></i></a>
                      </td>

                    </tr>
                    @endforeach
                  </table>
              </div>
              {{$try ->links()}}
              
        </div>
            </div>
          </div>
        </div>
          </div>
    </main>
    @include('item.edit')
    @include('item.create')
@endsection