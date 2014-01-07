<!DOCTYPE html>
<html>
    <head>
        <title>Protubes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        {{ HTML::style('bootstrap/css/bootstrap.min.css', array('media'=>'screen')) }}
        <!-- Font-Awesome -->
        {{ HTML::style('fontawesome/css/font-awesome.min.css') }}
        <!-- My style -->
        {{ HTML::style('css/style.css',array('media'=>'screen')) }}
    </head>
    <body>
        <!--div class="container"--> 
            
            <header id="header">
                @include('menus.main-menu')
            </header>
            
            <div class="container">
                @yield('content')
            </div>

            <footer id="footer">
                @include('menus.footer-menu')
            </footer>
        <!--/div-->
    </body>
    <footer>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </footer>
</html>