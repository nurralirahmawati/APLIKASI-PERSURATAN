@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Tambah Kepala Surat</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Kepala Surat</a></div>
        <div class="breadcrumb-item">Tambah Kepala Surat</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kepalasurat.store') }}" method="POST">
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
                        <label for="nama_kop">Nama Kop:</label>
                        <input type="text" class="form-control" id="nama_kop" name="nama_kop" value="{{ old('nama_kop') }}" required>
                        @error('nama_kop')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_kop">Alamat Kop:</label>
                        <input type="text" class="form-control" id="alamat_kop" name="alamat_kop" value="{{ old('alamat_kop') }}" required>
                        @error('alamat_kop')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_tujuan">Nama Tujuan:</label>
                        <input type="text" class="form-control" id="nama_tujuan" name="nama_tujuan" value="{{ old('nama_tujuan') }}" required>
                        @error('nama_tujuan')
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
