
<!-- Modal -->
<div class="modal fade editOrder" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="<?= route('update.order.details') ?>" method="post" id="update-order-form">
            @csrf

            <div class="modal-body">

                <input type="hidden" name="cid">
                <div class="modal-body py-10 px-lg-27">

                <h6># Customer Information</h6><br>
                <div class="row col-md-12">

                    <div class="col-md-6">
                        <label class="fs-6 fw-bold mb-2">Customer Name</label>

                        <input type="text" class="form-control form-control-solid" name="customer_name" value=""/>
                        <span class="text-danger error-text customer_name_error"></span>
                    </div>

                    <div class="col-md-6">
                        <label class="fs-6 fw-bold mb-2">Contact Number</label>
                        <input type="text" class="form-control form-control-solid" name="customer_contact_number" value=""/>
                        <span class="text-danger error-text customer_contact_number_error"></span>
                    </div>
                </div>

                <div class="row col-md-12">

                    <div class="col-md-4">
                        <br>
                        <label class="fs-6 fw-bold mb-2">Fuel Type</label>
                        <select name="fuel_type" aria-label="Select a Fuel" data-control="select2" data-placeholder="Select a Fuel..." class="form-select form-select-solid fw-bolder">
                            <option value="">--Select--</option>
                            <option value="Gas">Gas</option>
                            <option value="Electricity">Electricity</option>
                            <option value="LPG">LPG</option>
                            <option value="Oil">Oil</option>
                            <option value="Others">Others</option>
                        </select>
                        <span class="text-danger error-text fuel_type_error"></span>
                    </div>

                    <div class="col-md-4">
                        <br>
                        <label class="fs-6 fw-bold mb-2">Boiler Type</label>
                        <select name="boiler_type" aria-label="Select a Model" data-control="select2" data-placeholder="Select a Boiler..." class="form-select form-select-solid fw-bolder">
                            <option value="">--Select--</option>
                            <option value="Combi">Combi</option>
                            <option value="Standard">Standard</option>
                            <option value="System">System</option>
                            <option value="Back Boiler">Back Boiler</option>
                            <option value="Others">Others</option>
                        </select>
                        <span class="text-danger error-text boiler_type_error"></span>
                    </div>

                    <div class="col-md-4">
                        <br>
                        <label class="fs-6 fw-bold mb-2">Convert Boiler</label>
                        <select name="convert_combi_boiler" id="convert" aria-label="Select a Facilities" data-control="select2" data-placeholder="Select a Convert" class="form-select form-select-solid fw-bolder">
                            <option value="">--Select--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>

                <div class="row col-md-12">

                    <div class="col-md-4">
                        <br>
                        <label class="fs-6 fw-bold mb-2">Under A Carport</label>
                        <select name="under_a_carport" aria-label="Select a carport" data-control="select2" data-placeholder="Select a Convert" class="form-select form-select-solid fw-bolder">
                            <option value="">--Select--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <br>
                        <label class="fs-6 fw-bold mb-2">Away Window</label>
                        <select name="thirty_cm_away_window" aria-label="Select a Window" data-control="select2" data-placeholder="Select a Convert" class="form-select form-select-solid fw-bolder">
                            <option value="">--Select--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <br>
                        <label class="fs-6 fw-bold mb-2">Moving 5 Meter</label>
                        <select name="moving_5_meter" aria-label="Select a moving" data-control="select2" data-placeholder="Select a Convert" class="form-select form-select-solid fw-bolder">
                            <option value="">--Select--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                </div>

                <br><hr><br>

                <h6># Order Information</h6><br>
                <div class="row col-md-12">

                    <div class="col-md-4">
                        <br>
                        <label class="fs-6 fw-bold mb-2">fuel Come Out</label>
                        <select name="fuel_come_out" aria-label="Select a moving" data-control="select2" data-placeholder="Select a Convert" class="form-select form-select-solid fw-bolder">
                            <option value="">--Select--</option>
                            <option value="Roof">Roof</option>
                            <option value="Wall">Wall</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <br>
                        <label class="fs-6 fw-bold mb-2">pitch Of Flat</label>
                        <select name="pitched_or_flat" aria-label="Select a flat" data-control="select2" data-placeholder="Select a Convert" class="form-select form-select-solid fw-bolder">
                            <option value="">--Select--</option>
                            <option value="Pitched">Pitched</option>
                            <option value="Flat">Flat</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <br>
                        <label class="fs-6 fw-bold mb-2">House Live In</label>
                        <select name="house_live_in" aria-label="Select a House" data-control="select2" data-placeholder="Select a Convert" class="form-select form-select-solid fw-bolder">
                            <option value="">--Select--</option>
                            <option value="Flat">Flat</option>
                            <option value="Bungalow">Bungalow</option>
                            <option value="Terrace">Terrace</option>
                            <option value="Semi-Detatched">Semi-Detatched</option>
                            <option value="Detatched">Detatched</option>
                        </select>
                    </div>
                </div>

                <div class="row col-md-12">

                    <div class="col-md-6">
                        <br>
                        <label class="fs-6 fw-bold mb-2">Number of Bedrooms</label>
                        <select name="number_of_bedroom" aria-label="Select a flat" data-control="select2" data-placeholder="Select a Convert" class="form-select form-select-solid fw-bolder">
                            <option value="">--Select--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5+">5+</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <br>
                        <label class="fs-6 fw-bold mb-2">Number of Bathrooms</label>
                        <select name="number_of_bathroom" aria-label="Select a flat" data-control="select2" data-placeholder="Select a Convert" class="form-select form-select-solid fw-bolder">
                            <option value="">--Select--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3+">3+</option>
                        </select>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-white me-3">Reset</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
      </div>
    </div>
  </div>
