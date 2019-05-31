@extends('layouts.app')

@section('title-left')
    Curriculum
@endsection

@section('content')
@if (session()->has('success'))
<div class="alert alert-success" role="alert">{{ session('success') }}</div>
@endif

    <div class="col-xs-12">
        <form action="updatecurriculum" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="curriculum">Ingrese una breve descripción de los servicios que pueda prestar: </label>
              <textarea class="form-control" name="curriculum" id="curriculum" rows="10" required>{{ ($Curriculum == null) ? "" : $Curriculum->curriculum }}</textarea>
              <small>Tenga en cuenta que debe de dejar referencias para que podamos comprobar sus datos, es posible que se abra una conversiación con usted donde le pediremos referencias adicionales en caso de ser necesarias.</small>
            </div>
            <div class="form-group footer">
                <button type="submit" class="btn btn-success btn-lg btn-block">Actualizar curriculum</button>
            </div>
        </form>
    </div>
@endsection
