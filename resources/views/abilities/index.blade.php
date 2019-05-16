@extends('layouts.app')

@section('title-left')
    Listado de habilidades
@endsection

@section('content')
{{-- Comprueba si llega la habilidad por le parámetro de sesión --}}
{{-- Si llega significa que se presionó el botón de ver y se mostrará el campo deseado --}}
@if (session()->has('Ability'))

<script>
window.onload = () => {
document.getElementById('Mostrar').click();
}
</script>

<button type="button" id="Mostrar" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" hidden style="display: none">Mostrar</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">{{ session('Ability')->name }}</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-xs-6">
          <h4>Descripción: </h4>
          <p>{{ session('Ability')->description }}</p>
        </div>
        <div class="col-xs-6">
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endif
{{-- Comprueba si llega la habilidad por le parámetro de sesión --}}
{{-- Tabla con todas las habilidades y acciones --}}
<table id="datatable" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>id:</th>
        <th>Habilidad:</th>
        <th>F. Creación:</th>
        <th>F. Ult. Actualización</th>
        <th>C. usuarios:</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($Abilities as $Ability)
          <tr>
            <td style="text-align: center; vertical-align: middle">{{ $Ability->id }}</td>
            <td style="text-align: center; vertical-align: middle">{{ $Ability->name }}</td>
            <td style="text-align: center; vertical-align: middle">{{ $Ability->created_at }}</td>
            <td style="text-align: center; vertical-align: middle">{{ $Ability->updated_at }}</td>
            <td style="text-align: center; vertical-align: middle">{{ $Ability->users->count() }}</td>
            <td style="text-align: center; vertical-align: middle">
              <button class="btn btn-primary btn-sm" onclick="document.getElementById('Mostrar{{ $Ability->id }}').submit()"><i class="fa fa-eye"></i></button>
              <button class="btn btn-info btn-sm" onclick="document.getElementById('Editar{{ $Ability->id }}').submit()"><i class="fa fa-edit"></i></button>
              <button class="btn btn-danger btn-sm" type="button" id="CBorrado" class="btn btn-primary" data-toggle="modal" data-target="#Borrado"><i class="fa fa-trash"></i></button>
            </td>
            <form action="{{ route('abilities.edit',$Ability->id) }}" method="get" id="Editar{!! $Ability->id !!}"> @csrf</form>
            <form action="{{ route('abilities.destroy',$Ability->id) }}" method="post" id="Eliminar{{ $Ability->id }}">@csrf @method('DELETE')</form>
            <form action="{{ route('abilities.show',$Ability->id) }}" method="get" id="Mostrar{{ $Ability->id }}">@csrf</form>
          </tr>
      @endforeach
    </tbody>
  </table>
{{-- Tabla con todas las habilidades y acciones --}}
  {{-- Mostrar confirmación de borrado --}}
  <div class="modal fade bs-example-modal-lg" id="Borrado" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">¿Está seguro que desea borrar el campo?</h4>
            </div>
            <div class="modal-body">
              <div class="row">
              <div class="col-xs-12">
                <center><h4>Esta acción no se puede revertir</h4></center>
              </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="button" onclick="document.getElementById('Eliminar{{ $Ability->id }}').submit()" class="btn btn-danger"><i class="fa fa-trash"></i>Eliminar</button>
            </div>
          </div>
        </div>
      </div>
    {{-- Mostrar confirmación de borrado --}}
@endsection
