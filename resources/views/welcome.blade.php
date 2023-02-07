<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="{{asset('css/welcome.css')}}" rel="stylesheet">

        <title>Coffee Shop</title>
    </head>
    <body class="">
        <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo ms-3" src="{{asset('images/logo1.png')}}" alt=""><span class="title me-5">ouuuffeeee</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-5 me-3">
                        <a class="nav-link text-dark fw-semibold" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link text-dark fw-semibold" href="#">Menu</a>
                    </li>     
                </ul>
                <div>
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/home') }}" class="text-dark fs-6 fw-semibold text-decoration-none">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="aut fs-6 text-dark fw-semibold text-decoration-none px-2">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="aut fs-6 text-dark fw-semibold ms-3 me-3 text-decoration-none px-2">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <section>
        <div class="introduction mx-auto mt-5 d-flex justify-content-center text-white flex-column">
            <p class="titre pt-3">ENJOY YOUR</p>
            <p class="titre">MORNING COFFEE .</p>
            <p class="text">Boost your productivity and build your Mood</p>
            <p class="text">with a glass of Coffee in the Morning</p>
        </div>
        <div id="carouselExampleAutoplaying" class="carousel slide mx-auto mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active mx-auto">
                    <img src="{{asset('images/img1.jpg')}}" class="picture d-block mx-auto" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/img2.jpg')}}" class="picture d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/img3.jpg')}}" class="picture d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/img4.jpg')}}" class="picture d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/img5.jpg')}}" class="picture d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/img6.jpg')}}" class="picture d-block" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    </body>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
        </div>
</html>
