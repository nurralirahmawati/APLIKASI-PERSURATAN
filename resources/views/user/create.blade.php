<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New User</div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" value="{{ old('username') }}" required>
                                @error('username')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                                @error('password')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" id="status" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                @error('status')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_petugas">Nama Petugas</label>
                                <input type="text" name="nama_petugas" class="form-control" id="nama_petugas" placeholder="Enter nama petugas" value="{{ old('nama_petugas') }}" required>
                                @error('nama_petugas')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Create User</button>
                            <a href="{{ route('user.index') }}" class="btn btn-secondary">Back to List</a>
                        </form>
                    </div>
                </div>
            </div>
            <script src="{{ asset('js/app.js') }}"></script>
        </div>
    </div>            
</body>
</html>