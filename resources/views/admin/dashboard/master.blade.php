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
            @yield('content')
        </div>
    <!-- /.content-wrapper -->
    @include('admin.inc.mainFooter')


</div>
<!-- ./wrapper -->

@include('admin.inc.footerScript')
</body>
</html>
