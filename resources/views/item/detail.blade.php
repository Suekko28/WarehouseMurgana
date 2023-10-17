@extends('layout.app')

@section('Navbar')
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
                    <caption>List of Data</caption>
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
                        <td>{{ \Carbon\Carbon::parse($item->tgl_msk)->format('d-m-Y') }}</td>                        
                        <td>{{ \Carbon\Carbon::parse($item->tgl_klr)->format('d-m-Y') }}</td>                                
                        <td class="text-white badge mt-3 bg-success rounded text-center">Sisa Waktu {{$keterangan->format(' %y tahun %m bulan %d hari')}}</td>
                        <td>
                          <a href="{{ route('file.open',['file'=>$item->file]) }}" target="_blank"><button type="button" class="btn btn-primary mb-2"><i class=" fa fa-file"></i></button></a>
                          <button type="button" onclick="keluarkan({{$loop->iteration}},{{$item->id}},{{$data->file}})" id="btn-edit" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#editModal"><i class=" fa fa-solid fa-pen-to-square" style="color:white;"></i></button>
                          <a href="{{ url('delete-item/'.$item->id) }}" class="btn btn-danger mb-2"><i class="fa fa-solid fa-trash"></i></a>
                      </td>

                    </tr>
                    @endforeach
                    </tbody>
                  </table>
              </div>
              {{ $try->links()}}              
            </div>
          </div>
          </div>
        </div>
          </div>
    </main>
    @include('item.edit')
    @include('item.create')
    
@endsection