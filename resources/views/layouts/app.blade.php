<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('page_title') | Site Admin</title>

    @include('includes.head')

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            @include('includes.navigation')

            @include('includes.sidebar')
            
        </nav>

        <div id="page-wrapper">

            @yield('content')
        <div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <div id="dialog-confirm" title="Empty the recycle bin?" class="hide">
        <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;">
            </span>These items will be permanently deleted and cannot be recovered. Are you sure?</p>

            
    </div>



    <!-- jQuery -->
    <script src="/sb-admin-2/vendor/jquery/jquery.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sb-admin-2/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/sb-admin-2/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!-- <script src="/sb-admin-2/vendor/raphael/raphael.min.js"></script>
    <script src="/sb-admin-2/vendor/morrisjs/morris.min.js"></script>
    <script src="/sb-admin-2/data/morris-data.js"></script>-->

    <!-- DataTables JavaScript -->
    <script src="/sb-admin-2/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/sb-admin-2/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/sb-admin-2/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/sb-admin-2/dist/js/sb-admin-2.js"></script>


    <!-- Metis Menu Plugin JavaScript -->
    <script src="/js/main.js"></script>

    @yield('scripts')

</body>

</html>
