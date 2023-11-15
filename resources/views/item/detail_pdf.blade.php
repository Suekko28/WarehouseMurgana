<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
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
