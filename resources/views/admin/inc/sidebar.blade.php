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

            <!-- dynamic sidebar -->
            @php
                $modules = \Illuminate\Support\Facades\DB::table('ac_modules')
                                ->where('active_fg','=',1)
                                ->orderBy('userdsl_no','asc')
                                ->get();
            @endphp

            @foreach($modules as $module)
                    @if(Auth::user()->user_group_id==1)
                        @php
                            $moduleLinks = \Illuminate\Support\Facades\DB::table('ac_module_links')
                                        ->where('active_fg','=',1)
                                        ->where('module_id', $module->module_id)
                                        ->orderBy('userdsl_no','asc')
                                        ->get();
                        @endphp
                    @else
                        @php
                            $userGroupId = Auth::user()->user_group_id;
                            $moduleLinks = \Illuminate\Support\Facades\DB::table('ac_module_links as ml')
                                        ->leftJoin('ac_permissions as p','ml.module_link_id', '=', 'p.module_link_id')
                                        ->leftJoin('ac_modules as m','ml.module_id', '=', 'm.module_id')
                                        ->where('p.user_group_id', $userGroupId)
                                        ->where('p.active_fg','=',1)
                                        ->where('ml.module_id', $module->module_id)
                                        ->orderBy('ml.userdsl_no','asc')
                                        ->get();
                        @endphp
                    @endif
            <li class="treeview">
                <a href="#">
                    <i class="{{ $module->module_icon }}"></i>
                    <span>{{ $module->module_name }}</span>
                    <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu module-link">
                    @foreach($moduleLinks as $link)
                        <li><a href="{{ $link->route_url }}"><i class="fa fa-circle-o"></i> {{ $link->module_link_name }}</a></li>
                    @endforeach
                </ul>
            </li>
            @endforeach
            <!-- /. dynamic sidebar -->

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

