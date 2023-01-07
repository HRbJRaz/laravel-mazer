<div class="card">
   <div class="card-header">
       <div class="row">
            @php
                $img = $car->imgHook
            @endphp
            <input type="text" name="regNo" hidden value="{{$car->regNo}}" form="payment">
            <input type="text" name="cartype" hidden value="{{$car->cartype_id}}" form="payment">
               
           <div class="col-auto">
               <h2><span class="badge pill-badge badge-primary d-inline">{{$car->type}}</span></h2>
           </div>
           <div class="col-auto d-flex align-items-end">
               <h4 class="d-inline">{{$car->make}} {{$car->model}}</h4>
           </div>  
       </div>
   </div>
   <div class="card-body">
       <div class="row mt-3 w-100 mx-0">
           <div class="col-sm-3 border border-primary p-2">
               <div class="listimg">
                   <img class="w-100" src='{{asset("frontend/images/$img")}}' alt="">
               </div>
               <div class="d-flex justify-content-between">
                   <span><i class="fa-solid fa-chair"></i>{{$car->seats}} seats</span>
                   <span><i class="fa-solid fa-door-closed"></i>  {{$car->doors}} doors</span>
               </div>
               <div class="d-flex justify-content-between">
                   <span><i class="fa-solid fa-suitcase"></i> 20l</span>
                   <span><i class="fa-solid fa-gears"></i>{{$car->transmission}} </span>
               </div>
               <div class="d-flex justify-content-between">
                   <span><i class="fa-solid fa-snowflake"></i> A/C</span>
               </div>
           </div>

           <div class="col-sm-6 border border-primary p-2">
               <div class="row w-100 ">
                   <div class="col-auto">
                       <button class="btn btn-light btn-disabled rounded-lg d-inline"></button>
                   </div>
                   <div class="col-auto">
                       <h6 class="d-inline"></h6>
                   </div>
               </div>
               <div class="row mt-3 p-2">
                   
               </div>
           </div>
           <div class="col-sm-3 border border-primary p-2">
               <div class="d-flex align-items-end flex-column h-100">
                   <h6>Car Rental Fees</h6>
                   <h3 class="text-primary">RM{{$car->price}}</h3>
                   <p>{{$days}} day(s)</p>
               </div>
           </div>
       </div>
   </div>  
</div>