<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Razada - Car Rental</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Razada Car Rental" name="keywords">
    <meta content="Razada Car Rental" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="icon" type="image/x-icon" >

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    @livewireStyles
    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.front.components.topbar')
    @include('layouts.front.components.navbar')
    @include('layouts.front.components.headbar')
    @if(Route::is('index'))
      @include('layouts.front.components.search')
    @endif
    @yield('content')
    @include('layouts.front.components.footer')



  <!-- Back to Top -->
  <div class="container-fluid bg-dark fixed-bottom d-lg-none d-flex"> 
    <div class="d-flex flex-row w-100">
      <div class="d-inline-flex align-items-center mr-auto">
        <a class="text-body px-1" href="">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a class="text-body px-1" href="">
            <i class="fab fa-twitter"></i>
        </a>
        <a class="text-body px-1" href="">
            <i class="fab fa-linkedin-in"></i>
        </a>
        <a class="text-body px-1" href="">
            <i class="fab fa-instagram"></i>
        </a>
        <a class="text-body pl-1" href="">
            <i class="fab fa-youtube"></i>
        </a>
      </div>
      <a href="#" class="btn btn-primary">Booking</a>
      <a href="#contact" class="btn btn-primary">Contact</a>
      <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
  </div>
  @livewireScripts
  @include('layouts.front.components.scripts')


</body>

</html>