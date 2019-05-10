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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div id="register" class="animate form login_form">
                <section class="login_content">
                    <form action="{{ route('register') }}" method="POST" autocomplete="off">
                        @csrf
                        <h1>Crear cuenta</h1>
                        <div>
                            <input required class="form-control" type="text" name="name" id="name" placeholder="Nombre"
                                class="form-control">
                        </div>
                        <div>
                            <input required type="text" class="form-control" name="lastname" id="lastname"
                                placeholder="Apellido paterno">
                        </div>
                        <div>
                            <input required type="text" class="form-control" name="motherLastname" id="motherLastname"
                                placeholder="Apellido materno">
                        </div>
                        <div style="margin: 0 0 1.3em 0">
                            <select class="form-control" name="country" id="country" placeholder="País">
                                <option selected disabled hidden>Seleccione el país al que pertenece</option>
                                @foreach ($countries->all() as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <input required type="text" name="state" id="state" class="form-control" placeholder="Estado">
                        </div>
                        <div>
                            <input required type="text" name="city" id="city" class="form-control" placeholder="Ciudad">
                        </div>
                        <div>
                            <input required class="form-control" type="text" name="street" id="street" placeholder="Calle">
                        </div>
                        <div>
                            <input required type="text" name="extN" id="extN" placeholder="Número exterior" class="form-control">
                        </div>
                        <div>
                            <input required type="text" class="form-control" placeholder="Usuario" required="" />
                        </div>
                        <div>
                            <input required name="email" type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input required name="password" type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <textarea name="observations" id="observations" cols="30" rows="10" class="form-control" placeholder="Otros datos (Ej: Número interno en caso que viva en un complejo departamental)"></textarea>
                        </div>
                        <div style="margin-top: 1em">
                            <select name="account" id="account" class="form-control">
                                <option value="" disabled hidden selected>Seleccione el tipo de cuenta</option>
                                <option value="2">Empleador</option>
                                <option value="3">Empleado</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" style="margin-top: 1em" class="btn btn-default btn-block btn-lg submit">Crear cuenta</button>
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

    <script src="{{ asset('Panel/assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
    $(document).ready(function() {
        $('#country').select2();
        $('#account').select2();
    });
    </script>

</body>
</html>
