@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Tambah Surat Masuk</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Surat Masuk</a></div>
        <div class="breadcrumb-item">Tambah Surat Masuk</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('namatandatgn.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_kop">Id Kop:</label>
                        <select class="form-control" id="id_kop" name="id_kop" required>
                            <option value="">Pilih Id Kop</option>
                            @foreach ($nkepalasurat as $data_kepalasurat)
                                <option value="{{ $data_kepalasurat->id }}" {{ old('id_kop') == $data_kepalasurat->id ? 'selected' : '' }}>
                                    {{ $data_kepalasurat->id_kop }}
                                </option>
                            @endforeach
                        </select>
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
                        <label for="asal_surat">Asal Surat:</label>
                        <input type="text" class="form-control" id="asal_surat" name="asal_surat" value="{{ old('asal_surat') }}" required>
                        @error('asal_surat')
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
                        <label for="disp1">Disp1:</label>
                        <input type="text" class="form-control" id="disp1" name="disp1" value="{{ old('disp1') }}" required>
                        @error('disp1')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="disp2">Disp2:</label>
                        <input type="text" class="form-control" id="disp2" name="disp2" value="{{ old('disp2') }}" required>
                        @error('disp2')
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
                        <label for="image">Image:</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}" required>
                        @error('image')
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
