
<!-- Modal -->
<div class="modal fade editService" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Service</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="<?= route('update.service.details') ?>" method="post" id="update-service-form">
            @csrf

            <div class="modal-body">
                <input type="hidden" name="cid">
                <div class="modal-body py-10 px-lg-27">
                    <h6>#Service Information</h6>
             
                    <div class="col-md-12">
                        <label class="fs-6 fw-bold mb-2">Service Name</label>
                        <input type="text" class="form-control form-control-solid" name="service_name" value=""/>
                        <span class="text-danger error-text service_name_error"></span>
                    </div>

                    <div class="col-md-12">
                        <label class="fs-6 fw-bold mb-2">Short Description</label>
                        <textarea name="description" class="form-control form-control-solid" placeholder="Enter text here..."></textarea>
                        <span class="text-danger error-text description_error"></span>
                        
                    </div>

                    <br><hr><br>

                    <div class="row col-md-12">
                        <div class="col-md-4">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">Choose Photo</label>
                            <!--end::Label-->
                            <div class="col-lg-8">
                                
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{asset('media/avatars/blank.png')}})">
                                    <!--begin::Preview existing avatar-->
                                    <!--begin: Pic-->
                                    <div class="me-7 mb-4">
                                        <div class="symbol symbol-100px symbol-lg-100px symbol-fixed position-relative">
                                            
                                            @if(Session()->get('service_image'))
                                                <img src="{{asset(Session()->get('service_image'))}}" >
                                            @else
                                                <img src="{{asset('/media/avatars/blank.png')}}" >
                                            @endif
                                        </div>
                                    </div>
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
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                <!--end::Hint-->
                                <br>
                            </div>
                        </div>
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
