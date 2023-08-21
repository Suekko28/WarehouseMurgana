@extends('layout.app')

@section('Navbar')
        
    <main>
      <div class="container">
        <h3 class="">Nama PT</h3>
        <hr>
        <button type="button" class="btn btn-success btn-lg mb-5 fa fa-plus-circle"> Data</button>
        <h5 class="p-3 bg-primary text-white rounded">Data Barang</h5>

      <div class="card">
        <table class="table table-bordered border-tertiary" style="overflow-x:auto;">
          <thead class="table-light">
            <tr>
              <th  scope="col">#</th>
              <th  scope="col">Kategori Alat</th>
              <th  scope="col">Lokasi</th>
              <th  scope="col">Nama Pabrik Pembuat</th>
              <th  scope="col">Nomor Serial</th>
              <th  scope="col">Nomor Pengiriman</th>
              <th  scope="col">Nomor Pemeriksaan</th>
              <th  scope="col">Tanggal Berakhir</th>
              <th  scope="col">Keterangan</th>
              <th  scope="col">Aksi</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="row justify-content-md-center" scope="row">1</th>
              <td>PT. Kreasi Wintor Indonesia</td>
              <td>PT. Kreasi Wintor Indonesia</td>
              <td>PT. Kreasi Wintor Indonesia</td>
              <td>PT. Kreasi Wintor Indonesia</td>
              <td>PT. Kreasi Wintor Indonesia</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>

            </tr>
          </tbody>
        </table>
      </div>
      </div>
    </main>
    @endsection

