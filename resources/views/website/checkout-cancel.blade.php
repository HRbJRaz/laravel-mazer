@extends('layouts.front.app')

@section('content')
   <div class="container">
      <div class="row no-gutters">
         <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center">
            <img src="{{ asset('frontend/images/payment-cancel.gif') }}" alt="">
         </div>
         <div class="col-md-6 wrap-about ftco-animate">
       <div class="heading-section heading-section-white pl-md-5">
          <span class="subheading  text-dark">Payment Cancelled</span>
         <h2 class="mb-4  text-dark">Uh-Oh!</h2>

       </div>
         </div>
      </div>
   </div>
@endsection