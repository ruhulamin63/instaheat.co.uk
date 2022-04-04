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
                        <div class="quote-app__questions">
                            <div class="app-container">
                                <div class="app-header">
                                    <h1>Get a fixed price quote now!</h1>
                                    <p>Simply answer the following questions to get your fixed price quote on a new boiler:</p>
                                </div>
                                
                                <div class="questionnaire-container">
                                    <div class="questionnaire">
                                        <h2 class="question">Which type of fuel does your boiler use?</h2>
                                        <ul class="answer-options">
                                            <l1 class="answer-option">
                                                <input type="radio" class="radio-custom-button" name="radio-group" id="Gas" value="Gas"/>
                                                <!-- <label class="radio-custom-label" for="Gas"><a href="{{route('customer.ques.2')}}" style="text-decoration: none;color: rgb(51, 51, 51);">Gas</a></label> -->
                                                <label class="radio-custom-label" for="Gas">Gas</label>
                                            </l1>
                                            
                                            <l1 class="answer-option">
                                                <input type="radio" class="radio-custom-button" name="radio-group" id="Electricty" value="Electricty" data-eliminateBoilers="25i,30i,32cdi,34cdi,36cdi,12ri,15ri,18ri,24ri,12i,15i,18i,24i,s15,s18,s24,s30,Logic-24,Logic-30,Logic-35,Heat-15,Heat-18,Heat-24,Heat-30,highflow-440cdi,highflow-550cdi"/>
                                                <!-- <label class="radio-custom-label" for="Electricty"><a href="{{route('customer.ques.2')}}" style="text-decoration: none;color: rgb(51, 51, 51);">Electricty</a></label> -->
                                                <label class="radio-custom-label" for="Electricty">Electricty</label>
                                            </l1>
                                            
                                            <l1 class="answer-option">
                                                <input type="radio" class="radio-custom-button" name="radio-group" id="LPG" value="LPG" data-eliminateBoilers="25i,30i,32cdi,34cdi,36cdi,12ri,15ri,18ri,24ri,12i,15i,18i,24i,s15,s18,s24,s30,Logic-24,Logic-30,Logic-35,Heat-15,Heat-18,Heat-24,Heat-30,highflow-440cdi,highflow-550cdi"/>
                                                <!-- <label class="radio-custom-label" for="LPG"><a href="{{route('customer.ques.2')}}" style="text-decoration: none;color: rgb(51, 51, 51);">LPG</a></label> -->
                                                <label class="radio-custom-label" for="LPG">LPG</label>
                                            </l1>
                                            
                                            <l1 class="answer-option">
                                                <input type="radio" class="radio-custom-button" name="radio-group" id="Oil" value="Oil" data-eliminateBoilers="25i,30i,32cdi,34cdi,36cdi,12ri,15ri,18ri,24ri,12i,15i,18i,24i,s15,s18,s24,s30,Logic-24,Logic-30,Logic-35,Heat-15,Heat-18,Heat-24,Heat-30,highflow-440cdi,highflow-550cdi"/>
                                                <!-- <label class="radio-custom-label" for="Oil"><a href="{{route('customer.ques.2')}}" style="text-decoration: none;color: rgb(51, 51, 51);">Oil</a></label> -->
                                                <label class="radio-custom-label" for="Oil">Oil</label>
                                            </l1>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="image-container-questionnaire">
                                    <img src="{{asset('custom/img/q1.jpg')}}" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection