@extends('layout.app')

@section('Navbar')
    <main>
        <div class="container">
            <div class="card p-5">
                <div class="row justify-content-between">
                    <div class="col-5">
                      <h5 class="text-success fw-bold">Nama Perusahaan</h5>
                    </div>
                    <div class="col-5">
                        <button type="button" class="btn btn-outline-success btn-md mb-5 fa fa-plus text-right me-3" data-bs-toggle="modal" data-bs-target="#exampleModal"> Barang</button>
                        <button type="button" class="btn btn-outline-danger btn-md mb-5 fa fa-solid fa-file-import text-right me-3 "> Import</button>
                        <button type="button" class="btn btn-outline-primary btn-md mb-5 fa fa-solid fa-download text-right me-3"> Download</button>
                    </div>   
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

            <div class="table-responsive">
                <table class="table table-bordered">
                    <caption>List of users</caption>
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori Alat</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Pabrik Pembuat</th>
                        <th scope="col">No.Seri</th>
                        <th scope="col">No.Pengesahan</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>
                          <button type="button" class="btn btn-primary  fa fa-file text-right mb-2"></button>
                          <button type="button" class="btn btn-warning  fa fa-solid fa-pen text-right mb-2"></button>
                          <button type="button" class="btn btn-danger  fa fa-solid fa-trash text-right mb-2"></button>    
                      </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>Otto</td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>Otto</td>
                      </tr>
                    </tbody>
                </table>
              </div>
              
              <div class="row justify-content-center">
              <div class="col-lg-6 p-1 rounded bg-success text-center text-white">
                  SISA WAKTU
              </div>
            </div>
        </div>

        
     
          

      
    </main>
          
@endsection