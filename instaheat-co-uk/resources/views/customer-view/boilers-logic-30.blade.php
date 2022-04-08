@extends('Layout.navbar.boilerLogic-30-NavBar')
<?php 
	$title= "Boiler Logic-30";
?>
@section('body')

<div id="___gatsby">
    <div data-reactroot="">
        

      
            <div class="sc-bZQynM dbODSx">
                <img class="boiler-image" src="{{asset('custom/img/Logic-30.jpg')}}" alt="Ideal Logic-30 White"/>
                <div class="sc-gzVnrw hMtqQg">
                    <img class="brand-logo" src="{{asset('custom/img/Ideal.png')}}" alt="Ideal"/>
                    <h3>Logic-30<!--change able --> <!--change able -->Combi<!--change able --> Boiler</h3>
                    <p style="font-size:1rem;text-align:left">Compact in size and fully modulating down to as low as 4.8kW, the Logic+ combi provides excellent energy savings making it the perfect choice for new boiler or boiler replacement installations.</p><p class="central-heating-output"><strong>Central Heating Output:</strong> <!-- -->24.0kW</p>
                    <p class="hotwater-flowrate"><strong>Hot Water Flowrate:</strong> <!-- change able -->12.4 ltr/min</p>
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
                            <span class="price">£<!--change able -->NaN<!--change able --> 
                                <span class="warranty-message">(5 year warranty)</span>
                            </span>
                        </div>
                        
                        <div class="price">
                            <span class="price">£<!--change able -->NaN<!--change able --> 
                                <span class="warranty-message">(10 year warranty)</span>
                            </span>
                        </div>
                    </div>
                    
                    <p class="footnote">**All prices inclusive of VAT &amp; Fitting</p>
                    
                    <div>
                        <a class="submit-btn">View Finance Options</a>
                    </div>
                    
                    <h4 class="contact-heading">What next?</h4>
                    <p>Call us now on<br/><a href="tel:07710246710"><span class="number">07710 246710</span></a></p>
                    
                    <div class="form-data">
                        
                        <p>Or fill in your name and number below and we will endeavour to get back to you as soon as possible. By sending the form we will have your questionnaire results to hand to discuss your quote in further detail.</p>
                        
                        
                        <form>

                            <div class="col row-md-12">
                                <div class="col-md-4">
                                    <input type="text" class="name-input" placeholder="Name" name="name"/>
                                </div>

                                <div class="col-md-4">
                                    <input type="text" class="phone-input" placeholder="Number" name="phone"/>
                                </div>

                                <div class="col-md-4">
                                    <select name="year_warranty" aria-label="Select a year" data-control="select2" data-placeholder="Select a Year" class="form-select form-select-solid fw-bolder">
                                        <option value="">--Select--</option>
                                        <option value="5">Five</option>
                                        <option value="10">Ten</option>
                                    </select>
                                        <!-- <span class="text-danger error-text moving_5_meter_error"></span> -->
                                </div>
                            </div>

                            <div class="cta-container">
                                <a class="submit-btn">Submit</a>
                                <a class="submit-btn">No Thanks</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        
       
    </div>
</div>

@endsection