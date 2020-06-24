<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Discussion</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('frontview/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('frontview/css/mdb.min.css')}}" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Pattaya&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps|Pattaya&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Monoton|Satisfy&display=swap" rel="stylesheet">
  
  <!-- Your custom scripts -->

  <!--Summer Note Styles -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>

  <style type="text/css">

    /* Centered text */
    .centered {
      position: absolute;
      top: 60%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(255,255,255,.50);
      padding: 20px;
    }

    .note-editor {
      margin-bottom: 5rem !important;
    }

    .quote{
      font-family: "Unicode";
      position: absolute;
      top: 50%;
      left: 50%;
      /*  right: 65%;*/
      /*font-size: 30px;*/
      /*background-color: rgba(255,255,255,0.5);*/
      padding: 30px;
    }

    .font{
      /*font-family: 'Pattaya', sans-serif;
      font-family: 'Oleo Script Swash Caps', cursive; */
      /*font-family: 'Satisfy', cursive;*/

      font-family: 'Monoton', cursive;
      color: #fff;
    }
  </style>

</head>

<body class="homepage-v2">

  <!-- Navigation -->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">
      <div class="container-fluid justify-content-center align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
          aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent-4"> 
          <div class="container">
            <!-- <img src="image/discussion.png" width="100px" height="60px;" style="margin-right: 20px;"> -->
            <a class="navbar-brand font-weight-bold text-primary title font" href="#" style="font-size: 20px;">Discussion Corner</a>
          </div>


          <ul class="navbar-nav">
            @guest
            <li class="nav-item dropdown ml-4  mb-0">
              <a href="{{ url('/login') }}" class="nav-link  waves-effect waves-light font-weight-bold"              
              >LOGIN</a>
            </li>
            <li class="nav-item ml-4 mb-0">
              <a class="nav-link waves-effect waves-light font-weight-bold" href="{{ url('/register') }}">REGISTER
                <span class="sr-only">(current)</span>
              </a>
            </li>
            @else
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                    {{ Auth::user()->id }} 

                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('members.show',Auth::user()->id)}}"
                       >
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        {{ __('Profile') }}
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest     
          </ul>       
        </div>
      </div>

    </nav>
<!-- Navbar -->

</header>
<!-- Carousel Wrapper -->
<div id="carousel-example-1z" class="carousel slide carousel-fade carousel-half" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!-- Indicators -->
  <!-- Slides -->
  <div class="carousel-inner" role="listbox">

    <!-- First slide -->
    <div class="carousel-item active h-500">
      <div class="view  h-400" style="height: 100%;">
        <img class="d-block h-100 w-lg-100 img-fluid "  src="image/t1.jpg"
        alt="First slide">
        <div class="centered text-black">
          <h1 class="text-center py-3">
            <strong style="font-family: 'Oleo Script Swash Caps', cursive;">Welcome to Discussion Corner</strong>
          </h1>

          <p class=" text-center mb-2 pb-3" style="font-size: 20px;" >
            “Discussion is an exchange of knowledge; argument an exchange of ignorance.”
          </p>
        </div>
        <div class="mask"></div>
      </div>
    </div>
    <!-- First slide -->
    <!-- Second slide -->
    <div class="carousel-item h-100">
      <img class="d-block h-100 w-lg-100" src="image/t5.jpg"
      alt="Second slide">
      <div class="centered text-black">
        <h1 class="text-center py-3">
          <strong style="font-family: 'Oleo Script Swash Caps', cursive;">Welcome to Discussion Corner</strong>
        </h1>

        <p class=" text-center mb-2 pb-3" style="font-size: 20px;"  >
          “Discussion is impossible with someone who claims not to seek the truth, but already to possess it.”
        </p>
      </div>

      <div class="mask"></div>
    </div>
    <!-- Second slide -->
    <!-- Third slide -->
    <div class="carousel-item h-100">
      <div class="view h-100">
        <img class="d-block h-100 w-lg-100" src="image/t4.jpg"
        alt="Third slide">

        <div class="centered text-black">
          <h1 class="text-center py-3">
            <strong style="font-family: 'Oleo Script Swash Caps', cursive;">Welcome to Discussion Corner</strong>
          </h1>

          <p class=" text-center mb-2 pb-3" style="font-size: 20px;" >
            “Don't raise your voice, improve your argument."

          </p>
        </div>


        <div class="mask"></div>
      </div>
    </div>
    <!-- Third slide -->
  </div>
  <!-- Slides -->
  <!-- Controls -->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!-- Controls -->
</div>
<!-- Carousel Wrapper -->

<!-- content -->
@yield('content')

<!-- end content -->

<!-- Footer -->
<footer class="page-footer stylish-color-dark text-center text-md-left mt-2 pt-4">

  <!-- Footer Links -->
  <div class="container">

    <!--  -->
    <!-- Footer links -->

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-1 pb-3">

      <!-- First column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-1">
        <h6 class="text-uppercase mb-4 font-weight-bold">About</h6>
        <p>Share and Discuss your greatful ideas, thoughts with us</p>
      </div>
      <!-- First column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Second column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-1">
        <h6 class="text-uppercase mb-2 font-weight-bold">Category</h6>
        <p>
          <a href="#!">Lifestyle</a>
        </p>
        <p>
          <a href="#!">Travel</a>
        </p>
        <p>
          <a href="#!">Work</a>
        </p>

      </div>
      <!-- Second column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Third column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-1">
        <h6 class="text-uppercase mb-2 font-weight-bold">Useful links</h6>
        <p>
          <a href="#!">Collaboriation</a>
        </p>
        <p>
          <a href="#!">Media about me</a>
        </p>
        <p>
          <a href="#!">Newsletter</a>
        </p>

      </div>
      <!-- Third column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Fourth column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-1">
        <h6 class="text-uppercase mb-2 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> Yangon, Myanmar</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> discussioncorner@gmail.com</p>
            <p>
              <i class="fas fa-phone mr-3"></i> + 09 222 333 44</p>

            </div>
            <!-- Fourth column -->

          </div>

          <div class="row py-1 d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">

              <!-- Copyright -->
              <p class="text-center text-md-left grey-text">
                © 2020 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> Discussioncorner.com
                </a>
              </p>
              <!-- Copyright -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">

              <!-- Social buttons -->
              <div class="social-section text-center text-md-left">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item mx-0">
                    <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="list-inline-item mx-0">
                    <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item mx-0">
                    <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                      <i class="fab fa-google-plus-g"></i>
                    </a>
                  </li>
                  <li class="list-inline-item mx-0">
                    <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Social buttons -->

            </div>
            <!-- Grid column -->

          </div>

        </div>

</footer>
      <!-- Footer -->




  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="{{asset('frontview/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('frontview/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('frontview/js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontview/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('frontview/js/mdb.min.js')}}"></script>
  

  
</body>

</html>
