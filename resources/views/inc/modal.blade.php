<!-- Contact Us Modal -->
<div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAppointmentLabel">Contact Us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <label for="appointment_name" class="text-black">Full Name</label>
              <input type="text" class="form-control" id="appointment_name" >
            </div>
            <div class="form-group">
              <label for="appointment_email" class="text-black">Email</label>
              <input type="text" class="form-control" id="appointment_email"  >
            </div>

            <div class="form-group">
                <label for="appointment_phone" class="text-black">Phone</label>
                <input type="text" class="form-control" id="appointment_phone" >
              </div>
    
            <div class="form-group">
              <label for="appointment_message" class="text-black">Message</label>
              <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" ></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>