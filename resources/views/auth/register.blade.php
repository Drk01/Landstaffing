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
    <link href="{{ asset('Panel/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('Panel/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('Panel/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('Panel/vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('Panel/vendors/select2/dist/css/select2.min.css') }}">


    <!-- Custom Theme Style -->
    <link href="{{ asset('Panel/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div id="register" class="animate form login_form">
                <section class="login_content">
                    <form action="{{ route('register') }}">
                        <h1>Crear cuenta</h1>
                        <div>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Nombre"
                                class="form-control">
                        </div>
                        <div>
                            <input type="text" class="form-control" name="lastname" id="lastname"
                                placeholder="Apellido paterno">
                        </div>
                        <div>
                            <input type="text" class="form-control" name="motherLastname" id="motherLastname"
                                placeholder="Apellido materno">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="country" id="country" placeholder="País">
                                <option selected disabled hidden>Seleccione el país al que pertenece</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <input type="text" name="state" id="state" class="form-control" placeholder="Estado">
                        </div>
                        <div>
                            <input type="text" name="city" id="city" class="form-control" placeholder="Ciudad">
                        </div>
                        <div>
                            <input class="form-control" type="text" name="street" id="street" placeholder="Calle">
                        </div>
                        <div>
                            <input type="text" name="extN" id="extN" placeholder="Número exterior" class="form-control">
                        </div>
                        <div>
                            <input type="text" class="form-control" placeholder="Usuario" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit">Crear cuenta</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">¿Ya eres miembro?
                                <a href="{{ route('login') }}" class="to_register"> Iniciar sesión </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1> {{ config('app.name') }}!</h1>
                                <p>&copy; All Rights Reserved. {{ config('app.name') }}. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
    </div>

    <script src="{{ asset('Panel/vendors/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
    $(document).ready(function() {
        $('#country').select2();
    });
    </script>

</body>
</html>
