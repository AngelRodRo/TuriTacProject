<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/sticky-footer.css') !!}
        {!! Html::script('assets/js/jquery-2.1.4.min,js') !!}
        {!! Html::script('assets/css/styles.css') !!}
        <title>TuriTac - Buscador de lugares</title>
    </head>
    <body>
        <nav style="background: #383838;" class="navbar navbar-inverse navbar-fixed-top custom-navigation " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">TURITAC</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Restaurantes</a>
                        </li>
                        <li>
                            <a href="#">Centros comerciales</a>
                        </li>
                        <li>
                            <a href="#">Lugares turisticos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container container-table">
            <div class="row vertical-center-row">
                <div class="text-center col-md-4 col-md-offset-4">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer style="background: #383838;" class="footer">
            <div class="container">
                <p class="text-muted">Derechos reservados</p>
            </div>
        </footer>
    </body>
</html>