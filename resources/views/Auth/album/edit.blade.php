@extends('Auth.layouts')
@section('link_text2', 'Foto Vibes Dashboard')
@section('link_text', 'Foto Vibes Posts')
@section('link', '/dashboard')
@section('link', '/foto')


@section('content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left text-white">
            <br>
            <br>
            <h2 class="card-text btn btn-dark rounded-pill btn-sm text-white text-center"> Bagian Edit Album
            </h2>
        </div>
        <br>
        <div class="pull-right col-lg-12">
            <a class="btn btn-primary" href="{{ route('album.index') }}"> ~Back</a>
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

<form action="{{ route('album.update', $album->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row text-white">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-black">
                <strong>Nama Album:</strong>
                <input type="text" name="nama_album" value="{{ $album->nama_album }}" class="form-control"
                    placeholder="Nama Album">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-black">
                <strong>Deskripsi:</strong>
                <textarea class="form-control" style="height:150px" name="deskripsi"
                    placeholder="Deskripsi">{{ $album->deskripsi }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-black">
                <strong>Tanggal Dibuat:</strong>
                <input type="date" name="tanggal_dibuat" value="{{ $album->tanggal_dibuat }}" class="form-control"
                    placeholder="Tanggal Unggah">
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
<br>
</form>
<br>
@endsection