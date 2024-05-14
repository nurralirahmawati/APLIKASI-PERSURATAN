<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kepalasurat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Kepalasurat</div>
                    <div class="card-body">
                        <form action="{{ route('kepalasurat.update', $kepalasurat->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="user_id">User</label>
                                <select name="user_id" class="form-control" id="user_id" required>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ $user->id == $kepalasurat->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_kop">Nama Kop</label>
                                <input type="text" name="nama_kop" class="form-control" id="nama_kop" value="{{ $kepalasurat->nama_kop }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat_kop">Alamat Kop</label>
                                <textarea name="alamat_kop" class="form-control" id="alamat_kop" rows="3" required>{{ $kepalasurat->alamat_kop }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_tujuan">Nama Tujuan</label>
                                <input type="text" name="nama_tujuan" class="form-control" id="nama_tujuan" value="{{ $kepalasurat->nama_tujuan }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Kepalasurat</button>
                            <a href="{{ route('kepalasurat.index') }}" class="btn btn-secondary">Back to List</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>