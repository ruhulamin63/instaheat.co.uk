@extends('layout.navbar.quoteNavBar')
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
                                    <p>** <strong>4</strong> boilers meet your needs. Click on 'Find out more' to get more information about a boiler and to make an enquiry **</p>
                                </div>
                                
                                <div class="container mt-5 mb-5 d-flex" id="boiler-list">
                                    @foreach ($boilers as $item)
                                        <div class="card">
                                            <div class="px-2 mt-3"> <button class="btn btn-primary px-3 find-more">Find out more</button> </div>
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

@endsection