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
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @if(isset($header))
                <h1>
                    {{ $header['title'] }}
                    <small>{{ $header['pageTitle'] }}</small>
                </h1>
                @endif
                @if(isset($header['createUrl']))
                <ol class="breadcrumb">
                    <button type="button"
                            id="addSomething"
                            class="btn btn-primary btn-sm"
                            data-toggle="modal"
                            data-action="{{ url($header['createUrl']) }}"
                            data-modal="{{ $header['modalSize'] }}"
                            data-title="{{ $header['modalTitle'] }}"
                            data-target="#myModal">Add New</button>
                </ol>
                @endif
            </section>
            <br>
            @include('admin.global.modal')
            @yield('content')

        </div>
    <!-- /.content-wrapper -->
    @include('admin.inc.mainFooter')


</div>
<!-- ./wrapper -->

@include('admin.inc.footerScript')
</body>
</html>
