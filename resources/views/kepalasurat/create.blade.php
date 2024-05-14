<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Kepalasurat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New Kepalasurat</div>
                    <div class="card-body">
                        <form action="{{ route('kepalasurat.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="user_id">User</label>
                                <select name="user_id" class="form-control" id="user_id" required>
                                    <option value="">Select User</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_kop">Nama Kop</label>
                                <input type="text" name="nama_kop" class="form-control" id="nama_kop" placeholder="Enter Nama Kop" value="{{ old('nama_kop') }}" required>
                                @error('nama_kop')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat_kop">Alamat Kop</label>
                                <textarea name="alamat_kop" class="form-control" id="alamat_kop" placeholder="Enter Alamat Kop" required>{{ old('alamat_kop') }}</textarea>
                                @error('alamat_kop')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_tujuan">Nama Tujuan</label>
                                <input type="text" name="nama_tujuan" class="form-control" id="nama_tujuan" placeholder="Enter Nama Tujuan" value="{{ old('nama_tujuan') }}" required>
                                @error('nama_tujuan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Create Kepalasurat</button>
                            <a href="{{ route('kepalasurat.index') }}" class="btn btn-secondary">Back to List</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>