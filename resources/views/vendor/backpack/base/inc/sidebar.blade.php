@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          <!-- Me -->
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/setting') }}"><i class="fa fa-wrench"></i> <span>Settings</span></a></li>
          <!-- Me -->
          <!-- Entries -->
          <li class="header">Datasets</li>
          <li><a href="{{ url('admin/advocate') }}"><i class="fa fa-user"></i> <span>Manage Advocates</span></a></li>
          <li><a href="{{ url('admin/post') }}"><i class="fa fa-file-text-o "></i> <span>Manage Posts</span></a></li>
          <li><a href="{{ url('admin/client') }}"><i class="fa fa-users"></i> <span>Manage Clients</span></a></li>
          <li><a href="{{ url('admin/testimonial') }}"><i class="fa fa-comments"></i> <span>Manage Testimonials</span></a></li>
          <li><a href="{{ url('admin/service') }}"><i class="fa fa-gears"></i> <span>Manage Services</span></a></li>
          <li><a href="{{ url('admin/sms') }}"><i class="fa fa-gears"></i> <span>Manage SMS Subscribers</span></a></li>
          <!-- Entries -->
          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
