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
                                <button type="button" class="btn btn-outline-success btn-md mb-5 me-3" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Pengguna</button>
                            </div>
                        </div>

                        @include('layout.message')


                        <div class="table-responsive">
                            <table class="table table-fixed table-bordered text-center vw-100">
                                <caption>List of users</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Pengguna</th>
                                        <th scope="col">SSID</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            @php
                                                $id_bef = ($users->currentPage() - 1) * $per_page;
                                                $role = $user->role;
                                                if ($role == 1) {
                                                    $role = 'Admin';
                                                } else {
                                                    $role = 'User';
                                                }
                                                $company_name = 'Admin'; // Default value
                                                if ($user->company_id != null) {
                                                    foreach ($company as $companyItem) {
                                                        if ($companyItem->id == $user->company_id) {
                                                            $company_name = $companyItem->name;
                                                            break; // Keluar dari perulangan setelah ditemukan
                                                        }
                                                    }
                                                }
                                            @endphp


                                            <th scope="row">{{ $loop->iteration + $id_bef }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $company_name }}
                                            <td>{{ $role }}</td>
                                            <td>
                                                <button type="button"
                                                    onclick="keluarkan({{ $loop->iteration }},{{ $user->id }})"
                                                    id="btn-edit" class="btn btn-warning mb-2" data-bs-toggle="modal"
                                                    data-bs-target="#editModal"><i class=" fa fa-solid fa-pen-to-square"
                                                        style="color:white;"></i></button>
                                                <a href="{{ url('delete-user/' . $user->id) }}" class="btn btn-danger mb-2"><i
                                                        class="fa fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>

    </main>
    @include('user.edit')
    @include('user.create')
@endsection
