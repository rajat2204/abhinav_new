<div id="blog-page">
  <div class="blog-page-heading">
     My Blogs
  </div>
  <div class="category-buttons-wrapper">
      <button class="button-subcatogory active" onclick="openCity('all-blogs')">All Blogs</button>
      @foreach($category as $categories)
      <button class="button-subcatogory" onclick="openCity('category_id')">{{$categories['name']}}</button>
      @endforeach
  </div>
  <div class="blog-wrapper">
    <div id="all-blogs" class="acitve-blog category-active">
      <div class="all-blogs-wrapper">
        @foreach($blogmore as $blog)
          <div class="blog-card">
              <div class="blog-card-image">
                  <img src="{{url('assets/img/blogs')}}/{{$blog['image']}}" alt="image not found" >
              </div> 
              <div class="blog-card-heading">
                  {{$blog['title']}}
              </div>
                <div class="blog-card-content">{{strip_tags(str_limit($blog['description'],200))}} </div> 
                <div class="link-wrapper">
                  <a href="" class="read-more">Read More</a>
                </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>