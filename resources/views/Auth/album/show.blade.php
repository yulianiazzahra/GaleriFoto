@extends('Auth.layouts')
@section('link_text2', 'Foto Vibes Dashboard')
@section('link_text', 'Foto Vibes Posts')
@section('link', '/foto')
@section('link', '/dashboard')



@section('content')
<br>
<div class="row justify-content-center">
    <div class="col-lg-12 margin-tb">
        <div class="text-white">
            <h2 class="card-text btn btn-dark rounded-pill btn-sm text-white"> Show Foto </h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-black" href="{{ route('album.index') }}"> ~ Back</a>
        </div>
    </div>
</div>



<div class="col-lg-3 mx-auto">
    <div class="card h-110 custom-card">
        <!-- Menambahkan kelas justify-content-center di sini -->
        <div class="col-lg-6">
            <div class="card custom-card">
                <div class="card-body text-center" style="background-color: #f8f9fa;">
                    <h5 class="card-title fw-bold text-black">{{ $album->nama_album }}</h5>
                    <p class="card-text btn btn-primary rounded-pill btn-sm text-black">{{ $album->deskripsi }}</p>
                    <p class="text-dark text-black">Created on {{ $album->tanggal_dibuat }}</p>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary btn-sm text-black" href="{{ route('album.edit',$album->id) }}">Edit</a>
                    <form action="{{ route('album.destroy',$album->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<br>
@endsection