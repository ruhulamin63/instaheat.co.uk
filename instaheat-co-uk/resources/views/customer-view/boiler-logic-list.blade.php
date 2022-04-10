@extends('Layout.navbar.quoteNavBar')
<?php 
	$title= "Get-Quote";
?>
@section('body')

    <style>

        .questionnaire-container-gradient {
            background: -moz-linear-gradient(top,#ea9000 0,hsla(0,100%,97%,.5) 100%);
            background: -webkit-linear-gradient(top,#ea9000,hsla(0,100%,97%,.5));
            background: linear-gradient(180deg,#ea9000 0,hsla(0,100%,97%,.5));
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ea9000",endColorstr="#80fff2f2",GradientType=0);
        }
        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }


        .crLQpd {
            max-width: 1200px;
            margin: 0px auto;
            padding: 24px;
            min-height: 500px;
        }
        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }


        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }

        .questionnaire, .quote-app__questions {
            position: relative;
        }
        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }


        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }


        .dHVeug {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }
        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }

        .dHVeug .cta-wrapper {
            width: 100%;
        }
        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }

        @media (min-width: 544px){
            .dHVeug .reset-cta {
                border-left: 10px solid rgb(51, 51, 51);
            }
        }
        .dHVeug .reset-cta {
            display: block;
            position: relative;
            margin: 0px auto 8px;
            max-width: 260px;
            background-color: rgb(244, 237, 237);
            padding: 16px;
            border-left: 10px solid rgb(246, 176, 93);
            min-width: 260px;
            font-family: "Roboto Condensed";
            text-decoration: none;
            color: rgb(51, 51, 51);
            font-size: 1.2rem;
        }
        * {
            box-sizing: border-box;
        }

        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }

        .dHVeug p {
            font-family: Roboto;
            font-size: 1.25rem;
            margin-bottom: 32px;
            width: 100%;
            text-align: center;
        }
        * {
            box-sizing: border-box;
        }
        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        * {
            box-sizing: border-box;
        }
        strong {
            font-weight: bold;
        }
        <style>
        .dHVeug p {
            font-family: Roboto;
            font-size: 1.25rem;
            margin-bottom: 32px;
            width: 100%;
            text-align: center;
        }

        @media (min-width: 725px){
            .eykVuS {
                flex-direction: row;
            }
        }
        .eykVuS {
            width: 100%;
            max-width: 790px;
            display: flex;
            flex-flow: column wrap;
            padding: 16px;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            box-shadow: rgb(0 0 0 / 50%) 0px 0px 30px 0px;
            margin-bottom: 24px;
            background-color: rgb(255, 255, 255);
        }
        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }

        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }

        @media (min-width: 725px){
            .eykVuS .brand-logo {
                margin-left: 0px;
                margin-bottom: 8px;
            }
        }
        .eykVuS .brand-logo {
            display: block;
            height: 40px;
            width: auto;
            margin: 0px auto 8px;
        }
        * {
            box-sizing: border-box;
        }

        @media (min-width: 725px){
            .eykVuS h3 {
                text-align: left;
                margin: 0px 0px 8px;
            }
        }
        .eykVuS h3 {
            font-family: Roboto;
            text-align: center;
            margin-bottom: 8px;
        }
        * {
            box-sizing: border-box;
        }
        h3 {
            display: block;
            font-size: 1.17em;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        .eykVuS .boiler-details {
            color: rgb(0, 0, 0);
            font-size: 0.85rem;
            margin: 0px;
            padding-bottom: 8px;
        }
        <style>
        .dHVeug p {
            font-family: Roboto;
            font-size: 1.25rem;
            margin-bottom: 32px;
            width: 100%;
            text-align: center;
        }
        * {
            box-sizing: border-box;
        }
        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        @media (min-width: 725px){
            .eykVuS .boiler-image {
                display: block;
            }
        }
        .eykVuS .boiler-image {
            display: none;
            width: 100px;
            height: 100px;
            margin-bottom: 16px;
        }
        * {
            box-sizing: border-box;
        }

        @media (min-width: 725px){
            .eykVuS .price-wrapper {
                width: 150px;
            }
        }
        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }

        .eykVuS .price {
            font-family: Roboto;
        }
        @media (min-width: 725px){
            .eykVuS .price {
                flex-wrap: wrap;
            }
        }
        .eykVuS .price {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            font-family: Roboto;
            font-size: 2rem;
            color: rgb(229, 52, 43);
            text-align: center;
        }
        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }

        .eykVuS .price {
            font-family: Roboto;
        }
        @media (min-width: 725px){
            .eykVuS .price {
                flex-wrap: wrap;
            }
        }
        .eykVuS .price {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            font-family: Roboto;
            font-size: 2rem;
            color: rgb(229, 52, 43);
            text-align: center;
        }
        * {
            box-sizing: border-box;
        }

        @media (min-width: 725px){
            .eykVuS .price .warranty-message {
                padding-left: 0px;
            }
        }
        .eykVuS .price .warranty-message {
            color: rgb(0, 0, 0);
            font-size: 0.85rem;
            padding-left: 8px;
        }
        * {
            box-sizing: border-box;
        }
        .eykVuS .price {
            font-family: Roboto;
        }
        .eykVuS .price {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            font-family: Roboto;
            font-size: 2rem;
            color: rgb(229, 52, 43);
            text-align: center;
        }

        @media (min-width: 725px){
            .eykVuS .price-divider {
                display: none;
            }
        }
        .eykVuS .price-divider {
            margin: 8px;
            font-size: 0.85rem;
        }
        .dHVeug p {
            font-family: Roboto;
            font-size: 1.25rem;
            margin-bottom: 32px;
            width: 100%;
            text-align: center;
        }
        * {
            box-sizing: border-box;
        }
        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        .eykVuS .price {
            font-family: Roboto;
        }
        @media (min-width: 725px){
            .eykVuS .price {
                flex-wrap: wrap;
            }
        }
        .eykVuS .price {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            font-family: Roboto;
            font-size: 2rem;
            color: rgb(229, 52, 43);
            text-align: center;
        }
        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }

        .eykVuS .price {
            font-family: Roboto;
        }
        @media (min-width: 725px){
            .eykVuS .price {
                flex-wrap: wrap;
            }
        }
        .eykVuS .price {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            font-family: Roboto;
            font-size: 2rem;
            color: rgb(229, 52, 43);
            text-align: center;
        }
        * {
            box-sizing: border-box;
        }

        @media (min-width: 725px){
            .eykVuS .price .warranty-message {
                padding-left: 0px;
            }
        }
        .eykVuS .price .warranty-message {
            color: rgb(0, 0, 0);
            font-size: 0.85rem;
            padding-left: 8px;
        }
        * {
            box-sizing: border-box;
        }
        .eykVuS .price {
            font-family: Roboto;
        }
        .eykVuS .price {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            font-family: Roboto;
            font-size: 2rem;
            color: rgb(229, 52, 43);
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }
        div {
            display: block;
        }

        .eykVuS .primary-cta {
            display: block;
            position: relative;
            margin-top: 8px;
            min-width: 200px;
        }
        @media (min-width: 544px){
            .hjUtEt .primary-cta {
                border-left: 10px solid rgb(51, 51, 51);
            }
        }
        .hjUtEt .primary-cta {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgb(244, 237, 237);
            padding: 16px;
            border-left: 10px solid rgb(246, 176, 93);
            min-width: 260px;
            font-family: "Roboto Condensed";
            text-decoration: none;
            color: rgb(51, 51, 51);
            font-size: 1.2rem;
        }
        .eykVuS a {
            text-decoration: none;
        }
        * {
            box-sizing: border-box;
        }
        a:-webkit-any-link {
            color: -webkit-link;
            cursor: pointer;
            text-decoration: underline;
        }
                                                                                        

    </style>

    <div id="___gatsby">
        <div data-reactroot="">

        <div class="questionnaire-container-gradient">
            <div class="sc-kpOJdX gmoiPL">
                <div class="quote-app">
                    <div class="quote-app__questions">
                        <div>
                            <div class="sc-kGXeez dHVeug">
                                <div class="cta-wrapper">
                                    <a class="reset-cta">Reset Questionnaire</a>
                                </div>
                                <div class="form-data">
                                    <p><strong>4</strong> boilers meet your needs. Click on 'Find out more' to get more information about a boiler and to make an enquiry**</p>
                                </div>
                                <div class="sc-chPdSV eykVuS">
                                    <div>
                                        <img class="brand-logo" src="{{asset('custom/img/Ideal.png')}}" alt="Ideal">
                                        <h3>Logic-24 Combi Boiler</h3>
                                        <p class="boiler-details">Includes VAT, fitting, filter and flushed &amp; protected</p>
                                    </div>
                                    <img class="boiler-image" src="{{asset('custom/img/Logic-24.jpg')}}" alt="Ideal Logic-24 White">
                                    <div class="price-wrapper">
                                        <div class="price">
                                            <span class="price">£2120 <span class="warranty-message">(5 year warranty)</span></span>
                                        </div
                                        ><p class="price-divider">or</p>
                                        <div class="price">
                                            <span class="price">£2320 <span class="warranty-message">(10 year warranty)</span></span>
                                        </div>
                                    </div>
                                    <div class="sc-dnqmqq hjUtEt">
                                        <a class="primary-cta" href="/boilers/logic-24">Find out more</a>
                                    </div>
                                </div>
                                
                                {{-- <div class="sc-chPdSV eykVuS">
                                    <div>
                                        <img class="brand-logo" src="/img/Ideal.png" alt="Ideal">
                                        <h3>Logic-30 Combi Boiler</h3>
                                        <p class="boiler-details">Includes VAT, fitting, filter and flushed &amp; protected</p>
                                    </div>
                                    <img class="boiler-image" src="/img/Logic-30.jpg" alt="Ideal Logic-30 White">
                                    <div class="price-wrapper">
                                        <div class="price">
                                            <span class="price">£2180 <span class="warranty-message">(5 year warranty)</span></span>
                                        </div>
                                        <p class="price-divider">or</p>
                                        <div class="price">
                                            <span class="price">£2380 <span class="warranty-message">(10 year warranty)</span></span>
                                        </div>
                                    </div>
                                    <div class="sc-dnqmqq hjUtEt">
                                        <a class="primary-cta" href="/boilers/logic-30">Find out more</a>
                                    </div>
                                </div>

                                <div class="sc-chPdSV eykVuS">
                                    <div>
                                        <img class="brand-logo" src="/img/Worcester.png" alt="Worcester">
                                        <h3>25i Combi Boiler</h3>
                                        <p class="boiler-details">Includes VAT, fitting, filter and flushed &amp; protected</p>
                                    </div>
                                    <img class="boiler-image" src="/img/25i.jpg" alt="Worcester 25i White">
                                    <div class="price-wrapper">
                                        <div class="price">
                                            <span class="price">£2300 <span class="warranty-message">(5 year warranty)</span></span>
                                        </div>
                                        <p class="price-divider">or</p>
                                        <div class="price">
                                            <span class="price">£2400 <span class="warranty-message">(10 year warranty)</span></span>
                                        </div>
                                    </div>
                                    <div class="sc-dnqmqq hjUtEt">
                                        <a class="primary-cta" href="/boilers/25i">Find out more</a>
                                    </div>
                                </div>

                                <div class="sc-chPdSV eykVuS">
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
                                        <div class="price">
                                            <span class="price">£2750 <span class="warranty-message">(10 year warranty)</span></span>
                                        </div>
                                    </div>
                                    <div class="sc-dnqmqq hjUtEt">
                                        <a class="primary-cta" href="/boilers/30i">Find out more</a>
                                    </div>
                                </div> --}}

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