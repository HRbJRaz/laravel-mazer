    <!-- Car Booking Start -->
    <div class="container-fluid pb-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <h2 class="mb-4">Personal Detail</h2>
                  <div class="mb-5">
                      <div class="row">
                          <div class="col-6 form-group">
                              <input type="text" class="form-control p-4" placeholder="First Name" required="required" >
                          </div>
                          <div class="col-6 form-group">
                              <input type="text" class="form-control p-4" placeholder="Last Name" required="required">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-6 form-group">
                              <input type="email" class="form-control p-4" placeholder="Your Email" required="required">
                          </div>
                          <div class="col-6 form-group">
                              <input type="text" class="form-control p-4" placeholder="Mobile Number" required="required">
                          </div>
                      </div>
                  </div>
                  <h2 class="mb-4">Pickup Details</h2>
                  <div class="mb-5">
                      <div class="row">
                          <div class="col-6 form-group">
                              <select class="custom-select px-4" style="height: 50px;">
                                @foreach ($locations as $location)
                                    <option 
                                    @if ($post->puLoc == $location->id) selected                                    
                                    @endif
                                    value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                              </select>
                          </div>
                          <div class="col-6 form-group">
                              <select class="custom-select px-4" style="height: 50px;">
                                @foreach ($locations as $location)
                                    <option 
                                    @if ($post->doLoc == $location->id) selected                                    
                                    @endif
                                    value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-6 form-group">
                            <input type="text" class="form-control p-4 " value="{{$post->puDate}}" />
                          </div>
                          <div class="col-6 form-group">
                            <input type="text" class="form-control p-4 " value="{{$post->puTime}}" />
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-6 form-group">
                              <select class="custom-select px-4" style="height: 50px;">
                                  <option selected>Select Child Car Seat</option>
                                  @foreach ($boosters as $booster)
                                      <option value="{{$booster->booster_seat_type_id}}">{{$booster->carSeatType}} ({{$booster->weight_lower}}Kg to {{$booster->weight_upper}}Kg ) (RM{{$booster->charge}})</option>
                                  @endforeach
                                  <option>No Child Car Seat</option>
                              </select>
                          </div>
                          <div class="col-6 form-group">
                              <select class="custom-select px-4" style="height: 50px;">
                                  <option selected>Select Insurance Package</option>
                                  <option value="1">Child 1</option>
                                  <option value="2">Child 2</option>
                                  <option value="3">Child 3</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <textarea class="form-control py-3 px-4" rows="3" placeholder="Special Request" required="required"></textarea>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="bg-secondary p-5 mb-5">
                      <h2 class="text-primary mb-4">Payment</h2>
                      <div class="form-group">
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="payment" id="paypal">
                              <label class="custom-control-label" for="paypal">Paypal</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                              <label class="custom-control-label" for="directcheck">Direct Check</label>
                          </div>
                      </div>
                      <div class="form-group mb-4">
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                              <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                          </div>
                      </div>
                      <button class="btn btn-block btn-primary py-3">Reserve Now</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Car Booking End -->