<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} | Iniciar sesión </title>

    <!-- Bootstrap -->
    <link href="{{ asset('Panel/assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('Panel/assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('Panel/assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('Panel/assets/vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('Panel/assets/vendors/select2/dist/css/select2.min.css') }}">


    <!-- Custom Theme Style -->
    <link href="{{ asset('Panel/assets/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <h1>Iniciar Sesión</h1>
                        <div>
                            <input type="email" name="email" class="form-control" placeholder="Correo electrónico"
                                required="" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña"
                                required="" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit">Entrar</a>
                        </div>
                        <a class="reset_pass" href="#">¿Olvidaste tu contraseña?</a>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">¿Nuevo en el sitio?
                                <a href="{{ route('register') }}" class="to_register"> Crear cuenta </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1>{{ config('app.name') }}</h1>
                                <p>&copy; All Rights Reserved. {{ config('app.name') }}. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>

    <script src="{{ asset('Panel/assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
    $(document).ready(function() {
        $('#country').select2();
    });
    </script>

</body>
</html>
