<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title></title>
</head>
<body class="bg-gray-100">
    <div class="h-screen flex flex-row flex-wrap">
{{--            @include('modules.aside')--}}
            @yield('content')
    </div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<!-- end script -->
</body>
</html>
