<div class="content-wrapper">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Category</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="edit-category" method="POST" action="{{url('admin/category/'.___encrypt($category['id']))}}">
        {{csrf_field()}}
        <input type="hidden" value="PUT" name="_method">
        <div class="col-md-12">
          <div class="form-group">
            <input type="hidden" id="id" name="id" class="form-control" value="{{!empty($category['id'])?$category['id']:''}}">
          </div>
        </div>

        <div class="form-group">
          <label>Category Name:</label>
          <input type="text" class="form-control" placeholder="Enter Category Name..." name="name" value="{{!empty($category['name'])?$category['name']:''}}">
        </div>

        <div class="box-footer">
          <a href="{{url('admin/category')}}" class="btn btn-default">Cancel</a>
          <button type="button" data-request="ajax-submit" data-target='[role="edit-category"]' class="btn btn-info pull-right">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>