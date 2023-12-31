@extends('layout.app')

@section('Navbar')
    <main>
        <div class="container">
            <div class="card p-5">
                <div class="row justify-content-between">
                    <div class="col-5">
                        <h5 class="text-success fw-bold">List Peralatan</h5>
                    </div>
                    <div class="col text-right mb-5">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <h3 class="btn btn-outline-primary btn-md">Download</h3>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a href="/peralatan/export" type="button" class="btn btn-outline-success btn-md mb-2" target="_blank">
                                            <i class="fa-solid fa-download"></i> Excel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/peralatan/cetak_pdf" type="button" class="btn btn-outline-danger btn-md" target="_blank">
                                            <i class="fa-solid fa-download"></i> PDF
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @include('layout.message')
                </div>
                <div class="table-responsive">
                    <table class="table table-fixed table-bordered text-center vw-100">
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

                            @foreach ($items as $item)
                                <tr>
                                    @php
                                        $id_bef = ($items->currentPage() - 1) * $per_page;
                                        $waktu_now = $item->tgl_msk;
                                        $date1 = new DateTime($item->tgl_klr);
                                        $date2 = new DateTime();
                                        $keterangan = $date1->diff($date2);
                                    @endphp
                                    <th scope="row">{{ $loop->iteration + $id_bef }}</th>
                                    <td>{{ $item->alat }}</td>
                                    <td>{{ $item->lokasi }}</td>
                                    <td>{{ $item->pabrik }}</td>
                                    <td>{{ $item->seri }}</td>
                                    <td>{{ $item->pengesahan }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tgl_msk)->format('d-m-Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tgl_klr)->format('d-m-Y') }}</td>
                                    @if ($keterangan->days > 30)
                                        <td class="text-white badge mt-2 bg-success rounded text-center">Sisa Waktu
                                            {{ $keterangan->format(' %y tahun %m bulan %d hari') }}</td>
                                    @else
                                        <td class="text-white badge mt-2 bg-danger rounded text-center">Sisa Waktu
                                            {{ $keterangan->format(' %y tahun %m bulan %d hari') }}</td>
                                    @endif
                                    <td>
                                        <a href="{{ route('file.open', ['file' => $item->file]) }}" target="_blank"><button
                                                type="button" class="btn btn-primary mb-2"><i
                                                    class=" fa fa-file"></i></button></a>
                                        <button type="button"
                                            onclick="keluarkan({{ $loop->iteration }},{{ $item->id }},{{ $item->company_id }})"
                                            id="btn-edit" class="btn btn-warning mb-2" data-bs-toggle="modal"
                                            data-bs-target="#editModal"><i class=" fa fa-solid fa-pen-to-square"
                                                style="color:white;"></i></button>
                                        <a href="{{ url('delete-item/' . $item->id) }}" class="btn btn-danger mb-2"><i
                                                class="fa fa-solid fa-trash"></i></a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                {{ $items->links() }}


            </div>
        </div>

        @include('item.edit')
    </main>
@endsection
