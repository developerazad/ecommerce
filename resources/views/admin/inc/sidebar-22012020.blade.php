<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Main Navigation</li>
            <li class="treeview active">
                <a href="{{ url('admin') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <!-- static sidebar -->

            <!-- access control -->
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-cog"></i>
                    <span>Access Control</span>
                    <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('modules') }}"><i class="fa fa-circle-o"></i> Modules</a></li>
                    <li><a href="{{ url('module-links') }}"><i class="fa fa-circle-o"></i> Module Links</a></li>
                    <li><a href="{{ url('user-groups') }}"><i class="fa fa-circle-o"></i> User Groups</a></li>
                    <li><a href="{{ url('users') }}"><i class="fa fa-circle-o"></i> Users</a></li>
                    <li><a href="{{ url('module-assign') }}"><i class="fa fa-circle-o"></i> Module Assign</a></li>
                    <li><a href="{{ url('lookup-groups') }}"><i class="fa fa-circle-o"></i> Lookup Groups</a></li>
                </ul>
            </li>

            <!-- ui setup -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Setup</span>
                    <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('sliders') }}"><i class="fa fa-circle-o"></i> Slider</a></li>
                </ul>
            </li>

            <!-- Setup --->
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-wrench"></i>
                    <span>Setup</span>
                    <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('categories') }}"><i class="fa fa-circle-o"></i> Category</a></li>
                    <li><a href="{{ url('brands') }}"><i class="fa fa-circle-o"></i> Brand</a></li>
                    <li><a href="{{ url('products') }}"><i class="fa fa-circle-o"></i> Product</a></li>
                </ul>
            </li>

            <!-- Order Manage --->
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                    <span>Order Manage</span>
                    <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('pending-orders') }}"><i class="fa fa-circle-o"></i> Order Pending</a></li>
                    <li><a href="{{ url('order-received') }}"><i class="fa fa-circle-o"></i> Order Received</a></li>
                    <li><a href="{{ url('order-processing') }}"><i class="fa fa-circle-o"></i> Order Processing</a></li>
                    <li><a href="{{ url('delivered-orders') }}"><i class="fa fa-circle-o"></i> Order Delivered</a></li>
                </ul>
            </li>

            <!--/. static sidebar -->

            <!-- dynamic sidebar -->
            @php
                $modules = \Illuminate\Support\Facades\DB::table('ac_modules')->where('active_fg','=',1)->orderBy('userdsl_no','asc')->get();
                $moduleLinks = \Illuminate\Support\Facades\DB::table('ac_module_links')->where('active_fg','=',1)->orderBy('userdsl_no','asc')->get();
            @endphp
            @foreach($modules as $module)
            <li class="treeview">
                <a href="#">
                    <i class="{{ $module->module_icon }}"></i>
                    <span>{{ $module->module_name }}</span>
                    <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @foreach($moduleLinks as $link)
                    @if($module->module_id===$link->module_id)
                    <li><a href="{{ $link->route_url }}"><i class="fa fa-circle-o"></i> {{ $link->modlink_name }}</a></li>
                    @endif
                    @endforeach
                </ul>
            </li>
            @endforeach
            <!-- /. dynamic sidebar -->

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
