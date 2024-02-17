@extends('auth.layouts')

@section('link_text', 'Foto Vibes All Dashboard')
@section('link_text1', 'Foto Vibes All Albums')
@section('link', '/dashboard')
@section('link1', '/album')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center mt-5">
                <h2 class="card-text btn btn-dark rounded-pill btn-lg text-white"> Data Foto 
                </h2>
            </div>
            <div class="text-center mt-3">
                <a class="btn btn-primary btn-lg" href="{{ route('foto.create') }}"> + Add New Post</a>
            </div>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success mt-4">
    <p>{{ $message }}</p>
</div>
@endif

<div class="container mt-4">
    @if($fotos->isEmpty())
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-center">
                <h3 class="mt-3">Oops! No Foto Found.</h3>
                <p>It looks like there are no fotos available at the moment. Stay tuned for more updates!</p>
            </div>
        </div>
    </div>
    @else
    <div class="row">
        @foreach ($fotos as $foto)
        <div class="col-lg-4 mb-4">
            <div class="card h-100 custom-card shadow">
                <a href="foto/{{ $foto->id }}">
                    <div class="rounded-circle overflow-hidden mx-auto" style="width: 250px; height: 250px;">
                        <img src="/image/{{ $foto->image }}" class="card-img-top" alt="Image" style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                </a>
                <div class="card-body text-center" style="background-color: #f8f9fa;">
                    <h5 class="card-title fw-bold text-dark">{{ $foto->category }}</h5>
                    <p class="card-text btn btn-dark rounded-pill btn-sm text-white">
                        {{ $foto->judul_foto }}</p>
                    <p class="text-dark">{{ $foto->deskripsi_foto }}</p>
                    <p class="text-dark">{{ $foto->tgl_unggah }}</p>
                    <a href="foto/{{ $foto->id }}" class="btn btn-dark rounded-pill btn-sm text-white">Show Image</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>

@if($fotos->isNotEmpty())
{!! $fotos->links() !!}
@endif

<style>
.custom-card {
    background-color: #ffffff;
    border-radius: 20px; /* Mengubah kartu menjadi bulat */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.shadow {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.custom-card:hover {
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3);
    transform: translateY(-5px);
}

.card-title,
.card-text {
    transition: color 0.3s ease;
}

.custom-card:hover .card-title,
.custom-card:hover .card-text {
    color: #ff9900;
}
</style>

@endsection
