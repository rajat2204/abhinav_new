<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- <div class="user-panel"> -->
        <!-- <div class="pull-left image">
          <img src="{{asset('assets/img/logo.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Abhinav</p>
        </div> -->
      <!-- </div> -->
      <ul class="sidebar-menu nav_active_menu" data-widget="tree">
        <li class="dashboard-icon">
          <a href="{{url('admin/category')}}">
            <i class="fa fa-tasks"></i> <span>Category</span>
          </a>
        </li>
        <li class="dashboard-icon">
          <a href="{{url('admin/blog')}}">
            <i class="fa fa-dashboard"></i> <span>Blog</span>
          </a>
        </li>
        <li class="dashboard-icon">
          <a href="{{url('admin/press')}}">
            <i class="fa fa-picture-o"></i> <span>Press</span>
          </a>
        </li>
        <li class="treeview configuration-icon">
          <a href="javascript:void(0);">
            <i class="fa fa-cogs fa-fw"></i> <span>General Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="units-icon"><a href="{{url('admin/social')}}">Social Media</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>