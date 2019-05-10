@extends('layouts.app')

@section('title-left')
    Listado de ordenes
@endsection

@section('content')
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
              <button class="btn btn-info btn-sm" onclick="document.getElementById('Editar{{ $Order->id }}').submit()"><i class="fa fa-edit"></i></button>
              <button class="btn btn-danger btn-sm" onclick="document.getElementById('Eliminar{{ $Order->id }}').submit()"><i class="fa fa-trash"></i></button>
            </td>
            <form action="{{ route('orders.edit',$Order->id) }}" method="get" id="Editar{!! $Order->id !!}"> @csrf</form>
            <form action="{{ route('orders.destroy',$Order->id) }}" method="post" id="Eliminar{{ $Order->id }}">@csrf @method('DELETE')</form>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection