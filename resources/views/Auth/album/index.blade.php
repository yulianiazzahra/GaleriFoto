@extends('auth.layouts')

@section('link_text', 'Foto Vibes Posts')
@section('link', '/foto')
@section('link_text2', 'Foto Vibes Dashboard')
@section('link2', '/dashboard')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center mt-5">
                <h2 class="card-text btn btn-dark rounded-pill btn-lg text-white"> Data Album 
                </h2>
            </div>
            <div class="text-center mt-3">
                <a class="btn btn-primary btn-lg" href="{{ route('album.create') }}"> + Add New Album</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success mt-4">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row mt-4">
        @forelse ($albums as $album)
        <div class="col-lg-4 mb-4">
            <div class="card custom-card shadow">
                <div class="card-body text-center" style="background-color: #f8f9fa;">
                    <h5 class="card-title text-dark">{{ $album->nama_album }}</h5>
                    <p class="card-text text-dark">{{ $album->deskripsi }}</p>
                    <p class="card-text text-dark">Created on {{ $album->tanggal_dibuat }}</p>
                </div>
                <div class="card-footer d-flex justify-content-between" style="background-color: #f8f9fa;">
                    <form action="{{ route('album.show', $album->id) }}" method="GET">
                        <button type="submit" class="btn btn-sm btn-info">Show</button>
                    </form>
                    <form action="{{ route('album.edit', $album->id) }}" method="GET">
                        <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                    </form>
                    <form action="{{ route('album.destroy', $album->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="col-lg-12">
            <p class="text-dark">No albums found.</p>
        </div>
        @endforelse
    </div>

    <div class="mt-5"></div> <!-- Add some empty space at the bottom of the page -->
</div>

<footer class="footer bg-dark text-center text-white py-3">
    <!-- Add a footer section for pagination -->
    {!! $albums->links() !!}
</footer>

@endsection
