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
    {!! HTML::script('assets/js/jquery-2.1.4.min.js') !!}
    <title>TuriTac - Buscador de lugares</title>
    <style>

        .Absolute-Center {
            margin: auto;
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
        }

        .Absolute-Center.is-Responsive {
            height: 50%;
            min-width: 200px;
            padding: 40px;
        }
        
        body{
            background-image: url("http://localhost:8000/assets/img/background.jpg");
        }
    </style>
</head>
<body >
    <nav style="background: #383838;" class=" navbar navbar-inverse navbar-fixed-top custom-navigation " role="navigation">
        <div class="container ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="{{asset('assets/img/logo.png')}}" alt="TURITAC" id="DRCS-logo" width="70" height="30" />
                </a>
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

    @yield('content')

    <footer style="background: #383838;" class="footer">
        <div class="container">
            <p class="text-muted">Derechos reservados</p>
        </div>
    </footer>
</body>
</html>