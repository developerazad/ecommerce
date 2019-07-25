<!DOCTYPE html>
<html>
@include('admin.inc.headCss')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.inc.mainHeader')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.inc.mainSidebar')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>
            @yield('content')
        </div>
    <!-- /.content-wrapper -->
    @include('admin.inc.mainFooter')


</div>
<!-- ./wrapper -->

@include('admin.inc.footerScript')
</body>
</html>
