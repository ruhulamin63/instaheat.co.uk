@extends('layout.navbar.adminNavBar')

<?php 
	$title= "Order by product";
?>
@section('body')

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container">

                            <!--begin::details View-->
								<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
									<!--begin::Card header-->
									<div class="card-header cursor-pointer">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bolder m-0">Order By Product Details</h3>
										</div>
										<!--end::Card title-->
									</div>
									<!--begin::Card header-->

									<!--begin::Card body-->
									<div class="card-body p-9">

                                        @foreach($boiler as $data)
                                            <!--begin: Pic-->
                                            <div class="me-7 mb-4">
                                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                    
                                                    @if($data->image)
                                                        <?php if (file_exists("../public/".$data->image)){ ?>
                                                            <img src="{{asset($data->image)}}" >
                                                        <?php } else{ ?>
                                                            <img src="{{asset('/media/avatars/blank.png')}}">
                                                        <?php } ?>
                                                    @else
                                                        <img src="{{asset('/media/avatars/blank.png')}}" >
                                                    @endif
                                                    
                                                    {{-- <img src="{{asset('/media/avatars/blank.png')}}" > --}}
                                                </div>
                                            </div>
                                            <!--end::Pic-->
                                        @endforeach

                                        @foreach($boiler_details as $item)
                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Customer Name</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark">{{$item->customer_name}}</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Contact Number</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark">{{$item->customer_contact_number}}</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Year Of Warranty</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark">{{$item->year_warranty}}</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Price</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark">{{$item->price}}</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Brand Name</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark">{{$item->brand_name}}</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Model Name</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark">{{$item->model_name}}</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Type</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark">{{$item->type}}</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Heating Output</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark">{{$item->central_heating_output}}</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Water Flow Rate</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark">{{$item->hot_water_flow_rate}}</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Short Description</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark">{{$item->short_desc}}</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        @endforeach
									</div>
									<!--end::Card body-->
								</div>
								<!--end::details View-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Navbar-->
@endsection