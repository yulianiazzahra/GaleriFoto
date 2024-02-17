<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Website Foto Vibes</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('templete/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ url('/') }}">Website Foto Vibes</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Foto Vibes</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Selamat Datang Foto Vibes</h2>
                </div>

            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Foto Vibes</h2>
                    <p class="text-white-50">
                        Foto Vibes adalah suatu kumpulan atau tata letak visual yang menampilkan sejumlah gambar atau
                        foto. Foto Vibes biasanya digunakan untuk memamerkan atau menyajikan karya-karya fotografi,
                        acara, produk, atau konten visual lainnya.</a>
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="{{ asset('img/ipad.png') }}" alt="..." />
        </div>
    </section>

    <!-- Category Section -->


    <!-- Projects-->
    <head>
    <link rel="stylesheet" href="path/to/animate.css">
    <style>
        /* Gaya tambahan jika diperlukan */
        /* Animasi fadeInUp */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate__animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        .animate__fadeInUp {
            animation-name: fadeInUp;
        }
    </style>
</head>

    <section class="projects-section bg-white" id="projects">
    <div class="container mt-4">
        <h2 class="text-center mb-4">Random Foto</h2>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
            <div class="col-lg-4">
                <div class="card h-100 custom-card shadow animate__animated animate__fadeInUp">
                    <div class="card-body text-center bg-dark">
                        <h5 class="card-title text-white">Foto {{ $i+1 }}</h5>
                        <img src="https://picsum.photos/200/300?random={{ $i }}" class="img-fluid mb-3" alt="Random Image">
                        <p class="card-text text-white">Temukan keindahan yang tak terduga dalam setiap gambar. </p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>


    <br>
    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">

                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0 text-white"></h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-white-50">YulianiCompany</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0 text-white">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-white-50"><a href="mailto:companyfotovibes12gmail.com">CompanyFotoVibes12@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0 text-white">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-white-50">+1 (555) 902-8832</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
            <a class="mx-2" href="https://twitter.com/@zaralocvy"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="https://facebook.com/@zaralocvy"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="https://github.com/yulianiazzahra"><i class="fab fa-github"></i></a>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-20">
        <div class="container px-4 px-lg-5">Copyright &copy; 「 ✦ Website Foto Vibes ✦ 」</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('templete/css/styles.css') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>