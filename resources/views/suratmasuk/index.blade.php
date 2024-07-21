@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Halaman Surat Masuk</h1>
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
                <a href="{{ route('suratmasuk.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id Kop</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">No Surat</th>
                                <th scope="col">Asal Surat</th>
                                <th scope="col">Perihal</th>
                                <th scope="col">Disp1</th>
                                <th scope="col">Disp2</th>
                                <th scope="col">Id Tanda Tangan</th>
                                <th scope="col">Image</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($suratmasuk as $index => $data_suratmasuk)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $data_suratmasuk->kepalasurat->id_kop }}</td>
                                <td>{{ $data_suratmasuk->tanggal }}</td>
                                <td>{{ $data_suratmasuk->no_surat }}</td>
                                <td>{{ $data_suratmasuk->asal_surat }}</td>
                                <td>{{ $data_suratmasuk->perihal }}</td>
                                <td>{{ $data_suratmasuk->disp1 }}</td>
                                <td>{{ $data_suratmasuk->disp2 }}</td>
                                <td>{{ $data_suratmasuk->tandatgn->id_tandatangan }}</td>
                                <td>{{ $data_suratmasuk->image }}</td>
                                <td class="text-center">
                                    <a href="{{ route('suratmasuk.edit', $data_suratmasuk->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    <form action="{{ route('suratmasuk.destroy', $data_suratmasuk->id) }}" method="POST" style="display:inline;">
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
                    {{-- {{ $suratmasuk->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
