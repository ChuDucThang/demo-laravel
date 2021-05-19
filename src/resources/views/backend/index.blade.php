<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/backend/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/backend/dashboard.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/backend/uikit/css/uikit.min.css">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            /* text-align: center; */
        }
    </style>
</head>
<body>
    @include('backend.header')
    @include('backend.left-bar')
    @yield('content_backend')

    @include('backend.footer')
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="{{url('/')}}/backend/semantic.min.js"></script>

<script src="{{url('/')}}/backend/uikit/js/uikit.min.js"></script>
<script src="{{url('/')}}/backend/uikit/js/uikit-icons.min.js"></script>
    @stack('custom-scripts')
</body>
</html>