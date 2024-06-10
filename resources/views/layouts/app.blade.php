<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   {{--  <script src="https://cdn.tailwindcss.com"></script> --}}
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.partials.nav')
    @yield('content')
</body>
</html>