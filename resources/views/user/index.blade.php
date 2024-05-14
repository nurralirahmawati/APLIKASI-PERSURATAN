<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengirim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .data-pengirim {
            font-weight: bold;
            font-size: 2em;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body style="background: white">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="data-pengirim">Data Pengirim</div>
                    <div class="card-body">
                        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Create User</a>
                        @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Status</th>
                                <th scope="col">Nama Petugas</th>
                                <th scope="col" style="width: 20%">Actions</th>
                                </tr>
                            </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->status }}</td>
                                <td>{{ $user->nama_petugas }}</td>
                                <td class="text-center">
                                    <a href="{{ route('user.show', $user->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                                
                                    @csrf
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
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>