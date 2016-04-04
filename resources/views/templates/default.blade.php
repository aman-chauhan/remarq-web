<!DOCTYPE html>
<html>
        <head>

                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta http-equiv="x-ua-compatible" content="ie=edge">

                <link rel="stylesheet" href="/Remarq/source/bootstrap/css/bootstrap.min.css" media="screen">

                @yield('styles')

                @yield('title')
        </head>
        <body>
                @include('templates.partials.navigation')
                <div class="container" id="megacontain">
                        @include('templates.partials.alerts')
                        @yield('content')
                </div>

                <script src="/Remarq/source/jquery/jquery.min.js"></script>
                <script src="/Remarq/source/bootstrap/js/bootstrap.min.js"></script>
                <script type="text/javascript">
                        $(".alert").alert()
                </script>
        </body>
</html>
