<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}" style="color: #ffffff">Come2Learn</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/')?'active':'' }}"><a href="{{ url('/') }}">Home</a></li>
                <li class="{{ Request::is('about')?'active':'' }}"><a href="{{ url('/about') }}">About</a></li>
                <li class="{{ Request::is('contact')?'active':'' }}"><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->