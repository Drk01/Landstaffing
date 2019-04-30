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

</form>

@endsection
