@extends('Layout.navbar.serviceNavBar')
<?php 
	$title= "Service";
?>
@section('body')

<div id="___gatsby">
    <div data-reactroot="">
      
        <div>
            <div class="sc-iAyFgw ebYBab">
                <h1>Our Services</h1>
                <div class="sc-htoDjs iDWFHY">
                    <div>Find out more about the services Instaheat can offer you blow. <br><br>All work is carried out in a professional manner using the highest-quality materials</div>
                </div>
            </div>
            
           
            
            <section class="image-right sc-hMqMXs kjkdQh">
                <div class="image-container sc-kEYyzF jUEZEk" style="background-image:url({{asset('custom/img/boiler-replacements.jpg')}})"></div>
                
                <div class="content-container sc-kkGfuU xMCCl">
                    <div class="wrapper">
                        <h2>Boiler Replacements</h2>
                        <p>Depending on the effeciency of your current boiler, replacing your boiler with a newer, more modern unit could help you reduce your heating costs by up to 30%. If you are experiencing unreliable heating and hot water supply, a new boiler will not only resolve these issues, but also provide you with a quieter unit, making your home a more peaceful place.  We always use high-quality boilers and we are fully-certified installers.</p>
                        
                        <div class="sc-gZMcBi gJQWhe">
                            <a class="primary-cta" href="{{route('customer.get.quote')}}">Get a Fixed Price Quote Now</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="sc-hMqMXs kjkdQh">
                <div class="image-container sc-kEYyzF jUEZEk" style="background-image:url({{asset('custom/img/boiler-breakdown.jpg')}})"></div>
                
                <div class="content-container sc-kkGfuU xMCCl">
                    <div class="wrapper">
                        <h2>Boiler Breakdowns</h2>
                        <p>Having boiler issues? Completely broken down? Don’t despair! We understand your gas boiler is a key part of your home. You rely on it everyday to bring you heating and hot water. If your boiler breaks down and you’re suddenly without heat and hot water, we’ll get your boiler back in full operation, quickly and professionally. We carry out first rate repairs on all models.</p>
                        
                        <div class="sc-gZMcBi gJQWhe">
                            <a class="primary-cta" href="{{route('customer.contact')}}">Get In Touch Now</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="image-right sc-hMqMXs kjkdQh">
                <div class="image-container sc-kEYyzF jUEZEk" style="background-image:url({{asset('custom/img/bathroom-refurbs.jpg')}})"></div>
                
                <div class="content-container sc-kkGfuU xMCCl">
                    <div class="wrapper">
                        <h2>Bathroom Refurbs</h2>
                        <p>It doesn&#x27;t matter if you’re planning a family bathroom, en-suite bathroom or an accessible wet room, or just looking to improve the value of your house, Instaheat can help.  We have a wide-range of experience in bathroom refurbishments and our work is carried out to an extremely high-standard. We offer an end-to-end bathroom fitting process. We remove your old bathroom before fitting your new bathroom, including all plumbing, tiling etc.  Get in touch and we can discuss your needs and tailor your personalised quote</p>
                        
                        <div class="sc-gZMcBi gJQWhe">
                            <a class="primary-cta" href="{{route('customer.contact')}}">Get In Touch Now</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="sc-hMqMXs kjkdQh">
                <div class="image-container sc-kEYyzF jUEZEk" style="background-image:url({{asset('custom/img/general-plumbing.jpg')}})"></div>
                
                <div class="content-container sc-kkGfuU xMCCl">
                    <div class="wrapper">
                        <h2>General Plumbing</h2>
                        <p>Whether it&#x27;s replacing a tap or the whole sink, we can help you. No job is too big or too small. We cover leaks, bursts, sinks, pipes, radiators, toilets, taps, washing machines and much more. All work is completed to our extremely high standards. Give us a call, explain your issue and we will get it fixed for you.</p>
                        
                        <div class="sc-gZMcBi gJQWhe">
                            <a class="primary-cta" href="{{route('customer.contact')}}">Get In Touch Now</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="image-right sc-hMqMXs kjkdQh">
                <div class="image-container sc-kEYyzF jUEZEk" style="background-image:url({{asset('custom/img/landlord-certificate.jpg')}})"></div>
                
                <div class="content-container sc-kkGfuU xMCCl">
                    <div class="wrapper">
                        <h2>Landlord Certificates</h2>
                        <p>All landlords are legally responsible for the safety of their tenants. A landlord&#x27;s gas safety certificate (CP12) proves that all the gas appliances, fittings and flues provided for tenants have been checked by a registered Gas Safe engineer in the last 12 months. Instaheat are Gas Safe registered, therefore able to provide gas safety certificates for landlords, giving both tenants and landlords peace of mind. Contact us today to get your landlord gas safety certificate.</p>
                        
                        <div class="sc-gZMcBi gJQWhe">
                            <a class="primary-cta" href="{{route('customer.contact')}}">Get In Touch Now</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="sc-hMqMXs kjkdQh">
                <div class="image-container sc-kEYyzF jUEZEk" style="background-image:url({{asset('custom/img/boiler-service.jpg')}})"></div>
                
                <div class="content-container sc-kkGfuU xMCCl">
                    <div class="wrapper">
                        <h2>Annual Boiler Services</h2>
                        
                        <p>There are many reasons to get your boiler serviced annually. Getting it checked once a year can help detect any faults, which can be addressed before they turn into a bigger problem. A service will also ensure your boiler remains safe to use and can potentially maintain your manufacturer’s warranty.  Get in touch to book in your annual service.</p>
                        
                        <div class="sc-gZMcBi gJQWhe">
                            <a class="primary-cta" href="{{route('customer.contact')}}">Get In Touch Now</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

@endsection