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
                        <a class="nav-link me-auto text-dark fw-semibold" aria-current="page" href="/menu">Menu</a>
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
    <section class="">
        <div class="introduction mx-auto mt-5 d-flex justify-content-center text-white flex-column">
            <p class="titre pt-3">ENJOY YOUR</p>
            <p class="titre">MORNING COFFEE .</p>
            <p class="text">Boost your productivity and build your Mood</p>
            <p class="text">with a glass of Coffee in the Morning</p>
        </div>
        <div class="menu text-center mt-5 py-5">
            <p class="menu-title">Coffee Shop Menu</p>
            <p class="citation">Great Coffee Served Everyday</p>
        </div>
        <div class="menu-item mx-auto py-3 px-4">
            <p class="">ESPRESSO</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto my-4" style="width:90%;">
            <div class="col">
                <div class="card">
                <img src="{{asset('images/americano.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Americano</h5>
                    <p class="card-text text-truncate">The Americano Coffee is a favorite among coffee lovers who enjoy the taste of espresso but in a more diluted form. It is made with espresso and hot water, creating the perfect combination of boldness and smoothness. Whether you are already a fan of this beverage or want to learn more about it, here’s all you need to know about Americano Coffee.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{asset('images/cappuccino.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cappuccino</h5>
                    <p class="card-text text-truncate">A cappuccino is the perfect balance of espresso, steamed milk and foam. This coffee is all about the structure and the even splitting of all elements into equal thirds. An expertly made cappuccino should be rich, but not acidic and have a mildly sweet flavouring from the milk. And, because the milk is not actually mixed in it gives the espresso a stronger flavour.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>                
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{asset('images/latte.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Latte</h5>
                    <p class="card-text text-truncate">A latte or caffè latte is a milk coffee that boasts a silky layer of foam as a real highlight to the drink. A true latte will be made up of one or two shots of espresso, steamed milk and a final, thin layer of frothed milk on top. These elements combined result in a balanced milky coffee that possesses an aesthetically pleasing look and a smooth texture.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>                
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{asset('images/espresso.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Double espresso</h5>
                    <p class="card-text text-truncate">Put simply, a double espresso is exactly what it says on the tin – 2 shots of espresso. This equates to around 2oz of espresso and 128mg of caffeine.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{asset('images/macchiato.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Macchiato</h5>
                    <p class="card-text text-truncate">A macchiato is primarily made from espresso. However, it offers an alternative to the classic espresso for those who want a robust flavor hit with a touch of creaminess provided by the spot of milk. Most countries have adopted the Italian name, but if you’re looking for a macchiato in Portugal, you may need to order "cafe pingado" which translates as "coffee with a drop" (the splash of milk).</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{asset('images/mint.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mint Chocolate</h5>
                    <p class="card-text text-truncate">The cool and creamy combination of chocolate and mint is what keeps us unwrapping another Andes candy or sneaking just one more Thin Mint cookie. With this simple Frappuccino-inspired recipe, your coffee can be just as much of a treat—and still not too sweet.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
        </div>
        <div class="menu-item mt-2 mx-auto py-3 px-4">
            <p class="">TEA</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto my-4" style="width:90%;">
            <div class="col">
                <div class="card">
                <img src="{{asset('images/earl.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Earl Grey</h5>
                    <p class="card-text text-truncate">Earl Grey tea is one of the best-known tea blends on the market. Traditionally, it’s a simple blend of black tea and oil of bergamot. Other tea bases are also used, including green tea, oolong, and rooibos. Bergamot oil is derived from the rind of a fruit called the bergamot orange, commonly grown in Italy.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{asset('images/greentea.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Green Tea</h5>
                    <p class="card-text text-truncate">Green tea is a type of "true tea" made from the leaves of the tea plant. It's cultivated in China and Japan, where it is also the most popular. Green tea is gaining global acclaim, mostly due to its potential health benefits. There are different types of green tea, including dragonwell, gunpowder, matcha, and sencha. Though they vary in taste, green teas tend to have a mellow flavor. It's also used in tea-flavored food recipes and other drinks, such as smoothies</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{asset('images/jasmine.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jasmine Tea</h5>
                    <p class="card-text text-truncate">Jasmine tea is a type of tea, scented with the aroma of blossoms from the jasmine plant.It’s typically based on green tea, but sometimes black or white tea is used instead.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
        </div>
        <div class="menu-item mt-2 mx-auto py-3 px-4">
            <p class="">ICE BLENDED</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto my-4" style="width:90%;">
            <div class="col">
                <div class="card">
                <img src="{{asset('images/caramel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Caramel</h5>
                    <p class="card-text text-truncate">A sweet treat made from our delicious coffee extract, French Deluxe™ vanilla powder, skimmed milk, caramel sauce, and blended with ice then topped with whipped cream and a drizzle of caramel sauce.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{asset('images/jelly.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Coffee Jelly</h5>
                    <p class="card-text text-truncate">Coffee Jelly is a delicious coffee-based dessert made of jelly cubes infused with coffee. It is made by combining jelly cubes with a thick and flavorful coffee-infused cream.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{asset('images/cookies.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cookies and Cream</h5>
                    <p class="card-text text-truncate">An absolutely classic milkshake flavour in the form of a blended, iced coffee – this cookies and cream protein frappe is a high-protein version of your favourite coffee shop drink. Blended with our cookies & cream whey protein, ice cubes, coffee and cocoa powder for a creamy texture and moreish flavor.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{asset('images/Hazelnut.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hazelnut Mocha</h5>
                    <p class="card-text text-truncate">The perfect blend of Moccona coffee combined with Cadbury cocoa and a hint of Hazelnut flavour, that delivers a creamy indulgent mocha experience, finished with a layer of velvety froth.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{asset('images/matcha.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Matcha Cream</h5>
                    <p class="card-text text-truncate">The perfect blend of Moccona coffee combined with Cadbury cocoa and a hint of Hazelnut flavour, that delivers a creamy indulgent mocha experience, finished with a layer of velvety froth.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{asset('images/strawberry.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Strawberry Cream</h5>
                    <p class="card-text text-truncate">The perfect blend of Moccona coffee combined with Cadbury cocoa and a hint of Hazelnut flavour, that delivers a creamy indulgent mocha experience, finished with a layer of velvety froth.</p>
                    <a href="#" class="btn btn-outline-dark">Read more</a>
                </div>
                </div>
            </div>
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
