@extends('layout.navbar.adminNavbar')
<?php 
	$title= "Boilers List";
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
					
					<!--begin::Row-->
					<div class="row gy-5 gx-xl-8">
						<!--begin::Col-->
						<div class="col-xl-12">
							<div class="card card-xxl-stretch mb-5 mb-xl-8">
								<!--begin::Card header-->
								<div class="card-header">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bolder fs-3 mb-1">Boilers List Information</span>
										<span class="text-muted mt-1 fw-bold fs-7">All boilers list</span>
									</h3>
									<div class="card-toolbar">
										<button class="btn btn-sm btn-light-primary" id="boilerBtn"><i class="fas fa-plus"></i>Added Boiler</button>
									</div>
								</div>
								<!--end::Card header-->

								@include('admin.pages.boilers.crud-boiler.add-boiler')
								
								<div class="row" style="margin-top: 45px">
									<div class="col-md-12">

										<!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="card-body">
												<div class="table-responsive">
													<table class="table table-hover table-condensed" id="all-boiler-table">
														<thead>
															<tr style="background-color: #E74C3C; color:white !important">
																<!-- <th><input type="checkbox" name="main_checkbox"><label></label></th> -->
																<!-- <th style="text-align: center;" class="min-w-100px">#</th> -->
                                                                <!-- <th style="text-align: center;" class="min-w-100px">Image</th> -->
																<th style="text-align: center;" class="min-w-100px">Brand Name</th>
																<th style="text-align: center;" class="min-w-100px">Model Name</th>
																<th style="text-align: center;" class="min-w-100px">Type </th>
																<th style="text-align: center;" class="min-w-100px">Central Heat</th>
																<th style="text-align: center;" class="min-w-100px">Hot Water</th>
																<th style="text-align: center;" class="min-w-100px">Short Desc</th>
																<th style="text-align: center;" class="min-w-100px">Price for 5 Year</th>
																<th style="text-align: center;" class="min-w-100px">Price for 10 Year</th>
																<th style="text-align: center;" class="min-w-100px">Actions</th>
																<!-- <button class="btn btn-sm btn-danger d-none" id="deleteAllBtn">Delete All</button> -->
															</tr>
														</thead>

														<tbody></tbody>

														

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
	
					<!--end::Post-->

				</div>
				<!--end::Content-->
			</div>
			<!--end::Wrapper-->
		</div>
	</div>
	<!--end::Root-->

    @include('admin.pages.boilers.boiler-list-scripts')
    
@endsection