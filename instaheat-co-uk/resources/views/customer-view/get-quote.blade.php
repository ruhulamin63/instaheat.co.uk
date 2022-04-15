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
                                                <input type="radio" class="radio-custom-button-gas" name="gas" id="Gas" value="Gas"/>
                                
                                                <label class="radio-custom-label" for="Gas">Gas</label>
                                            </li>
                                            
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button" name="electricity" id="Electricity" value="Electricity" data-eliminateBoilers="25i,30i,32cdi,34cdi,36cdi,12ri,15ri,18ri,24ri,12i,15i,18i,24i,s15,s18,s24,s30,Logic-24,Logic-30,Logic-35,Heat-15,Heat-18,Heat-24,Heat-30,highflow-440cdi,highflow-550cdi"/>
                                               
                                                <label class="radio-custom-label" for="Electricity">Electricity</label>
                                            </li>
                                            
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button" name="lpg" id="LPG" value="LPG" data-eliminateBoilers="25i,30i,32cdi,34cdi,36cdi,12ri,15ri,18ri,24ri,12i,15i,18i,24i,s15,s18,s24,s30,Logic-24,Logic-30,Logic-35,Heat-15,Heat-18,Heat-24,Heat-30,highflow-440cdi,highflow-550cdi"/>
                                                
                                                <label class="radio-custom-label" for="LPG">LPG</label>
                                            </li>
                                            
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button" name="oil" id="Oil" value="Oil" data-eliminateBoilers="25i,30i,32cdi,34cdi,36cdi,12ri,15ri,18ri,24ri,12i,15i,18i,24i,s15,s18,s24,s30,Logic-24,Logic-30,Logic-35,Heat-15,Heat-18,Heat-24,Heat-30,highflow-440cdi,highflow-550cdi"/>
                                               
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
                                                <input type="radio" class="radio-custom-button" name="combi" id="Combi" data-skipquestion="1" value="Combi">
                                                <label class="radio-custom-label" for="Combi">Combi</label>
                                            </li>
                                            
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button" name="standard" id="Standard" value="Standard">
                                                <label class="radio-custom-label" for="Standard">Standard</label>
                                            </li>
                                            
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button" name="system" id="System" value="System">
                                                <label class="radio-custom-label" for="System">System</label>
                                            </li>
                                            
                                            <li class="answer-option">
                                                <input type="radio" class="radio-custom-button" name="back_boiler" id="Back-boiler" value="Back-boiler">
                                                <label class="radio-custom-label" for="Back-boiler">Back Boiler</label>
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
                                                    <input type="radio" class="radio-custom-button" name="combi_boiler_yes" id="moving-over-yes" data-addon="350" value="Yes">
                                                    <label class="radio-custom-label" for="moving-over-yes">Yes</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="combi_boiler_no" id="moving-over-no" value="No">
                                                    <label class="radio-custom-label" for="moving-over-no">No</label>
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
                                                    <input type="radio" class="radio-custom-button" name="combi_boiler_yes" id="Yes-combi-boiler" data-addon="650" value="Yes">
                                                    <label class="radio-custom-label" for="Yes-combi-boiler">Yes</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="combi_boiler_no" id="No-combi-boiler" value="No">
                                                    <label class="radio-custom-label" for="No-combi-boiler">No</label>
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
                                                    <input type="radio" class="radio-custom-button" name="come_out_roof" id="come-out-roof" data-addon="350" value="Roof">
                                                    <label class="radio-custom-label" for="come-out-roof">Roof</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="come_out_wall" id="come-out-wall" data-skipquestion="1" value="Wall">
                                                    <label class="radio-custom-label" for="come-out-wall">Wall</label>
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
                                                    <input type="radio" class="radio-custom-button" name="roof_pitched" id="roof-pitched" data-skipquestion="2" value="Pitched">
                                                    <label class="radio-custom-label" for="roof-pitched">Pitched</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="roof_flat" id="roof-flat" data-skipquestion="2" value="Flat">
                                                    <label class="radio-custom-label" for="roof-flat">Flat</label>
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
                                                    <input type="radio" class="radio-custom-button" name="under_a_carport_yes" id="under-a-carport-yes" value="Yes">
                                                    <label class="radio-custom-label" for="under-a-carport-yes">Yes</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="under_a_carport_no" id="under-a-carport-no" value="No">
                                                    <label class="radio-custom-label" for="under-a-carport-no">No</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="image-container-questionnaire">
                                        <img src="{{asset('custom/img/q7.jpg')}}" alt="">
                                    </div>
                                </div>

                                <div class="app-container step-twelve" id="Is-the-flue-thirty-away-from-the-window">
                                    <div class="questionnaire-container">
                                        <div class="questionnaire">
                                            <h2 class="question">Is the flue 30cm away from the window?</h2>
                                            <ul class="answer-options">
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-window" name="from_the_window_yes" id="from-the-window-Yes" value="Yes">
                                                    <label class="radio-custom-label" for="from-the-window-Yes">Yes</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button-window" name="from_the_window_no" id="from-the-window-No" data-addon="60" value="No">
                                                    <label class="radio-custom-label" for="from-the-window-No">No</label>
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
                                                    <input type="radio" class="radio-custom-button" name="you_live_in_flat" id="you-live-in-Flat" value="Flat">
                                                    <label class="radio-custom-label" for="you-live-in-Flat">Flat</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="you_live_in_bungalow" id="you-live-in-Bungalow" value="Bungalow">
                                                    <label class="radio-custom-label" for="you-live-in-Bungalow">Bungalow</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="you_live_in_terrace" id="you-live-in-Terrace" value="Terrace">
                                                    <label class="radio-custom-label" for="you-live-in-Terrace">Terrace</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="you_live_in_semi_detatched" id="you-live-in-Semi-detatched" value="Semi detatched">
                                                    <label class="radio-custom-label" for="you-live-in-Semi-detatched">Semi-detatched</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="you_live_in_detatched" id="you-live-in-Detatched" value="Detatched">
                                                    <label class="radio-custom-label" for="you-live-in-Detatched">Detatched</label>
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
                                                    <input type="radio" class="radio-custom-button" name="bedroom_one" id="bedroom-one" value="1">
                                                    <label class="radio-custom-label" for="bedroom-one">1</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="bedroom_two" id="bedroom-two" value="2">
                                                    <label class="radio-custom-label" for="bedroom-two">2</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="bedroom_three" id="bedroom-three" value="3">
                                                    <label class="radio-custom-label" for="bedroom-three">3</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="bedroom_four" id="bedroom-four" value="4">
                                                    <label class="radio-custom-label" for="bedroom-four">4</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="bedroom_five_plus" id="bedroom-five-plus" value="5+">
                                                    <label class="radio-custom-label" for="bedroom-five-plus">5+</label>
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
                                                    <input type="radio" class="radio-custom-button" name="bathroom_one" id="bathroom-one" value="1">
                                                    <label class="radio-custom-label" for="bathroom-one">1</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="bathroom_two" id="bathroom-two" value="2">
                                                    <label class="radio-custom-label" for="bathroom-two">2</label>
                                                </li>
                                                <li class="answer-option">
                                                    <input type="radio" class="radio-custom-button" name="bathroom_three_plus" id="bathroom-three-plus" value="3+">
                                                    <label class="radio-custom-label" for="bathroom-three-plus">3+</label>
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

                                <div class="app-container final-step" id="boiler-list">
                                    <div class="questionnaire-container">
                                        <div class="questionnaire">
                                            <div class="sc-kGXeez dHVeug">
                                                <div class="cta-wrapper">
                                                    <a href="" class="reset-cta">Back Questionnaire</a>
                                                </div>
                                                <div class="form-data">
                                                    <p>** <strong>4</strong> boilers meet your needs. Click on 'Find out more' to get more information about a boiler and to make an enquiry **</p>
                                                </div>
                                                
                                                <div class="container mt-5 mb-5 d-flex" id="boiler-list">

                                                    @foreach ($boilers as $item)
                                                        <div class="card">

                                                            {{-- data-id="{{$item->id}}" id="addBookingBtn" --}}

                                                            <div class="px-2 mt-3"> <a href="/boiler-logic-30/{{$item->id}}" class="btn btn-primary px-3 find-more">Find out more</a> </div>
                                                            <div class="inner-card"> 
                                                                @if($item->image)
                                                                    <?php if (file_exists("../public".$item->image)){ ?>
                                                                    <img src="{{asset($item->image)}}" class="img-fluid rounded" alt="..." >
                                                                    <?php } else{ ?>
                                                                    <img src="{{asset('/media/avatars/blank.png')}}" class="img-fluid rounded" alt="...">
                                                                    <?php } ?>
                                                                @else
                                                                    <img src="{{asset('/media/avatars/blank.png')}}" class="img-fluid rounded" alt="...">
                                                                @endif
                                                                <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                                                                    <h4>{{$item->model_name}} {{$item->type}} Boiler </h4> <span class="heart"><i class="fa fa-heart"></i></span>
                                                                </div>
                                                                <div class="mt-2 px-2" style="text-overflow: ellipsis; text-align: justify;"> {{$item->short_desc}} </div>
                                                                <br>
                                                                <div class="px-2">
                                                                    <div class="price-wrapper">
                                                                        <div class="price">
                                                                            <span class="price">£{{$item->price_for_5_year}} <span class="warranty-message">(5 year warranty)</span></span>
                                                                        </div>
                                                                    
                                                                        <div class="price">
                                                                            <span class="price">£{{$item->price_for_10_year}} <span class="warranty-message">(10 year warranty)</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                
                                            
                                                <p class="footnote">*** Although boiler quotes should be accurate, these are not 100% finalised until you give us a call ***</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  

@endsection