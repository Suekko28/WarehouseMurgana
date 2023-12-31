<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="header text-center">
        <img src="template/logo.jpg" alt="" width="150px" height="50px">
        <h4>Jasa Pemeriksaan K3 - Consultant Lingkungan - General Supplier</h4>
        <hr style="height:2px;border-width:0;color:black;background-color:black">
    </div>
    <table class="table table-bordered text-center vw-100">
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
            </tr>
        </thead>
        <tbody>
            </tr>
            @php $i=1 @endphp
            @foreach ($items as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->alat }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->pabrik }}</td>
                    <td>{{ $item->seri }}</td>
                    <td>{{ $item->pengesahan }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tgl_msk)->format('d-m-Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tgl_klr)->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>

</html>
