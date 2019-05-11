@extends('layouts.app')

@section('title-left')
    Listado de ordenes
@endsection

@section('content')
@if (session()->has('SOrder'))

<script>
window.onload = () => {
document.getElementById('Mostrar').click();
}
</script>

<button type="button" id="Mostrar" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" hidden style="display: none">Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">{{ session('SOrder')->name }}</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-xs-6">
          <h4>Descripción: </h4>
          <p>{{ session('SOrder')->description }}</p>
          <h4>Fecha de inicio: </h4>
          <p>{{ session('SOrder')->startAt }}</p>
          <h4>Fecha de finalización: </h4>
          <p>{{ session('SOrder')->endAt }}</p>
          <h4>Ciudad: </h4>
          <p>{{ session('SOrder')->city }}</p>
          <h4>Calle: </h4>
          <p>{{ session('SOrder')->street }}</p>
          <h4>Numero exterior: </h4>
          <p>{{ session('SOrder')->extN }}</p>
          <h4>Referencias: </h4>
          <p>{{ session('SOrder')->references }}</p>
        </div>
        <div class="col-xs-6">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Trabajadores</th>
                    <th>Funciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach (session('Personals') as $key => $Personal)
                      @if ($Personal >0 )
                        <tr>
                            <td>{{ $Personal }}</td>
                            <td>{{ session('Abilities')[$key-1]->name }}</td>
                        </tr>
                      @endif
                    @endforeach
                </tbody>
              </table>
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
<table id="datatable" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>Orden</th>
        <th>Fecha de creación</th>
        <th>Estado:</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($Orders as $Order)
          <tr>
            <td style="text-align: center; vertical-align: middle">{{ $Order->id }}</td>
            <td style="text-align: center; vertical-align: middle">{{ $Order->name }}</td>
            <td style="text-align: center; vertical-align: middle">{{ $Order->created_at }}</td>
            <td style="text-align: center; vertical-align: middle"><span class="label label-success">Activa</span></center></td>
            <td style="text-align: center; vertical-align: middle">
              <button class="btn btn-primary btn-sm" onclick="document.getElementById('Mostrar{{ $Order->id }}').submit()"><i class="fa fa-eye"></i></button>
              <button class="btn btn-info btn-sm" onclick="document.getElementById('Editar{{ $Order->id }}').submit()"><i class="fa fa-edit"></i></button>
              <button class="btn btn-danger btn-sm" onclick="document.getElementById('Eliminar{{ $Order->id }}').submit()"><i class="fa fa-trash"></i></button>
            </td>
            <form action="{{ route('orders.edit',$Order->id) }}" method="get" id="Editar{!! $Order->id !!}"> @csrf</form>
            <form action="{{ route('orders.destroy',$Order->id) }}" method="post" id="Eliminar{{ $Order->id }}">@csrf @method('DELETE')</form>
            <form action="{{ route('orders.show',$Order->id) }}" method="get" id="Mostrar{{ $Order->id }}">@csrf</form>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection