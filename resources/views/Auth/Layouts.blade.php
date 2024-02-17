<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'Website Foto Vibes')</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #75CAC3;" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-white" href="{{ url('/') }}">
                  F🅾T🅾 Vibes</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    @guest
                    <li><a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}"
                            href="{{ route('login') }}">Log-in</a></li>
                    <li><a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}"
                            href="{{ route('register') }}">Register</a></li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link text-white align-self-center" href="@yield('link')">@yield('link_text')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white align-self-center" href="@yield('link1')">@yield('link_text1')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white align-self-center" href="@yield('link2')">@yield('link_text2')</a>
                    </li>
                    <li class="nav-item dropdown d-flex">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->username }}
                        </a>
                        <div class="dropdown-menu">
                            <button class="dropdown-item"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- About -->
    <section class="contact-section" style="background-color: #D7F7F5;">
        <div class="container px-4 px-lg-5">
            @yield('content')

        </div>
    </section>


    <section class="contact-section" style="background-color: #75CAC3;">
        <div class="social d-flex justify-content-center">
            <a class="mx-2 bg-black" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="mx-2 bg-black" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2 bg-black" href="#!"><i class="fab fa-github"></i></a>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer small text-center text-black-20" style="background-color: #75CAC3;">
        <div class="container px-4 px-lg-5 text-black">Copyright &copy; 「 ✦ Website Foto Vibes ✦ 」</div>
    </footer>


    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="{{ asset('templete/css/styles.css') }}"></script>
    <!-- SB Forms JS -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Lightbox2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


    <script type="text/javascript">
    function delete(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke halaman foto setelah mengkonfirmasi penghapusan
                window.location.href = "{{ route('foto.index') }}";
            }
        });
    }
    </script>

    


</body>

</html>