@extends('layout.app')

@section('Navbar')
    <main>
        <div class="container">
            <h2 class="text-capitalize text-center mb-4">Overview Dashboard</h2>
            <div class="card-group">
                <div class="card  me-3 shadow border">
                    <div class="card-body text-center p-5">
                        <h5 class="card-title text-success"><i class="fas fa-regular fa-building me-2"></i><a
                                href="/perusahaan" class="text-success">Perusahaan</h5></a>
                        @if (auth()->user()->role == 1)
                            <h4 class="card-text text-success fw-bold mt-3">{{ $company->count() }}</h4>
                    </div>
                </div>

                <div class="card  me-3 shadow border">
                    <div class="card-body text-center p-5">
                        <h5 class="card-title text-success"><i class="fas fa-solid fa-screwdriver-wrench  me-2"></i><a
                                href="/peralatan" class="text-success">Peralatan</h5></a>
                        <h4 class="card-text text-success fw-bold mt-3">{{ $tools->count() }}</h4>
                    </div>
                </div>

                <div class="card  me-3 shadow border">
                    <div class="card-body text-center p-5">
                        <h5 class="card-title text-success"><i class="fas fa-solid fa-user me-2"></i><a href="/pengguna"
                                class="text-success">Pengguna</h5></a>
                        <h4 class="card-text text-success fw-bold mt-3">{{ $user->count() }}</h4>
                    </div>
                </div>
                @endif
            </div>

    </main>
@endsection
