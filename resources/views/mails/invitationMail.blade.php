<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Invitacion para unirte a nuestro equipo</title>

    <style>
        .container {
            display: grid;
            grid-template-rows: 1fr 5fr 2fr;
            height: 100vh;
            margin: 0;
            grid-gap: 0;
        }

        .header {
            grid-column: 1 / span 2;
            border-bottom: #e4e6e9 solid 1px;
            display: flex;
            justify-content: center;
        }

        .main {
            grid-column: 1 / span 2;
            /*   background-color: blue; */
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }

        .footer {
            grid-column: 1 / span 2;
            background-color: pink;
        }

        .paragraph {
            text-align: center;
            font-size: 20px;
        }

        button[type=submit] {
            background-color: #ff9400;
            border: none;
            color: white;
            padding: 15px 90px;
            display: inline-block;
            font-size: 20px;
            border-radius: 20px;
        }

        p span {
            font-size: 25px;
        }

    </style>
</head>

<body>

<div class="container">

    <header class="header"><h5>Invitacion a unirte A nuestro equipo de domino {{$team->name}}</h5>
        <img src="ligasdedominio.com/img/logo-ligas-domino.png" alt=""></header>

    <main class="main">
        <div class="paragraph">
            <p>Buenas Sr(a) <span> {{$user->name}} </span>, Te damos la bienvenida ligasdedomino.com </p>

            <p>Este Correo es para Notificarte que el <span>{{$team->name}}</span> de la <span>{{$league->name}}</span>
                te ha invitado a unirte
                a su equipo para participar en el Campeonato Batalla de Escuderia</p>

            <p>El boton que sigue a continuacion servira para aceptar la solicitud realizada. Si usted no quiere unirse
                a el equipo <span> {{$team->name}} </span> ignore este correo.</p>
        </div>
        <div class="form">
            <div style="text-align: center">
                <a href="{{url('user/verify', [$invitation->token, $user->id, $team->id] )}}"

                   style="background-color: #ff9400; border: none;color: white; padding: 15px 90px;display: inline-block;font-size: 20px;border-radius: 20px;">
                    Aceptar Invitacion
                </a>
            </div>
        </div>
    </main>

    <footer class="footer"></footer>

</div>

</body>
</html>