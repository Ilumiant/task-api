<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }
        a {
            color: white;
        }
        .boton {
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid #007bff;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .boton:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
            text-decoration: none;
        }
        .boton:focus {
            outline: 0;
            box-shadow: 0 0 0 0 transparent;
        }
        .text-center {
            text-align: center;
        }
        .text-white {
            color: white;
        }
        .text-shadow {
            text-shadow: 0 0 5px #000;
        }    
        .bg-image {
            background-image: url('http://www.aminerals.cl/media/5994/seg-contratistas.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bg-dark  {
            background-color: #00000044;
        }
    </style>
</head>
<body>
    <div class="bg-image" style="width: 600px; margin: 0 auto;">
        <div class="bg-dark" style="min-height: 400px;">
            <br><br>
            <h1 style="text-align: center; color: white; text-shadow: 0 0 5px #000;">¡ÚNETE!</h1>
            <br>
            <h1 style="text-align: center; color: white; text-shadow: 0 0 5px #000; padding-left: 30px; padding-right: 30px; font-size: 2.5rem;">ANTOFAGASTA TE HA INVITADO</h1>
            <br>
            <p style="text-align: center; color: white; text-shadow: 0 0 5px #000; padding-left: 30px; padding-right: 30px; font-size: 1rem;">
                Antofagasta te ha invitado a unirte a su red, debes ingresar al enlace de debajo para crear tu cuenta.
            </p>
            <br>
            <p class="text-center">
                <a href="{{ $url }}" target="_blank" class="boton"><span style="color: white;">Quiero ir</span></a>
            </p>
        </div>
    </div>
</body>
</html>