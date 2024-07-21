@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Halaman Pengguna</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dasbor</a></div>
        <div class="breadcrumb-item"><a href="#">Tata Letak</a></div>
        <div class="breadcrumb-item">Tata Letak Default</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('pengguna.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id User</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Password</th>
                                <th scope="col">Status</th>
                                <th scope="col">Nama Petugas</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pengguna as $index => $data_pengguna)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $data_pengguna->id_user }}</td>
                                <td>{{ $data_pengguna->username }}</td>
                                <td>{{ $data_pengguna->password }}</td>
                                <td>{{ $data_pengguna->status }}</td>
                                <td>{{ $data_pengguna->nama_ptgs }}</td>
                                <td class="text-center">
                                    <a href="{{ route('pengguna.edit', $data_pengguna->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    <form action="{{ route('pengguna.destroy', $data_pengguna->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin ?');">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                    <div class="alert alert-danger">
                                        Data Pengguna Belum Ada.
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- {{ $pengguna->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
