<!-- header section  -->

    <div class="header-container">
        <div class="header">
            <div class="logo-section">
                <img src="{{asset('assets/img/a.klogo.png')}}" alt="">
            </div>
            <div class="navlist-section">
                <ul class="lists-and-contact-btn">
                    <li class="links"><a href="{{url('/')}}" class="link">Home</a></li>
                    <li class="links"><a href="{{url('about')}}" class="link">About</a></li>
                    <li class="links"><a href="{{url('interviews')}}" class="link">Interviews</a></li>
                    <li class="links"><a href="javascript:void(0);" class="link">Press</a></li>
                    <li class="links"><a href="{{url('blog')}}" class="link">Blogs</a></li>
                    <li class="links"><a href="{{url('contact')}}">ContactUs</a></li>
                </ul>
            </div>
        </div>

        <div class="option-btn">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>

    <div class="social-link-icon">
        <div class="icon icon1">
                <a href="{{$social[0]['url']}}" class="link" target="_blank"><i class="fab fa-facebook-f"></i></a>  
        </div>
        <div class="icon icon2">
                <a href="{{$social[2]['url']}}" class="link" target="_blank"><i class="fab fa-twitter"></i></a>  
        </div>
        <div class="icon icon3">
                <a href="{{$social[3]['url']}}" class="link" target="_blank"><i class="fab fa-linkedin-in"></i></a>  
        </div>
        <div class="icon icon4">
                <a href="{{$social[1]['url']}}" class="link" target="_blank"><i class="fab fa-instagram"></i></a>  
        </div>
       
    </div>
    <!-- header section ends from here -->