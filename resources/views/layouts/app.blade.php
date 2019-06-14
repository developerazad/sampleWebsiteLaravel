<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
</head>

<body>

    @yield('header')


    @section('sidebar')

        <div class="sidebar">
            <p>This is a sidebar</p>
        </div>
    @show


</body>
</html>