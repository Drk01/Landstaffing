@extends('layouts.app')

@section('title-left')
{{ $Accion }} habilidad
@endsection
@section('content')
    <div class="col-xs-12">
        <form action="{{ route('abilities.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Inserte el nombre de la habilidad: </label>
                <input required type="text" name="name" id="name" class="form-control" autofocus>
            </div>
            <div class="form-group">
                <label for="description">Inserte la descripción de la habilidad: </label>
                <textarea required name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Crear</button>
            </div>
        </form>
    </div>
@endsection
