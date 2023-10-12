@extends('layout.app')

@section('Navbar')
<main>
    <div class="container">
      <div class="row">
      <div class="col-12 col-xl-12 col-lg-12 col-md-12">
        <div class="card p-5">
            <div class="row justify-content-between">
                <div class="col">
                  <h5 class="text-success fw-bold">List Pengguna</h5>
                </div>
                <div class="col text-right">
                  <button type="button" class="btn btn-outline-success btn-md mb-5 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Pengguna</button>
                </div>   
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pengguna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control w-100" id="name" aria-describedby="name" value="">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control w-100" id="email" aria-describedby="email" value="">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control w-100" id="password">
                  </div>
                  <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" class="form-control w-100" id="role">
                      <option value="">--Pilih Role--</option>
                      <option value="">Admin</option>
                      <option value="">User</option>
                    </select>
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
          <table class="table table-fixed table-bordered text-center vw-100">
            <caption>List of users</caption>
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">SSID</th>
                    <th scope="col">Password</th>
                    <th scope="col">Keterangan</th>
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
                        <td>
                            <button type="button" class="btn btn-warning mb-2"><li class="fa fa-solid fa-pen"></li></button>
                            <button type="button" class="btn btn-danger mb-2"><li class="fa fa-solid fa-trash"></button>    
                        </td>
                      </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>
                      <button type="button" class="btn btn-warning mb-2"><li class="fa fa-solid fa-pen"></li></button>
                      <button type="button" class="btn btn-danger mb-2"><li class="fa fa-solid fa-trash"></button>    
              </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>
                      <button type="button" class="btn btn-warning mb-2"><li class="fa fa-solid fa-pen"></li></button>
                      <button type="button" class="btn btn-danger mb-2"><li class="fa fa-solid fa-trash"></button>    
              </td>
                  </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  
</main>
      
   
@endsection