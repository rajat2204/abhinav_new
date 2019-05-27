<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Add Blog</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="add-blog" method="POST" action="{!! action('Admin\BlogController@store') !!}">
        {{csrf_field()}}

        <div class="form-group">
          <label>Category Name:</label>
          <select class="form-control" name="category_id" id="category_id">
            <option value="">Category Name</option>
            @foreach($category as $categories)
              <option value="{{!empty($categories['id'])?$categories['id']:''}}">{{!empty($categories['name'])?$categories['name']:''}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Blog Title:</label>
          <input type="text" class="form-control" placeholder="Enter Blog Title..." name="title">
        </div>

        <div class="form-group">
          <label>Blog Slug:</label>
          <input type="text" class="form-control" placeholder="Enter Blog Slug..." name="slug">
        </div>

        <div class="form-group">
          <label>Source URL:</label>
          <input type="text" class="form-control" placeholder="Enter Blog URL..." name="url">
          <p>Please use <strong>'http'</strong> with the url.</p>
        </div>

        <div class="form-group">
          <label>Blog Description:</label>
          <textarea id="description" name="description" rows="6" cols="80"></textarea>
        </div>

        <div class="form-group">
          <label>Blog Image:</label>
          <div>
            <input onchange="readURL(this)" id="uploadFile" accept="image/*" name="image" type="file">
          </div>
          <div>
            <img style="max-width: 250px;" src="{{asset('assets/img/avatar.png')}}" id="adminimg" alt="No Featured Image Added">
          </div>
        </div>


        <div class="box-footer">
          <a href="{{url('admin/blog')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="add-blog"]' class="btn btn-info pull-right">Submit</button>
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