@extends('layouts.front.app')

@section('content')
<!-- Page Header Start -->
<section>
    <div class="container-fluid pt-3 px-lg-5">
        <div class="row">
            @foreach ($cars as $car)
            <div class="col-lg-9">
                @include('layouts.front.components.selectedCarCard')
                @include('layouts.front.components.pickupinstruction')
            @include('layouts.front.components.driverDetails')
            </div>
            <div class="col-lg-3">
                @include('layouts.front.components.bookingSummary')
                @include('layouts.front.components.priceSummary')
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection