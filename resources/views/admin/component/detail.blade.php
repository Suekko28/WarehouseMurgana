@extends('layout.app')

@section('Navbar')
    <main>
        <div class="container">
          <div class="row">
            <div class="col-12 col-xl-12 col-lg-12 col-md-12">
  
            <div class="card p-5">
                <div class="row justify-content-between">
                    <div class="col">
                      <h5 class="text-success fw-bold">Nama Perusahaan</h5>
                    </div>
                    <div class="col text-right">
                        <button type="button" class="btn btn-outline-success btn-md mb-5   me-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Barang</button>
                        <button type="button" class="btn btn-outline-danger btn-md mb-5 me-3"><i class="fa-solid fa-file-import"></i> Import</button>
                        <button type="button" class="btn btn-outline-primary btn-md mb-5 me-3"><i class="fa-solid fa-download"></i> Download</button>
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
                    <form>
                      <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori Alat</label>
                        <input type="text" class="form-control w-100" id="kategori" aria-describedby="name" value="">
                      </div>
                      <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control w-100" id="lokasi" aria-describedby="email" value="">
                      </div>
                      <div class="mb-3">
                        <label for="pabrik" class="form-label">Pabrik Pembuatan</label>
                        <input type="text" class="form-control w-100" id="pabrik">
                      </div>
                      <div class="mb-3">
                        <label for="seri" class="form-label">No.Seri</label>
                        <input type="text" class="form-control w-100" id="seri">
                      </div>
                      <div class="mb-3">
                        <label for="pengesahan" class="form-label">No.Pengesahan</label>
                        <input type="text" class="form-control w-100" id="pengesahan">
                      </div>
                      
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Simpan Data</button>
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
                          <button type="button" class="btn btn-primary mb-2"><i class=" fa fa-file"></i></button>
                          <button type="button" class="btn btn-warning mb-2"><i class=" fa fa-solid fa-pen-to-square" style="color:white;"></i></button>
                          <button type="button" class="btn btn-danger mb-2"><i class="fa fa-solid fa-trash"></i></button>    
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
            </div>
          </div>

        
     
          

      
    </main>
          
@endsection