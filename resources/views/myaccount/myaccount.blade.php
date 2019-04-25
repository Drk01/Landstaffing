@extends('layouts.app')

@section('title-left')
Mis datos
@endsection

@section('content')
<div class="col-lg-6">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Actualizar tus datos: </h3>
        </div>
        <div class="panel-body">
            <form action="{{ route('save-account-data') }}" method="post" autocomplete="off"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre: </label>
                    <input required type="text" name="name" id="name" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Apellido paterno: </label>
                            <input required type="text" name="lastname" class="form-control" id="lastname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="motherLastname">Apellido materno: </label>
                            <input required type="text" name="motherLastname" class="form-control" id="motherLastname">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="profile-picture">Foto de perfil: </label>
                    <input type="file" name="profile-picture" class="form-control" accept="image/*" />
                </div>
                <div class="form-group">
                    <label for="company">Nombre de la empresa: </label>
                    <input type="text" name="company" id="company" class="form-control">
                </div>
                <hr>
                <div class="form-group">
                    <label for="email">Correo electrónico: </label>
                    <input required type="email" class="form-control" id="email" name="email">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country">País: </label>
                            <select required class="form-control" name="country">
                                <option selected hidden disabled></option>
                                @foreach ($Countries as $Country)
                                <option value="{{ $Country->id }}">
                                    +{{ $Country->lada }} - {{ $Country->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Teléfono:</label>
                            <input required type="tel" class="form-control" id="phone" name="tel" maxlength="10">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="state">Estado: </label>
                            <input required type="text" class="form-control" id="state" name="state">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">Ciudad: </label>
                            <input required type="text" class="form-control" id="city" name="city">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="street">Calle: </label>
                            <input required type="text" class="form-control" id="street" name="street">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="extN">N° Externo</label>
                            <input required type="number" class="form-control" id="extN" name="extNumber" minlength="1">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="references">Referencias: </label>
                    <textarea name="references" rows="8" cols="80" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-info btn-lg" style="float: right;">Actualizar</button>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Datos que tenemos de usted: </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="/storage/{{ auth()->user()->foto }}" alt="Foto de perfíl" width="100px">
                    </div>
                    <div class="col-md-9">
                        <h4><strong>Nombre: </strong> {{ auth()->user()->name }} </h4>
                        <h4><strong>Apellido paterno:</strong> {{ auth()->user()->lastname }}</h4>
                        <h4><strong>Apellido materno:</strong> {{ auth()->user()->motherLastname }}</h4>
                        <h4><strong>Empresa: </strong>{{ auth()->user()->empresa }}</h4>
                    </div>
                    <div class="col-md-12">
                        <h4><strong>Email: </strong> {{ auth()->user()->email }}</h4>
                        <h4><strong>Teléfono:</strong> {{ auth()->user()->phone->phone }}</h4>
                        <h4><strong>País:</strong> {{ auth()->user()->address->country->first()->name }}</h4>
                        <h4><strong>Estado:</strong> {{ auth()->user()->address->estado }}</h4>
                        <h4><strong>Ciudad: </strong>{{ auth()->user()->address->ciudad }}</h4>
                        <h4><strong>Calle: </strong>{{ auth()->user()->address->calle }}</h4>
                        <h4><strong>N° Exterior: </strong>{{ auth()->user()->address->extNumber }}</h4>
                    </div>
                    <div class="col-md-12">
                            <h4><strong>Referencia: </strong></h4>
                            <textarea class="form-control" cols="100" rows="10"
                                disabled>{{ auth()->user()->address->reference }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
