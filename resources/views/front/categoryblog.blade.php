<div id="blog-page">
  <div class="blog-page-heading">
     My Blogs
  </div>
  <div class="blog-wrapper" style="margin-top:5vh">
    <div id="all-blogs" class="acitve-blog category-active">
      <div class="all-blogs-wrapper">
        @if(!empty($blog))
          @foreach($blog as $blogs)
            <div class="blog-card">
                <div class="blog-card-image">
                  <img src="{{url('assets/img/blogs')}}/{{$blogs['image']}}" alt="image not found">
                </div> 
                <div class="blog-card-heading">
                    {{$blogs['title']}}
                </div>
                  <div class="blog-card-content">{{strip_tags(str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",$blogs['description']),200))}} </div> 
                  <div class="link-wrapper">
                    <a href="{{url('blog')}}/{{$blogs['slug']}}" class="read-more">Read More</a>
                  </div>
            </div>
          @endforeach
        @else
          <p style="font-size:23px;">No Blog Found</p>
        @endif
      </div>
    </div>
  </div>
</div>