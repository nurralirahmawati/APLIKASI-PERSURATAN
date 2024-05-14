<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Pengirim</h1>
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" value="{{ $user->username }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" name="status" class="form-control" value="{{ $user->status }}" required>
            </div>
            <div class="form-group">
                <label for="nama_petugas">Nama Petugas:</label>
                <input type="text" name="nama_petugas" class="form-control" value="{{ $user->nama_petugas }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('user.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>