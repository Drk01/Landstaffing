<!DOCTYPE html>
<html lang="es">
        <script>
            var csrf_token = "{{ csrf_token() }}";
            var username = "{{ auth()->user()->name }}"
            var userid = "{{ auth()->user()->id }}";
            var appName = "{{ config('app.name') }}"
        </script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <!-- Bootstrap -->
    <link href="Panel/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Panel/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Panel/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Panel/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
    <div id="SinglePage"></div>

    <!-- jQuery -->
    <script src="Panel/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="Panel/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="Panel/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="Panel/vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="Panel/build/js/custom.min.js"></script>

    <script src="js/app.js"></script>
</body>
</html>
