<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Details Pengirim</h1>
        <div class="card">
            <div class="card-header">
                User Information
            </div>
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="username">Username:</label>
                    <p id="username">{{ $user->username }}</p>
                </div>
                <div class="form-group mb-3">
                    <label for="status">Status:</label>
                    <p id="status">{{ $user->status }}</p>
                </div>
                <div class="form-group mb-3">
                    <label for="nama_petugas">Nama Petugas:</label>
                    <p id="nama_petugas">{{ $user->nama_petugas }}</p>
                </div>
                <a href="{{ route('user.index') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>