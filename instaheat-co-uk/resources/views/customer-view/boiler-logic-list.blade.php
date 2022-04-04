@extends('Layout.navbar.quoteNavBar')
<?php 
	$title= "Get-Quote";
?>
@section('body')

    <div id="___gatsby">
        <div data-reactroot="">
        
            <div class="questionnaire-container-gradient">
                <div class="sc-cSHVUG cBBHCG" style="max-width: 1200px;margin: 0px auto;padding: 24px;min-height: 500px;">
                    <div class="quote-app">
                        <div class="quote-app__questions">
                            <div>
                                <div class="sc-jTzLTM hdHsnJ">
                                    <div class="cta-wrapper">
                                        <a class="reset-cta">Reset Questionnaire</a>
                                    </div>
                                    
                                    <div class="form-data">
                                        <p><strong>6</strong> boilers meet your needs. Click on 'Find out more' to get more information about a boiler and to make an enquiry**</p>
                                    </div>
                                    
                                    <div class="sc-gqjmRU khhLeg">
                                        <div>
                                            <img class="brand-logo" src="{{asset('custom/img/Ideal.png')}}" alt="Ideal">
                                            <h3>Logic-30 Combi Boiler</h3>
                                            <p class="boiler-details">Includes VAT, fitting, filter and flushed &amp; protected</p>
                                        </div>
                                        
                                        <img class="boiler-image" src="{{asset('custom/img/Logic-30.jpg')}}" alt="Ideal Logic-30 White">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <span class="price">£2180 <span class="warranty-message">(5 year warranty)</span></span>
                                            </div>
                                            <p class="price-divider">or</p>
                                            
                                            <div class="price">
                                                <span class="price">£2380 <span class="warranty-message">(10 year warranty)</span></span>
                                            </div>
                                        </div>
                                        
                                        <div class="sc-bdVaJa eyNdej">
                                            <a class="primary-cta" href="/boilers/logic-30">Find out more</a>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="sc-gqjmRU khhLeg">
                                        <div>
                                            <img class="brand-logo" src="/img/Ideal.png" alt="Ideal">
                                            <h3>Logic-35 Combi Boiler</h3>
                                    
                                            <p class="boiler-details">Includes VAT, fitting, filter and flushed &amp; protected</p>
                                        </div>
                                    
                                        <img class="boiler-image" src="/img/Logic-35.jpg" alt="Ideal Logic-35 White">
                                    
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <span class="price">£2400 <span class="warranty-message">(5 year warranty)</span></span>
                                            </div>
                                            
                                            <p class="price-divider">or</p>
                                            
                                            <div class="price"><span class="price">£2600 <span class="warranty-message">(10 year warranty)</span></span></div>
                                        </div>
                                
                                        <div class="sc-bdVaJa eyNdej">
                                            <a class="primary-cta" href="/boilers/logic-35">Find out more</a>
                                        </div>
                                    </div>
                            
                                    <div class="sc-gqjmRU khhLeg">
                                        <div>
                                            <img class="brand-logo" src="/img/Worcester.png" alt="Worcester">
                                            <h3>30i Combi Boiler</h3>
                                            <p class="boiler-details">Includes VAT, fitting, filter and flushed &amp; protected</p>
                                        </div>
                                        
                                        <img class="boiler-image" src="/img/30i.jpg" alt="Worcester 30i White">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <span class="price">£2375 <span class="warranty-message">(5 year warranty)</span></span>
                                            </div>
                                            
                                            <p class="price-divider">or</p>
                                            
                                            <div class="price"><span class="price">£2750 <span class="warranty-message">(10 year warranty)</span></span></div>
                                        </div>
                                        
                                        <div class="sc-bdVaJa eyNdej"><a class="primary-cta" href="/boilers/30i">Find out more</a></div>
                                    </div>
                                    
                                    <div class="sc-gqjmRU khhLeg">
                                        <div>
                                            <img class="brand-logo" src="/img/Worcester.png" alt="Worcester">
                                            <h3>32cdi Combi Boiler</h3>
                                            
                                            <p class="boiler-details">Includes VAT, fitting, filter and flushed &amp; protected</p>
                                        </div>
                                        
                                        <img class="boiler-image" src="/img/32cdi.jpg" alt="Worcester 32cdi White">
                                        
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <span class="price">£3000 <span class="warranty-message">(5 year warranty)</span></span>
                                            </div>
                                            
                                            <p class="price-divider">or</p>
                                            
                                            <div class="price"><span class="price">£3200 <span class="warranty-message">(10 year warranty)</span></span></div>
                                        </div>
                                        
                                        <div class="sc-bdVaJa eyNdej"><a class="primary-cta" href="/boilers/32cdi">Find out more</a></div>
                                    </div>
                                    
                                    <div class="sc-gqjmRU khhLeg">
                                        <div>
                                            <img class="brand-logo" src="/img/Worcester.png" alt="Worcester">
                                            <h3>34cdi Combi Boiler</h3>
                                            <p class="boiler-details">Includes VAT, fitting, filter and flushed &amp; protected</p>
                                        </div>
                                        
                                        <img class="boiler-image" src="/img/34cdi.jpg" alt="Worcester 34cdi White">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <span class="price">£3150 <span class="warranty-message">(5 year warranty)</span></span>
                                            </div>
                                            
                                            <p class="price-divider">or</p>
                                            
                                            <div class="price"><span class="price">£3350 <span class="warranty-message">(10 year warranty)</span></span></div>
                                        </div>
                                    
                                        <div class="sc-bdVaJa eyNdej">
                                            <a class="primary-cta" href="/boilers/34cdi">Find out more</a>
                                        </div>
                                    </div>
                        
                                    <div class="sc-gqjmRU khhLeg">
                                        <div>
                                            <img class="brand-logo" src="/img/Worcester.png" alt="Worcester">
                                            <h3>36cdi Combi Boiler</h3>
                                            <p class="boiler-details">Includes VAT, fitting, filter and flushed &amp; protected</p>
                                        </div>
                                        
                                        <img class="boiler-image" src="/img/36cdi.jpg" alt="Worcester 36cdi White">
                                        <div class="price-wrapper">
                                            <div class="price">
                                                <span class="price">£3125 <span class="warranty-message">(5 year warranty)</span></span>
                                            </div>
                                            <p class="price-divider">or</p>
                                            <div class="price"><span class="price">£3325 <span class="warranty-message">(10 year warranty)</span></span></div>
                                        </div>
                                        
                                        <div class="sc-bdVaJa eyNdej">
                                            <a class="primary-cta" href="/boilers/36cdi">Find out more</a>
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