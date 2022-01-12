<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>The Cozy Store</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">



    

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
          <a class="navbar-brand" href="{{url('/')}}"><h2>The <em>Cozy Store</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{url('books')}}">Our Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('cds')}}">Our CDs</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('games')}}">Our Games</a>
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
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>The Best Selling Games</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="latest-products">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Latest Products</h2>
                            <a href="products.html"
                                >view all products
                                <i class="fa fa-angle-right"></i
                            ></a>
                            <form action="{{url('search')}}" method="get" class="form-inline" style="float:right;padding:10px;">
                            @csrf
                              <input class="form-control" type="search" name="search" placeholder="search">
                              <input type="submit" value="search" class="btn btn-danger">
                            </form>
                        </div>
                    </div>


                    @foreach($data as $games)


                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"
                                ><img src="/gameimage/{{$games->image}}" alt=""
                            /></a>
                            <div class="down-content">
                                <a href="#"><h4>{{$games->title}}</h4></a>
                                <h6>${{$games->price}}</h6>
                                <p>
                                    {{$games->description}}
                                </p>
                                <a class="btn btn-danger" href="">Add To Cart</a>

                                
                            </div>
                        </div>
                    </div>
                    @endforeach


                    @if(method_exists($data,'links'))
                    <div class="d-flex justify-content-center">
                        {!!$data->links()!!}

                    </div>
                    @endif 


                </div>
            </div>
        </div>
        
       <!-- NewsLetter -->
       @include('user.newsletter');

    
       <!-- footer  -->
       @include('user.footer');


       @include('user.scroll');


       

       


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
