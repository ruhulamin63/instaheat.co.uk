@extends('layout.navbar.boilerLogic-30-NavBar')
<?php 
	$title= "Boiler Logic";
?>
@section('body')

    <div id="___gatsby">
        <div data-reactroot="">

            <div class="sc-bZQynM dbODSx">

                @foreach($boilers as $item)
   
                    @if($item->image)
                        <?php if (file_exists("../public".$item->image)){ ?>
                            <img class="boiler-image" style="padding-right: 15px;" src="{{$item->image}}" >
                        <?php } else{ ?>
                            <img class="boiler-image" style="padding-right: 15px;" src="{{asset('/media/avatars/blank.png')}}">
                        <?php } ?>
                    @else
                        <img class="boiler-image" style="padding-right: 15px;" src="{{asset('/media/avatars/blank.png')}}" >
                    @endif

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
                        
                        <div>
                            <a class="submit-btn" onclick="$('#modal').css({'display':'block'});" href="javascript:void(0)">View Finance Options</a>
                        </div>
                        
                        <h4 class="contact-heading">What next?</h4>
                        <p>Call us now on<br/><a href="tel:07710246710"><span class="number">07710 246710</span></a></p>

                        <p>Or fill in your name and number below and we will endeavour to get back to you as soon as possible. By sending the form we will have your questionnaire results to hand to discuss your quote in further detail.</p>
          
                        <div class="modal-body py-10 px-lg-27" class="addBooking" id="adding-booking-button">
      
                            <div class="row col-md-12">
                                <div class="col-md-4">
                                    <label class="fs-6 fw-bold mb-2">Name</label>
                                    <input class="form-control form-control-solid" type="text" placeholder="Name" id="customer_name" name="customer_name">
                                    <span class="text-danger error-text customer_name_error"></span>
                                </div>

                                <div class="col-md-4">
                                    <label class="fs-6 fw-bold mb-2">Mobile Number</label>
                                    <input  type="text" class="form-control form-control-solid" type="text" placeholder="Number" id="customer_contact_number" name="customer_contact_number">
                                    <span class="text-danger error-text customer_contact_number_error" ></span>
                                </div>

                                <div class="col-md-4">
                                    <label class="fs-6 fw-bold mb-2">Year of warranty</label>
                                    <select name="year_warranty" id="year_warranty" aria-label="Select a year" data-control="select2" data-placeholder="Select a Year"class="form-control form-control-solid">
                                        <option value="">--Select--</option>
                                        <option value="5">Five</option>
                                        <option value="10">Ten</option>
                                    </select>
                                    <span class="text-danger error-text year_warranty_error"></span>
                                </div>
                            </div>

                            <div class="cta-container">
                                <p type="submit" class="submit-btn" data-id="{{$item->id}}" id="addBookingBtn">Order Now</p>
                                <a class="submit-btn" href="{{route('customer.home')}}">No Thanks</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @include('customer-view.booking.booking-scripts')
        </div>
    </div>

    
    <dialog class="modal" id="modal" style="display: none">
        <h1 class="finance_option">Finance Options</h1>
        <h3 class="boiler_price">Boiler Price</h3>
        <p class="price">$ <span id="boiler_price"></span></p>
        <p class="desposit_amount">Desposit Amount</p>
        <input type="number" value="100" id="desposit" class="desposit_box">
        <p class="desposit_waranty">Warranty</p>
    
        <p class="year_radio">
        <label for=""><input type="radio" checked="" value="5" name="year" id="five_year"><span>5 Year</span></label>
        <label for=""><input type="radio"  value="10" name="year" id="ten_year"><span>10 Year</span></label>
        </p>
  
    
        <p class="term_month">Term (Months)</p>
        <div class="slider_rance">
        <div class="rc-slider-rail"></div>
        <div class="rc-slider-track"></div>
        <div class="rance_slider">
            <input class="rance_slider_dot" type="radio" checked="" value="1" name="month" id="one_month" style="left: 0%;">
            <input class="rance_slider_dot" type="radio" value="2" name="month" id="two_month" style="left: 25%;">
            <input class="rance_slider_dot" type="radio" value="3" name="month" id="three_month" style="left: 50%;">
            <input class="rance_slider_dot" type="radio" value="4" name="month" id="four_month" style="left: 75%;">
            <input class="rance_slider_dot" type="radio" value="5" name="month" id="five_month" style="left: 100%;">
        </div>
        <div class="rc-slider-line"></div>
        <div class="rance_slider_number">
            <span class="rance_slider_nmbr" style="left: 0%;">12</span>
            <span class="rance_slider_nmbr" style="left: 25%;">24</span>
            <span class="rance_slider_nmbr" style="left: 50%;">36</span>
            <span class="rance_slider_nmbr" style="left: 75%;">48</span>
            <span class="rance_slider_nmbr" style="left: 100%;">60</span>
        </div>
        
        </div>
    
  
        <p class="options">Options</p>
    
        <div class="table_container">
        <div class="table_head">
            <th>$<span id="per_month"></span>/mo for <span id="for_month"></span> months</th>
        </div>
        <div class="table_content">
            <table width="100%">
            <tr>
            <td class="intererst">Interest - <span>9.9%</span> APR</td>
            <td class="intererst">Total</td>
            </tr>
            <tr>
            <td class="amnt">$<span id="percen"></span></td>
            <td class="amnt">$<span id="total"></span></td>
            </tr>
            </table>
        </div>
        </div>
  
        <button class="close-button">&times;</button>
    </dialog>

    @include('layout.scripts.customerScripts')
    
@endsection


