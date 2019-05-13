@extends('layouts.app')

@section('title-left')
{{ $Accion }} orden
@endsection

@section('content')
@if ($Accion == 'Editar')
<form action="{{ route('orders.update',$Orden->id) }}" method="post" autocomplete="off">
@method('PUT')
@else
<form action="{{ route('orders.store') }}" method="post" autocomplete="off">
@endif
@csrf
    <div class="form-group">
        <label for="name">Nombre del proyecto: </label>
        <input required type="text" name="name" id="name" required class="form-control" @if ($Accion == 'Editar')
            value="{{ $Orden->name }}"
        @endif>
    </div>
    <div class="form-group">
        <label for="description">Descripción: </label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control">@if ($Accion == 'Editar')
{{ $Orden->description }}
        @endif</textarea>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            <label for="startDate">Fecha de inicio: </label>
            <input required type="date" name="startDate" id="startDate" class="form-control" @if ($Accion == 'Editar')
                value="{{ $startDate[0] }}"
            @endif>
        </div>
        <div class="col-xs-6 form-group">
            <label for="startTime">Hora de inicio: </label>
            <input required type="time" name="startTime" id="startTime" class="form-control" @if ($Accion == 'Editar')
                value="{{ $startDate[1] }}"
            @endif>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            <label for="endDate">Fecha de finalización: </label>
            <input required type="date" name="endDate" id="startTime" class="form-control" @if ($Accion == 'Editar')
                value="{{ $endDate[0] }}"
            @endif>
        </div>
        <div class="col-xs-6 form-group">
            <label for="endTime">Hora de finalización: </label>
            <input required type="time" name="endTime" id="endTime" class="form-control" @if ($Accion == 'Editar')
                value="{{ $endDate[1] }}"
            @endif>
        </div>
    </div>
    @if ($Accion == 'Crear')
    <label for="personal">Personal requerido</label>
    <div class="form-group" id="personal" style="margin-buttom: 1%">
        <div class="col-xs-6">
            <input required type="number" name="numberP[]" class="form-control" id="numper0">
        </div>
        <div class="col-xs-5">
            <select name="personalT[]" class="form-control" id="typeper0">
                <option selected hidden disabled></option>
                @foreach ($abilities as $ability)
                    <option value="{{ $ability->id }}">{{ $ability->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-xs-1">
            <button disabled class="btn btn-danger btn-block" type="button"><i class="fa fa-trash"></i></button>
        </div>
    </div>
    <div class="form-group" id="form-footer" style="margin-top: 5%">
        <button class="btn btn-info btn-lg btn-block" onclick="agregarPersonal()" type="button">Añadir personal</button>
    </div>
    @endif
    <hr>
    <div class="form-group col-xs-4">
      <label for="city">Ciudad: </label>
      <input required type="text" name="city" id="city" class="form-control" aria-describedby="cityHelp" @if ($Accion == 'Editar')
          value="{{ $Orden->city }}"
      @endif>
      <small id="cityHelp" class="text-muted">Ciudad donde se desarrollará el evento: </small>
    </div>
    <div class="form-group col-xs-6">
      <label for="street">Calle: </label>
      <input required type="text" name="street" id="street" class="form-control" aria-describedby="calleHelp" @if ($Accion == 'Editar')
          value="{{ $Orden->street }}"
      @endif>
      <small id="calleHelp" class="text-muted">Inserte la calle donde se desarrollará el evento</small>
    </div>
    <div class="form-group col-xs-2">
      <label for="extN">Numero externo: </label>
      <input required type="number" name="extN" id="extN" class="form-control" aria-describedby="extNHelp" @if ($Accion == 'Editar')
        value="{{ $Orden->extN }}"
      @endif>
      <small id="extNHelp" class="text-muted">Numero externo de la calle del evento:</small>
    </div>
    <div class="form-group col-xs-12">
      <label for="references">Referencias</label>
      <textarea required class="form-control" name="references" id="references" rows="3">@if ($Accion == 'Editar')
{{ $Orden->references }}
      @endif</textarea>
    </div>
    <div class="form-group">
        <input required type="submit" value="Enviar datos" class="btn btn-success btn-lg btn-block" style="margin-top: 1%">
    </div>
</form>

@if ($Accion == 'Crear')
<script>
        var click = 0;
    function agregarPersonal(){
        var oficios = {!! $abilitiesJS !!};
        click++;
    /*     document.getElementById('personal').append ='<div id="percol'+click+'"><div class="col-xs-6" style="margin: 1% 0"><input required type="number" name="numberP[]" class="form-control" id="numper'+click+'"></div><div class="col-xs-5" style="margin: 1% 0"><select name="personalT[]" class="form-control" id="typeper'+click+'"><option selected hidden disabled></option></select></div><div class="col-xs-1" style="margin: 1% 0"><button id="eliminador'+click+'" onclick="eliminarPersonal('+click+')" class="btn btn-danger btn-block" type="button"><i class="fa fa-trash"></i></button></div></div>'; */

        $('#personal').append('<div id="percol'+click+'"><div class="col-xs-6" style="margin: 1% 0"><input required type="number" name="numberP[]" class="form-control" id="numper'+click+'"></div><div class="col-xs-5" style="margin: 1% 0"><select name="personalT[]" class="form-control" id="typeper'+click+'"><option selected hidden disabled></option></select></div><div class="col-xs-1" style="margin: 1% 0"><button id="eliminador'+click+'" onclick="eliminarPersonal('+click+')" class="btn btn-danger btn-block" type="button"><i class="fa fa-trash"></i></button></div></div>');

        oficios.map((oficio) => {
           document.getElementById('typeper'+click).innerHTML = document.getElementById('typeper'+click).innerHTML +'<option value="'+oficio.id+'">'+oficio.name+'</option>';
        });
    };

    function eliminarPersonal(number){
            $("#percol"+number).remove();
    }
    </script>
@endif

@endsection
