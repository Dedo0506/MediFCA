<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--<link href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css" rel="stylesheet">-->
    <!--favicon-->
    <!--estilos-->
    <style>
        .active {
            background: red;
            color: aliceblue;
        }
    </style>

</head>
<body>
    <!-- header-->
        @include('layouts.partials.header')
    <!-- nav -->

    @yield('content')

    <!-- footer -->
    <!-- script -->
</body>
</html>