@extends('layouts.app')

@section('content')



<section class="hero-wrap js-fullheight" style="background-image: url('storage/img/cover.jpeg');" data-section="home">
    <div class="overlay"></div>
    <div class="container">

      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> OPERATIONAL QUALITY =</h1>
          <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">SENIOR MANAGEMENT  BEST  PRACTICE, 
            <br>
            WORKPLACE SAFETY
            <br>

            MEASURABLE  RISK MANAGEMENT
            <br>


            PRODUCTIVE GROWTH  
            <br>

            ENVIRONMENT EXPEDIENCY

          </p>
          <p><a href="#contact-form" class="btn btn-primary py-3 px-4"  data-target="#modalAppointment">Contact Us</a></p>
        </div>
      </div>
    </div>
  </section>


{{-- about us starts --}}


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

{{-- about starts --}}



{{-- iso standards --}}


<style>

  .imgcenter {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 15px;
    width: 50%;
  }
  </style>
  

<section class="ftco-section contact-section ftco-no-pb bg-light" id="practice-section">
  <div class="container">
    
  

    <h2 class="mb-4" style="text-align: center; font-weight: 600;text-transform: uppercase;">ISO Standards</h2>

      <div class="row justify-content-center mb-6">
          <!-- Button trigger modal -->

 <p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#exampleModalCenter1">ISO 9001</a></p>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ISO 9001 
          <br>	Quality Assurance Management (QAM)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="storage/img/9001.jpg" class="imgcenter">
       @foreach ($isos as $iso)
           {!!$iso->iso_9001!!}
       @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



 <!-- Button trigger modal -->
 <p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#exampleModalCenter2">ISO 45001</a></p>


 
 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">ISO 45001
          <br>Occupational Health & Safety Management
         </h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
        <img src="storage/img/45001.jpg" class="imgcenter">

        @foreach ($isos as $iso)
            {!!$iso->iso_45001!!}
        @endforeach
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>
 
 <!-- Button trigger modal -->
 <p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#exampleModalCenter3">ISO 14001 - EM</a></p>


 
 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">ISO 14001
           <br>Environmental Management
         </h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
        <img src="storage/img/14001_em.jpg" class="imgcenter">

        @foreach ($isos as $iso)
            {!!$iso->iso_14001_1!!}
        @endforeach
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>
 

 
 <!-- Button trigger modal -->

 <p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#exampleModalCenter4">ISO 14001 - BCP</a></p>


 
 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">ISO 14001
           <br>Business Continuity Planning (BCP) 
         </h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
        <img src="storage/img/14001_em.jpg" class="imgcenter">

        @foreach ($isos as $iso)
            {!!$iso->iso_14001_2!!}
        @endforeach
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>


<!-- Button trigger modal -->
<p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#exampleModalCenter5">ISO 14001 - IRM</a></p>

 
 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">ISO 14001
           <br>Insurance Risk Management 
         </h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
        <img src="storage/img/14001_em.jpg" class="imgcenter">

        @foreach ($isos as $iso)
            {!!$iso->iso_14001_3!!}
        @endforeach
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>


      </div>
        </div>
  </section>
  
  
  </section>
  



{{-- contact --}}






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
    


      {{-- footer --}}

<footer class="ftco-footer ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">HASELDEN  <span>& CO NZ LTD </span></h2>
          <p> Jeremy established Haselden & CO NZ Limited in January 2001 having previously worked in agriculture, industry and the multinational corporate sectors. This background sowed the seeds for his consulting practice encompassing the implementation of quality assurance, workplace safety, environmental compliance and commercial risk relating to insurance transparency and adequacy. </p>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Links</h2>
          <ul class="list-unstyled">
            <li><a href="/"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
            <li><a href="/#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
            <li><a href="/#practice-section"><span class="icon-long-arrow-right mr-2"></span>ISO standarts</a></li>
            <li><a href="/#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
         <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Practice Areas</h2>
          <ul class="list-unstyled">
            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter1"><span class="icon-long-arrow-right mr-2"></span>ISO 9001</a></li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter2"><span class="icon-long-arrow-right mr-2"></span>ISO 14001</a></li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter3"><span class="icon-long-arrow-right mr-2"></span>ISO 45001-EM</a></li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter4"><span class="icon-long-arrow-right mr-2"></span>ISO 45001-BCP</a></li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter5"><span class="icon-long-arrow-right mr-2"></span>ISO 45001-IRM</a></li>

      
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-0">
              @foreach ($infos as $info)

              <ul>
                <li><a href="https://www.google.com/maps/place/Picton+Avenue,+Riccarton,+Christchurch+8011/@-43.533375,172.6027532,17z/data=!3m1!4b1!4m5!3m4!1s0x6d318a8aa77e3acf:0x5b39d66ab80e1ea8!8m2!3d-43.533375!4d172.6049419" target="_blank"><span class="icon icon-map-marker"></span><span class="text">{{$info->address}}</span></a></li>
                <li><a href="tel://1234567920"><span class="icon icon-phone"></span><span class="text">{{$info->contact}}</span></a></li>
                <li><a href="mailto:{{$info->email}} "><span class="icon icon-envelope"></span><span class="text">{{$info->email}} </span></a></li>
              </ul>

              @endforeach

            </div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
           
            <li class="ftco-animate"><a href="https://nz.linkedin.com/in/jeremy-haselden-59984b9"><span class="icon-linkedin"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">

        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Jeremy Haselden 
      </div>
    </div>
  </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  
  @endsection