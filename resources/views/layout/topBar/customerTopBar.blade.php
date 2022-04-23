<div>
    <header class="sc-bwzfXH dXQyxh">
        <div class="sc-bdVaJa cMvXxa">
            <a class="material-icons sc-ifAKCX fTWKLe" href="tel:07710246710">phone</a>
            <a href="{{route('customer.home')}}">
            <div class="sc-htpNat dBsrLC">
                <div class=" gatsby-image-outer-wrapper" style="position:relative">
                <div class=" gatsby-image-wrapper" style="position:relative;overflow:hidden">
                    <div style="width:100%;padding-bottom:26.6%"></div>
                    <img src="{{asset('custom/static/logo.png')}}" alt="Instaheat" sizes="(max-width: 400px) 100vw, 400px" style="position:absolute;top:0;left:0;transition:opacity 0.5s;transition-delay:0.5s;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center"/>
                </div>
                </div>
            </div>
            </a>
          
            <div class="desktop-navigation">
                <ul>
                <li>
                    <a class="menu-item" href="{{route('customer.home')}}">Home</a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('customer.services')}}">Services</a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('customer.contact')}}">Contact</a>
                </li>
                </ul>
            </div>
       
            
            <nav>
                <input type="checkbox" id="click" onclick="return $('ul').css({'right':'0%'});">
                <label for="click" class="menu-btn">
                <i class="fa-solid fa-bars"></i>
                </label>
                <ul>
                    <li><a href="{{route('customer.home')}}">home</a></li>
                    <li><a href="{{route('customer.services')}}">service</a></li>
                    <li><a href="{{route('customer.contact')}}">contact</a></li>
                </ul>
            </nav>
            <span class="close" onclick="return $('ul').css({'right':'-100%'})">&times;</span>
        </div>
    </header>

    <div class="sc-bxivhb bjPEky"></div>
</div>