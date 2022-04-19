@extends('Layout.navbar.contactQuestionNavBar')
<?php 
	$title= "question-2";
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
                                    <div class="cta-wrapper" style="width: 100%;text-align: center;">
                                        <a class="reset-cta" href="{{route('customer.home')}}" style="box-sizing: border-box;display: block; min-width: 544px; border-left: 10px solid rgb(51, 51, 51); display: block; position: relative;margin: 0px auto 8px;max-width: 260px;background-color: rgb(244, 237, 237);padding: 16px;border-left: 10px solid rgb(246, 176, 93);min-width: 260px;font-family: Roboto Condensed; text-decoration: none;color: rgb(51, 51, 51);font-size: 1.2rem;box-sizing: border-box;">Reset Questionnaire</a>
                                    </div>
                                    
                                    <div class="sc-kAzzGY dcYXXm" style="width: 100%;text-align: center; width: 100%; max-width: 600px; margin: 0px auto; display: block; box-sizing: border-box; width: 100%; text-align: center;">
                                        <img src="{{asset('custom/img/callUsImage.jpg')}}" alt="call Instaheat Now" style="width: 100%;text-align: center; width: 100%; max-width: 600px; margin: 0px auto; display: block;">
                                        <h2 class="call-us-header">Give us a call</h2>
                                        <p>Based on the answers you gave in the instant quote questionnaire, it would probably be easier if you get in touch and we can discuss your needs in more detail.</p>
                                        <p>Head over to the <a href="{{route('customer.contact')}}">contact now</a> page and contact us by any of the methods listed on there.</p>
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