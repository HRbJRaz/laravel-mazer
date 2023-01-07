<!-- Detail Start -->
<div class="container-fluid pt-2">
    <div class="container pb-3">
        <div class="row">
            <div class="col-md-3 d-none d-md-block" id="carlistFilter">
                <div class="row d-flex justify-content-between">
                    <h4>Filters</h4>
                    <button onclick="clearFilters()" class="btn btn-link text-danger text-small"><small>Clear All</small> </button>
                </div>
                <hr>
                <div class="row">
                    <h6>Make</h6>
                </div>
                @foreach ($makes as $make)
                <div class="row">
                    <div class="form-group">
                        <input type="checkbox" name="" id="make" class="filter">
                        <label class="form-check-label">{{$make['make']}}</label>
                    </div>
                </div>
                @endforeach
                <hr>
                <div class="row">
                    <h6>Seats</h6>
                </div>
                @foreach ($seats as $seat)
                <div class="row">
                    <div class="form-group">
                        <input type="checkbox" name="" id="seats" class="form-check-input filter">
                        <label class="form-check-label ">{{$seat['seats']}} seats</label>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-9">
                <div class="row d-flex justify-content-center">
                    <div class="w-25">
                        <button class="btn btn-outline-primary btn-block h-100" onclick="filterByType('all')" value="all">
                            <strong>All</strong>
                            <p><small></small></p>
                            <img class="w-75" src='{{asset("frontend/images/car-rent-2.png") }}' alt="">
                        </button>
                    </div>
                    @foreach ($types as $type)
                    @php
                        $img = $type['img'];
                    @endphp
                    <div class="w-25">
                        <button class="btn btn-outline-primary btn-block h-100" onclick="filterByType('{{$type['type']}}')" value="{{$type['type']}}">
                            <strong>{{$type['type']}}</strong>
                            <p><small>From RM{{$type['price']}}</small></p>
                            <img class="w-75" src='{{asset("frontend/images/$img") }}' alt="">
                        </button>
                    </div>
                    @endforeach
                </div>
                <div class="btn-group btn-block mt-3" id="filterbtns">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#filterModal">
                        Filter
                    </button>
                    <!-- Button trigger modal -->
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="sortMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Sort
                        </button>
                        <div class="dropdown-menu" aria-labelledby="sortMenu">
                          <a class="dropdown-item" href="#">Recommended</a>
                          <button class="dropdown-item" onclick="sortPriceDec()">Price(High to Low)</button><button class="dropdown-item" onclick="sortPriceInc()">Price(Low to High)</button>
                        </div>
                    </div>

                </div>
                <!-- Modal -->
                <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row px-4 w-100">
                                <h4>Filters</h4>
                                <button onclick="clearFilters()" class="d-flex justify-content-end btn btn-link text-danger text-small"><small>Clear All</small> </button>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row px-4">
                                <h6>Make</h6>
                            </div>
                            @foreach ($makes as $make)
                            <div class="row px-4">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="make" class="filter">
                                    <label class="form-check-label">{{$make['make']}}</label>
                                </div>
                            </div>
                            @endforeach
                            <hr>
                            <div class="row px-4">
                                <h6>Seats</h6>
                            </div>
                            @foreach ($seats as $seat)
                            <div class="row px-4">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="seats" class="form-check-input filter">
                                    <label class="form-check-label ">{{$seat['seats']}} seats</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row mt-3 d-none d-md-block btn-group " name="sort">
                    <button class="btn btn-link" style="display:none">
                        <strong>Recommened</strong>
                    </button>
                    <button class="btn btn-link" onclick="sortPriceDec()">
                        <strong>Price(High to Low)</strong>
                    </button>
                    <button class="btn btn-link" onclick="sortPriceInc()">
                        <strong>Price(Low to High)</strong>
                    </button>
                    <button class="">{{count($cars)}} car(s) available at {{$puloc[$post->puLoc - 1]['name']}}</button>
                </div>
                <div id="id01">
                    
                @foreach ($cars as $car)
                @php
                    $img=$car->imgHook;
                @endphp
                    <div class="row mt-3 mx-0 filterDiv {{$car->type}}">
                        <div class="btnContainer col-md-9 border border-primary rounded-lg p-2 ">
                            <div class="row w-100 ">
                                <div class="col-auto">
                                    <button class="btn btn-outline-primary btn-disabled rounded-lg d-inline">{{$car->type}}</button>
                                </div>
                                <div class="col-auto">
                                    <h6 class="d-inline">{{$car->make}} {{$car->model}}</h6>
                                </div>
                            </div>
                            <div class="row mt-3 p-2">
                                <div class="col-4 listimg">
                                    <img class="w-100" src='{{asset("frontend/images/$img")}}' alt="">
                                </div>
                                <div class="col-8 listdeatils">
                                    <span class="w-50"><i class="fa-solid fa-chair"></i> {{$car->seats}} seats</span>
                                    <span class="w-50"><i class="fa-solid fa-door-closed"></i> {{$car->doors}} doors</span>
                                    <span class="w-50"><i class="fa-solid fa-suitcase"></i> 20l</span>
                                    <br>
                                    <span class="w-50"><i class="fa-solid fa-gears"></i> {{$car->transmission}}</span>
                                    <span class="w-50"><i class="fa-solid fa-snowflake"></i> A/C</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 border border-primary rounded-lg p-4">
                            <div class="d-flex flex-row flex-md-column justify-content-between h-100">
                                <h4 class="text-primary">RM{{$car->price}}</h4>
                                <p class="d-none d-md-block">{{$days}} day(s)</p>
                                <button type="submit" form="booking" name="cartype" value="{{$car->cartype_id}}" class=" btn btn-primary btn-md-block rounded-lg">Select</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <form action="booking" id="booking" method="post">
                    @csrf
                    <input type="text" name="puLoc" value="{{$post->puLoc}}" hidden>
                    <input type="text" name="doLoc" value="{{$post->doLoc}}" hidden>
                    <input type="text" name="puDate" value="{{$post->puDate}}" hidden>
                    <input type="text" name="doDate" value="{{$post->doDate}}" hidden>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Detail End -->