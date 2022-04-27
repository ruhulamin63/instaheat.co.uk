@extends('layout.navbar.adminNavBar')
<?php 
	$title= "Order Details";
?>
@section('body')
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Toolbar-->
					<div class="toolbar" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
							<!--begin::Page title-->
							<div class="d-flex align-items-center me-3">
								<!--begin::Title-->
								<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Dashboard
								<!--begin::Separator-->
								<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
								<!--end::Separator-->
								<!--begin::Description-->
								<small class="text-muted fs-7 fw-bold my-1 ms-1">#All View</small>
								<!--end::Description--></h1>
								<!--end::Title-->
							</div>
							<!--end::Page title-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->

                    <!--begin::Post-->
					<!--begin::Container-->
					<div style="margin-left: 10px;" class="row col-md-12">
						<!--begin::Row-->
						<div class="row gy-5 gx-xl-8">
							<!--begin::Col-->
							<div class="col-xl-12">
								<div class="card card-xxl-stretch mb-5 mb-xl-8">
									<!--begin::Card header-->
									<div class="card-header">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bolder fs-3 mb-1">Order Details Information</span>
											<span class="text-muted mt-1 fw-bold fs-7">All order details</span>
										</h3>
										{{-- <div class="card-toolbar">
											<button class="btn btn-sm btn-light-primary" id="customerOrderBtn"><i class="fas fa-plus"></i>Customer Order</button>
										</div> --}}
									</div>
									<!--end::Card header-->

									
									<div class="row" style="margin-top: 45px">
										<div class="col-md-12">

											<!--begin::Body-->
											<div class="card-body py-3">
												<!--begin::Table container-->
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-condensed" id="all-order-table">
															<thead>
																<tr style="background-color: #E74C3C; color:white !important">
																	<!-- <th><input type="checkbox" name="main_checkbox"><label></label></th> -->
																	<!-- <th style="text-align: center;" class="min-w-100px">#</th> -->
																	<th style="text-align: center;" class="min-w-100px">customer_name</th>
																	<th style="text-align: center;" class="min-w-100px">customer_contact_number</th>
																	{{-- <th style="text-align: center;" class="min-w-100px">year_warranty</th>
																	<th style="text-align: center;" class="min-w-100px">price</th> --}}
																	<th style="text-align: center;" class="min-w-100px">year_warranty</th>
																	<th style="text-align: center;" class="min-w-100px">price</th>
																	<th style="text-align: center;" class="min-w-100px">brand_name</th>
																	<th style="text-align: center;" class="min-w-100px">model_name</th>
																	<th style="text-align: center;" class="min-w-100px">type</th>
																	<th style="text-align: center;" class="min-w-100px">central_heating_output</th>
																	<th style="text-align: center;" class="min-w-100px">hot_water_flow_rate</th>
																	<th style="text-align: center;" class="min-w-100px">short_desc</th>
																	<th style="text-align: center;" class="min-w-100px">status</th>
																	<th style="text-align: center;" class="min-w-100px">activeStatus</th>
																	<!-- <th style="text-align: center;" class="min-w-100px">Test</th> -->
																	<!-- <button class="btn btn-sm btn-danger d-none" id="deleteAllBtn">Delete All</button> -->
																</tr>
															</thead>

                                                            @foreach ($order_details as $item)
                                                                <tbody>
                                                                    <tr>
                                                                        <td>{{$item->customer_name}}</td>
                                                                        <td>{{$item->customer_contact_number}}</td>
                                                                        <td>{{$item->year_warranty}}</td>
                                                                        <td>{{$item->price}}</td>
                                                                        <td>{{$item->brand_name}}</td>
                                                                        <td>{{$item->model_name}}</td>
                                                                        <td>{{$item->type}}</td>
                                                                        <td>{{$item->central_heating_output}}</td>
                                                                        <td>{{$item->hot_water_flow_rate}}</td>
                                                                        <td>{{$item->short_desc}}</td>
                                                                        <td>{{$item->status}}</td>
                                                                        <td>{{$item->activeStatus}}</td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            @endforeach
														
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<!--end::Card-->
					</div>
					<!--end::Post-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Wrapper-->
		</div>
	</div>
	<!--end::Root-->
    
@endsection