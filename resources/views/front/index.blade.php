<!-- banner section begins from here  -->

<div class="banner-wrapper">
        <div class="banner-full-wrapper">
            <div class="banner-content-section">
                <div class="text-content">
                    "You can't sell anything <br>
                     if you can't tell anything"<br>
                      <span> - Beth Comstock</span>
                    <hr>
                </div>
            </div>
            <div class="banner-image-section">
                <img src="{{asset('assets/img/Abhinav Kumar.png')}}" alt="">
            </div>
        </div>
        <div class="image-style">
            <img src="{{asset('assets/img/pattern-01.png')}}" alt="">
        </div>

    </div>


    <!-- banner-section ends from here -->

    <div class="about-me-section-wrapper">
        <div class="area1">
            <div class="img-wrappper">
                <img src="{{asset('assets/img/Union 7.png')}}" alt="">
            </div>
        </div>
        <div class="area2">
            <div class="heading-about-me">
                About <br>
                Me
            </div>
        </div>
        <div class="side-area-wrapper">
            <div class="area3">
                <div class="area3-content-wrapper">
                    <div class="heading">
                        
                    </div>
                    <div class="subheading">
                        
                    </div>
                    <div class="tagline">
                       
                    </div>

                    <div class="expertise">
                        

                        <ul class="expertise-list">
                            
                                 <span class= "sytle-cap-1">M</span>ost people know Abhinav Kumar as the Trivago Brand Ambassador, commonly referred to as ‘Mr Trivago’ or ‘the Trivago guy’ in the punchline of social media memes. What people don’t know is that behind the scenes, Abhinav played an important role within Trivago as the Country Manager for India with the mission to establish and grow the brand within the market. In a data-driven and test-proven company, Abhinav overseaw and finds solutions to continue growth in a unique, mobile-dependent and responsive audience. An economics graduate from the University of Trento, Abhinav has first-hand experience in buying both online and offline media for the last seven years. Online video has been the core part of his strategy due to the huge differences between TV and internet penetration in India.

                        </ul>
                    </div>
                </div>
            </div>
            <div class="area4">
                <div class="area4-content-wrappper">
                    <div class="row1">
                        <div class="row1-content">
                            supported startups
                        </div>

                    </div>
                    <div class="row2-container">
                        <div class="box box1">
                            <div class="img-wrappper">
                                <img src="{{asset('assets/img/Union 35.png')}}" alt="">
                            </div>
                            <div class="heading-content">
                                PaisaDukan.com
                            </div>
                            <div class="trust-content">
                                PaisaDukan is an India-based peer-to-peer lending marketplace which operates digitally to emerge as an alternate way of carrying out financial activities.
                            </div>
                            <div class="explore">
                                <a href="http://paisadukan.com" target="_blank">Explore</a>
                            </div>
                        </div>
                        <div class="box box2">
                            <div class="img-wrappper">
                                <img src="{{asset('assets/img/Union 35.png')}}" alt="">
                            </div>
                            <div class="heading-content">
                                BooksBySlot
                            </div>
                            <div class="trust-content">
                                BookBySlot is amongst the first few travel booking engines to provide slot booking to its patrons.

                                
                            </div>
                            <div class="explore">
                                <a href="https://www.bookbyslot.com/" target="_blank">Explore</a>
                            </div>
                        </div>
                        <div class="box box3">
                            <div class="img-wrappper">
                                <img src="{{asset('assets/img/Union 35.png')}}" alt="">
                            </div>
                            <div class="heading-content">
                                Sattuz
                            </div>
                            <div class="trust-content">
                                We at Sattuz believe in " Good Health is the Real Wealth."

This season quench your thirst the healthier way by drinking sattuz at your home,

office, playground as well as on the go.
                            </div>
                            <div class="explore">
                                <a href="http://sattuz.in/" target="_blank">Explore</a>
                            </div>
                        </div>
                        <div class="box box4">
                            <div class="img-wrappper">
                                <img src="{{asset('assets/img/Union 35.png')}}" alt="">
                            </div>
                            <div class="heading-content">
                                Spice & travel
                            </div>
                            <div class="trust-content">
                                Hello! We’re Abhinav and Marissa, the creators behind Spice and Travel.
                                
                               
                            </div>
                            <div class="explore">
                                <a href="https://www.spiceandtravel.com " target="_blank">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about me section ends from here  -->

    <div class="interview-talks-section">
        <div class="row1">
            <img src="{{asset('assets/img/Union 42.png')}}" alt="union 42 image not available">
        </div>
        <div class="row row2">
            Interviews & <br>
            Talks
        </div>
        <div class="row row3 modalopener">
            <div class="box box1 ">
                <iframe width="853" height="480" src="https://www.youtube.com/embed/ZM7LlCQkWtQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="box box2 ">
               <iframe width="853" height="480" src="https://www.youtube.com/embed/RKkK1jtEKKk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="box box3">
                <iframe width="853" height="480" src="https://www.youtube.com/embed/na9BAqNCK2o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="link-load-more">
            <a href="{{url('interviews')}}">View More</a>
        </div>
        
    </div>

    <!-- interview section ends from here -->

    <!-- my blogs starts from here  -->

    <div class="my-blogs">
       <div class="myblogs-wrapper">
        <div class="col1 handle-image">
            <div class="pen-image">
                <img src="./images/Union 49.png" alt="">
            </div>
            <div class="by-blogs-heading">
                My
                Blogs
            </div>
            <div class="col1-sub-content">
                Read the latest publications from our online magazines.
            </div>
        </div>
        @foreach($blog as $blogs)
        <div class="col col2">
             <a href="{{url('blog')}}/{{$blogs['slug']}}">
                <img src="{{url('assets/img/blogs')}}/{{$blogs['image']}}" alt="">
                <div class="col-content">
                    {{$blogs['title']}}
                </div>
             </a>
        </div>
        @endforeach
       </div>
     <div class="link-load-more">
         <a href="{{url('blog')}}">View More</a>
     </div> 
    </div>


    <div class="media-coverage">
        <div class="media-coverage-section1">
            <div class="image-wrappper">
                <img src="{{asset('assets/img/Union 56.png')}}" alt="">
            </div>

            <div class="media-coverage-heading">
                <h5>
                    Media
                </h5>
                <h5>Coverage</h5>
            </div>
            <div class="mediacoverage-subcontent">
                Read what others are saying <br>
                about me.
            </div>
        </div>
        <div class="media-coverage-section2">
            <div class="all-wrapper-media-contetn">
                @foreach($media as $medias)
                <div class="row">
                    <div class="image-wrapper">
                        <img src="{{url('assets/img/press')}}/{{$medias['image']}}" alt="">
                    </div>
                    <div class="image-wrapper-content">
                        <div class="first-content">{{$medias['title']}}</div>
                        <div class="second-content" title="{{strip_tags(preg_replace("/&#?[a-z0-9]{2,8};/i","",$medias['description']))}}">{{strip_tags(str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",$medias['description']),50))}}</div>
                        <div class="third-content">
                            <a href="{{$medias['url']}}" target="_blank">Read the Article</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>