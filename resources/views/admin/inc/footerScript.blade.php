<!-- jQuery 3 -->
<script src="{{ asset('assets/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('assets/admin/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assets/admin/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/admin/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/admin/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('assets/admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/admin/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/admin/dist/js/demo.js') }}"></script>

<!-- datatable -->
<script src="{{ asset('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
    })
    })
</script>
{{--add modal body by ajax--}}
<script>
    $(document).on('click','#addSomething', function () {
        var actionUrl  = $(this).attr('data-action');
        var modalTitle = $(this).attr('data-title');
        $('.modal-title').text(modalTitle);
        var modalSize  = $(this).attr('data-modal');
        removeModalSize(modalSize);

        $.ajax({
            type:'GET',
            url:actionUrl,
            success:function (data) {
                $('.modal-body').html(data);
            }

        });

    })

    // add user defined modal
    function removeModalSize(modalSize) {
        var thisClass = $('.modal-dialog');
        if (thisClass.hasClass('modal-xs')){
            thisClass.removeClass('modal-xs');
        }
        if(thisClass.hasClass('modal-sm')){
            thisClass.removeClass('modal-sm');
        }
        if(thisClass.hasClass('modal-md')){
            thisClass.removeClass('modal-md');
        }
        if(thisClass.hasClass('modal-lg')){
            thisClass.removeClass('modal-lg');
        }
        if(thisClass.hasClass('modal-xl')){
            thisClass.removeClass('modal-xl');
        }
        thisClass.addClass(modalSize);

    }
</script>
