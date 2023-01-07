@extends('layouts.front.app')

@section('content')
   <div class="container">
      <div class="row no-gutters">
         <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center">
            <img src="{{ asset('frontend/images/payment-successful.gif') }}" alt="">
         </div>
         <div class="col-md-6 wrap-about p-5">
            <div class="heading-section heading-section-white pl-md-5 text-dark">
               <span class="subheading">Payment Recieved</span>
               <h2 class="mb-4">Success</h2>

               <p class="">Check your Order Details in the e-mail that was sent to {{$customer->name}}</p>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection