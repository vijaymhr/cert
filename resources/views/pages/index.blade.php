@extends('layouts.app')

@section('content')



<section class="hero-wrap js-fullheight" style="background-image: url('images/');" data-section="home">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> ISO certification</h1>
          <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Launch your business to another level

          </p>
          <p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modalAppointment">Contact Us</a></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-counter ftco-no-pt ftco-no-pb img" id="section-counter">
    <div class="container">
        <div class="row d-md-flex align-items-center justify-content-end">
            <div class="col-lg-12">
                <div class="ftco-counter-wrap">
                    <div class="row no-gutters d-md-flex align-items-center align-items-stretch">
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                      <div class="text">
                          <div class="icon d-flex justify-content-center align-items-center">
                              <span class="flaticon-house"></span>
                          </div>
                        <strong class="number" data-number="30">0</strong>
                        <span>Our mission</span>
                      </div>
                    </div>
                  </div>
                 
                 
                  
              </div>
            </div>
      </div>
    </div>
    </div>
</section>
      

  
  
  @endsection