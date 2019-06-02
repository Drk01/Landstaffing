@extends('layouts.app')

@section('title-left')
    Curriculums sin moderar
@endsection

@section('content')
    <table id="datatable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>Usuario</th>
            <th>Fecha de creación</th>
            <th>Estado</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($Usuarios as $Usuario)
              @if ($Usuario->curriculum)
                @if ($Usuario->curriculum->status->first()->id == 1)
                <tr>
                    <td style="text-align: center; vertical-align: middle">{{ $Usuario->id }}</td>
                    <td style="text-align: center; vertical-align: middle">{{ $Usuario->name }}</td>
                    <td style="text-align: center; vertical-align: middle">{{ $Usuario->curriculum->status->first()->created_at }}</td>
                    <td style="text-align: center; vertical-align: middle"><span class="label label-warning">Pendiente</span></center></td>
                    <td style="text-align: center; vertical-align: middle">
                      <button class="btn btn-primary btn-sm btn-block" onclick="document.getElementById('Moderar{{ $Usuario->id }}').submit()">Revisar curriculum</button>
                    </td>
                    <form action="{{ route('ModerateEdit',$Usuario->id) }}" method="get" id="Moderar{{ $Usuario->id }}">@csrf</form>
                  </tr>
                @endif
              @endif
          @endforeach
        </tbody>
      </table>
@endsection
