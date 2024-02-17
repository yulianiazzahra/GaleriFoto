@extends('Auth.layouts')

@section('link_text', 'Foto Vibes All Posts')
@section('link_text1', 'Foto Vibes All Albums')
@section('link', '/foto')
@section('link1', '/album')

@section('content')
<style>
    @keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 5;
    }
}

.fadeIn {
    animation-name: fadeIn;
    animation-duration: 6s; /* Durasi animasi */
}

</style>
<br>
<br>
<div class="container">
    <div class="row g-2">
        @if ($foto)
        <div class="col-md animate__animated animate__fadeIn">
            <div class="form-floating">
                <a href="foto/{{ $foto->id }}">
                    <img src="/image/{{ $foto->image }}" class="card-img-top img-fluid" alt="Image"
                        style="object-fit: cover;">
                </a>
                <div class="card-body text-center" style="background-color: #000000; padding: 20px;">
                    <!-- Menambahkan padding -->
                    <h5 class="card-title fw-bold text-white">{{ $foto->category }}</h5>
                    <p class="card-text btn btn-primary rounded-pill btn-sm text-white">
                        {{ $foto->judul_foto }}</p>
                    <p class="text-white text-white">{{ $foto->deskripsi_foto }}</p>
                    <p class="text-white text-white">{{ $foto->tgl_unggah }}</p>
                </div>
            </div>
        </div>
        <br>


        <div class="list-group animate__animated animate__fadeIn">
        @foreach ($foto->comments as $comment)
            <div class="list-group-item">
                <div class="d-flex flex-start align-items-center">
                    <img class="rounded-circle shadow-1-strong me-3"
                        src="https://avatar.iran.liara.run/public/boy?username=Ash" alt="avatar" width="40" height="40">
                    <div>
                        <h6 class="fw-bold text-primary mb-1">
                            @if ($comment->user)
                            {{ $comment->user->nama_lengkap }}
                            @else
                            [Pengguna Tidak Ditemukan]
                            @endif
                        </h6>
                        <p>{{ $comment->isi_komentar }}</p>
                        <p class="text-muted small">{{ $comment->tgl_komentar }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="col-md animate__animated animate__fadeIn">
    <div class="form-floating">
        <div>
            <h6 class="fw-bold text-primary mb-1">Tambahkan Komentar</h6>
            <form action="{{ route('comments.simpan') }}" method="POST">
            @csrf
                <input type="hidden" name="foto_id" value="{{ $foto->id }}">
                <div class="mb-3">
                    <label for="comment" class="form-label">Komentar Anda</label>
                    <textarea class="form-control" id="comment" name="isi_komentar" rows="3"
                        style="resize: none; border-radius: 10px; border: 1px solid #ced4da; padding: 10px;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Komentar</button>
            </form>
        </div>
        @else
        <div class="col-md">
            <p>Tidak ada foto yang tersedia.</p>
        </div>
        @endif
    </div>
</div>
<br>
@endsection
