<!-- banner section begins from here  -->

    <div class="banner-wrapper">
        <div class="banner-full-wrapper">
            <div class="banner-content-section">
                <div class="text-content">
                    Precisely what you <br>
                    imagined your brand <br>
                    could be, <span> only more so.</span>
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
                    <div class="heading">Meet Abhinav Kumar,<br>
                        India Head at Trivago
                    </div>
                    <div class="subheading">
                        Country Development (India) at Trivago N.V
                    </div>
                    <div class="tagline">
                        A traveler, a dreamer, a Seller. You tell me, I do it. Simple
                    </div>

                    <div class="expertise">
                        Specialties: Expertise:

                        <ul class="expertise-list">
                            <li>• Market research and Detailed analysis. </li>
                            <li>• Developing strategies to enter new Market.</li>
                            <li>• Developing strategic business plan.</li>
                            <li>• Finding partner in India according to the company requirement.</li>
                            <li>• Lobbying with the government officials in India.</li>
                            <li>• Procurement and sourcing from India.</li>
                            <li>• General market strategies.</li>
                            <li>• Innovative ideas to launch new products in a market.</li>
                            <li>• Help in preparing tender document</li>
                            <li>• Indian government procurement documentation.</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="area4">
                <div class="area4-content-wrappper">
                    <div class="row1">
                        <div class="row1-content">
                            My core Values
                        </div>

                    </div>
                    <div class="row2-container">
                        <div class="box box1">
                            <div class="img-wrappper">
                                <img src="{{asset('assets/img/Union 35.png')}}" alt="">
                            </div>
                            <div class="heading-content">
                                Trust
                            </div>
                            <div class="trust-content">
                                Trust in one another, in our competencies and in our intentions, is the basis of all we
                                do. We cultivate an environment in which trust can develop, so that our
                                conversations
                                are straightforward, honest and raw.
                            </div>
                        </div>
                        <div class="box box2">
                            <div class="img-wrappper">
                                <img src="{{asset('assets/img/Union 35.png')}}" alt="">
                            </div>
                            <div class="heading-content">
                                Entrepreneurial Passion
                            </div>
                            <div class="trust-content">
                                We believe there is no such thing as a bad idea, and everyone at trivago should pitch
                                theirs. Company-wide, our days are spent conceptualizing, building, testing, analysing,
                                iterating and scaling.
                            </div>
                        </div>
                        <div class="box box3">
                            <div class="img-wrappper">
                                <img src="{{asset('assets/img/Union 35.png')}}" alt="">
                            </div>
                            <div class="heading-content">
                                Fanatic Learning
                            </div>
                            <div class="trust-content">
                                it is not about what you know, but how you learn. We believe if you stand still you get
                                left behind, which is why we constantly change perspectives.
                            </div>
                        </div>
                        <div class="box box4">
                            <div class="img-wrappper">
                                <img src="{{asset('assets/img/Union 35.png')}}" alt="">
                            </div>
                            <div class="heading-content">
                                Unwavering Focus
                            </div>
                            <div class="trust-content">
                                In a world of endless possibilities, we prioritize completion over perfection. We focus
                                our energy into what adds the most value, and then commit to it end-to-end.
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