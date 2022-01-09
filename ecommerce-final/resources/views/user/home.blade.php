<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link
            href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
            rel="stylesheet"
        />

        <title>The Cozy Store</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css" />
        <link rel="stylesheet" href="assets/css/templatemo-sixteen.css" />
        <link rel="stylesheet" href="assets/css/owl.css" />
    </head>

    <body>
        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->

        <!-- Header -->
        <header class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{url('/')}}"
                        ><h2>The <em>Cozy Store</em></h2></a
                    >
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarResponsive"
                        aria-controls="navbarResponsive"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/')}}"
                                    >Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('books')}}"
                                    >Our Books</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('cds')}}"
                                    >Our CDs</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('games')}}"
                                    >Our Games</a
                                >
                            </li>

                           <li class="nav-item">
                           @if (Route::has('login'))
                            @auth
                            <x-app-layout>
                            </x-app-layout>
                            @else
                            <li><a  class="nav-link" href="{{ route('login') }}" >Log in</a></li>

                            @if (Route::has('register'))
                            <li><a class="nav-link"  href="{{ route('register') }}" >Register</a></li>
                            @endif
                            @endauth
                            @endif 
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Page Content -->
        <!-- Banner Starts Here -->
        <div class="banner header-text">
            <div class="owl-banner owl-carousel">
                <div class="banner-item-01">
                    <div class="text-content">
                        <h4>Best Offer</h4>
                        <h2>New Arrivals On Books</h2>
                    </div>
                </div>
                <div class="banner-item-02">
                    <div class="text-content">
                        <h4>Flash Deals</h4>
                        <h2>Get your best Games</h2>
                    </div>
                </div>
                <div class="banner-item-03">
                    <div class="text-content">
                        <h4>Last Minute</h4>
                        <h2>Grab last minute deals for CDs</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Ends Here -->

        @include('user.products');

        <div class="best-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>About The Cozy Store</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="left-content">
                            <h4>Looking for the best products?</h4>
                            <p>
                                <a
                                    rel="nofollow"
                                    href="/"
                                    
                                    >The Cozy Store</a
                                >
                                offers different kinds of books , CDs related to documentary, movies and many more and games for entertainment. Lets grab the opportunity. 
                                
                                for more info.
                            </p>
                            <ul class="featured-list">
                                <li>
                                    <a href="#">All Kinds of Books</a>
                                </li>
                                <li>
                                    <a href="#"
                                        >The Best Games</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        >CDs of your choice</a
                                    >
                                </li>
                                <li>
                                    <a href="#">Cheap Price</a>
                                </li>
                                <li>
                                    <a href="#">Best Deals and many more</a>
                                </li>
                            </ul>
                            <a href="about.html" class="filled-button"
                                >Read More</a
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                            <img src="assets/images/games4.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-content">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>
                                        Creative &amp; Unique
                                        <em>Cozy Store</em> Products
                                    </h4>
                                    <p>
                                        The cozy Store serves different kinds of books, CDs, Games for all kind of peoples. Lets just take an advantage of the Store.
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="filled-button"
                                        >Purchase Now</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-content">
                            <p>
                                Copyright &copy; 2020 The Cozy Store Co., Ltd.
                                - Design: elvish
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Additional Scripts -->
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/isotope.js"></script>
        <script src="assets/js/accordions.js"></script>

        <script language="text/Javascript">
            cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
            function clearField(t) {
                //declaring the array outside of the
                if (!cleared[t.id]) {
                    // function makes it static and global
                    cleared[t.id] = 1; // you could use true and false, but that's more typing
                    t.value = ""; // with more chance of typos
                    t.style.color = "#fff";
                }
            }
        </script>
    </body>
</html>
