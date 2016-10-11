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

    <div class="container">
        
        @yield('content')

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/sb-admin-2/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sb-admin-2/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/sb-admin-2/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!-- <script src="/sb-admin-2/vendor/raphael/raphael.min.js"></script>
    <script src="/sb-admin-2/vendor/morrisjs/morris.min.js"></script>
    <script src="/sb-admin-2/data/morris-data.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="/sb-admin-2/dist/js/sb-admin-2.js"></script>

</body>

</html>
