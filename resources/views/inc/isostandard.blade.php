

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
  
  
  
  
  
  
  
  
{{--   
  
  <div class="container">
        <div class="row justify-content-center pb-5">
        <div class="col-md-10 heading-section text-center ftco-animate">
        
          <h2 class="mb-4">ISO Standards we Certify</h2>
          <p>Full service implementation</p>
        </div>
      </div>

      <div class="row no-gutters">

        <div class="col-md-5 col-lg-3 ftco-animate py-4 nav-link-wrap">

          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link px-4 py-1 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><span class="mr-3 flaticon-ideas"></span> ISO 9001</a>

              <a class="nav-link px-4 py-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><span class="mr-3 flaticon-flasks"></span> ISO 45001</a>

             
              <a class="nav-link px-4 py-1" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"><span class="mr-3 flaticon-analysis"></span> ISO 14001 EM</a>
               <a class="nav-link px-4 py-1" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><span class="mr-3 flaticon-analysis"></span> ISO 14001 BCP</a>
              <a class="nav-link px-4 py-1" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false"><span class="mr-3 flaticon-analysis"></span> ISO 14001 IRM</a>
            


          </div>      

        </div>

        <div class="col-md-7 col-lg-9 ftco-animate p-4 p-md-5 d-flex align-items-center">
          
          <div class="tab-content pl-lg-4" id="v-pills-tabContent">
            @foreach ($isos as $iso)

            <div class="tab-pane fade show active py-0 py-lg-5" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
              <div class="d-lg-flex">
        <div class="icon-law mr-md-4 mr-lg-5" style="background-image: url('images/new1.jpg');">
                  <span class="icon mb-3 d-block flaticon-shield"></span>
                </div>
                <div class="text">
                  <h2 class="mb-4">ISO 9001</h2>
                  <p>ISO 9001 is the standard for Quality Management</p>
                  <p> 

                    {!!$iso->iso_9001!!}
                  </p>
            <p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modalAppointment">Contact Us</a></p>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show active py-0 py-lg-5" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
              <div class="d-lg-flex">
        <div class="icon-law mr-md-4 mr-lg-5" style="background-image: url('images/new1.jpg');">
                  <span class="icon mb-3 d-block flaticon-shield"></span>
                </div>
                <div class="text">
                  <h2 class="mb-4">ISO 45001</h2>
                  <p>ISO 9001 is the standard for Quality Management</p>
                  <p> 
                    {!!$iso->iso_45001!!}
                  </p>
            <p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modalAppointment">Contact Us</a></p>
                </div>
              </div>
            </div>
       

            <div class="tab-pane fade show active py-0 py-lg-5" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
              <div class="d-lg-flex">
        <div class="icon-law mr-md-4 mr-lg-5" style="background-image: url('images/new1.jpg');">
                  <span class="icon mb-3 d-block flaticon-shield"></span>
                </div>
                <div class="text">
                  <h2 class="mb-4">ISO 14001 - Emergy Management</h2>
                  <p>ISO 9001 is the standard for Quality Management</p>
                  <p> 
                    {!!$iso->iso_14001_1!!}
                  </p>
            <p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modalAppointment">Contact Us</a></p>
                </div>
              </div>
            </div>

         
            <div class="tab-pane fade show active py-0 py-lg-5" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
              <div class="d-lg-flex">
        <div class="icon-law mr-md-4 mr-lg-5" style="background-image: url('images/new1.jpg');">
                  <span class="icon mb-3 d-block flaticon-shield"></span>
                </div>
                <div class="text">
                  <h2 class="mb-4">ISO 14001 - Business Continuity Planning (BCP) </h2>
                  <p>ISO 9001 is the standard for Quality Management</p>
                  <p> 
                    {!!$iso->iso_14001_2!!}

                  </p>
            <p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modalAppointment">Contact Us</a></p>
                </div>
              </div>
            </div>


            <div class="tab-pane fade show active py-0 py-lg-5" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
             
              <div class="d-lg-flex">
        <div class="icon-law mr-md-4 mr-lg-5" style="background-image: url('images/new1.jpg');">
                  <span class="icon mb-3 d-block flaticon-shield"></span>
                </div>
                <div class="text">
                  <h2 class="mb-4">ISO 14001 - Insurance Risk Management </h2>
                  <p>ISO 9001 is the standard for Quality Management</p>
                  <p> 
                    {!!$iso->iso_14001_3!!}

                  </p>
            <p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modalAppointment">Contact Us</a></p>
                </div>
              </div>
            </div>
          @endforeach


          </div>


      </div>
    </div> --}}
        
  </section>
  
