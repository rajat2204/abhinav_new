@if(!empty($ajaxblog))
    @foreach($ajaxblog as $blog)
      <div class="blog-card categoryblog">
          <div class="blog-card-image">
            <img src="{{url('assets/img/blogs')}}/{{$blog['image']}}" alt="image not found">
          </div> 
          <div class="blog-card-heading">
              {{$blog['title']}}
          </div>
            <div class="blog-card-content">{{strip_tags(str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",$blog['description']),200))}} </div> 
            <div class="link-wrapper">
              <a href="{{url('blog')}}/{{$blog['slug']}}" class="read-more">Read More</a>
            </div>
      </div>
    @endforeach
    @else
    <p>No Record Found.</p>
@endif
