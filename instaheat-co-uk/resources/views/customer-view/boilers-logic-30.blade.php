@extends('Layout.navbar.boilerLogic-30-NavBar')
<?php 
	$title= "Boiler Logic-30";
?>
@section('body')

    <div id="___gatsby">
        <div data-reactroot="">

            <div class="sc-bZQynM dbODSx">

                @foreach($boilers as $item)
                    {{-- <img class="boiler-image" src="{{asset('custom/img/Logic-30.jpg')}}" alt="Ideal Logic-30 White"/> --}}
                    <!--begin: Pic-->
                    {{-- <div class="me-7 mb-4">
                        <div class="boiler-image"> --}}
                            
                            @if($item->image)
                                <?php if (file_exists("../public".$item->image)){ ?>
                                    <img class="boiler-image" style="padding-right: 15px;" src="{{$item->image}}" >
                                <?php } else{ ?>
                                    <img class="boiler-image" src="{{asset('/media/avatars/blank.png')}}">
                                <?php } ?>
                            @else
                                <img class="boiler-image" src="{{asset('/media/avatars/blank.png')}}" >
                            @endif

                            {{-- <div class="position-absolute translate-left bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div> --}}
                        {{-- </div>
                    </div> --}}

                    <div class="sc-gzVnrw hMtqQg">
                        <img class="brand-logo" src="{{asset('custom/img/Ideal.png')}}" alt="Ideal"/>
                        <h3>{{$item->model_name}}<!--change able --> <!--change able -->{{$item->type}}<!--change able --> Boiler</h3>
                        <p style="font-size:1rem;text-align:left">{{$item->short_desc}}</p>
                        <p class="central-heating-output"><strong>Central Heating Output:</strong> <!-- -->{{$item->central_heating_output}}</p>
                        <p class="hotwater-flowrate"><strong>Hot Water Flowrate:</strong> <!-- change able -->{{$item->hot_water_flow_rate}}</p>
                        <h4 class="features-heading">Features</h4>
                        
                        <ul class="boiler-features">
                            <li>Compact cupboard fit</li>
                            <li>Low lift weight (starting from 29.2kg)</li>
                            <li>Wide range of additional flueing options</li>
                            <li>Large digital display</li>
                            <li>Energy Saving Trust endorsed</li>
                        </ul>
                        
                        <h4 class="extras-heading">Included Extras:</h4>
                        
                        <div class="extras-container">
                            <div class="filter-container">
                                <img src="{{asset('custom/img/omega-filter.jpg')}}" alt="Omega Fernox Filter"/>
                                <p>Adey Magnaclean Filter</p>
                            </div>
                            
                            <div class="thermostat-container">
                                <img src="{{asset('custom/img/Honeywell.jpg')}}" alt="Honeywell Clock Thermostat"/>
                                <p>Honeywell Clock Thermostat</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="price-contact">
                        <div class="price-wrapper">
                            <h4 class="price-heading">Your Prices:</h4>
                            <div class="price">
                                <span class="price">£<!--change able -->{{$item->price_for_5_year}}<!--change able --> 
                                    <span class="warranty-message">(5 year warranty)</span>
                                </span>
                            </div>
                            
                            <div class="price">
                                <span class="price">£<!--change able -->{{$item->price_for_10_year}}<!--change able --> 
                                    <span class="warranty-message">(10 year warranty)</span>
                                </span>
                            </div>
                        </div>
                        
                        <p class="footnote">**All prices inclusive of VAT &amp; Fitting</p>
                        
                        {{-- <div>
                            <a class="submit-btn">View Finance Options</a>
                        </div> --}}
                        
                        <h4 class="contact-heading">What next?</h4>
                        <p>Call us now on<br/><a href="tel:07710246710"><span class="number">07710 246710</span></a></p>

                        <div class="form-data booking_from" id="adding-booking-form">
                            <p>Or fill in your name and number below and we will endeavour to get back to you as soon as possible. By sending the form we will have your questionnaire results to hand to discuss your quote in further detail.</p>
                            
                             <input class="name-input" type="text" placeholder="Name" id="customer_name" name="customer_name">
                                {{-- <span class="text-danger error-text customer_name_error"></span> --}}

                                <input class="phone-input" type="text" placeholder="Number" id="customer_contact_number" name="customer_contact_number">
                                {{-- <span class="text-danger error-text customer_contact_number_error" ></span> --}}

                                <select name="year_warranty" id="year_warranty" aria-label="Select a year" data-control="select2" data-placeholder="Select a Year" class="form-select form-select-solid fw-bolder">
                                    <option value="">--Select--</option>
                                    <option value="5">Five</option>
                                    <option value="10">Ten</option>
                                </select>
                                {{-- <span class="text-danger error-text year_warranty_error"></span> --}}
                                
                                <div class="cta-container">
                                    
                                    <button type="submit" class="btn btn-lg btn-primary fw-bolder me-3 my-2">
                                        <a class="submit-btn" data-id="{{$item->id}}" id="addBookingBtn">Order Now</a>
                                        <a class="submit-btn" href="{{route('customer.home')}}">No Thanks</a>
                                    </button>
                                </div>
                        </div>
                        
                    </div>
                    @include('customer-view.booking.booking-scripts')
                @endforeach
            </div>

        </div>
    </div>

@endsection