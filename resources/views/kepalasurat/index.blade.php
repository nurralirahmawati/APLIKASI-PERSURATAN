<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kepalasurat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center">Data Kepalasurat</h1>
                <a href="{{ route('kepalasurat.create') }}" class="btn btn-primary mb-3">Create Kepalasurat</a>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Kop</th>
                            <th scope="col">Alamat Kop</th>
                            <th scope="col">Nama Tujuan</th>
                            <th scope="col">User</th>
                            <th scope="col" style="width: 20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kepalasurats as $kepalasurat)
                            <tr>
                                <td>{{ $kepalasurat->id_kop }}</td>
                                <td>{{ $kepalasurat->nama_kop }}</td>
                                <td>{{ $kepalasurat->alamat_kop }}</td>
                                <td>{{ $kepalasurat->nama_tujuan }}</td>
                                <td>{{ $kepalasurat->user->username }}</td>
                                <td class="text-center">
                                    <a href="{{ route('kepalasurat.show', $kepalasurat->id_kop) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('kepalasurat.edit', $kepalasurat->id_kop) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('kepalasurat.destroy', $kepalasurat->id_kop) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>