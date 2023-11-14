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
                      @if(auth()->user()->role==1)
                        <button type="button" class="btn btn-outline-success btn-md mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Barang</button>
                        <button type="button" class="btn btn-outline-danger btn-md mb-5" data-bs-toggle="modal" data-bs-target="#importModal"><i class="fa-solid fa-file-import"></i> Import</button>
                        @endif
                      <a href="{{ url('perusahaan/detail/' .$data->id.'/export')}}" type="button" class="btn btn-outline-primary btn-md mb-5 " target="_blank"><i class="fa-solid fa-download"></i> Download</a>
                    </div>   
            </div>
            {{-- <form action="{{ url('/perusahaan/detail/'.$data->id.'/search') }}" method="GET">              
              <input class="form-control me-2 rounded-pill p-2" name="search" type="search" placeholder="Cari Disini" aria-label="Search">
          </form> --}}
          
       @include('layout.message')

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
                        <th scope="col">File</th>
                        @if(auth()->user()->role==1)
                        <th scope="col">Aksi</th>
                      </tr>
                      @endif
                    </thead>
                    
                    <tbody>
                      </tr>
                      
                        @foreach ($try as $item)
                        <tr>
                        @php
                          $id_bef=($try->currentPage()-1)*$per_page;
                          $waktu_now=$item->tgl_msk;
                          $date1=new DateTime($item->tgl_klr);
                          $date2=new DateTime();
                          $keterangan=$date1->diff($date2);
                        @endphp
  
                        <th scope="row">{{ $loop->iteration +$id_bef}}</th>
                        <td>{{$item->alat}}</td>
                        <td>{{$item->lokasi}}</td>
                        <td>{{$item->pabrik}}</td>
                        <td>{{$item->seri}}</td>
                        <td>{{$item->pengesahan}}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tgl_msk)->format('d-m-Y') }}</td>                        
                        <td>{{ \Carbon\Carbon::parse($item->tgl_klr)->format('d-m-Y') }}</td>   
                        @if ($keterangan->days > 30)                        
                        <td class="text-white badge mt-2 bg-success rounded text-center">Sisa Waktu {{$keterangan->format(' %y tahun %m bulan %d hari')}}</td> 
                        @else
                        <td class="text-white badge mt-2 bg-danger rounded text-center">Sisa Waktu {{$keterangan->format(' %y tahun %m bulan %d hari')}}</td> 
                        @endif                         
                        <td>
                          @if($item->file)
                              <a href="{{ route('file.open',['file'=>$item->file]) }}" target="_blank">
                                  <button type="button" class="btn btn-primary mb-2"><i class="fa fa-file"></i></button>
                              </a>
                              @if(auth()->user()->role==1)

                              <form action="{{ route('delete.file',['id'=>$item->id]) }}" method="post" style="display: inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger mb-2"><i class="fa fa-solid fa-trash"></i></button>
                              </form>
                              @endif
                          @else
                              <div class="badge bg-warning mt-2 text-black">
                                  File Not Found
                              </div>
                          @endif
                      </td>                      
                        @if(auth()->user()->role==1)
                        <td>
                          <button type="button" onclick="keluarkan({{$loop->iteration}},{{$item->id}},{{$data->file}})" id="btn-edit" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#editModal"><i class=" fa fa-solid fa-pen-to-square" style="color:white;"></i></button>
                          <a href="{{ url('delete-item/'.$item->id) }}" class="btn btn-danger mb-2"><i class="fa fa-solid fa-trash"></i></a>
                      </td>
                      @endif
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
    @include('item.import')
    @include('item.upload')
@endsection