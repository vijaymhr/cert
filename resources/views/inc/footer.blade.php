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
              <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
              <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
              <li><a href="#practice-section"><span class="icon-long-arrow-right mr-2"></span>SYSTEMS IMPLEMETATION
</a></li>
              <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Practice Areas</h2>
            <ul class="list-unstyled">
              <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter1"><span class="icon-long-arrow-right mr-2"></span>Quality Assurance Management (QAM)
              </a></li>
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
