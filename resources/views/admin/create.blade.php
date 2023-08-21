@extends('layout.app')

@section('Navbar')   
    <main>
            <div class="container w-50 mt-5">
                  <!-- left column -->
                    <!-- general form elements -->
                    <div class="card">
                      <div class="card-header bg-primary">
                        <h3 class="card-title text-white mx-auto">Child Part & Komponen</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form action="{{ url('child')}}" method="post">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Barang</label>
                            <input type="text" class="form-control" id="text" name="nama_barang" placeholder="Nama Barang" >
                          </div>
                       
                          <div class="form-group align-items-center">
                            <label for="exampleInputPassword1">Nama Supplier</label>
                            <input type="text" class="form-control" id="text" name="nama_supplier" placeholder="Nama Customer" >
                          </div>
                      
                          <div class="form-group">
                            <label for="exampleInputPassword1">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" id="date" >
                          </div>
                
                        </div>
        
                        <div class="card-footer">
                          <div class="d-flex flex-row-reverse">
                              <a href="{{ url('child') }}" class="btn btn-danger ml-3">Cancel</a>
                              <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                    </div>
            </div>
        

    </main>       
@endsection