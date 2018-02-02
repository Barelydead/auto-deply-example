<!DOCTYPE html>
<html>
    <head>
        <title>Red Diamond Coatins - @yield('title')</title>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        {{-- This is the main navbar --}}
        @include('includes.navbar')

        {{-- flash area --}}
        @include('includes.flash')

              <!-- Main component for a primary marketing message or call to action -->
              <div class="jumbotron">
                <h1>Navbar example</h1>
                <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
                <p>
                  <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
                </p>
              </div>

            </div> <!-- /container -->

        <div>
            @yield('content')
        </div>

        {{-- footer area  --}}
        @include('includes.footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
