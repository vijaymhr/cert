<section class="ftco-about ftco-no-pt ftco-no-pb img ftco-section bg-light" id="about-section" >
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-6 d-flex order-md-last">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="img d-flex align-self-stretch align-items-end" style="background-image:url(storage/img/author.jpeg);">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 pr-lg-5 py-3 py-lg-5" style="text-align: justify">
                <div class="row justify-content-start py-3 py-lg-5">
              <div class="col-md-12 heading-section ftco-animate">

                @foreach ($abouts as $about)

                  <span class="subheading">Welcome</span>
                <h2 class="mb-4" style="font-size: 44px; text-transform: capitalize;"> Jeremy Haselden 
                </h2>
         
                <p>
                    {!!$about->author!!}
                </p>
                    
                @endforeach


              </div>
            </div>
        </div>
    </div>
    </div>
</section>



<section class="ftco-about ftco-no-pt ftco-no-pb img ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="img d-flex align-self-stretch align-items-end" style="background-image:url(images/);">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 pl-lg-5 py-5" style="text-align: justify">
                <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate pb-5">
                <h2 class="mb-4" style="font-size: 44px; text-transform: capitalize;">Our clients</h2>
              </div>
            <p>

                {!!$about->ourclient!!}

                     </p>
           
                </div>
        </div>
    </div>
    </div>
</section>





<section class="ftco-section contact-section ftco-no-pb bg-light" id="#">
  <div class="container">
      <div class="row justify-content-center mb-6 pb-3">
      <div class="col-md-10 heading-section text-center ftco-animate">

        <h2 class="mb-4">Our Mission</h2>
        <p>To empower our clients to achieve more.<br>
          To become part of our clients team to guide and educate.<br>
          To provide simplified document process “It’s Good for Business”<br>
          and it brings transparency, agility, stability and standards of excellence to all enterprises.<br>
          To enable economic growth by providing the essential corner stones for Senior Management and Production Team Leaders – Quality Assurance, Occupational Health and Safely, both practical and compliance, environmental expediency and insurance risk management.<br>
          To be a consultancy who help provide solutions
          </p>
      </div>
    </div>
    
    
  </div>
</section>



{{-- <section class="ftco-section contact-section ftco-no-pb bg-light">
  <div class="container">
    <div class="row d-flex">
        <div class="col-md-6 col-lg-6 d-flex order-md-last">
            <div class="img-about img d-flex align-items-stretch">
                <div class="img d-flex align-self-stretch align-items-end" style="background-image:url(images/);">
                    
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 pr-lg-5 py-3 py-lg-5" style="text-align: justify">
            <div class="row justify-content-start py-3 py-lg-5">
          <div class="col-md-12 heading-section ftco-animate">

            @foreach ($abouts as $about)

            <h2 class="mb-4" style="font-size: 44px; text-transform: capitalize;"> Our Mission
            </h2>
     
            <p>
                {!!$about->author!!}
            </p>
                
            @endforeach


          </div>
        </div>
    </div>
</div>
</div>
</section> --}}