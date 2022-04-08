@extends('Layout.navbar.quoteNavBar')
<?php 
	$title= "Get-Quote";
?>
@section('body')

    <div id="___gatsby">
        <div data-reactroot="">

        <div class="questionnaire-container-gradient">
            <div class="sc-kpOJdX gmoiPL">
                <div class="quote-app">
                    <div class="quote-app__questions">
                        <div>
                            <div class="sc-chPdSV biOeyM">
                                <div class="cta-wrapper">
                                    <a class="reset-cta">Reset Questionnaire</a>
                                </div>
                                
                                <div class="form-data">
                                    <p><strong>2</strong> boilers meet your needs. Click on 'Find out more' to get more information about a boiler and to make an enquiry**</p>
                                </div>
                                
                                <div class="sc-cSHVUG iYEWGf">
                                    <div>
                                        <img class="brand-logo" src="{{asset('custom/img/Worcester.png')}}" alt="Worcester">
                                        <h3>18ri Standard Boiler</h3>
                                        <p class="boiler-details">Includes VAT, fitting, filter and flushed &amp; protected</p>
                                    </div>
                                    
                                    <img class="boiler-image" src="{{asset('custom/img/18ri.jpg')}}" alt="Worcester 18ri White">
                                    <div class="price-wrapper">
                                        <div class="price">
                                            <span class="price">£1860 <span class="warranty-message">(5 year warranty)</span></span>
                                        </div>
                                        
                                        <p class="price-divider">or</p>
                                        
                                        <div class="price">
                                            <span class="price">£2060 <span class="warranty-message">(10 year warranty)</span></span>
                                        </div>
                                    </div>
                                    
                                    <div class="sc-bdVaJa eyNdej">
                                        <a class="primary-cta" href="/boilers/18ri">Find out more</a>
                                    </div>
                                </div>
                                
                                <!-- <div class="sc-cSHVUG iYEWGf">
                                    <div>
                                        <img class="brand-logo" src="/img/Ideal.png" alt="Ideal">
                                        <h3>Heat-18 Standard Boiler</h3>
                                        <p class="boiler-details">Includes VAT, fitting, filter and flushed &amp; protected</p>
                                    </div>
                                    
                                    <img class="boiler-image" src="/img/Heat-18.jpg" alt="Ideal Heat-18 White">
                                    <div class="price-wrapper">
                                        <div class="price">
                                            <span class="price">£1685 <span class="warranty-message">(5 year warranty)</span></span>
                                        </div>
                                        <p class="price-divider">or</p>
                                        <div class="price">
                                            <span class="price">£1885 <span class="warranty-message">(10 year warranty)</span></span>
                                        </div>
                                    </div>
                                    
                                    <div class="sc-bdVaJa eyNdej">
                                        <a class="primary-cta" href="/boilers/heat-18">Find out more</a>
                                    </div>
                                </div> -->
                                <p class="footnote">**Although boiler quotes should be accurate, these are not 100% finalised until you give us a call</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>

@endsection