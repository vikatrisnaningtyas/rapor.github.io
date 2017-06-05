<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <title>Kurikulum 2013 - SMP Negeri 1 Pacitan</title>

    <!-- Sweet Alert css -->
    <link href="{{ asset('plugins/bootstrap-sweetalert/sweet-alert.css') }}" rel="stylesheet" type="text/css"/>

    <!-- DataTables -->
    <link href="{{ asset('plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Plugins css -->
    <link href="{{ asset('plugins/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/select2/dist/css/select2-bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!-- Editatable  Css-->
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/dist/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('plugins/jquery-datatables-editable/datatables.css') }}"/>

    <!-- App css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/core.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/pages.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/paper.css') }}" rel="stylesheet" type="text/css"/>


    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-74137680-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<style>
    @page{size: Legal}
    @media print {
        #printableArea {
            display: block;
            position: fixed;
        }
    }
</style>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="#" class="logo"><span>Admin<span>to</span></span><i class="zmdi zmdi-layers"></i></a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                    <li>
                        @yield('page-title')
                    </li>
                </ul>

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!-- User -->
            @include('layouts._user-box')
                    <!-- End User -->

            <!--- Sidemenu -->
            @include('layouts._sidebar-menu')
                    <!-- Sidebar -->

            <div class="clearfix"></div>

        </div>

    </div>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">

        <!-- Start content -->
        <div class="content">
            @if (session()->has('flash_notification.message'))
                <div class="container">
                    <div class="alert alert-{{ session()->get('flash_notification.level') }}">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ session()->get('flash_notification.message') }}
                    </div>
                </div>
            @endif

            @yield('content')

        </div> <!-- content -->

        <footer class="footer">
            2016 © SMP Negeri 1 Pacitan.
        </footer>
    </div>
    <!-- End content-page -->
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/detect.js') }}"></script>
<script src="{{ asset('js/fastclick.js') }}"></script>
<script src="{{ asset('js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('js/waves.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery-knob/excanvas.js')}}"></script>
<![endif]-->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.js') }}"></script>

<!-- Datatables-->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.scroller.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('pages/datatables.init.js') }}"></script>

<!-- Sweet Alert js -->
<script src="{{ asset('plugins/bootstrap-sweetalert/sweet-alert.min.js') }}"></script>
<script src="{{ asset('pages/jquery.sweet-alert.init.js') }}"></script>

<!-- Plugins js -->
<script src="{{ asset('plugins/bootstrap-inputmask/bootstrap-inputmask.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('plugins/multiselect/js/jquery.multi-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
<script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

<!-- Editable js -->
<script src="{{ asset('plugins/jquery-datatables-editable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('plugins/tiny-editable/mindmup-editabletable.js') }}"></script>
<script src="{{ asset('plugins/tiny-editable/numeric-input-example.js') }}"></script>
<!-- init -->
<script src="{{ asset('plugins/jquery-datatables-editable/jquery.dataTables.js') }}"></script>

<!-- App js -->
<script src="{{ asset('js/jquery.core.js') }}"></script>
<script src="{{ asset('js/jquery.app.js') }}"></script>

<script>
    var resizefunc = [];
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable({
            ajax: "assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
    });
    TableManageButtons.init();


    jQuery(document).ready(function () {

        //advance multiselect start
        $('#my_multi_select3').multiSelect({
            selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
            selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
            afterInit: function (ms) {
                var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
            },
            afterSelect: function () {
                this.qs1.cache();
                this.qs2.cache();
            },
            afterDeselect: function () {
                this.qs1.cache();
                this.qs2.cache();
            }
        });

        // Select2
        $(".select2").select2();

        $(".select2-limiting").select2({
            maximumSelectionLength: 2
        });
    });

    // Date Picker
    jQuery('#datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });

    $(document.body).on('click', '.js-submit-confirm', function (event) {
        event.preventDefault()
        var $form = $(this).closest('form')
        var $el = $(this)
        var text = $el.data('confirm-message') ? $el.data('confirm-message') : 'Data yang dihapus tidak dapat dibatalkan.'
        swal({
            title: 'Anda Yakin?',
            text: text,
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Hapus!',
            cancelButtonText: 'Batal',
            closeOnConfirm: true,
        },
        function () {
            $form.submit()
        })
    });

    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }


</script>
@yield('script')
</body>
</html>