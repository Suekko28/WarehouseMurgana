@extends('layout.app')

@section('Navbar')
<main>
    <div class="container">
        <div class="card p-5">
            <div class="row justify-content-between">
                <div class="col-5">
                  <h5 class="text-success fw-bold">List Pengguna</h5>
                </div>
                <div class="col-2 btn-pengguna">
                    <button type="button" class="btn btn-outline-success btn-md mb-5 fa fa-plus text-right me-5 " data-bs-toggle="modal" data-bs-target="#exampleModal"> Pengguna</button>
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
                    <td>
                        <button type="button" class="btn btn-warning  fa fa-solid fa-pen text-right mb-2"></button>
                        <button type="button" class="btn btn-danger  fa fa-solid fa-trash text-right"></button>    
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>
                        <button type="button" class="btn btn-warning  fa fa-solid fa-pen text-right mb-2"></button>
                        <button type="button" class="btn btn-danger  fa fa-solid fa-trash text-right"></button>    
                    </td>
                  </tr>
                </tbody>
            </table>
          </div>
          
         
    </div>
  
</main>
      
   
@endsection