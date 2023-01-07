<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0 d-none d-lg-block w-75">
   <div class="position-relative px-lg-5" style="z-index: 9;">
       <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
           <a href="/" class="navbar-brand">
               <h1 class="text-uppercase text-primary mb-1">Razada Cars</h1>
           </a>
           @if(Route::is('home'))
           <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
               <div class="navbar-nav ml-auto py-0">
                   <a href="/" class="nav-item nav-link ">Home</a>
                   <a href="#about" class="nav-item nav-link">About</a>
                   {{--<a href="#services" class="nav-item nav-link">Service</a>
                   <a href="#rentacar" class="nav-item nav-link">Car Listing</a>
                   <div class="nav-item dropdown">
                       <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cars</a>
                       <div class="dropdown-menu rounded-0 m-0">
                           <a href="/detail" class="dropdown-item">Car Detail</a>
                           <a href="/booking" class="dropdown-item">Car Booking</a>
                       </div>
                   </div>
                   <a href="#testimonial" class="nav-item nav-link">Testimonial</a>--}}

                   <a href="#contact" class="nav-item nav-link">Contact</a>
               </div>
           </div>
           @endif
       </nav>
   </div>
</div>
<!-- Navbar End -->