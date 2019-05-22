<div id="single-blog">
  <div class="single-blog-wrapper">
    <div class="single-blog-heading">{{$blog['title']}}</div>
    <div class="single-blog-image">
        <img src="{{url('assets/img/blogs')}}/{{$blog['image']}}" alt="">
    </div>
    <div class="single-blog-description">
        {!! $blog['description'] !!}
    </div>
  </div>
</div>