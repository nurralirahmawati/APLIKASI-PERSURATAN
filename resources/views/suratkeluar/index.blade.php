@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Halaman Surat Keluar</h1>
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
                <a href="{{ route('suratkeluar.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Kop</th>
                                <th>Tanggal</th>
                                <th>No Surat</th>
                                <th>Perihal</th>
                                <th>Tujuan</th>
                                <th>Isi Surat</th>
                                <th>ID Tanda Tangan</th>
                                <th>ID User</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($suratkeluar as $index => $data_suratkeluar)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $data_suratkeluar->id_kop }}</td>
                                <td>{{ $data_suratkeluar->tanggal }}</td>
                                <td>{{$data_suratkeluar->no_surat }}</td>
                                <td>{{ $data_suratkeluar->perihal }}</td>
                                <td>{{ $data_suratkeluar->tujuan }}</td>
                                <td>{{ $data_suratkeluar->isi_surat }}</td>
                                <td>{{ $data_suratkeluar->tandatgn->id_tandatangan }}</td>
                                <td>{{ $data_suratkeluar->pengguna->id_user }}</td>
                                <td class="text-center">
                                    <a href="{{ route('suratkeluar.edit', $data_suratkeluar->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    <form action="{{ route('suratkeluar.destroy', $data_suratkeluar->id) }}" method="POST" style="display:inline;">
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
                    {{-- {{ $suratkeluar->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
