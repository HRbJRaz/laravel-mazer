<div class="card mt-3">
   <div class="card-body">
       <h2>Price Summary</h2>
       <ul>
           <li class='price-detail-item d-flex justify-content-between'><span>Car rental fee</span><span>RM{{$car->price}}.00</span></li>
           <li>Taxes include Airport tax (if pick up in airport), Customer facilities, Tourism tax, Sales tax</li>
           <li>Collision Damage Waiver</li>
           <li>Third Party Liability</li>
           <li>Full to Full</li>
           <li>Unlimited mileage</li>
       </ul>
       <hr>
       <ul class="list-group-flush" style="
       padding-inline-start: 0px;
   ">
           <li class="list-group-item d-flex justify-content-between"><span>Total</span><span>RM{{$car->price}}</span></li>
       </ul>
       <button id ="tncsidebtn" type="submit" form="payment" class="btn btn-block btn-primary rounded-lg" disabled>Book Now</button>
       <div class="form-check mt-3">
           <input type="checkbox" name="tnc" id="tncside" class="form-check-input tnc">
           <label for="tncside" class="form-check-label">By proceeding, I acknowledge that I have read and agree to Razada Car Rentals's Terms and Conditions and Privacy Statement.</label>
       </div>
   </div>
</div>