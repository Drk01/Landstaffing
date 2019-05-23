@extends('layouts.app')

@section('title-left')
Mis empleos
@endsection

@section('content')
@if (session('SOrder'))
<!-- Show Order -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="display: none" id="Mostrar">
        Launch demo modal
      </button>

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">{{ session('SOrder')->name }}</h4>
            </div>
            <div class="modal-body">
                <h5><strong>Jefe: </strong></h5>
                <p>{{ session('Boss')->name }} {{ session('Boss')->lastname}} {{ session('Boss')->motherLastname }}</p>
                <h5><strong>Descripción: </strong></h5>
                    <p>{{ session('SOrder')->description }}</p>
                    <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th style="text-align:center"colspan="2">Detalles: </th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ciudad: </td>
                                    <td>{{ session('SOrder')->city }}</td>
                                </tr>
                                <tr>
                                    <td>Calle: </td>
                                    <td>{{ session('SOrder')->street }}</td>
                                </tr>
                                <tr>
                                    <td>Número externo: </td>
                                    <td>{{ session('SOrder')->extN }}</td>
                                </tr>
                                <tr>
                                    <td>Inicio: </td>
                                    <td>{{ session('SOrder')->startAt }}</td>
                                </tr>
                                <tr>
                                    <td>Fin: </td>
                                    <td>{{ session('SOrder')->endAt }}</td>
                                </tr>
                                <tr>
                                    <td>Referencias: </td>
                                    <td>{{ session('SOrder')->references }}</td>
                                </tr>
                                <tr>
                                    <td>Teléfono de contacto: </td>
                                    <td>+{{ session('BossPhone') }}</td>
                                </tr>
                            </tbody>
                          </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
<!-- !Show Order -->
    <script>
        window.onload = () => {
            document.getElementById('Mostrar').click();
        };
    </script>
@endif

<div class="col-xs-12">
    <table id="datatable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Id del empleo</th>
            <th>Nombre del evento</th>
            <th>Puesto</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($Personals as $key => $Personal)
                <tr>
                    <td style="text-align: center; vertical-align: middle">{{ $Personal->id }}</td>
                    <td style="text-align: center; vertical-align: middle">{{ $Orders[$Personal->order_id - 1]->name }}</td>
                    <td style="text-align: center; vertical-align: middle">{{ $Abilities[$Personal->ability_id]->name }}</td>
                    <td style="text-align: center; vertical-align: middle"><button class="btn btn-info btn-block" onclick="document.getElementById('MostrarPedido').submit()"><i class="fa fa-eye"></i></button></td>
                    <form action="{{ route('orders.show',$Personal->id) }}" method="get" id="MostrarPedido">@csrf</form>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
