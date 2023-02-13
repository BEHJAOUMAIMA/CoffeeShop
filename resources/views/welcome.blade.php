<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                        <a class="nav-link me-auto text-dark fw-semibold" aria-current="page" href="/homeUser">Home</a>
                    </li> 
                    <li class="nav-item ms-5 me-3">
                        <a class="nav-link me-auto text-dark fw-semibold" aria-current="page" href="/menu">Menu</a>
                    </li>    
                </ul>
                <div>
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ url('/menu') }}" class="text-dark fs-6 fw-normal text-decoration-none"> {{ Auth::user()->name }}</a>
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
    <div class="container">
        @if(session('error'))
            <div class="alert alert-danger mb-1 mt-1">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <section class="">
        <div class="introduction mx-auto mt-5 d-flex justify-content-center text-white flex-column">
            <p class="titre pt-3">ENJOY YOUR</p>
            <p class="titre">MORNING COFFEE .</p>
            <p class="text">Boost your productivity and build your Mood</p>
            <p class="text">with a glass of Coffee in the Morning</p>
        </div>
        <div class="menu text-center mt-5 py-5">
            <p class="menu-title">Welcome to The Best Coffee in Morocco!</p>
            <p class="citation">Great Coffee Served Everyday</p>
            <p class="citation">A gathering place in Downtown Farmville! Stop by and enjoy coffee, tea, live music,</p>
            <p class="citation">ice cream and much more!</p>
        </div>
        
        <div class="fiche mx-auto mt-5 d-flex align-items-center justify-content-evenly">
            <div style="width: 250px;">
            </div>
            <div class="d-flex flex-column">
                <p class="fiche-title text-center">TAKE YOUR</p>
                <p class="fiche-title text-center">COFFEE NOW .</p>
            </div>
            <div class="d-flex flex-column">
                <p class="fiche-text text-center">Don't let your coffee Cold.</p>
                <p class="fiche-text text-center">Let's go to <span>Couuuffeeee</span> and</p>
                <p class="fiche-text text-center">get your Coffee and</p>
                <p class="fiche-text text-center">boost your day now !</p>
            </div>
        </div>
    </section>
    <footer style="background-color:#393E46;">
        <div class="container mt-5 py-5">
            <div class="d-flex flex-nowrap justify-content-center">
                <a href="#" style="color: white;"><i id="bx1" class='bx bxl-facebook fs-1 mx-2'></i></a>
                <a href="#" style="color: white;"><i id="bx2" class='bx bxl-twitter fs-1 mx-2' ></i></a>
                <a href="#" style="color: white;"><i id="bx3" class='bx bxl-instagram fs-1 mx-2' ></i></a>
                <a href="#" style="color: white;"><i id="bx4" class='bx bxl-youtube fs-1 mx-2' ></i></a>
                <a href="#" style="color: white;"><i id="bx5" class='bx bxl-whatsapp fs-1 mx-2' ></i></a>
            </div>
            <div class="d-flex justify-content-around mt-5">
                <div class="d-flex flex-column text-white me-4">
                    <p><img class="logo" src="{{asset('images/logo1.png')}}" alt=""><span class="title me-5">ouuuffeeee</span></p>
                    <p class="ms-2">Couuuffeeee is a place that serve</p>
                    <p class="ms-2">many variant of coffee and other dashes</p>
                    <p class="ms-2 mb-5">with very confortable place.</p>
                </div>
                <div class="d-flex flex-column text-white mt-5">
                    <p class=""><i class='bx bx-map fs-4 mx-1'></i>Boulevard moulay youssef,</p>
                    <p class="ms-4"> Youssoufia, Maroc</p>
                </div>
            </div>
            <hr class="pb-5 text-white text-center">
            <div class="text-center py-2">
                <p class="text-white">© 2023 Couuuffeeee-Tous les droits sont réservés</p>
            </div>
            
            
        </div>
    </footer>
    </body>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
