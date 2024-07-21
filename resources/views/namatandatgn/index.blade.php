@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Halaman Nama Tanda Tangan</h1>
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
                <a href="{{ route('namatandatgn.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id Tanda tangan</th>
                                <th scope="col">Nama Tanda tangan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Nip</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($namatandatgn as $index => $data_namatandatgn)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $data_namatandatgn->id_tandatangan }}</td>
                                <td>{{ $data_namatandatgn->nama_tandatgn }}</td>
                                <td>{{ $data_namatandatgn->jabatan }}</td>
                                <td>{{ $data_namatandatgn->nip }}</td>
                                <td class="text-center">
                                    <a href="{{ route('namatandatgn.edit', $data_namatandatgn->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    <form action="{{ route('namatandatgn.destroy', $data_namatandatgn->id) }}" method="POST" style="display:inline;">
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
                    {{-- {{ $namatandatgn->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
