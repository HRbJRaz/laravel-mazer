


    <!-- Rent A Car Start -->
    <section id="rentacar">
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <h1 class="display-4 text-uppercase text-center mb-5">Find Your Car</h1>
                <div class="row">
                    @foreach ($cars as $car)
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="rent-item mb-4">
                            <img class="img-fluid mb-4" src='{{ asset("frontend/images/$car->imgHook") }}' alt="">
                            <h4 class="text-uppercase mb-4">{{ $car->make}} {{ $car->model}}</h4>
                            <div class="d-flex justify-content-center mb-4">  
                                <div class="px-2">
                                    <i class="fa fa-car text-primary mr-1"></i>
                                    <span>2015</span>
                                </div>
                                <div class="px-2 border-left border-right">
                                    <i class="fa fa-cogs text-primary mr-1"></i>
                                    <span> {{ $car->transmission}} </span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-road text-primary mr-1"></i>
                                    <span>25K</span>
                                </div>
                            </div>
                            <a class="btn btn-primary px-3" href="">RM{{ $car->day}}.00/Day</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
  <!-- Rent A Car End -->