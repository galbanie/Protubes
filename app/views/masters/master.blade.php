<!DOCTYPE html>
<html>
    <head>
        <title>Protubes | {{ isset($titre) ? $titre : 'Default' }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('Ressources/Images/favicon.ico', array('rel'=>'shortcut icon','type'=>'','media'=>'')) }}
        {{ HTML::style('Ressources/Images/animated_favicon1.gif', array('rel'=>'icon','type'=>'image/gif','media'=>'')) }}
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
            
            @if(Session::has('alertes'))
            <div class="container">
                @foreach(Session::get('alertes') as $alerte)    
                    <div class="alert alert-{{{ $alerte->type }}} alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <a href="#" class="alert-link">...</a>
                    </div>
                @endforeach
            </div>
            @endif

            <div class="container">
                <div class="row">
                    @section('jumbotron')
                    @show
                </div>
            </div>

            <div class="container panel panel-default" id="main">

                <div class="row">
                    @section('gauche')
                    @show

                    @yield('centre')

                    @section('droit')
                    @show
                </div>
            </div>

            <div class="spacer"></div>
            <footer id="footer">
                @include('menus.footer-menu')
            </footer>
        <!--/div-->
    </body>
    <footer>
        <script src="http://code.jquery.com/jquery.js"></script>
        {{ HTML::script('bootstrap/js/bootstrap.min.js') }}
        {{ HTML::script('js/protubes.js') }}
    </footer>
</html>
