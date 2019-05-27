<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Blog</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="edit-blog" method="POST" action="{{url('admin/blog/'.___encrypt($blog['id']))}}">
        {{csrf_field()}}
        <input type="hidden" value="PUT" name="_method">
        <div class="col-md-12">
          <div class="form-group">
            <input type="hidden" id="id" name="id" class="form-control" value="{{!empty($blog['id'])?$blog['id']:''}}">
          </div>
        </div>

        <div class="form-group">
          <label>Category Name:</label>
          <select class="form-control" name="category_id" id="category_id">
            <option value="">Category Name</option>
            @foreach($category as $categories)
              <option value="{{!empty($categories['id'])?$categories['id']:''}}" @if($categories['id'] == $blog['category_id']) selected @endif>{{!empty($categories['name'])?$categories['name']:''}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Blog Title:</label>
          <input type="text" class="form-control" placeholder="Enter Blog Title..." name="title" value="{{!empty($blog['title'])?$blog['title']:''}}">
        </div>

        <div class="form-group">
          <label>Blog Slug:</label>
          <input type="text" class="form-control" placeholder="Enter Blog Slug..." name="slug" value="{{!empty($blog['slug'])?$blog['slug']:''}}">
        </div>

        <div class="form-group">
          <label>Source URL:</label>
          <input type="text" class="form-control" placeholder="Enter Blog URL..." name="url" value="{{!empty($blog['url'])?$blog['url']:''}}">
          <p>Please use <strong>'http'</strong> with the url.</p>
        </div>

          
        <div class="form-group">
          <label>Blog Description:</label>
          <textarea id="description" name="description" rows="6" cols="80">{{!empty($blog['description'])?$blog['description']:''}}</textarea>
        </div>


        <div class="form-group">
          <label>Blog Image:</label>
          <div>
            <input type="file" id="uploadFile" accept="image/*" name="image">
            <img style="max-width: 250px;" src="{{url('assets/img/blogs')}}/{{$blog['image']}}" id="mapimg" alt="No Featured Image Added">
          </div>
        </div>

        <div class="box-footer">
          <a href="{{url('admin/blog')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="edit-blog"]' class="btn btn-info pull-right">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@section('requirejs')
<script type="text/javascript">
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#adminimg').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    CKEDITOR.replace("description");
</script>
@endsection