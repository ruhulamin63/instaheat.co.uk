
<!-- Modal -->
<div class="modal fade editBoiler" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Boiler</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="<?= route('update.boiler.details') ?>" method="post" id="update-boiler-form">
            @csrf

            <div class="modal-body">
                <input type="hidden" name="cid">
                <div class="modal-body py-10 px-lg-27">
                    <h6>#Boiler Information</h6>
                    <div class="row col-md-12">

                        <div class="col-md-6">
                            <label class="fs-6 fw-bold mb-2">Brand Name</label>
                            <input type="text" class="form-control form-control-solid" name="brand_name" value=""/>
                            <span class="text-danger error-text brand_name_error"></span>
                        </div>

                        <div class="col-md-6">
                            <label class="fs-6 fw-bold mb-2">Model Name</label>
                            <input type="text" class="form-control form-control-solid" name="model_name" value=""/>
                            <span class="text-danger error-text model_name_error"></span>
                        </div>
                    </div>

                    <div class="row col-md-12">

                        <div class="col-md-4">
                            <br>
                            <label class="fs-6 fw-bold mb-2">Type</label>
                            <input type="text" class="form-control form-control-solid" name="type" value=""/>
                            <span class="text-danger error-text type_error"></span>
                        </div>

                        <div class="col-md-4">
                            <br>
                            <label class="fs-6 fw-bold mb-2">Central Heating</label>
                            <input type="text" class="form-control form-control-solid" name="central_heating_output" value=""/>
                            <span class="text-danger error-text central_heating_output_error"></span>
                        </div>

                        <div class="col-md-4">
                            <br>
                            <label class="fs-6 fw-bold mb-2">Hot Water</label>
                            <input type="text" class="form-control form-control-solid" name="hot_water_flow_rate" value=""/>
                            <span class="text-danger error-text hot_water_flow_rate_error"></span>
                        </div>
                    </div>
                    <br>
                    <div class="row col-md-12">
                        <label class="fs-6 fw-bold mb-2">Short Description</label>
                        <textarea name="short_desc" class="form-control form-control-solid" placeholder="Enter text here..."></textarea>
                        <span class="text-danger error-text short_desc_error"></span>
                        
                    </div>

                    <hr>

                    <div class="row col-md-12">
                        <div class="col-md-4">
                            <br>
                            <label class="fs-6 fw-bold mb-2">Price for 5 Year</label>
                            <input type="text" class="form-control form-control-solid" name="price_for_5_year" value=""/>
                            <span class="text-danger error-text price_for_5_year_error"></span>
                        </div>

                        <div class="col-md-4">
                            <br>
                            <label class="fs-6 fw-bold mb-2">Price for 10 Year</label>
                            <input type="text" class="form-control form-control-solid" name="price_for_10_year" value=""/>
                            <span class="text-danger error-text price_for_10_year_error"></span>
                        </div>

                        <div class="col-md-4">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">Choose Photo</label>
                            <!--end::Label-->
                            <div class="col-lg-8">
                                
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{asset('media/avatars/blank.png')}})">
                                    <!--begin::Preview existing avatar-->
                                    {{-- <!--begin: Pic-->
                                    <div class="me-7 mb-4">
                                        <div class="symbol symbol-100px symbol-lg-100px symbol-fixed position-relative">
                                            
                                            @if(Session()->get('boiler_image'))
                                                <img src="{{asset(Session()->get('boiler_image'))}}" >
                                            @else
                                                <img src="{{asset('/media/avatars/blank.png')}}" >
                                            @endif
                                        </div>
                                    </div> --}}
                                    <div class="image-input-wrapper w-80px h-80px bgi-position-center" style="background-size: 75%; background-image: url({{asset('media/svg/brand-logos/volicity-9.svg')}})"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Hint-->
                                {{-- <div class="form-text">Allowed file types: png, jpg, jpeg.</div> --}}
                                <!--end::Hint-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
      </div>
    </div>
  </div>
