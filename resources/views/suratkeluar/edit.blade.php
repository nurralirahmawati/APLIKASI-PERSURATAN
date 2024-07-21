@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Tambah Surat Keluar</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Surat Keluar</a></div>
        <div class="breadcrumb-item">Tambah Surat Keluar</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('suratkeluar.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_kop">Id Kop:</label>
                        <input type="number" class="form-control" id="id_kop" name="id_kop" value="{{ old('id_kop') }}" required>
                        @error('id_kop')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal :</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
                        @error('tanggal')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_surat">No Surat:</label>
                        <input type="number" class="form-control" id="no_surat" name="no_surat" value="{{ old('no_surat') }}" required>
                        @error('no_surat')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="perihal">Perihal:</label>
                        <input type="text" class="form-control" id="perihal" name="perihal" value="{{ old('perihal') }}" required>
                        @error('perihal')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tujuan">Tujuan:</label>
                        <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ old('tujuan') }}" required>
                        @error('tujuan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_surat">Isi Surat:</label>
                        <input type="text" class="form-control" id="isi_surat" name="isi_surat" value="{{ old('isi_surat') }}" required>
                        @error('isi_surat')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_tandatangan">Id Tanda Tangan:</label>
                        <select class="form-control" id="id_tandatangan" name="id_tandatangan" required>
                            <option value="">Pilih Id Tanda Tangan</option>
                            @foreach ($namatandatgn as $data_namatandatgn)
                                <option value="{{ $data_namatandatgn->id }}" {{ old('id_tandatangan') == $data_namatandatgn->id ? 'selected' : '' }}>
                                    {{ $data_namatandatgn->id_tandatangan }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_tandatangan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_user">Id User:</label>
                        <select class="form-control" id="id_user" name="id_user" required>
                            <option value="">Pilih Id</option>
                            @foreach ($pengguna as $data_pengguna)
                                <option value="{{ $data_pengguna->id }}" {{ old('id_user') == $data_pengguna->id ? 'selected' : '' }}>
                                    {{ $data_pengguna->id_user }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_user')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
