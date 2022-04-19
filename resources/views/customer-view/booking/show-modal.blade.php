<!-- Modal -->
<div class="modal fade addBooking" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Boiler</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{ route('boilers.logic.30.booking') }}" method="post" id="adding-booking-button">
            @csrf

            <div class="modal-body">

                <div class="modal-body py-10 px-lg-17">

                  <div class="row col-md-12">
                      <input type="hidden" name="booking_id" value="{{$item->id}}"/>

                      <div class="col-md-6">
                          <label class="fs-6 fw-bold mb-2">Full Name</label>
                          <input type="text" class="form-control form-control-solid" placeholder="Name" id="customer_name" name="customer_name"/>
                          <span class="text-danger error-text customer_name_error"></span>
                      </div>

                      <div class="col-md-6">
                          <label class="fs-6 fw-bold mb-2">Mobile Number</label>
                          <input type="text" class="form-control form-control-solid" placeholder="Number" id="customer_contact_number" name="customer_contact_number"/>
                          <span class="text-danger error-text customer_contact_number_error" ></span>
                      </div>
                  </div>

                  <div class="row col-md-12">
                    <div class="col-md-6">
                      <label class="fs-6 fw-bold mb-2">Year of warranty</label>
                        <select name="year_warranty" id="year_warranty" aria-label="Select a year" data-control="select2" data-placeholder="Select a Year"class="form-control form-control-solid">
                            <option value="">--Select--</option>
                            <option value="5">Five</option>
                            <option value="10">Ten</option>
                        </select>
                        <span class="text-danger error-text year_warranty_error"></span>
                    </div>
                  </div>
              </div>       
            
              <div class="modal-footer">
                <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-white me-3">Reset</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
        </form>
      </div>
    </div>
</div>
