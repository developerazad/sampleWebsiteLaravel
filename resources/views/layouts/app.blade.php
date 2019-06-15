<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<style>
    #footer{
        margin-top: 30px;
        padding: 10px;
        color: #ffffff;
        background: #000000;
    }
</style>

<body>


    @include('inc.navbar')

    <div class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div>
        </div>

    </div>
    <footer id="footer" class="text-center">
        <p>Copyright&copy;2019 Acme, All Rights Reserved.</p>
    </footer>


</body>
</html>