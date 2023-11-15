@extends('layout.app')

@section('Navbar')

    <main>
        @include('layout.message')
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="card p-5 mb-3">
                        <div class="row text-center mb-3">
                            @if ($kosong == true)
                                <img src="/notfound.jpg" alt="" width="300px" height="300px" class="mx-auto">
                            @else
                                <h5 class="text-success fw-bold mb-3">Hasil Search : {{ $search }}</h5>
                        </div>

                        <div class="row justify-content-start text-center mb-5 ">
                            @foreach ($data as $item)
                                <div class="card mb-5 shadow rounded me-3 card_company" style="width: 18rem;">
                                    <div class="d-flex mt-2">
                                        <button type="button" class="btn btn-warning mb-2 me-2" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $item->id }}"><i
                                                class="fa fa-solid fa-pen-to-square" style="color:white;"></i></button>
                                        <form action="{{ url('perusahaan/' . $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" name="submit" class="btn btn-danger mb-2"><i
                                                    class="fa fa-solid fa-trash"></i></button>
                                        </form>
                                    </div>
                                    <img src="/template/logo_murgana.png" class="gambar-pt card-img-top position-relative"
                                        alt="...">
                                    <a href="{{ url('perusahaan/detail/' . $item->id) }}"
                                        class="nama-pt bg-success text-white position-absolute bottom-0 start-50 translate-middle-x w-100 h-25 ">{{ $item->name }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $data->links() }}
                </div>
            </div>
        </div>

        @include('company.edit')
        @include('company.create')
        @endif
    </main>
@endsection
