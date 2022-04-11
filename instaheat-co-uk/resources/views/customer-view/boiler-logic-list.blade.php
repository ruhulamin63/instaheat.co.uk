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
                            <div class="sc-kGXeez dHVeug">
                                <div class="cta-wrapper">
                                    <a class="reset-cta">Reset Questionnaire</a>
                                </div>
                                <div class="form-data">
                                    <p><strong>4</strong> boilers meet your needs. Click on 'Find out more' to get more information about a boiler and to make an enquiry**</p>
                                </div>
                                {{-- <div class="sc-chPdSV eykVuS">
                                    <div class="row col-md-12">
                                        <div class="row col-md-12">
                                            <div class="col-md-3">
                                                <div class="col-md-8">
                                                    <img class="brand-logo" src="{{asset('custom/img/Ideal.png')}}" alt="Ideal">
                                                </div>
                                                <div class="col-md-4">
                                                    <h3>Logic-24 Combi Boiler</h3>
                                                    <p class="boiler-details">Includes VAT, fitting, filter and flushed &amp; protected</p>
                                                </div>

                                            </div>
                                            
                                            <div class="col-md-3">
                                                <img class="boiler-image" src="{{asset('custom/img/Logic-24.jpg')}}" alt="Ideal Logic-24 White">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="price-wrapper">
                                                    <div class="price">
                                                        <span class="price">£2120 <span class="warranty-message">(5 year warranty)</span></span>
                                                    </div
                                                    ><p class="price-divider">or</p>
                                                    <div class="price">
                                                        <span class="price">£2320 <span class="warranty-message">(10 year warranty)</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="sc-dnqmqq hjUtEt">
                                                    <a class="primary-cta" href="/boilers/logic-24">Find out more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                   
                                </div> --}}


        
                                <div class="container mt-5 mb-5 d-flex justify-content-center align-items-center">
                                    <div class="card">
                                        @foreach ($boilers as $item)
                                            <div class="inner-card"> 
                                                {{-- <img src="{{asset('custom/img/Logic-24.jpg')}}" class="img-fluid rounded"> --}}
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
                                                <div class="mt-2 px-2"> <small>{{$item->short_desc}}</small> </div>
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
                                                <div class="px-2 mt-3"> <button class="btn btn-primary px-3">Find out more</button> </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                
                   

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