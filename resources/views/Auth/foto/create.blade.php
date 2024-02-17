@extends('Auth.layouts')
@section('link_text', 'Foto Vibes Dashboard')
@section('link_text1', 'Foto Vibes Albums')
@section('link', '/dashboard')
@section('link1', '/album')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left text-white">
            <br>
            <h2 class="card-text btn btn-dark rounded-pill btn-sm text-white"> Bagian Tambah Foto</h2>
        </div>
        <br>
        <div class="pull-right col-lg-12">
            <a class="btn btn-primary" href="{{ route('foto.index') }}"> ~Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('foto.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-black">
                <label for="judul_foto"><strong>Judul Foto:</strong></label>
                <input type="text" id="judul_foto" name="judul_foto" class="form-control" placeholder="Judul Foto">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-black">
                <label for="album_id"><strong>Kategori:</strong></label>
                <select name="album_id" id="album_id" class="form-select @error('album_id') is-invalid @enderror"
                    aria-label="Default select example">
                    <option selected>Pilih nama Album</option>
                    @foreach($fotos as $album)
                    <option value="{{ $album->id }}">{{ $album->nama_album }}</option>
                    @endforeach
                </select>
                @error('album_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="my-2">
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-black">
                <label for="deskripsi_foto"><strong>Deskripsi:</strong></label>
                <textarea id="deskripsi_foto" class="form-control" style="height:150px" name="deskripsi_foto"
                    placeholder="Deskripsi"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-black">
                <label for="image"><strong>Image:</strong></label>
                <input type="file" id="image" name="image" class="form-control" placeholder="Image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-black">
                <label for="tgl_unggah"><strong>Tanggal Unggah:</strong></label>
                <input type="date" id="tgl_unggah" name="tgl_unggah" class="form-control" placeholder="Tanggal Unggah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br>
        </div>
    </div>
    <br>
</form>
@endsection