<div id="blog-page">
  <div class="blog-page-heading">
     My Blogs
  </div>
  <div class="category-buttons-wrapper">
      <button class="button-subcatogory filter_type acitve">All Blogs</button>
      @foreach($category as $categories)
      <a href="{{url('category')}}/{{___encrypt($categories['id'])}}"><button class="button-subcatogory filter_type"> {{$categories['name']}}</button></a>
      @endforeach
  </div>
  <div class="blog-wrapper">
    <div id="all-blogs" class="acitve-blog category-active">
      <div class="all-blogs-wrapper">
        @foreach($blogmore as $blog)
          <div class="blog-card">
              <div class="blog-card-image">
                <img src="{{url('assets/img/blogs')}}/{{$blog['image']}}" alt="image not found">
              </div> 
              <div class="blog-card-heading">
                  {{$blog['title']}}
              </div>
                <div class="blog-card-content">{{strip_tags(str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",$blog['description']),200))}} </div> 
                <div class="link-wrapper">
                  <a href="{{url('blog')}}/{{(___encrypt($blog['id']))}}" class="read-more">Read More</a>
                </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>