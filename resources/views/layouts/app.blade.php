<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Markdown Wiki</title>

    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="pos-f-t">
      <div class="collapse" id="navbar-header">
        <div class="container bg-inverse p-a-1">
          <h3>Collapsed content</h3>
          <p>Toggleable via the navbar brand.</p>
        </div>
      </div>
      <nav class="navbar navbar-light navbar-static-top bg-faded">
        <div class="container">
          <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            &#9776;
          </button>
          <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <a class="navbar-brand" href="#">Sticky footer</a>
            <ul class="nav navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Nav item <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Another nav item</a>
              </li>
              
              @if (Auth::guest())
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/register') }}">Register</a>
                </li>
              @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/profile') }}">Welcome {{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                </li>
              @endif
              
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="container">
    @yield('content')
    </div>
    
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Markdown Wiki - In development</span>
      </div>
    </footer>

    <script src="{{ elixir('js/app.js') }}"></script>
    @stack('scripts')
    
  </body>
</html>
