<!-- Modal -->
<div class="modal fade addGuestAppointment" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Added Order Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('admin.add.guest.appointment') }}" method="post" id="add-appointment-form">
                @csrf

                <div class="modal-body">
                    <div class="modal-body py-10 px-lg-17">
                        <h6># User Information</h6><br>
                        <div class="row col-md-12">
                        
                            <input type="hidden" name="user_id" value="0" />

                            <div class="col-md-6">
                                <label class="fs-6 fw-bold mb-2">Full Name</label>

                                <input type="text" class="form-control form-control-solid" name="full_name" value=""/>
                                <span class="text-danger error-text full_name_error"></span>
                            </div>


                            <div class="col-md-6">
                                <label class="fs-6 fw-bold mb-2">Mobile Number</label>
                                <input type="text" class="form-control form-control-solid" name="number" value=""/>
                                <span class="text-danger error-text number_error"></span>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <label class="fs-6 fw-bold mb-2">
                                    <span>Amount</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="amount" id="guest_amount" readonly/>
                                <span class="text-danger error-text amount_error"></span>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <label class="fs-6 fw-bold mb-2">Service Type</label>
                                {!! Form::select('service_type', $services, null,[ 'class'=>'form-control select2', 'placeholder' => 'Select User Number','id'=> 'guest_service_type', 'required'=> 'required']) !!}
                                <span class="text-danger error-text service_type_error"></span>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <label class="fs-6 fw-bold mb-2">Bike Model</label>
                                <select name="bike_model" id="bike_model" aria-label="Select a Model" data-control="select2" data-placeholder="Select a Bike..." class="form-select form-select-solid fw-bolder">
                                    <option value="" disabled="true" selected="true">--Select--</option>
                                    <option value="Yamaha FZ-X">Yamaha FZ-X</option>
                                    <option value="Yamaha FZ-V2">Yamaha FZ-V2</option>
                                    <option value="Yamaha FZ-V3">Yamaha FZ-V3</option>
                                    <option value="Yamaha YZF R15 V3">Yamaha YZF R15 V3</option>
                                    <option value="Palser NS 160">Palser NS 160</option>
                                    <option value="TVS RTR">TVS RTR</option>
                                    <option value="Others">Others</option>
                                </select>
                                <span class="text-danger error-text bike_model_error"></span>
                            </div>
                        </div>

                        <br><hr><br>

                        <h6># Appointment Information</h6><br>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="fs-6 fw-bold mb-2">Date</label>
                                <input type="date" class="form-control form-control-solid" name="date" />
                                <span class="text-danger error-text date_error"></span>
                            </div>

                            <br>
                            <div class="col-md-6">
                                <label class="fs-6 fw-bold mb-2">Time</label>
                                <input type="time" class="form-control form-control-solid" name="time" />
                                <span class="text-danger error-text time_error"></span>
                            </div>
                        </div>
                        <br>
                        <div class="modal-footer">
                            <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-white me-3">Reset</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Added</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
