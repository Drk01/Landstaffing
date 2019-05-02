@extends('layouts.app')

@section('title-left')
Crear nueva orden
@endsection

@section('content')

<form action="{{ route('orders.create') }}" method="post" autocomplete="off">
    <div class="form-group">
        <label for="name">Nombre del proyecto: </label>
        <input type="text" name="name" id="name" required class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Descripción: </label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            <label for="startDate">Fecha de inicio: </label>
            <input type="date" name="startDate" id="startDate" class="form-control">
        </div>
        <div class="col-xs-6 form-group">
            <label for="startTime">Hora de inicio: </label>
            <input type="time" name="startTime" id="startTime" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            <label for="endDate">Fecha de finalización: </label>
            <input type="date" name="startTime" id="startTime" class="form-control">
        </div>
        <div class="col-xs-6 form-group">
            <label for="endTime">Hora de finalización: </label>
            <input type="time" name="endTime" id="endTime" class="form-control">
        </div>
    </div>
    <label for="personal">Personal requerido</label>
    <div class="form-group">
        <div id="personal">
            <div class="col-xs-6">
                <input type="number" name="numberP[]" class="form-control form-group" id="numper">
            </div>
            <div class="col-xs-6" id="fff">
                <select name="personalT[]" class="form-control" id="typeper">
                    <option></option>
                </select>
            </div>
        </div>
        <div id="maspersonales"></div>
    </div>
    <div class="form-group" style="margin-top: 5%">
        <button class="btn btn-info btn-lg btn-block" onclick="agregarPersonal()" type="button">Añadir personal</button>
        <input type="submit" value="Enviar datos" class="btn btn-success btn-lg btn-block" style="margin-top: 1%">
    </div>
</form>

<script>
function agregarPersonal(){

    console.log(texto);
    var oficios = ['A','B','C'];
    oficios.map((oficio) => {
       texto.innerHTML = '<option>'+oficio+'</option>';
    });
  $('<input type="number" name="numberP[]" class="form-control form-group" style="margin-top: 1%">').insertAfter("#numper");
  $('<select name="personalT[]" class="form-control form-group" style="margin-top: 2%" id="typeper"></select>').insertAfter("#typeper");

    var texto = document.getElementsByTagName('select');        
    oficios.map((oficio) => {
       texto.innerHTML = '<option>'+oficio+'</option>';
    });


};
</script>

@endsection
