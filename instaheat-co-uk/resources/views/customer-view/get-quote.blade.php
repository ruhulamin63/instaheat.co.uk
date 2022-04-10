@extends('Layout.navbar.quoteNavBar')
<?php 
	$title= "Get-Quote";
?>
@section('body')

    <div id="___gatsby">
        <div data-reactroot="">
        
            <div class="questionnaire-container-gradient">
                <div class="sc-cSHVUG cBBHCG">
                    <div class="quote-app">
                        
                        <div class="quote-app__questions" >
                            <div class="app-container">
                                <div class="app-header">
                                    <h1>Get a fixed price quote now!</h1>
                                    <p>Simply answer the following questions to get your fixed price quote on a new boiler:</p>
                                </div>
                                
                                <div class="questionnaire-container" id="Which-type-of-fuel-does-your-boiler-use">
                                    <div class="questionnaire">
                                        <h2 class="question">Which type of fuel does your boiler use?</h2>
                                        <ul class="answer-options">
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button-gas" name="radio-group" id="Gas" value="Gas"/>
                                
                                                <label class="radio-custom-label" for="Gas">Gas</label>
                                            </li>
                                            
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button-electricity" name="radio-group" id="Electricity" value="Electricity" data-eliminateBoilers="25i,30i,32cdi,34cdi,36cdi,12ri,15ri,18ri,24ri,12i,15i,18i,24i,s15,s18,s24,s30,Logic-24,Logic-30,Logic-35,Heat-15,Heat-18,Heat-24,Heat-30,highflow-440cdi,highflow-550cdi"/>
                                               
                                                <label class="radio-custom-label" for="Electricity">Electricity</label>
                                            </li>
                                            
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button-lpg" name="radio-group" id="LPG" value="LPG" data-eliminateBoilers="25i,30i,32cdi,34cdi,36cdi,12ri,15ri,18ri,24ri,12i,15i,18i,24i,s15,s18,s24,s30,Logic-24,Logic-30,Logic-35,Heat-15,Heat-18,Heat-24,Heat-30,highflow-440cdi,highflow-550cdi"/>
                                                
                                                <label class="radio-custom-label" for="LPG">LPG</label>
                                            </li>
                                            
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button-oil" name="radio-group" id="Oil" value="Oil" data-eliminateBoilers="25i,30i,32cdi,34cdi,36cdi,12ri,15ri,18ri,24ri,12i,15i,18i,24i,s15,s18,s24,s30,Logic-24,Logic-30,Logic-35,Heat-15,Heat-18,Heat-24,Heat-30,highflow-440cdi,highflow-550cdi"/>
                                               
                                                <label class="radio-custom-label" for="Oil">Oil</label>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="image-container-questionnaire">
                                        <img src="{{asset('custom/img/q1.jpg')}}" alt=""/>
                                    </div>
                                </div>

                                <div class="questionnaire-container step-one" id="Which-type-of-boiler">
                                    <div class="questionnaire">
                                        <h2 class="question">Which type of boiler?</h2>
                                        <ul class="answer-options">
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button-combi" name="radio-group" id="Combi" data-skipquestion="1" data-eliminateboilers="12ri,15ri,18ri,24ri,12i,15i,18i,24i,s15,s18,s24,s30,Heat-15,Heat-18,Heat-24,Heat-30" value="Combi">
                                                <label class="radio-custom-label" for="Combi">Combi</label>
                                            </li>
                                            
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button-standard" name="radio-group" id="Standard" data-eliminateboilers="12i,15i,18i,24i,s15,s18,s24,s30" value="Standard">
                                                <label class="radio-custom-label" for="Standard">Standard</label>
                                            </li>
                                            
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button-system" name="radio-group" id="System" data-eliminateboilers="12ri,15ri,18ri,24ri,Heat-15,Heat-18,Heat-24,Heat-30" value="System">
                                                <label class="radio-custom-label" for="System">System</label>
                                            </li>
                                            
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button" name="radio-group" id="Back-boiler" data-eliminateboilers="12ri,15ri,18ri,24ri,Heat-15,Heat-18,Heat-24,Heat-30" value="System">
                                                <label class="radio-custom-label" for="System">Back Boiler</label>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="image-container-questionnaire">
                                        <img src="{{asset('custom/img/q2.jpg')}}" alt=""/>
                                    </div>
                                </div>

                                <div class="app-container step-three" id="Do-you-want-your-boiler-moving-over-5-metres">
                                    <div class="questionnaire-container">
                                        <div class="questionnaire">
                                            <h2 class="question">Do you want your boiler moving over 5 metres?</h2>
                                            <ul class="answer-options">
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-moving-yes" name="radio-group" id="Yes" data-addon="350" value="Yes">
                                                    <label class="radio-custom-label" for="Yes">Yes</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-moving-no" name="radio-group" id="No" value="No">
                                                    <label class="radio-custom-label" for="No">No</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image-container-questionnaire">
                                        <img src="{{asset('custom/img/q4.jpg')}}" alt="image">
                                    </div>
                                </div>

                                <div class="app-container step-four" id="Would-you-like-to-convert-to-a-combi-boiler">
                                    <div class="questionnaire-container">
                                        <div class="questionnaire">
                                            <h2 class="question">Would you like to convert to a combi boiler?</h2>
                                            <ul class="answer-options">
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="radio-group" id="Yes" data-addon="650" data-eliminateboilers="12ri,15ri,18ri,24ri,12i,15i,18i,24i,s15,s18,s24,s30,Heat-15,Heat-18,Heat-24,Heat-30" value="Yes">
                                                    <label class="radio-custom-label" for="Yes">Yes</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="radio-group" id="No" data-eliminateboilers="25i,30i,32cdi,34cdi,36cdi,Logic-24,Logic-30,Logic-35,highflow-440cdi,highflow-550cdi" value="No">
                                                    <label class="radio-custom-label" for="No">No</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image-container-questionnaire">
                                        <img src="{{asset('custom/img/q3.jpg')}}" alt="">
                                    </div>
                                </div>

                                <div class="app-container step-five" id="Where-does-your-flue-come-out">
                                    <div class="questionnaire-container">
                                        <div class="questionnaire">
                                            <h2 class="question">Where does your flue come out?</h2>
                                            <ul class="answer-options">
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-roof" name="radio-group" id="Roof" data-addon="350" value="Roof">
                                                    <label class="radio-custom-label" for="Roof">Roof</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-wall" name="radio-group" id="Wall" data-skipquestion="1" value="Wall">
                                                    <label class="radio-custom-label" for="Wall">Wall</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image-container-questionnaire">
                                        <img src="{{asset('custom/img/q5.jpg')}}" alt="">
                                    </div>
                                </div>

                                <div class="app-container step-six" id="Is-the-roof-pitched-or-flat">
                                    <div class="questionnaire-container">
                                        <div class="questionnaire">
                                            <h2 class="question">Is the roof pitched or flat?</h2>
                                            <ul class="answer-options">
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-pictched-flat" name="radio-group" id="Pitched" data-skipquestion="2" value="Pitched">
                                                    <label class="radio-custom-label" for="Pitched">Pitched</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-pictched-flat" name="radio-group" id="Flat" data-skipquestion="2" value="Flat">
                                                    <label class="radio-custom-label" for="Flat">Flat</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image-container-questionnaire">
                                        <img src="{{asset('custom/img/q6.jpg')}}" alt="">
                                    </div>
                                </div>

                                <div class="app-container step-eleven" id="Is-the-flue-under-a-carport">
                                    <div class="questionnaire-container">
                                        <div class="questionnaire">
                                            <h2 class="question">Is the flue under a carport?</h2>
                                            <ul class="answer-options">
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button yes" name="radio-group" id="Yes" value="Yes">
                                                    <label class="radio-custom-label" for="Yes">Yes</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="radio-group" id="No" value="No">
                                                    <label class="radio-custom-label" for="No">No</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image-container-questionnaire">
                                        <img src="{{asset('custom/img/q7.jpg')}}" alt="">
                                    </div>
                                </div>

                                <div class="app-container step-twelve" id="Window">
                                    <div class="questionnaire-container">
                                        <div class="questionnaire">
                                            <h2 class="question">Is the flue 30cm away from the window?</h2>
                                            <ul class="answer-options">
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-window" name="radio-group" id="Yes" value="Yes">
                                                    <label class="radio-custom-label" for="Yes">Yes</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-window" name="radio-group" id="No" data-addon="60" value="No">
                                                    <label class="radio-custom-label" for="No">No</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image-container-questionnaire">
                                        <img src="{{asset('custom/img/q8.jpg')}}" alt="">
                                    </div>
                                </div>

                                <div class="app-container step-seven" id="Which-type-of-house-do-you-live-in">
                                    <div class="questionnaire-container">
                                        <div class="questionnaire">
                                            <h2 class="question">Which type of house do you live in?</h2>
                                            <ul class="answer-options">
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-Flat" name="radio-group" id="Flat" data-eliminateboilers="highflow-440cdi,highflow-550cdi,32cdi,34cdi,36cdi,Logic-35,18ri,24ri,Heat-24,Heat-30,s24,s30,18i,24i" value="Flat">
                                                    <label class="radio-custom-label" for="Flat">Flat</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-Bungalow" name="radio-group" id="Bungalow" value="Bungalow">
                                                    <label class="radio-custom-label" for="Bungalow">Bungalow</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-Terrace" name="radio-group" id="Terrace" data-eliminateboilers="highflow-440cdi,highflow-550cdi,s30,Heat-30" value="Terrace">
                                                    <label class="radio-custom-label" for="Terrace">Terrace</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-Semi-detatched" name="radio-group" id="Semi-detatched" value="Semi-detatched">
                                                    <label class="radio-custom-label" for="Semi-detatched">Semi-detatched</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-Detatched" name="radio-group" id="Detatched" value="Detatched">
                                                    <label class="radio-custom-label" for="Detatched">Detatched</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image-container-questionnaire">
                                        <img src="{{asset('custom/img/q9.jpg')}}" alt="">
                                    </div>
                                </div>

                                <div class="app-container step-eight" id="How-many-bedrooms">
                                    <div class="questionnaire-container">
                                        <div class="questionnaire">
                                            <h2 class="question">How many bedrooms?</h2>
                                            <ul class="answer-options">
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="radio-group" id="1" data-eliminateboilers="Logic-35,34cdi,36cdi,highflow-440cdi,highflow-550cdi,24ri,24i,Heat-24,s24,Heat-30,s30" value="1">
                                                    <label class="radio-custom-label" for="1">1</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="radio-group" id="2" data-eliminateboilers="36cdi,highflow-440cdi,highflow-550cdi,24ri,24i,Heat-24,s24,Heat-30,s30" value="2">
                                                    <label class="radio-custom-label" for="2">2</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="radio-group" id="3" data-eliminateboilers="Logic-24,25i,12ri,12i,15ri,15i,Heat-15,s15" value="3">
                                                    <label class="radio-custom-label" for="3">3</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="radio-group" id="4" data-eliminateboilers="Logic-24,25i,12ri,12i,15ri,15i,Heat-15,s15" value="4">
                                                    <label class="radio-custom-label" for="4">4</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button 5" name="radio-group" id="5+" data-eliminateboilers="Logic-24,25i,12ri,12i,15ri,15i,18ri,18i,Heat-15,s15,Heat-18,s18" value="5+">
                                                    <label class="radio-custom-label" for="5+">5+</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image-container-questionnaire">
                                        <img src="{{asset('custom/img/q10.jpg')}}" alt="">
                                    </div>
                                </div>

                                <div class="app-container step-nine" id="How-many-bathrooms">
                                    <div class="questionnaire-container">
                                        <div class="questionnaire">
                                            <h2 class="question">How many bathrooms?</h2>
                                            <ul class="answer-options">
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button bathroom-one" name="radio-group" id="11" data-eliminateboilers="Logic-35,32cdi,34cdi,36cdi,highflow-440cdi,highflow-550cdi" value="1">
                                                    <label class="radio-custom-label" for="11">1</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="radio-group" id="22" data-eliminateboilers="Logic-24,highflow-440cdi,highflow-550cdi,12ri,12i,15ri,15i,Heat-15,s15" value="2">
                                                    <label class="radio-custom-label" for="22">2</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button 3" name="radio-group" id="3+" data-eliminateboilers="Logic-30,30i,12ri,12i,15ri,15i,Heat-15,s15,12ri,12i,15ri,15i,Heat-18,s18" value="3+">
                                                    <label class="radio-custom-label" for="3+">3+</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image-container-questionnaire">
                                        <img src="{{asset('custom/img/q11.jpg')}}" alt="">
                                    </div>
                                </div>

                                <div class="step-ten" id="givecall">
                                    <div class="sc-chPdSV biOeyM">
                                        <div class="cta-wrapper" style="width: 100%;text-align: center;">
                                            <a class="reset-cta" href="" style="box-sizing: border-box;display: block; min-width: 544px; border-left: 10px solid rgb(51, 51, 51); display: block; position: relative;margin: 0px auto 8px;max-width: 260px;background-color: rgb(244, 237, 237);padding: 16px;border-left: 10px solid rgb(246, 176, 93);min-width: 260px;font-family: Roboto Condensed; text-decoration: none;color: rgb(51, 51, 51);font-size: 1.2rem;box-sizing: border-box;">Reset Questionnaire</a>
                                        </div>
                                        
                                        <div class="sc-kAzzGY dcYXXm" style="width: 100%;text-align: center; width: 100%; max-width: 600px; margin: 0px auto; display: block; box-sizing: border-box; width: 100%; text-align: center;">
                                            <img src="{{asset('custom/img/callUsImage.jpg')}}" alt="call Instaheat Now" style="width: 100%;text-align: center; width: 100%; max-width: 600px; margin: 0px auto; display: block;">
                                            <h2 class="call-us-header">Give us a call</h2>
                                            <p>Based on the answers you gave in the instant quote questionnaire, it would probably be easier if you get in touch and we can discuss your needs in more detail.</p>
                                            <p>Head over to the <a href="{{route('customer.contact')}}">contact now</a> page and contact us by any of the methods listed on there.</p>
                                        </div>
                                    </div>
                                </div>

                                <style>
                                    .dHVeug {
                                        display: flex;
                                        flex-wrap: wrap;
                                        justify-content: space-evenly;
                                    }
                                    * {
                                        box-sizing: border-box;
                                    }
                                </style>

                                <div class="sc-chPdSV biOeyM step-final" id="final-step">
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