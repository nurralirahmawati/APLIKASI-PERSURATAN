
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Namatandatangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>List of Namatandatangan</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Tandatangan</th>
                    <th>Jabatan</th>
                    <th>NIP</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($namatandatangans as $namatandatangan)
                <tr>
                    <td>{{ $namatandatangan->id }}</td>
                    <td>{{ $namatandatangan->nama_tandatangan }}</td>
                    <td>{{ $namatandatangan->jabatan }}</td>
                    <td>{{ $namatandatangan->nip }}</td>
                    <td>
                        <a href="{{ route('namatandatangan.show', $namatandatangan->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('namatandatangan.edit', $namatandatangan->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('namatandatangan.destroy', $namatandatangan->id) }}" method="POST" style="display: inline;">
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
</body>
</html>