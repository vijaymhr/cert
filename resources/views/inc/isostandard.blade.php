

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
  
  
  </section>
  
