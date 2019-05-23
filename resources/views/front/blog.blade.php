<div id="blog-page">
  <div class="blog-page-heading">
     My Blogs
  </div>
  <div class="category-buttons-wrapper">
      <button class="button-subcatogory active filter_type" id="all">All Blogs</button>
      @foreach($category as $categories)
      <button class="button-subcatogory filter_type" id="{{$categories['id']}}">{{$categories['name']}}</button>
      @endforeach
  </div>
  <div class="blog-wrapper">
    <div id="all-blogs" class="acitve-blog category-active">
      <div class="all-blogs-wrapper" id="categoryblog">
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
                  <a href="{{url('blog')}}/{{$blog['slug']}}" class="read-more">Read More</a>
                </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

@section('requirejs')
<script type="text/javascript">
  $(document).ready(function(){
    $(".filter_type").click(function(){
      var $value = $(this).attr("id");
      alert($value);
          $.ajax({
              type: 'POST',
              url: "{{url('categoryblog')}}",
              data:{value:$value},
              success: function(data) {
                $("#categoryblog").html(data);
              }
          });
      });
  });
</script>
@endsection