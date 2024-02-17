@extends('Auth.Layouts')
@section('link_text', 'Foto Vibes All Posts')
@section('link_text1', 'Foto Vibes All Albums')
@section('link', '/foto')
@section('link1', '/album')


@section('content')

<br>
<div class="container mt-4" style="background-color: #D7F7F5;">
    <div class="row justify-content-center">
        <div class="col-md-4" style="background-color: #75CAC3;">
            <div class="card d-flex">
                <div class="card-header justify-content-center text-white"> Dashboard </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                    @else
                    <div class="alert alert-success text-center">
                        ⬉⬊ Kamu Telah Login ⬊⬉
                        <br>
                        <br>
                        {{ Auth::user()->nama_lengkap }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    
    



    <div class="text-center text-white">
                <br>
                <br>
                <br>
                <br>
                <h2 class="card-text btn btn-dark rounded-pill btn-sm text-white display-3"> Gallery Foto
                    Vibes </h2>
            </div>
            <br>
            <br>
    <div class="row">
                @foreach ($fotos as $index => $foto) <!-- Tambahkan $index pada foreach untuk menambahkan delay animasi -->
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}"> <!-- Tambahkan data-aos untuk efek fade-up dengan delay yang bertambah sesuai dengan index -->
                    <div class="card h-100 custom-card">
                        <!-- Added custom-card class -->
                        <a href="foto/{{ $foto->id }}">
                            <img src="/image/{{ $foto->image }}" class="card-img-top" alt="Image"
                                style="height: 200px; object-fit: cover;">
                        </a>
                        <div class="card-body text-center" style="background-color: #000000;">
                            <h5 class="card-title fw-bold text-white">{{ $foto->category }}</h5>
                            <p class="card-text btn btn-primary rounded-pill btn-sm text-white">
                                {{ $foto->judul_foto }}</p>
                            <p class="text-white text-white">{{ $foto->deskripsi_foto }}</p>
                            <p class="text-white text-white">{{ $foto->tgl_unggah }}</p>

                            <!-- <form action="{{ route('foto.destroy',$foto->id) }}" method="POST">
                        <div class="text-center">
                            <a class="btn btn-primary btn-sm text-white"
                                href="{{ route('foto.edit',$foto->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </form> -->
                        </div>
                        <br>
                        <br>
                        <br>
                        <style>
                        /* CSS */
                        .like-btn {
                            position: relative;
                            transition: transform 0.3s ease-in-out;
                        }

                        .like-btn .fa-heart {
                            transition: color 0.3s ease-in-out;
                        }

                        .like-btn:hover {
                            transform: scale(1.2);
                        }

                        .like-btn:active .fa-heart {
                            color: red;
                            /* Ganti dengan warna merah yang Anda inginkan */
                        }

                        /* Atau animasi yang lebih kompleks */
                        .like-btn:active {
                            animation: pulse 0.5s;
                        }

                        @keyframes pulse {
                            0% {
                                transform: scale(1);
                            }

                            50% {
                                transform: scale(1.2);
                            }

                            100% {
                                transform: scale(1);
                            }
                        }

                        @keyframes floating {
                            0% {
                                transform: translateY(0);
                            }

                            50% {
                                transform: translateY(-10px);
                            }

                            100% {
                                transform: translateY(0);
                            }
                        }

                        .like-btn .badge {
                            animation: floating 1s infinite;
                        }

                        @keyframes flying-heart {
                            0% {
                                opacity: 1;
                                transform: translateY(0) rotate(0deg);
                                filter: drop-shadow(0 0 0 rgba(255, 0, 0, 0.7));
                            }

                            50% {
                                transform: translateY(-100px) rotate(0deg);
                                filter: drop-shadow(0 0 10px rgba(255, 0, 0, 0.7));
                            }

                            100% {
                                opacity: 0;
                                transform: translateY(-200px) rotate(720deg);
                                filter: drop-shadow(0 0 20px rgba(255, 0, 0, 0.7));
                            }
                        }

                        .floating-heart {
                            position: fixed;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            color: red;
                            /* Warna love */
                            animation: flying-heart 2s ease-in-out forwards;
                            /* Waktu dan jenis interpolasi animasi */
                        }

                        /* Tambahkan CSS untuk efek hover pada seluruh card */
                        .custom-card:hover {
                            transform: translateY(-30px); /* Atur perpindahan vertikal saat dihover */
                        }
                        </style>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-center text-center">
                            <form action="{{ route('foto.like', $foto->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary like-btn">
                                    <i class="far fa-heart fa-2x"></i>
                                    <!-- Mengatur ukuran ikon hati menjadi dua kali lipat -->
                                    <span class="badge bg-light text-dark"
                                        style="font-size: 1.0em;">{{ $foto->likes()->count() }}</span>
                                </button>
                            </form>
                        </div>
                        <style>
                        .btn-comment {
                            border-radius: 20px;
                            /* Membuat tombol menjadi bulat */
                            padding: 10px 20px;
                            /* Menambahkan ruang di dalam tombol */
                            font-weight: bold;
                            /* Membuat teks pada tombol menjadi lebih tebal */
                            transition: all 0.3s ease;
                            /* Transisi untuk efek hover */
                        }

                        .btn-comment:hover {
                            background-color: #007bff;
                            /* Mengubah warna tombol saat dihover */
                            color: #fff;
                            /* Mengubah warna teks saat dihover */
                            border-color: #007bff;
                            /* Mengubah warna border saat dihover */
                        }

                        /* Animasi efek hover */
                        .btn-comment {
                            /* Properti lainnya tetap sama */
                            transition: background-color 0.3s, transform 0.3s;
                        }

                        .btn-comment:hover {
                            background-color: #007bff;
                            /* Warna latar belakang saat dihover */
                            color: white;
                            /* Warna teks saat dihover */
                            transform: scale(1.1);
                            /* Perbesar tombol saat dihover */
                        }
                        /* Tambahkan CSS untuk animasi gerakan saat tombol "Like" ditekan */
                        .like-btn:active {
                            animation: move-like 0.3s ease-out;
                        }

                        @keyframes move-like {
                            0% {
                                transform: translateY(0);
                            }

                            25% {
                                transform: translateY(-5px);
                            }

                            50% {
                                transform: translateY(0);
                            }

                            75% {
                                transform: translateY(-5px);
                            }

                            100% {
                                transform: translateY(0);
                            }
                        }
                        </style>
                        <button onclick="window.location='{{ route('comments.lihat', $foto->id) }}'"
                            class="btn btn-primary btn-comment">
                            <i class="bi bi-chat-square-fill"></i> Comments <span
                                class="badge bg-secondary">{{ $foto->comments->count() }}</span>
                        </button>
                    </div>
                </div>
                @endforeach
                <br>
            </div>
        </div>

<br>
<br>
    @endsection
