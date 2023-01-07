


    <!-- Detail Start -->
    <div class="container-fluid">
      <div class="container pb-3">
        @foreach ($cars as $car)
        <h1 class="display-4 text-uppercase mb-5">{{$car->make}} {{$car->model}}</h1>
          <div class="row align-items-center pb-2">
              <div class="col-lg-6 mb-4">
                  <img class="img-fluid" src='{{ asset("frontend/images/$car->imgHook") }}' alt="">
              </div>
              <div class="col-lg-6 mb-4">
                  <h4 class="mb-2">RM{{$car->day}}.00/Day</h4>
                  <div class="d-flex mb-3">
                      <h6 class="mr-2">Rating:</h6>
                      <div class="d-flex align-items-center justify-content-center mb-1">
                          <small class="fa fa-star text-primary mr-1"></small>
                          <small class="fa fa-star text-primary mr-1"></small>
                          <small class="fa fa-star text-primary mr-1"></small>
                          <small class="fa fa-star text-primary mr-1"></small>
                          <small class="fa fa-star-half-alt text-primary mr-1"></small>
                          <small>(250)</small>
                      </div>
                  </div>
                  <p>{{$car->details}}</p>
                  <div class="d-flex pt-1">
                      <h6>Share on:</h6>
                      <div class="d-inline-flex">
                          <a class="px-2" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="px-2" href=""><i class="fab fa-twitter"></i></a>
                          <a class="px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                          <a class="px-2" href=""><i class="fab fa-pinterest"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          
          <div class="row mt-n3 mt-lg-0 pb-4">
              <div class="col-md-3 col-6 mb-2">
                  <i class="fa fa-car text-primary mr-2"></i>
                  <span>Model: {{$car->introYear}}</span>
              </div>
              <div class="col-md-3 col-6 mb-2">
                  <i class="fa fa-cogs text-primary mr-2"></i>
                  <span>
                    @if($car->transmission == 'AT')
                    Automatic
                    @else
                    Manual
                    @endif
                  </span>
              </div>
              <div class="col-md-3 col-6 mb-2">
                  <i class="fa fa-road text-primary mr-2"></i>
                  <span>{{$car->consumption}}km/liter</span>
              </div>
              <div class="col-md-3 col-6 mb-2">
                <i class="fa-solid fa-gears text-primary mr-2"></i>
                  <span>Engine Capacity: {{$car->cc}}</span>
              </div>
              <div class="col-md-3 col-6 mb-2">
                  <i class="fa fa-door-open text-primary mr-2"></i>
                  <span>Doors: {{$car->doors}}</span>
              </div>
              <div class="col-md-3 col-6 mb-2">
                  <i class="fa fa-couch text-primary mr-2"></i>
                  <span>Seating: {{$car->seats}}</span>
              </div>
              <div class="col-md-3 col-6 mb-2">
                  <i class="fa fa-car text-primary mr-2"></i>
                  <span>Type: {{$car->type}}</span>
              </div>
              <div class="col-md-3 col-6 mb-2">
                  <i class="fa-solid fa-radio text-primary mr-2"></i>
                  <span>Radio</span>
              </div>
          </div>
      </div>
      @endforeach
  </div>
  <!-- Detail End -->