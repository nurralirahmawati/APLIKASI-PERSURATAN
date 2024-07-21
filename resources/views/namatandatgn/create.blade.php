@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Tambah Nama Tanda Tangan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Kepala Surat</a></div>
        <div class="breadcrumb-item">Tambah Nama Tanda Tangan</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('namatandatgn.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_tandatangan">Id Tanda Tangan:</label>
                        <input type="number" class="form-control" id="id_tandatangan" name="id_tandatangan" value="{{ old('id_tandatangan') }}" required>
                        @error('id_tandatangan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_tandatgn">Nama Tanda Tangan:</label>
                        <input type="text" class="form-control" id="nama_tandatgn" name="nama_tandatgn" value="{{ old('nama_tandatgn') }}" required>
                        @error('nama_tandatgn')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan:</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan') }}" required>
                        @error('jabatan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nip">Nip:</label>
                        <input type="number" class="form-control" id="nip" name="nip" value="{{ old('nip') }}" required>
                        @error('nip')
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
