@extends('layouts.app')

@section('title-left')
{{ $Accion }} habilidad
@endsection
@section('content')
    <div class="col-xs-12">
        @if ($Accion == 'Crear')
        <form action="{{ route('abilities.store') }}" method="post">
        @endif
        @if ($Accion == 'Editar')
        <form action="{{ route('abilities.update',$Ability->id) }}" method="post">
            @method('PUT')
        @endif
            @csrf
            <div class="form-group">
                <label for="name">Inserte el nombre de la habilidad: </label>
                <input required type="text" name="name" id="name" class="form-control" autofocus @if ($Accion == 'Editar')
                    value="{{ $Ability->name }}"
                @endif>
            </div>
            <div class="form-group">
                <label for="description">Inserte la descripción de la habilidad: </label>
                <textarea required name="description" id="description" cols="30" rows="10" class="form-control">@if ($Accion == 'Editar'){{ $Ability->description }}@endif</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">@if ($Accion == 'Crear')
                    Crear
                @endif
                @if ($Accion == 'Editar')
                    Editar
                @endif
            </button>
            </div>
        </form>
    </div>
@endsection
