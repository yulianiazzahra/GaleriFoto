@extends('Auth.layouts')

@section('link_text', 'Foto Vibes Dashboard')
@section('link_text1', 'Foto Vibes Albums')
@section('link', '/dashboard')
@section('link1', '/album')

@section('content')
<br>
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="text-white">
            <h2 class="card-text btn btn-dark rounded-pill btn-sm text-white">  Show Foto </h2>
        </div>
        <br>
        <div class="d-flex justify-content-between">
            <a class="btn btn-black text-white" href="{{ route('foto.index') }}"> ~ Back</a>
        </div>
    </div>

    <div class="row justify-content-center">
    <div class="col-lg-3 mx-auto">
        <div class="card h-100 custom-card">
            <a href="/image/{{ $foto->image }}" data-lightbox="image-{{ $foto->id }}">
                <img src="/image/{{ $foto->image }}" class="card-img-top" alt="Image">
            </a>
            <div class="card-body text-center" style="background-color: #000000;">
                <h5 class="card-title fw-bold text-white">{{ $foto->category }}</h5>
                <p class="card-text btn btn-primary rounded-pill btn-sm text-white">{{ $foto->judul_foto }}</p>
                <p class="text-dark text-white">{{ $foto->deskripsi_foto }}</p>
                <p class="text-dark text-white">{{ $foto->tgl_unggah }}</p>
                <div class="text-center">
                    <a class="btn btn-primary btn-sm text-white" href="{{ route('foto.edit',$foto->id) }}">Edit</a>
                    <form action="{{ route('foto.destroy',$foto->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button id="delete" data-route="{{ route('foto.destroy', $foto->id) }}" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 
<br>
@endsection