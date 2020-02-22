<section class="ftco-section contact-section ftco-no-pb bg-light" id="contact-section">
    <div class="container" style= "margin-bottom: 50px;">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-10 heading-section text-center ftco-animate">
          @include('inc.messages')

          <h2 class="mb-4">LETS TALK ABOUT THIS</h2>
          <p><a href="#contact-form" class="btn btn-primary py-3 px-4" data-target="#modalAppointment">Contact Us</a></p>
        </div>
      </div>


      <div class="row d-flex contact-info mb-5">
        @foreach ($infos as $info)
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>

                <h3 class="mb-4">Address</h3>
              <p><a href="https://www.google.com/maps/place/Picton+Avenue,+Riccarton,+Christchurch+8011/@-43.533375,172.6027532,17z/data=!3m1!4b1!4m5!3m4!1s0x6d318a8aa77e3acf:0x5b39d66ab80e1ea8!8m2!3d-43.533375!4d172.6049419" target="_blank">{{$info->address}}</a></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">Contact Number</h3>
              <p><a href="tel://1234567920">{{$info->contact}}</a></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span> 
                </div>
                <h3 class="mb-4">Email Address</h3>
              <p><a href="mailto:{{$info->email}} ">{{$info->email}} </a></p>
            </div>
        </div>
        @endforeach
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          <div class="align-self-stretch box p-4 text-center">
              <div class="icon d-flex align-items-center justify-content-center">
                  <span class="icon-linkedin"></span> 
              </div>
              <h3 class="mb-4">Linked In</h3>
            <p><a href="https://nz.linkedin.com/in/jeremy-haselden-59984b9"> Jeremy Haselden</a></p>
          </div>
      </div>
      </div>


      <div class="row no-gutters block-9"  id="contact-form">


       

        <div class="col-md-6 order-md-last d-flex" >
          <form action="{{action('FeedbackController@store')}}" method="POST" class="bg-primary p-5 contact-form">
            {{csrf_field()}}

            <div class="form-group"  >

              <input type="text" class="form-control" placeholder="Full Name" name="fname" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email" name="email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Phone number" name="mobile" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject" name="subject" required>
            </div>
            <div class="form-group">
              <textarea cols="30" rows="7" class="form-control" placeholder="Message" name="message" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-darken py-3 px-5">


           
            </div>
          </form>
        </div>



        <div class="col-md-6 d-flex">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.659873435088!2d172.6018943154938!3d-43.53028497912569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d318af575e4a047%3A0x652e84023b1b4de4!2s85%20Picton%20Avenue%2C%20Riccarton%2C%20Christchurch%208011!5e0!3m2!1sen!2snz!4v1581982353310!5m2!1sen!2snz" width="600" height="750" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

       
        </div>
      </div>
    </div>
  </section>
      