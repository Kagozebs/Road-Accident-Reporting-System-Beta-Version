<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>BOTSWANA ROAD ACCIDENT ONLINE REGISTRATION</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +267 75514503</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> lungani@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">ROAD TRAFFIC</span>-MANAGEMENT SYSTEM</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>

            @if(Route::has('login'))
            
            @auth

            <li class="nav-item">
              <a class="nav-link" style="background-color:greenyellow; color: white" href="{{url('myreport')}}">Report</a>
            </li>

            <x-app-layout>
   
            </x-app-layout>
   

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/roadaccident.png);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">ROAD SAFETY BEGINS WITH YOU</span>
        <h1 class="display-4">BE RESPONSIBLE</h1>
       <!-- <a href="#" class="btn btn-primary"></a>-->
      </div>
    </div>
  </div>

  <br>  
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">TYPES ACCIDENTS TO REPORT</h3>
        <p class="card-text">You can only report accidents that resulted in damage to property or non-serious harm to someone involved.</p>
        <ul class="list-group list-group-flush">
    <li class="list-group-item">front to rear collisions</li>
    <li class="list-group-item">collisions with parked vehicles</li>
    <li class="list-group-item">collisions with inanimate objects</li>
    <li class="list-group-item">harm to a passenger, for example, someone fell over on a bus</li>
  </ul>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Who Can Report An Accident</h3>
        <p class="card-text">You can only report accidents that resulted in damage to property or non-serious harm to someone involved.
You can report only when</p>
<ul class="list-group list-group-flush">
    <li class="list-group-item">Any driver or passenger who was involved can report an accident</li>
    <li class="list-group-item">New drivers can report accidents online only if no-one was harmed, and the driver is over 18</li>
    <li class="list-group-item">You need to be registered to GovID before you can report an accident online</li>
    <li class="list-group-item"></li>
</ul>   
      </div>
    </div>
  </div>
</div>
<br>

  @include('user.registration')

 @include('user.footer')
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>