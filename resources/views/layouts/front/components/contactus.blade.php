    <!-- Contact Start -->
    <section id="contact">
        <div class="container-fluid py-5">
          <div class="container pt-5 pb-3">
              <h1 class="display-4 text-uppercase text-center mb-5">Contact Us</h1>
              <div class="row">
                  <div class="col-lg-7 mb-2">
                      <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        @livewire('contact-form')
                      </div>
                  </div>
                  <div class="col-lg-5 mb-2">
                      <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                          <div class="d-flex mb-3">
                              <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                              <div class="mt-n1">
                                  <h5 class="text-light">Head Office</h5>
                                  <p>{{env('CONTACTADDRESS')}}</p>
                              </div>
                          </div>
                          <div class="d-flex mb-3">
                              <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                              <div class="mt-n1">
                                  <h5 class="text-light">Branch Office</h5>
                                  <p>{{env('NORTHADDRESS')}}</p>
                              </div>
                          </div>
                          <div class="d-flex mb-3">
                              <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                              <div class="mt-n1">
                                  <h5 class="text-light">Customer Service</h5>
                                  <p>{{env('CONTACTEMAIL')}}</p>
                              </div>
                          </div>
                          <div class="d-flex">
                              <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                              <div class="mt-n1">
                                  <h5 class="text-light">Return & Refund</h5>
                                  <p class="m-0">refund@razada.com.my</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    </section>
  <!-- Contact End -->