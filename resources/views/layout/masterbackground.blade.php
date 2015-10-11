<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        {!! Html::style('assets/css/bootstrap.css') !!}
        {!! Html::style('assets/css/sticky-footer.css') !!}
        {!! Html::style('assets/css/font-awesome.min.css') !!}
        {!! HTML::script('assets/js/jquery-2.1.4.min.js') !!}
        {!! Html::style('assets/css/style.css') !!}
        <title>TURITAC - Turismo en Tacna</title>
        <style>
            .Absolute-Center {
                margin: auto;
                position: absolute;
                top: 0; left: 0; bottom: 0; right: 0;
            }

            .Absolute-Center.is-Responsive {
                height: 65%;
                min-width: 200px;
                padding: 30px;
            }

            body{
                background-image: url("http://localhost:8000/assets/img/background.jpg");
            }

            .title{
                font-size: 45px;
                color: #ffffff;
                margin: 40px;
                font-family: 'Lobster', cursive;

            }
        </style>
    </head>
    <body >
    <div class="navbar navbar-inverse navbar-fixed-top" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="http://localhost:8000/assets/img/logo.png" width="100" height="30" alt=""></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="portfolio.html">PORTFOLIO</a></li>
                    <li><a href="pricing.html">PRICING</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>

        </div>
    </div>

        @yield('content')

        <footer style="background: #383838;" class="footer">
            <div class="row">
                <div class="col-lg-6">

                    <a href="">Inicio</a>
                    <a href="">FAQ</a>
                    <a href="">Contactanos</a>
                </div>
                <div class="container">
                    <p class="text-muted">Derechos reservados</p>
                </div>
            </div>
        </footer>
    </body>
</html>