<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Kepalasurat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Kepalasurat Details</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>User:</strong> {{ $kepalasurat->user->name }}</li>
                            <li class="list-group-item"><strong>Nama Kop:</strong> {{ $kepalasurat->nama_kop }}</li>
                            <li class="list-group-item"><strong>Alamat Kop:</strong> {{ $kepalasurat->alamat_kop }}</li>
                            <li class="list-group-item"><strong>Nama Tujuan:</strong> {{ $kepalasurat->nama_tujuan }}</li>
                            <li class="list-group-item"><strong>Created At:</strong> {{ $kepalasurat->created_at }}</li>
                            <li class="list-group-item"><strong>Updated At:</strong> {{ $kepalasurat->updated_at }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>