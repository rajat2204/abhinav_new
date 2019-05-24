<div id="press-page">
    {{-- press page header section  --}}
    <div class="press-page-header">
        <div class="press-page-heading-image">
            <img src="{{asset('assets/img/Union 42.png')}}"  alt="union 42 image not available">
        </div>
        <div class="press-page-hero-heading">
            Press
        </div>
    </div>
    <div class="press-content-section">
        <div class="press-wrapper">
            @if(!empty($press['data']))
                @foreach($press['data'] as $presss)
                <div class="blog-card">
                    <div class="blog-card-image">
                        <img src="{{url('assets/img/press')}}/{{$presss['image']}}" alt="image not found" >
                    </div> 
                    <div class="blog-card-heading">{{$presss['title']}}</div>
                    <div class="blog-card-content" title="{{strip_tags($presss['description'])}}">{{strip_tags(str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",$presss['description']),250))}}</div> 
                    <div class="link-wrapper">
                        <a href="{{$presss['url']}}" target="_blank" class="read-more">Source</a>
                    </div>        
                </div>
                @endforeach
        </div>
    </div>
    <div class="pagination-links">
        @if(!empty($_REQUEST['page']))
            @if($_REQUEST['page']!=1)
                <a href="{{$press['prev_page_url']}}" class="links forward"><</a>
            @endif
            @endif
            @for($i=1;$i<=$press['last_page'];$i++)
                <a href="{{$press['path'].'?page='.$i}}" class="links">{{$i}}</a>
            @endfor
        @if(!empty($_REQUEST['page']))
            @if($_REQUEST['page']!=$press['last_page'])
                <a href="{{$press['next_page_url']}}" class="links backward">></a>
            @endif
        @else
                <a href="{{$press['next_page_url']}}" class="links backward">></a>
        @endif
    </div>
    @endif
</div>