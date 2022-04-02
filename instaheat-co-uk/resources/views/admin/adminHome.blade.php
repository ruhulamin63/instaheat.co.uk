@extends('layout.navbar.adminNavbar')
<?php 
	$title= "Dashboard";
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
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container">
                            <!--begin::Row-->
                            <div class="row gy-5 gx-xl-8">
                                <!--begin::Col-->
                                <div class="col-xl-12">
                                    <!--begin::Today Order body-->
                                    <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="text-dark fw-bolder text-hover-primary fs-6"><h4>Today Orders</h4></span>
                                                <span class="text-muted mt-1 fw-bold fs-7">All Order List Information</span>
                                            </h3>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Body-->
                                        <div class="card-body py-3">
                                            <!--begin::Table container-->
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-condensed" id="today-order-table">
                                                        <thead>
                                                            <tr style="background-color: #E74C3C; color:white !important">
                                                                <th style="text-align: center;" class="min-w-100px">customer_name</th>
                                                                <th style="text-align: center;" class="min-w-100px">customer_contact_number</th>
                                                                <th style="text-align: center;" class="min-w-100px">fuel_type</th>
                                                                <th style="text-align: center;" class="min-w-100px">boiler_type</th>
                                                                <th style="text-align: center;" class="min-w-100px">convert_combi_boiler</th>
                                                                <th style="text-align: center;" class="min-w-100px">under_a_carport</th>
                                                                <th style="text-align: center;" class="min-w-100px">thirty_cm_away_window</th>
                                                                <th style="text-align: center;" class="min-w-100px">moving_5_meter</th>
                                                                <th style="text-align: center;" class="min-w-100px">fule_come_out</th>
                                                                <th style="text-align: center;" class="min-w-100px">pitched_or_flat</th>
                                                                <th style="text-align: center;" class="min-w-100px">house_live_in</th>
                                                                <th style="text-align: center;" class="min-w-100px">number_of_bedroom</th>
                                                                <th style="text-align: center;" class="min-w-100px">number_of_bathroom</th>
                                                                <th style="text-align: center;" class="min-w-100px">status</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody></tbody>
                                                       
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Today Appointment body-->
                                </div>
                            </div>
                        </div>
                    </div>

				</div>
				<!--end::Content-->
			</div>
			<!--end::Wrapper-->
		</div>
	</div>
	<!--end::Root-->

    @include('admin.pages.order.order-list-scripts')
    
@endsection