<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" sizes="16x16" href="http://agenda.museoamparo.com/public/img/favicon/favicon.ico">
        <title>Error 500</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="http://cdn.wsm.com.mx/assets/agenda.museoamparo.com/minified/css/styles-20190821123401.min.css">

        <meta name="theme-color" content="#ffffff">
        <style media="screen">
            body {
                font-family: 'Roboto', sans-serif;
                font-size: 16px
            }
            .message-container {
                position: absolute;
                top: 15%;
                right: 0;
                left: 0;
                margin-left: auto;
                margin-right: auto;
                width: 80%;
                height: min-content;
                padding: 0 50px 50px 50px;
            }
            .message-container h2,
            .message-container p {
                /* text-align: center; */
                color: #fff;
            }
            .message-container h2 {
                font-size: 2.5em;
                font-weight: 500;
            }
            .message-container p {
                font-size: 1.2em;
            }
            .message-container a {
                text-align: center;
                color: #fff;
                text-decoration: underline;
            }
            .icon-500 {
                width: 200px;
                height: 200px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 30px;
                text-align: center;
            }
            .icon-500 img {
                height: 100%;
            }
            .error-details-container {
                margin-top: 30px
            }
            .error-details-container li {
                color: #fff;
                text-decoration: underline;
            }
            .error-details-container p {
                font-size: 1em
            }
            .error-footer {
                background-image: url(http://agenda.museoamparo.com/public/img/logo-museo-amparo-light.png);
                background-position: center;
                background-repeat: no-repeat;
                background-size: contain;
                position: absolute;
                bottom: 20px;
                right: 0;
                left: 0;
                margin-left: auto;
                margin-right: auto;
                width: 160px;
                height: 50px;
            }
            @media (max-width: 768px) {
                .message-container {
                    width: 80%;
                    padding: 50px 20px
                }
                .icon-500 {
                    background-image: url(http://agenda.museoamparo.com/public/img/static/svg/error.svg);
                    width: 150px;
                    height: 150px;
                }
                .message-container,
                .error-footer {
                    position: inherit;
                    display: block;
                }
            }
        </style>
    </head>
    <body style="background: #000">
        <div class="message-container">
            <div class="icon-500">
                <img src="http://agenda.museoamparo.com/public/img/static/svg/broken.svg" alt="">
            </div>
            <h2 class="text-center">¡Vaya!</h2>
            <p class="text-center">Algo salió mal mientras se cargaba este sección.</p>
            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn-details collapsed">Ver detalles del error...</a>
            <div id="collapseExample" class="collapse error-details-container">
                <p>El sitio web ha detectado un error al recuperar:</p>
                <ul>
                    <li>http://agenda.museoamparo.com/conent/public</li>
                    <li>http://agenda.museoamparo.com/conent/public/algo</li>
                </ul>
                <p>Es posible que esta esté inactiva debido a tareas de mantenimiento o que se haya configurado de forma incorrecta.</p>
            </div>
        </div>
        <div class="error-footer"></div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(function(){
                $(".btn-details").click( function(){
                    if ( $(this).hasClass("collapsed") ) {
                        $(this).html("Ocultar detalles");
                    } else {
                        $(this).html("Ver detalles del error...")
                    }
                });
            });
        </script>
    </body>
</html>
