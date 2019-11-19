<html>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            body {
                padding: 20px;
            }
            .navbar {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @component('componente_navbar', [ "current" => $current ])
            @endcomponent
            <main role="main">
                        @hasSection('body')
                            @yield('body')
                        @endif
                    </div>
                </div>
            </main>
        </div>

        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

        @hasSection ('javascript')
            @yield('javascript')
        @endif

    </body>
</html>
