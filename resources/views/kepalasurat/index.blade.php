@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Halaman Kepala Surat</h1>
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
                <a href="{{ route('kepalasurat.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id Kop</th>
                                <th scope="col">Nama Kop</th>
                                <th scope="col">Nama Tujuan</th>
                                <th scope="col">Id User</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kepalasurat as $index => $data_kepalasurat)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $data_kepalasurat->id_kop }}</td>
                                <td>{{ $data_kepalasurat->nama_kop }}</td>
                                <td>{{ $data_kepalasurat->nama_tujuan }}</td>
                                <td>{{ $data_kepalasurat->pengguna->id_user }}</td>
                                <td class="text-center">
                                    <a href="{{ route('kepalasurat.edit', $data_kepalasurat->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    <form action="{{ route('kepalasurat.destroy', $data_kepalasurat->id) }}" method="POST" style="display:inline;">
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
                    {{-- {{ $kepalasurat->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
