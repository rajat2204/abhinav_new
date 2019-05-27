<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Edit press</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="edit-press" method="POST" action="{{url('admin/press/'.___encrypt($press['id']))}}">
        {{csrf_field()}}
        <input type="hidden" value="PUT" name="_method">
        <div class="col-md-12">
          <div class="form-group">
            <input type="hidden" id="id" name="id" class="form-control" value="{{!empty($press['id'])?$press['id']:''}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Press Title:</label>
              <input type="text" class="form-control" placeholder="Enter Press Title..." name="title" value="{{!empty($press['title'])?$press['title']:''}}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Press Slug:</label>
              <input type="text" class="form-control" placeholder="Enter press Slug..." name="slug" value="{{!empty($press['slug'])?$press['slug']:''}}">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>Press URL:</label>
          <input type="text" class="form-control" placeholder="Enter Press URL..." name="url" value="{{!empty($press['url'])?$press['url']:''}}">
          <p>Please use <strong>'http'</strong> with the url.</p>
        </div>

        <div class="form-group">
          <label>Press Description:</label>
          <textarea id="description" name="description" rows="6" cols="80">{{!empty($press['description'])?$press['description']:''}}</textarea>
        </div>


        <div class="form-group">
          <label>Press Image:</label>
          <div>
            <input type="file" id="uploadFile" accept="image/*" name="image">
            <img style="max-width: 250px;" src="{{url('assets/img/press')}}/{{$press['image']}}" id="mapimg" alt="No Featured Image Added">
          </div>
        </div>

        <div class="box-footer">
          <a href="{{url('admin/press')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="edit-press"]' class="btn btn-info pull-right">Submit</button>
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